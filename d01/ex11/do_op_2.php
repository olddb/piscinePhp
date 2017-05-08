#!/usr/bin/php
<?PHP
function clean($str)
{
	$str = str_replace("*", " * ", $str);
	$str = str_replace("+", " + ", $str);
	$str = str_replace("/", " / ", $str);
	$str = str_replace("%", " % ", $str);
	$str = str_replace("-", " - ", $str);
	return ($str);
}

function epur($s)
{
	$s = trim($s);
	while (strstr($s, '  '))
		$s = str_replace('  ', ' ', $s);
	return ($s);
}

function is_empty($arr)
{
	if (strcmp($arr, " ") != 0)
		return ($arr);
	return 0;
}

if ($argc != 2)
{
	echo "Incorrect Parameters"."\n";
	exit (0);
}

array_shift($argv);
$argv = array_values($argv);
$argv[0] = clean($argv[0]);
$argv[0] = epur($argv[0]);

$cal = array();
$cal = explode(" ", $argv[0]);
if (!is_numeric($cal[0]) || !is_numeric($cal[2]))
{
	echo "Syntax Error"."\n";
	exit (0);
}

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
?>
