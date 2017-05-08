#!/usr/bin/php
<?PHP
function epur_str($str)
{
	$str = trim($str);
	while (strstr($str, '  '))
		$str = str_replace('  ', ' ', $str);
	return ($str);
}
function display($arg)
{
	$i = 0;
	while ($arg[$i] != NULL)
	{
		echo ($arg[$i]);
		echo ("\n");
		$i++;
	}
}

array_shift($argv);
$argv = array_map("epur_str", $argv);

$i = 0;
while ($argv[$i] != NULL)
{
	if (strstr($argv[$i], " "))
	{
		$argv[$i] = explode(' ', $argv[$i]);
		$argv = array_merge_recursive($argv, $argv[$i]);
		unset($argv[$i]);
		$i = 0;
		$argv = array_values($argv);
	}
	else
		$i++;
}
sort($argv);
display($argv);
?>
