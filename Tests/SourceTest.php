<?php
require '../Lib/ScrapSources/Lvsb.php';

use PHPUnit\Framework\TestCase;

final class SourceTest extends TestCase {

    private $Lvsb;

    protected function setUp(){
        $this->Lvsb = new Lvsb();
    }

    public function testSourceIsTestable(){
        $this->assertTrue(is_bool($this->Lvsb->is_available));
    }

}