<?php
include_once("surface.php");
include_once("unserialize_ships.php");

$ships = get_ships();
$i = 0;
foreach ($ships as $ship)
{
	$ship['surface'] = surface_calc($ship);
	$_POST['ship'.$i] = $ship;
	$i++;
}
$_POST['nb_ship'] = $i;

?>
