<?php

function collision2($curr_ship, $other_ships)
{
	foreach($other_ships as $ship)
	{
		if (array_intersect($curr_ship['surface'], $ship['surface']))
			return ($ship['ship_id']);
	}
	return (0);
}
function collision($curr_ship, $other_ships)
{
	foreach($curr_ship['surface'] as $point)
	{
		$tab = explode("_", $point);
		if ($tab[1] > 149 || $tab[1] < 0 || $tab[0] > 99 || $tab[0] < 0)
			return (-2);
	}
	foreach($other_ships as $ship)
	{
		if (array_intersect($curr_ship['surface'], $ship['surface']))
			return (-1);
	}
	return (0);
}
?>
