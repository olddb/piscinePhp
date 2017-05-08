<?PHP

function surface_calc($ship)
{
	$surface = array();
	$i = 1;
	$total_surface = ($ship['size']['width'] * $ship['size']['length']);
	$width = $ship['size']['width'];
	$base_x = $ship['pos']['x'];
	$base_y	= $ship['pos']['y'];
	$surface[] = $ship['pos']['y']."_".$ship['pos']['x'];
	while ((count($surface)) < $total_surface)
	{
		if ($ship['dir'] == "South")
			$surface[] = ($base_y - $i)."_".$base_x;
		if ($ship['dir'] == "North")
			$surface[] = ($base_y + $i)."_".$base_x;
		if ($ship['dir'] == "East")
			$surface[] = $base_y."_".($base_x - $i);
		if ($ship['dir'] == "West")
			$surface[] = $base_y."_".($base_x + $i);
		$i++;
		if ($i == $ship['size']['length'] && $width > 1)
		{
			$i = 0;
			$width--;
		if ($ship['dir'] == "South")
			$base_x -= 1;
		if ($ship['dir'] == "North")
			$base_x += 1;
		if ($ship['dir'] == "East")
			$base_y -= 1;
		if ($ship['dir'] == "West")
			$base_y += 1;
		}
	}
	return ($surface);
}
?>
