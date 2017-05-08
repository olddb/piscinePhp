<?PHP
include_once("collisions.php");
include_once("surface.php");
include_once("unserialize_ships.php");
include_once("serialize_ships.php");

if (isset($_POST['ship']) && isset($_POST['action']) && isset($_POST['value']))
{
	$tmp = get_ships();
	foreach ($tmp as $ship)
		if ($_POST['ship'] == $ship['ship_id'])
			$curr_ship =  $ship;
	if (strstr($_POST['action'], "move"))
	{
		if ($_POST['action'] == 'move_s')
		{
			$curr_ship['pos']['y'] += $_POST['value'];
			$curr_ship['size']['length'] += $_POST['value'];
		}
		if ($_POST['action'] == 'move_n')
			$curr_ship['size']['length'] += $_POST['value'];
		if ($_POST['action'] == 'move_e')
		{
			$curr_ship['pos']['x'] += $_POST['value'];
			$curr_ship['size']['width'] += $_POST['value'];
		}
		if ($_POST['action'] == 'move_w')
			$curr_ship['size']['width'] += $_POST['value'];
	}
	else if (strstr($_POST['action'], "rotate"))
	{
		if ($_POST['action'] == 'rotate_l')
		{
			if ($curr_ship['dir'] == 'North')
				$curr_ship['dir'] = 'West';
			else if ($curr_ship['dir'] == 'West')
				$curr_ship['dir'] = 'South';
			else if ($curr_ship['dir'] == 'South')
				$curr_ship['dir'] = 'East';
			else if ($curr_ship['dir'] == 'East')
				$curr_ship['dir'] = 'North';
		}
		else
		{
			if ($curr_ship['dir'] == 'North')
				$curr_ship['dir'] = 'East';
			else if ($curr_ship['dir'] == 'East')
				$curr_ship['dir'] = 'South';
			else if ($curr_ship['dir'] == 'South')
				$curr_ship['dir'] = 'West';
			else if ($curr_ship['dir'] == 'West')
				$curr_ship['dir'] = 'North';
		}
	}
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
	if (!collision($curr_ship, $other_ships))
	{
		if ($_POST['action'] == 'move_s')
			$curr_ship['size']['length'] -= $_POST['value'];
		if ($_POST['action'] == 'move_n')
		{
			$curr_ship['pos']['y'] -= $_POST['value'];
			$curr_ship['size']['length'] -= $_POST['value'];
		}
		if ($_POST['action'] == 'move_e')
			$curr_ship['size']['width'] -= $_POST['value'];
		if ($_POST['action'] == 'move_w')
		{
			$curr_ship['pos']['x'] -= $_POST['value'];
			$curr_ship['size']['width'] -= $_POST['value'];
		}
		foreach ($tmp as $ship)
		{
			if ($_POST['ship'] != $ship['ship_id'])
			{
				$ship['surface'] = surface_calc($ship);
				$_POST['ship'.$i] = $ship;
				$all_ships["ship".$i] = $ship;
			}
			else
			{
				$curr_ship['surface'] = surface_calc($curr_ship);
				$_POST['ship'.$i] = $curr_ship;
				$all_ships['ship'.$i] = $curr_ship;
			}
			$i++;
		}
	}
	else
	{
		foreach ($tmp as $ship)
		{
			if ($_POST['ship'] != $ship['ship_id'])
			{
				$ship['surface'] = surface_calc($ship);
				$_POST['ship'.$i] = $ship;
				$all_ships["ship".$i] = $ship;
				$i++;
			}
		}
		
	}
	set_ships($all_ships);
	$_POST['nb_ship'] = $i;
}

header("location:index.php");

?>
