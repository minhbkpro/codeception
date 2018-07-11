<?php

use App\Models\User;

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
        // use Eloquent example
        $user = User::first();

        // use factories example
        $user = factory(User::class)->make(); // make user object
        $user = factory(User::class)->create(); // make user object and insert to database

        var_dump($user);

        $I->amOnPage('/');
        $I->see('ログイン');
    }
}
