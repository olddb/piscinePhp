<?php

include_once("Game.class.php");

$game = new Game();										
$ships = $game->init_ships();
$i = -1;
while (++$i < count($ships))
{
	$_POST['ship'.$i] = array();						
	$_POST['ship'.$i]['ship_id'] = $ships[$i]->getId();
	$_POST['ship'.$i]['size'] = $ships[$i]->getSize();
	$_POST['ship'.$i]['pos'] = $ships[$i]->getPos();
	$_POST['ship'.$i]['dir'] = $ships[$i]->getRotate();
	print_r($_POST);
}

?>
