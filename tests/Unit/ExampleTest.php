<?php

use App\sesiones;

class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;


    protected function _before()
    {
        
    }


    // tests
function testUserNameCanBeChanged()
{
  
    $nombre = new sesiones();
  
    $nombre->setNombre('bill');
    $this->assertEquals('bill', $nombre->getNombre());
    // verify data was saved using framework methods
    
}
}
