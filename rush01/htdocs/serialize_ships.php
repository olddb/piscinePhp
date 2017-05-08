<?php
include_once("BattleShip2.class.php");

function set_ships($ships)
{
	if (!file_exists("../private"))
		mkdir("./private");
	$file = serialize($ships);
	file_put_contents("../private/ships", $file);
}

function set_ships_init($ships)
{
	$tab = array();
	$i = 0;
	foreach ($ships as $ship)
	{
		$tab['ship'.$i] = array();
		$tab['ship'.$i]['name'] = $ship->getName();
		$tab['ship'.$i]['ship_id'] = $ship->getId();
		$tab['ship'.$i]['pos'] = $ship->getPos();
		$tab['ship'.$i]['dir'] = $ship->getRotate();
		$tab['ship'.$i]['pp'] = $ship->getPp();
		$tab['ship'.$i]['hp'] = $ship->getHp();
		$tab['ship'.$i]['shield'] = $ship->getShield();
		$tab['ship'.$i]['speed'] = $ship->getSpeed();
		$tab['ship'.$i]['handling'] = $ship->getHandling();
		$tab['ship'.$i]['size'] = $ship->getSize();
		$tab['ship'.$i]['weapon'] = $ship->getWeapon();
		$tab['ship'.$i]['color'] = $ship->getColor();
		$i++;
	}
	set_ships($tab);
}
?>

