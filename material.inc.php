<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * HammerOfTheScots implementation : © <Your name here> <Your email address here>
 * 
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * material.inc.php
 *
 * HammerOfTheScots game material description
 *
 * Here, you can describe the material of your game with PHP variables.
 *   
 * This file is loaded in your game logic class constructor, ie these variables
 * are available everywhere in your game logic code.
 *
 */
 
class Unit {
    
    public $id;
    public $english;
    public $name;
    public $type;
    public $movement;
    public $combatOrder;
    public $combatTarget;
    public $maxCombatStrength;
    
    function __construct($id, $english, $name, $type, $movement, $combatOrder, $combatTarget, $maxCombatStrength) {
        $this->id = $id;
        $this->english = $english;
        $this->name = $name;
        $this->type = $type;
        $this->movement = $movement;
        $this->combatOrder = $combatOrder;
        $this->combatTarget = $combatTarget;
        $this->maxCombatStrength = $maxCombatStrength;
    }
}

$this->unit_england_king = new Unit(0, true, "Edward", "king", 3, 2, 4, 4);
$this->unit_england_archer_lancaster = new Unit(1, true, "Lancaster Archers", "archer", 2, 2, 3, 3);
$this->unit_england_archer_wales = new Unit(2, true, "Wales Archers", "archer", 2, 2, 3, 3);
$this->unit_england_infantry_lancaster = new Unit(3, true, "Lancaster Infantry", "infantry", 2, 2, 3, 4);
$this->unit_england_infantry_york = new Unit(4, true, "York Infantry", "infantry", 2, 2, 3, 4);

$this->areas = array(
    "ross" => array(
        "castleLimit" => 1,
        "hasCathedral" => false,
        "coastal" => true
    ),
    "garmoran" => array(
        "castleLimit" => 0,
        "hasCathedral" => false,
        "coastal" => true
    ),
    "moray" => array(
        "castleLimit" => 2,
        "hasCathedral" => false,
        "coastal" => true
    ),
    "strathspey" => array(
        "castleLimit" => 1,
        "hasCathedral" => true,
        "coastal" => true
    ),
    "buchan" => array(
        "castleLimit" => 2,
        "hasCathedral" => false,
        "coastal" => true
    ),
    "lochaber" => array(
        "castleLimit" => 1,
        "hasCathedral" => false,
        "coastal" => true
    ),
    "badenoch" => array(
        "castleLimit" => 2,
        "hasCathedral" => false,
        "coastal" => false
    ),
    "mar" => array(
        "castleLimit" => 1,
        "hasCathedral" => false,
        "coastal" => false
    ),
    "angus" => array(
        "castleLimit" => 2,
        "hasCathedral" => false,
        "coastal" => true
    ),
    "argyll" => array(
        "castleLimit" => 2,
        "hasCathedral" => false,
        "coastal" => true
    ),
    "atholl" => array(
        "castleLimit" => 1,
        "hasCathedral" => false,
        "coastal" => false
    ),
    "mentieth" => array(
        "castleLimit" => 3,
        "hasCathedral" => false,
        "coastal" => true
    ),
    "fife" => array(
        "castleLimit" => 2,
        "hasCathedral" => true,
        "coastal" => true
    ),
    "lennox" => array(
        "castleLimit" => 1,
        "hasCathedral" => true,
        "coastal" => true
    ),
    "carrick" => array(
        "castleLimit" => 1,
        "hasCathedral" => false,
        "coastal" => true
    ),
    "lanark" => array(
        "castleLimit" => 2,
        "hasCathedral" => false,
        "coastal" => false
    ),
    "lothian" => array(
        "castleLimit" => 2,
        "hasCathedral" => false,
        "coastal" => true
    ),
    "dunbar" => array(
        "castleLimit" => 2,
        "hasCathedral" => false,
        "coastal" => true
    ),
    "selkirkForest" => array(
        "castleLimit" => 0,
        "hasCathedral" => false,
        "coastal" => false
    ),
    "teviot" => array(
        "castleLimit" => 1,
        "hasCathedral" => false,
        "coastal" => false
    ),
    "galloway" => array(
        "castleLimit" => 1,
        "hasCathedral" => false,
        "coastal" => true
    ),
    "annan" => array(
        "castleLimit" => 2,
        "hasCathedral" => false,
        "coastal" => true
    ),
);

$this->borders = array(
    array(
        "areas" => array("ross", "garmoran"),
        "red" => true
    ),
    array(
        "areas" => array("ross", "moray"),
        "red" => true
    ),
    array(
        "areas" => array("moray", "garmoran"),
        "red" => true
    ),
    array(
        "areas" => array("strathspey", "moray"),
        "red" => false
    ),
    array(
        "areas" => array("strathspey", "buchan"),
        "red" => false
    ),
    array(
        "areas" => array("lochaber", "garmoran"),
        "red" => true
    ),
    array(
        "areas" => array("lochaber", "moray"),
        "red" => false
    ),
    array(
        "areas" => array("lochaber", "badenoch"),
        "red" => true
    ),
    array(
        "areas" => array("moray", "badenoch"),
        "red" => true
    ),
    array(
        "areas" => array("badenoch", "strathspey"),
        "red" => false
    ),
    array(
        "areas" => array("badenoch", "buchan"),
        "red" => true
    ),
    array(
        "areas" => array("badenoch", "mar"),
        "red" => true
    ),
    array(
        "areas" => array("mar", "buchan"),
        "red" => false
    ),
    array(
        "areas" => array("mar", "angus"),
        "red" => true
    ),
    array(
        "areas" => array("angus", "buchan"),
        "red" => false
    ),
);