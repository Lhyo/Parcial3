<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('iniciar y terminar sesion del usuario');
$I->amOnPage('/');
$I->click('Login');
$I->fillField('Email', 'leo@gmail.com');
$I->fillField('Contraseña', '123456');
$I->click('Aceptar');
$I->see('Bienvenido!', 'div');
$I->see('Zona segura', 'div');
$I->click('leonardo');
$I->click('Logout');
$I->see('Pantalla de inicio', 'div');
$I->see('Login', 'div');
