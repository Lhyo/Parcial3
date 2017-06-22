<?php
$I = new FunctionalTester($scenario);
$I->wantTo('probar un mal usuario');
$I->amOnPage('/login');
$I->fillField('email', 'Miles@j.com');
$I->fillField('password', 'Davis');
$I->click('Aceptar');
$I->see('Usuario incorrecto.');
