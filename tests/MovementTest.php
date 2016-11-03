<?php

require (dirname(__FILE__) . "/../movement.php");
require ("material-wrapper.php");

class MovementTest extends PHPUnit_Framework_TestCase {

    public function testExtraMovement() {
        $material = new MaterialWrapper();
        
        var_dump($material->unit_england_king);
    }
}