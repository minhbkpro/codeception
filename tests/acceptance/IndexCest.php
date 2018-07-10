<?php

use Illuminate\Database\Capsule\Manager as Capsule;

class IndexCest
{
    public function _before(AcceptanceTester $I)
    {

    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('ログイン');
    }
}
