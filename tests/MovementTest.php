<?php

define( "APP_GAMEMODULE_PATH", "./" ); // include path to mocks, this defined "Table" and other classes

require ("material-wrapper.php");

class MovementTest extends \PHPUnit_Framework_TestCase {

    public function testExtraMovement() {
        $material = new MaterialWrapper();
        $game = new HammerOfTheScots();

        print $game->getGameName();
        //var_dump($game);
        //var_dump($material->unit_england_king);
    }
}
