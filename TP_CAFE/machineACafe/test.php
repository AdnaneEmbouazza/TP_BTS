<?php
require_once 'machineACafe.php';
require_once 'cafe.php';
require_once 'expresso.php';
require_once 'macchiato.php';
require_once 'latte.php';
require_once './vendor/autoload.php';

class CafeTest extends PHPUnit\Framework\TestCase {

    public function testCafe(){
        $mc= new MachineACafe();
        $mc ->prepare(new Latte());
        $this->assertEquals(490 , $mc->getLait());
        $mc -> prepare(new Latte());
        $this->assertEquals(480 , $mc->getLait());
    }
}

?>