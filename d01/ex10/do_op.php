#!/usr/bin/php
<?PHP
function epur($s)
{
	$s = trim($s);
	while (strstr($s, '  '))
		$s = s_replace('  ', ' ', $s);
	return ($s);
}

function is_empty($arr)
{
	if (strcmp($arr, " ") != 0)
		return ($arr);
	return 0;
}

if ($argc != 4)
{
	echo "Incorrect Parameters"."\n";
	exit (0);
}

array_shift($argv);
$argv = array_values($argv);

$cal = array();
$cal = array_map('trim', $argv);

if (!strcmp($cal[1], "+"))
{
	$rez = $cal[0] + $cal[2];
	echo "$rez";
}
else if (!strcmp($cal[1], "-"))
{
	$rez = $cal[0] - $cal[2];
	echo "$rez";
}
else if (!strcmp($cal[1], "*"))
{
	$rez = $cal[0] * $cal[2];
	echo "$rez";
}
else if (!strcmp($cal[1], "/"))
{
	$rez = $cal[0] / $cal[2];
	echo "$rez";
}
else if (!strcmp($cal[1], "%"))
{
	$rez = $cal[0] % $cal[2];
	echo "$rez";
}
echo "\n";

//display($cal);
?>
