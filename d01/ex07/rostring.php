#!/usr/bin/php
<?PHP
function epur_str($str)
{
	$str = trim($str);
	while (strstr($str, '  '))
		$str = str_replace('  ', ' ', $str);
	return ($str);
}

$t = epur_str($argv[1]);
$t = explode(' ', $t);
$last = array_shift($t);
$i = 0;
while ($t[$i] != NULL)
{
	echo $t[$i].' ';
	$i++;
}
if (strcmp($last, ""))
	echo $last."\n";
?>
