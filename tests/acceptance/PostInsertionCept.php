<?php 

$I = new AcceptanceTester($scenario);

$I->amOnPage('/wp-login.php');
$I->fillField('#user_login', 'conferencia');
$I->fillField('#user_pass', 'wordpressw');
$I->click('#wp-submit');
$I->see('ERROR');


$I->amOnPage('/wp-login.php');
$I->fillField('#user_login', 'conferencia');
$I->fillField('#user_pass', 'wordpress');
$I->click('#wp-submit');
$I->see('Escritorio');

$I->amOnPage('/wp-admin/post-new.php');
$I->fillField('#title', 'Post de prueba');
$I->click('#publish');

$I->amOnPage('/wp-admin/edit.php');
$I->click('[aria-label="“Post de prueba” (Editar)"]');
$I->fillField('#title', 'Post de prueba editado');
$I->click('#publish');

$I->amOnPage('/');
$I->click('[href="http://localhost:8000/post-de-prueba/"]');
$I->see('Deja tu mensaje');

