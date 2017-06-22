<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('iniciar sesion en el sistema');
$I->amOnPage('/');
$I->click('Login');
$I->fillField('Email', 'leo@gmail.com');
$I->fillField('Contraseña', '123456');
$I->click('Aceptar');
$I->see('Zona segura', 'div');