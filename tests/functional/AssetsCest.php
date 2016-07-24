<?php


class AssetsCest
{
    public function _before(FunctionalTester $I)
    {
        exec("mysql -u snipeit -psnipe snipeit < tests/_data/dump.sql");
         $I->amOnPage('/login');
         $I->fillField('username', 'snipeit');
         $I->fillField('password', 'snipeit');
         $I->click('Login');
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {

        $I->wantTo('ensure that the create assets form loads without errors');
        $I->lookForwardTo('seeing it load without errors');
        $I->amOnPage('/hardware/create');
        $I->dontSee('Create Asset', '.page-header');
        $I->see('Create Asset', 'h1.pull-left');
        $I->dontSee('&lt;span class=&quot;');

        $I->wantTo("Test Validation Fails with blank elements");
        $I->click('Save');
        $I->seeElement('.alert-danger');
        $I->see('The asset tag field is required.', '.alert-msg');
        $I->see('The model id field is required.', '.alert-msg');
        $I->see('The status id field is required.', '.alert-msg');
        
        $I->wantTo("Test Validation Succeeds");
        $I->fillField('asset_tag', 'TestAsset');
        $I->selectOption('form select[name=model_id]', 'Test Manufacturer Test Asset Model');
        $I->selectOption('form select[name=status_id]', 'Pending');
        $I->click('Save');
        $I->dontSee('&lt;span class=&quot;');
        $I->dontSeeElement('.alert-danger'); // We should check for success, but we can't because of the stupid ajaxy way I did things.  FIXME when the asset form is rewritten.
    }
}
 