<?php

function get_ships()
{
	if (file_exists("../private/ships"))
	{
		$file = file_get_contents("../private/ships");
		$ships = unserialize($file);
		return ($ships);
	}
	return (0);
}

?>
