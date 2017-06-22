<?php

use App\sesiones;

class cambioEmailTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;


    protected function _before()
    {
        
    }


    // tests
function testEmailPuedeCambiar()
{
  
    $email = new sesiones();
  
    $email->setEmail('adri@gmail.com');
    $this->assertEquals('adri@gmail.com', $email->getEmail());
    // verify data was saved using framework methods
    
}
}
