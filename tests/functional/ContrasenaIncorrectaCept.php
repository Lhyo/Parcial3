<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('Tratar de iniciar con contraseña incorrecta');
$I->amOnPage('/');
$I->click('Login');
$I->fillField('Email', 'leo@gmail.com');
$I->fillField('Contraseña', '123457');
$I->click('Aceptar');
$I->see('Contraseña incorrecta.', 'div');