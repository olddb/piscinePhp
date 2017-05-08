<?PHP
session_start();
include_once("collisions.php");
include_once("surface.php");
include_once("unserialize_ships.php");
include_once("serialize_ships.php");

if (isset($_POST['ship']))
{
	$tmp = get_ships();
	foreach ($tmp as $ship)
	{
		if ($_POST['ship'] == $ship['ship_id'])
			$curr_ship =  $ship;
	}
	$val_y = 100 - $curr_ship['pos']['y'] - 1;
	$val_x = 150 - $curr_ship['pos']['x'] - 1;
	if ($curr_ship['dir'] == 'South')
	{
		$curr_ship['pos']['y'] += $val_y;
		$curr_ship['size']['length'] += $val_y;;
	}
	if ($curr_ship['dir'] == 'North')
		$curr_ship['size']['length'] += $val_y;
	if ($curr_ship['dir'] == 'East')
	{
		$curr_ship['pos']['x'] += $val_x;
		$curr_ship['size']['width'] += $val_x;
	}
	else if ($curr_ship['dir'] == 'West')
		$curr_ship['size']['width'] += $val_x;
	$i = 0;
	$other_ships = array();
	foreach ($tmp as $ship)
	{
		if ($_POST['ship'] != $ship['ship_id'])
		{
			$ship['surface'] = surface_calc($ship);
			$other_ships[] = $ship;
		}
		else
			$curr_ship['surface'] = surface_calc($curr_ship);
		$i++;
	}
	$i = 0;
	$all_ships = array();
	if (!($dead = collision2($curr_ship, $other_ships)))
	{
		foreach ($tmp as $ship)
		{
			$ship['surface'] = surface_calc($ship);
			$_POST['ship'.$i] = $ship;
			$all_ships["ship".$i] = $ship;
			$i++;
		}
	}
	else
	{
		foreach ($tmp as $ship)
		{
			if ($dead != $ship['ship_id'])
			{
				$ship['surface'] = surface_calc($ship);
				$_POST['ship'.$i] = $ship;
				$all_ships["ship".$i] = $ship;
				$i++;
			}
		}
		$_SESSION['hero'] = 1;
	}
	set_ships($all_ships);
	$_POST['nb_ship'] = $i;
}

header("location:index.php");

?>
