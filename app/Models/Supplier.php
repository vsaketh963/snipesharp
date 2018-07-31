<?php
namespace App\Models;

use App\Http\Traits\UniqueUndeletedTrait;
use App\Models\SnipeModel;
use App\Models\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Watson\Validating\ValidatingTrait;

class Supplier extends SnipeModel
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'suppliers';

    protected $rules = array(
        'name'              => 'required|min:1|max:255|unique_undeleted',
        'address'           => 'max:50|nullable',
        'address2'          => 'max:50|nullable',
        'city'              => 'max:255|nullable',
        'state'             => 'max:32|nullable',
        'country'           => 'max:3|nullable',
        'fax'               => 'min:7|max:35|nullable',
        'phone'             => 'min:7|max:35|nullable',
        'contact'           => 'max:100|nullable',
        'notes'             => 'max:191|nullable', // Default string length is 191 characters..
        'email'             => 'email|max:150|nullable',
        'zip'               => 'max:10|nullable',
        'url'               => 'sometimes|nullable|string|max:250',
    );

    /**
    * Whether the model should inject it's identifier to the unique
    * validation rules before attempting validation. If this property
    * is not set in the model it will default to true.
    *
    * @var boolean
    */
    protected $injectUniqueIdentifier = true;
    use ValidatingTrait;
    use UniqueUndeletedTrait;

    use Searchable;
    
    /**
     * The attributes that should be included when searching the model.
     * 
     * @var array
     */
    protected $searchableAttributes = ['name'];

    /**
     * The relations and their attributes that should be included when searching the model.
     * 
     * @var array
     */
    protected $searchableRelations = [];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','address','address2','city','state','country','zip','phone','fax','email','contact','url','notes'];


    /**
     * Eager load counts
     *
     * We do this to eager load the "count" of seats from the controller.
     * Otherwise calling "count()" on each model results in n+1.
     *
     * @author A. Gianotto <snipe@snipe.net>
     * @since [v4.0]
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function assetsRelation()
    {
        return $this->hasMany(Asset::class)->whereNull('deleted_at')->selectRaw('supplier_id, count(*) as count')->groupBy('supplier_id');
    }

    /**
     * Sets the license count attribute
     *
     * @todo I don't see the licenseSeatsRelation here?
     *
     * @author A. Gianotto <snipe@snipe.net>
     * @since [v1.0]
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function getLicenseCountAttribute()
    {
        if ($this->licenseRelation->first()) {
            return $this->licenseRelation->first()->count;
        }

        return 0;
    }

    /**
     * Establishes the supplier -> assets relationship
     *
     * @author A. Gianotto <snipe@snipe.net>
     * @since [v1.0]
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function assets()
    {
        return $this->hasMany('\App\Models\Asset', 'supplier_id');
    }

    /**
     * Establishes the supplier -> accessories relationship
     *
     * @author A. Gianotto <snipe@snipe.net>
     * @since [v1.0]
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function accessories()
    {
        return $this->hasMany('\App\Models\Accessory', 'supplier_id');
    }

    /**
     * Establishes the supplier -> asset maintenances relationship
     *
     * @author A. Gianotto <snipe@snipe.net>
     * @since [v1.0]
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function asset_maintenances()
    {
        return $this->hasMany('\App\Models\AssetMaintenance', 'supplier_id');
    }

    /**
     * Return the number of assets by supplier
     *
     * @author A. Gianotto <snipe@snipe.net>
     * @since [v1.0]
     * @return int
     */
    public function num_assets()
    {
        if ($this->assetsRelation->first()) {
            return $this->assetsRelation->first()->count;
        }

        return 0;
    }

    /**
     * Establishes the supplier -> license relationship
     *
     * @author A. Gianotto <snipe@snipe.net>
     * @since [v1.0]
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function licenses()
    {
        return $this->hasMany('\App\Models\LicenseModel', 'supplier_id');
    }

    /**
     * Return the number of licenses by supplier
     *
     * @author A. Gianotto <snipe@snipe.net>
     * @since [v1.0]
     * @return int
     */
    public function num_licenses()
    {
        return $this->licenses()->count();
    }

    /**
     * Add http to the url in suppliers if the user didn't give one
     *
     * @todo this should be handled via validation, no?
     *
     * @author A. Gianotto <snipe@snipe.net>
     * @since [v3.0]
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function addhttp($url)
    {
        if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
            $url = "http://" . $url;
        }
        return $url;
    }
}
