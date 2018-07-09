<?php

use Illuminate\Database\Capsule\Manager as Capsule;

class IndexCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->init();
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $users = Capsule::table('users')->get();

        var_dump($users);

        $I->amOnPage('/');
        $I->see('PHP Version 7.2.7');
    }
}
