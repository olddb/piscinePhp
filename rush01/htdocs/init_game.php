<?php
require_once("header.php");
include_once("Game.class.php");
include_once("surface.php");
include_once("serialize_ships.php");


$game = new Game();										
$ships = $game->init_ships();
set_ships_init($ships);
$_POST['nb_ship'] = count($ships);
$i = -1;
while (++$i < count($ships))
{
	$_POST['ship'.$i] = array();						
	$_POST['ship'.$i]['ship_id'] 	= $ships[$i]->getId();
	$_POST['ship'.$i]['size'] 		= $ships[$i]->getSize();
	$_POST['ship'.$i]['pos']		= $ships[$i]->getPos();
	$_POST['ship'.$i]['dir'] 		= $ships[$i]->getRotate();
	$_POST['ship'.$i]['color'] 		= $ships[$i]->getColor();
	$_POST['ship'.$i]['name'] 		= $ships[$i]->getName();
}
$i = -1;
while (++$i < count($ships))
{
	$_POST['ship'.$i]['surface'] = array();
	$_POST['ship'.$i]['surface'] = surface_calc($_POST['ship'.$i]);
}
if ($_SESSION['loggued_on_user'])
{	
	$_SESSION['game_on'] = 1;
}
//require_once("draw.php");

?>
