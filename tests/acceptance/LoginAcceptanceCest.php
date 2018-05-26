<?php 

class LoginAcceptanceCest
{
    function _before(AcceptanceTester $I)
    {
    }
    
    public function _after(AcceptanceTester $I)
    {
    }

    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/wp-login.php');
        $I->fillField('#user_login', 'conferencia');
        $I->fillField('#user_pass', 'wordpress');
        $I->click('#wp-submit');
        $I->see('Escritorio');
    }
}