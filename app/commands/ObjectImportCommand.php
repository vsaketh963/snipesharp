
<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use League\Csv\Reader;

/**
 * Class ObjectImportCommand
 */
class ObjectImportCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'object-import:csv';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Import Items from CSV';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$filename = $this->argument('filename');


		if ($this->option('testrun')=='true') {
			$this->comment('====== TEST ONLY Asset Import for '.$filename.' ====');
			$this->comment('============== NO DATA WILL BE WRITTEN ==============');
		} else {

			$this->comment('======= Importing Assets from '.$filename.' =========');
		}

		if (! ini_get("auto_detect_line_endings")) {
			ini_set("auto_detect_line_endings", '1');
		}

		$csv = Reader::createFromPath($this->argument('filename'));
		$csv->setNewline("\r\n");

		$results = $csv->fetchAssoc();


		$newarray = NULL;
		foreach( $results as $index => $arraytoNormalize) {
			$internalnewarray = array_change_key_case($arraytoNormalize);
			$newarray[$index] = $internalnewarray;
		}

		$this->locations = Location::All(['name', 'id']);
		$this->categories = Category::All(['name', 'category_type', 'id']);
		$this->manufacturers = Manufacturer::All(['name', 'id']);
		$this->asset_models = Model::All(['name','modelno','category_id','manufacturer_id', 'id']);
		$this->companies = Company::All(['name', 'id']);
		$this->assets = Asset::all(['asset_tag']);
		$this->suppliers = Supplier::All(['name']);
		$this->accessories = Accessory::All(['name']);
		$this->consumables = Consumable::All(['name']);
		// Loop through the records
		foreach( $newarray as $row ) {

			// Let's just map some of these entries to more user friendly words

			// Fetch general items here, fetch item type specific items in respective methods
			/** @var Asset, License, Accessory, or Consumable $item_type */

			$item_category = $this->array_smart_fetch($row, "category");
			$item_company_name = $this->array_smart_fetch($row, "company");
			$item_location = $this->array_smart_fetch($row, "location");

			$item["item_type"] = strtolower($this->array_smart_fetch($row, "item type"));
			if(empty($item["item_type"])) {
				$this->comment("Item Type not set.  Assuming asset");
				$item["item_type"] = 'asset';
			}

			$item["item_name"] = $this->array_smart_fetch($row, "item name");
			$item["purchase_date"] = date("Y-m-d 00:00:01", strtotime($this->array_smart_fetch($row, "purchase date")));
			$item["purchase_cost"] = $this->array_smart_fetch($row, "purchase cost");
			$item["order_number"] = $this->array_smart_fetch($row, "order number");
			$item["notes"] = $this->array_smart_fetch($row, "notes");
			$item["quantity"] = $this->array_smart_fetch($row, "quantity");
			$item["requestable"] = $this->array_smart_fetch($row, "requestable");


			$this->comment("Item Type: " . $item["item_type"]);
			$this->comment('Category Name: ' . $item_category);
			$this->comment('Location: ' . $item_location);
			$this->comment('Purchase Date: ' . $item["purchase_date"]);
			$this->comment('Purchase Cost: ' . $item["purchase_cost"]);
			$this->comment('Company Name: ' . $item_company_name);

			$item["user"] = $this->createOrFetchUser($row);

			$item["location"] = $this->createOrFetchLocation($item_location);
			$item["category"] = $this->createOrFetchCategory($item_category, $item["item_type"]);
			$item["manufacturer"] = $this->createOrFetchManufacturer($row);
			$item["company"] = $this->createOrFetchCompany($item_company_name);

			switch ($item["item_type"]) {
				case "asset":
					$this->createAssetIfNotExists($row, $item);
					break;
				case "accessory":
					$this->createAccessoryIfNotExists($row, $item);
					break;
				case 'consumable':
					$this->createConsumableIfNotExists($row, $item);
					break;
			}
			$this->comment('------------- Action Summary ----------------');

		}
			$this->comment('=====================================');

			return true;
	}

	/**
	 * Check to see if the given key exists in the array, and trim excess white space before returning it
	 * @param array $array
	 * @param $key Value which may or may not exist as a key in $array
	 * @param string $default Value to return if key doesn't exist in database
	 * @return string Value associated with $key if it exists, otherwise $default
     */
	public function array_smart_fetch(Array $array, $key, $default = ''){
		return array_key_exists($key,$array) ? trim($array[ $key ]) : $default;
	}

	/**
	 * @var
     */
	private $locations;
	/**
	 * @param $asset_location
	 * @return Location
	 */
	public function createOrFetchLocation($asset_location)
	{
// Check for the location match and create it if it doesn't exist
//		if ($location = Location::where('name', $asset_location)->first()) {
//			$this->comment('Location ' . $asset_location . ' already exists');
//			return $location;
//		} else {
		foreach($this->locations as $templocation) {
			if( $templocation->name == $asset_location) {
				$this->comment('Location ' . $asset_location . ' already exists');
				return $templocation;
			}
		}
		// No matching locations in the collection, create a new one.


		$location = new Location();

		if ($asset_location != '') {


			$location->name = e($asset_location);
			$location->address = '';
			$location->city = '';
			$location->state = '';
			$location->country = '';
			$location->user_id = 1;
			$this->locations->add($location);

			if (!$this->option('testrun') == 'true') {

				if ($location->save()) {
					$this->comment('Location ' . $asset_location . ' was created');

					return $location;
				} else {
					$this->comment('Something went wrong! Location ' . $asset_location . ' was NOT created');
					return $location;
				}

			} else {
				$this->comment('Location ' . $asset_location . ' was (not) created - test run only');
				return $location;
			}
		} else {
			$this->comment('No location given, so none created.');
			return $location;
		}

	}


	/**
	 * @param $user_username
	 * @param $user_email
	 * @param $first_name
	 * @param $last_name
	 * @return User
	 */
	public function createOrFetchUser($row)
	{
		$user_name = $this->array_smart_fetch($row, "name");
		$user_email = $this->array_smart_fetch($row, "email");
		$user_username = $this->array_smart_fetch($row, "username");


		// A number was given instead of a name
		if (is_numeric($user_name)) {
			$this->comment('User ' . $user_name . ' is a number - Assuming UID - hopefully this user already exists');
			$user_username = '';

			// No name was given
		} elseif ($user_name == '') {
			$this->comment('No user data provided - skipping user creation, just adding asset');
			$first_name = '';
			$last_name = '';
			//$user_username = '';

		} else {
			$user_email_array = User::generateFormattedNameFromFullName($this->option('email_format'), $user_name);
			$first_name = $user_email_array['first_name'];
			$last_name = $user_email_array['last_name'];

			if ($user_email == '') {
				$user_email = $user_email_array['username'] . '@' . Config::get('app.domain');
			}

			if ($user_username == '') {
				if ($this->option('username_format') == 'email') {
					$user_username = $user_email;
				} else {
					$user_name_array = User::generateFormattedNameFromFullName($this->option('username_format'), $user_name);
					$user_username = $user_name_array['username'];
				}

			}

		}
		$this->comment("--- User Data ---");
		$this->comment('Full Name: ' . $user_name);
		$this->comment('First Name: ' . $first_name);
		$this->comment('Last Name: ' . $last_name);
		$this->comment('Username: ' . $user_username);
		$this->comment('Email: ' . $user_email);
		$this->comment('--- End User Data ---');

        if($this->option('testrun') == true )
            return new User;
		if (!empty($user_username)) {
			if ($user = User::MatchEmailOrUsername($user_username, $user_email)
				->whereNotNull('username')->first()
			) {
				$this->comment('User ' . $user_username . ' already exists');
				return $user;
			} else {
				// Create the user
				$user = Sentry::createUser(array(
					'first_name' => $first_name,
					'last_name' => $last_name,
					'email' => $user_email,
					'username' => $user_username,
					'password' => substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 12),
					'activated' => true,
					'permissions' => array(
						'admin' => 0,
						'user' => 1,
					),
					'notes' => 'User imported through asset importer'
				));

				// Find the group using the group id
				$userGroup = Sentry::findGroupById(3);

				// Assign the group to the user
				$user->addGroup($userGroup);
				$this->comment('User ' . $first_name . ' created');
				return $user;
			}
		} else {
			$user = new User;
			return $user;
		}
	}

	private $categories;

	/**
	 * @param $asset_category
	 * @return Category
	 */
	public function createOrFetchCategory($asset_category, $item_type)
	{

		if (e($asset_category) == '') {
			$category_name = 'Unnamed Category';
		} else {
			$category_name = e($asset_category);
		}

		foreach($this->categories as $tempcategory) {
			if( $tempcategory->name == $asset_category && $tempcategory->category_type == $item_type) {
				$this->comment('Category ' . $asset_category . ' already exists');
				return $tempcategory;
			}
		}

		$category = new Category();

		$category->name = $category_name;
		$category->category_type = $item_type;
		$category->user_id = 1;
		$this->categories->add($category);

		if($this->option('testrun')!='true') {
			if ($category->save()) {
				$this->comment('Category ' . $asset_category . ' was created');
				return $category;
			} else {
				$this->comment('Something went wrong! Category ' . $asset_category . ' was NOT created');
				return $category;
			}
		} else {
			$this->comment("Test Run! Category " . $category->name . ' not saved');
			return $category;
		}

	}


	private $manufacturers;
	/**
	 * @param $asset_mfgr
	 * @return Manufacturer
	 */
	public function createOrFetchManufacturer(array $row)
	{
		$asset_mfgr = $this->array_smart_fetch($row, "manufacturer");

		$this->comment('Manufacturer ID: ' . $asset_mfgr);

		foreach ($this->manufacturers as $tempmanufacturer) {
			if ($tempmanufacturer->name == $asset_mfgr) {
				$this->comment('Manufacturer ' . $asset_mfgr . ' already exists');
				return $tempmanufacturer;
			}
		}

		//Otherwise create a manufacturer.

		$manufacturer = new Manufacturer();
		$manufacturer->name = e($asset_mfgr);
		$manufacturer->user_id = 1;
		$this->manufacturers->add($manufacturer);

		if ($this->option('testrun') != true) {

			if ($manufacturer->save()) {
				$this->comment('Manufacturer ' . $asset_mfgr . ' was created');
				return $manufacturer;
			} else {
				$this->comment('Something went wrong! Manufacturer ' . $asset_mfgr . ' was NOT created');
				return $manufacturer;
			}

		} else {
			$this->comment("TEST RUN - " . $manufacturer->name . ' not created' );
			return $manufacturer;
		}
	}

	private $asset_models;
    /**
     * @param array $row The current CSV row we are working on
     * @param $category Item Category
     * @param $manufacturer MFGR extracted from CSV
     * @return Model Asset Model
     * @internal param $asset_modelno
     */
	public function createOrFetchAssetModel(array $row, $category, $manufacturer)
	{

		$asset_model_name = $this->array_smart_fetch($row, "model name");
		$asset_modelno = $this->array_smart_fetch($row, "model number");
		$this->comment('Model Name: ' . $asset_model_name);
		$this->comment('Model No: ' . $asset_modelno);

		foreach ($this->asset_models as $tempmodel) {
			if ($tempmodel->name == $asset_model_name && $tempmodel->modelno == $asset_modelno
				&& $tempmodel->category_id == $category->id && $tempmodel->manufacturer_id == $manufacturer->id
			) {
				$this->comment('A matching model ' . $asset_model_name . ' with model number ' . $asset_modelno . ' already exists');
				return $tempmodel;
			}
		}
		$asset_model = new Model();
		$asset_model->name = e($asset_model_name);
//		dd($manufacturer);
		$asset_model->manufacturer_id = $manufacturer->id;
		$asset_model->modelno = e($asset_modelno);
		$asset_model->category_id = $category->id;
		$asset_model->user_id = 1;
		$this->asset_models->add($asset_model);

		if(!$this->option('testrun') == 'true') {
			if ($asset_model->save()) {
				$this->comment('Asset Model ' . $asset_model_name . ' with model number ' . $asset_modelno . ' was created');
				return $asset_model;
			} else {
				$this->comment('Something went wrong! Asset Model ' . $asset_model_name . ' was NOT created');
				return $asset_model;
			}
		} else {
			$this->comment( ' TEST RUN - Model ' . $asset_model_name . ' not created');
			return $asset_model;
		}

	}

	private $companies;

	/**
	 * @param $asset_company_name
	 * @return Company
	 */
	public function createOrFetchCompany($asset_company_name)
	{
		foreach ($this->companies as $tempcompany) {
			if ($tempcompany->name == $asset_company_name ) {
				$this->comment('A matching Company ' . $asset_company_name . ' already exists');
				return $tempcompany;
			}
		}
// Check for the asset company match and create it if it doesn't exist

		$company = new Company();
		$company->name = e($asset_company_name);

		if($this->option('testrun') != 'true') {
			if ($company->save()) {
				$this->comment('Company ' . $asset_company_name . ' was created');
				return $company;
			} else {
				$this->comment('Something went wrong! Company ' . $asset_company_name . ' was NOT created');
				return $company;
			}
		} else {
			$this->comment( ' TEST RUN - Company ' . $asset_company_name . ' not created');
			return $company;
		}
	}

	private $suppliers;
	public function createOrFetchSupplier($row)
	{
		$supplier_name = $this->array_smart_fetch($row, "supplier");
		foreach ($this->suppliers as $tempsupplier) {
			if ($tempsupplier->name == $supplier_name ) {
				$this->comment('A matching Company ' . $supplier_name . ' already exists');
				return $tempsupplier;
			}
		}
// Check for the asset company match and create it if it doesn't exist

		$supplier = new Supplier();
		$supplier->name = e($supplier_name);
		$supplier->user_id = 1;

		if($this->option('testrun') != 'true') {
			if ($supplier->save()) {
				$this->comment('Supplier ' . $supplier_name . ' was created');
				return $supplier;
			} else {
				$this->comment('Something went wrong! Supplier ' . $supplier_name . ' was NOT created');
				return $supplier;
			}
		} else {
			$this->comment( ' TEST RUN - Supplier ' . $supplier_name . ' not created');
			return $supplier;
		}
	}
	private $assets;

	/**
	 * @param array $row The CSV Row we are importing
	 * @param array $item Data about the item that has already been parsed.
	 */
	public function createAssetIfNotExists(array $row, array $item )
	{
		$status_id = 1;
        $asset_serial = $this->array_smart_fetch($row, "serial number");
        $asset_tag = $this->array_smart_fetch($row, "asset tag");
        // Check for the asset model match and create it if it doesn't exist
        $asset_model = $this->createOrFetchAssetModel($row, $item["category"], $item["manufacturer"]);
		$supplier = $this->createOrFetchSupplier($row);

        $this->comment('Serial No: '.$asset_serial);
        $this->comment('Asset Tag: '.$asset_tag);
        $this->comment('Notes: '.$item["notes"]);

		foreach ($this->assets as $tempasset) {
			if ($tempasset->asset_tag == $asset_tag ) {
				$this->comment('A matching Asset ' . $asset_tag . ' already exists');
				return;
			}
		}

		$asset = new Asset();
		$asset->name = e($item["item_name"]);
		if ($item["purchase_date"] != '') {
			$asset->purchase_date = $item["purchase_date"];
		} else {
			$asset->purchase_date = NULL;
		}

		if (!empty($item_purchase_cost)) {
			$asset->purchase_cost = number_format(e($item["purchase_cost"]),2);
			$this->comment("Asset cost parsed: " . $asset->purchase_cost);
		} else {
			$asset->purchase_cost = 0.00;
		}
		$asset->serial = e($asset_serial);
		$asset->asset_tag = e($asset_tag);
		$asset->model_id = $asset_model->id;
		$asset->assigned_to = $item["user"]->id;
		$asset->rtd_location_id = $item["location"]->id;
		$asset->user_id = 1;
		$asset->status_id = $status_id;
		$asset->company_id = $item["company"]->id;
		$asset->order_number = $item["order_number"];
		$asset->supplier_id = $supplier->id;
		if ($item["purchase_date"] != '') {
			$asset->purchase_date = $item["purchase_date"];
		} else {
			$asset->purchase_date = NULL;
		}
		$asset->notes = e($item["notes"]);

		if ($this->option('testrun') != 'true') {

			if ($asset->save()) {
				$this->comment('Asset ' . $item["item_name"] . ' with serial number ' . $asset_serial . ' was created');
			} else {
				$this->comment('Something went wrong! Asset ' . $item["item_name"] . ' was NOT created');
			}

		} else {
			$this->comment('TEST RUN - Asset w/ tag ' .$asset_tag . ' not created');
			return;
		}
	}

	private $accessories;

	/**
	 * Create an accessory if a duplicate does not exist
	 * @param array $row The csv row we are working on
	 * @param $item Previously extracted information about the item
	 */
	public function createAccessoryIfNotExists(array $row, array $item )
	{
		$this->comment("Creating Accessory");
		foreach ($this->accessories as $tempaccessory) {
			if ($tempaccessory->name === $item["item_name"] ) {
				$this->comment('A matching Accessory ' . $item["item_name"] . ' already exists.  ');
				// FUTURE: Adjust quantity on import maybe?
				return;
			}
		}

		$accessory = new Accessory();
		$accessory->name = e($item["item_name"]);
		if (!empty($item["purchase_date"])) {
			$accessory->purchase_date = $item["purchase_date"];
		} else {
			$accessory->purchase_date = NULL;
		}
		if (!empty($item["purchase_cost"])) {
			$accessory->purchase_cost = number_format(e($item["purchase_cost"]),2);
		} else {
			$accessory->purchase_cost = 0.00;
		}
		$accessory->location_id = $item["location"]->id;
		$accessory->user_id = 1;
		$accessory->company_id = $item["company"]->id;
		$accessory->order_number = $item["order_number"];
		$accessory->category_id = $item["category"]->id;

		//TODO: Implement
//		$accessory->notes = e($item_notes);
		$accessory->requestable = filter_var($item["requestable"], FILTER_VALIDATE_BOOLEAN);

		//Must have at least one of the item if we import it.
		if($item["quantity"]>0) {
			$accessory->qty = $item["quantity"];
		} else {
			$accessory->qty = 1;
		}

		if ($this->option('testrun') != 'true') {

			if ($accessory->save()) {
				$this->comment('Accessory ' . $item["item_name"] . ' was created');
			} else {
				$this->comment('Something went wrong! Accessory ' . $item["item_name"] . ' was NOT created');
			}

		} else {
			$this->comment('TEST RUN - Accessory  ' . $item["item_name"] . ' not created');
		}
	}

	private $consumables;
	/**
	 * Create a consumable if a duplicate does not exist
	 * @param array $row The csv row we are working with
	 * @param array $item Previously extracted information about the item.
	 */
	public function createConsumableIfNotExists(array $row, array $item)
	{
		$this->comment("Creating Consumable");
		foreach($this->consumables as $tempconsumable) {
			if($tempconsumable->name === $item["item_name"]) {
				$this->comment("A matching sumable " . $item["item_name"] . " already exists");
				//TODO: Adjust quantity if different maybe?
				return;
			}
		}

		$consumable = new Consumable();
		$consumable->name = e($item["item_name"]);

		if(!empty($item["purchase_date"])) {
			$consumable->purchase_date = $item["purchase_date"];
		} else {
			$consumable->purchase_date = NULL;
		}

		if(!empty($item["purchase_cost"])) {
			$consumable->purchase_cost = number_format(e($item["purchase_cost"]),2);
		} else {
			$consumable->purchase_cost = 0.00;
		}
		$consumable->location_id = $item["location"]->id;
		$consumable->user_id = 1; // TODO: What user_id should we use for imports?
		$consumable->company_id = $item["company"]->id;
		$consumable->order_number = $item["order_number"];
		$consumable->category_id = $item["category"]->id;
		// TODO:Implement
		//$consumable->notes= e($item_notes);
		$consumable->requestable = filter_var($item["requestable"], FILTER_VALIDATE_BOOLEAN);

		if($item["quantity"]>0) {
			$consumable->qty = $item["quantity"];
		} else {
			$consumable->qty = 1;
		}

		if($this->option("testrun") != true) {
			if($consumable->save()) {
				$this->comment("Consumable " . $item["item_name"] . ' was created');
			} else {
				$this->comment('Something went wrong! Consumable ' . $item["item_name"] . ' not created');
			}
		} else {
			$this->comment('TEST RUN - Consumable ' . $item['item_name'] . ' not created');
		}
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('filename', InputArgument::REQUIRED, 'File for the CSV import.'),
		);
	}


	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
	return array(
		array('email_format', null, InputOption::VALUE_REQUIRED, 'The format of the email addresses that should be generated. Options are firstname.lastname, firstname, filastname', null),
		array('username_format', null, InputOption::VALUE_REQUIRED, 'The format of the username that should be generated. Options are firstname.lastname, firstname, filastname, email', null),
		array('testrun', null, InputOption::VALUE_REQUIRED, 'Test the output without writing to the database or not.', null),
	);

	}



}