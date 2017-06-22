<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('Tratar de iniciar con usuario incorrecto');
$I->amOnPage('/');
$I->click('Login');
$I->fillField('Email', 'adri@gmail.com');
$I->fillField('Contraseña', '123456');
$I->click('Aceptar');
$I->see('Usuario incorrecto.', 'div');