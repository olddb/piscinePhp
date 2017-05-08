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

$i=0;
function is_num($str)
{
	while($str[$i])
	{
		if ($str[$i] >= '0' && $str[$i] <= '9')
			$i++;
		else
			return NULL;
	}
	return (1);
}
$i = 0;
function is_alpha($str)
{
	while($str[$i])
	{
		if ($str[$i] >= 'a' && $str[$i] <= 'z')
			$i++;
		else if ($str[$i] >= 'A' && $str[$i] <= 'Z')
			$i++;
		else
			return NULL;
	}
	return (1);
}


$i = 0;
$alpha = array();
$num = array();
$misc = array();
while ($argv[$i] != NULL)
{
	if (is_alpha($argv[$i]))
		$alpha[] = $argv[$i];
	elseif (is_num($argv[$i]))
		$num[] = $argv[$i];
	else
		$misc[] = $argv[$i];
	$i++;
}
natcasesort($alpha);
$alpha = array_values($alpha);
sort($num, SORT_STRING);
$num = array_values($num);
sort($misc);
$misc = array_values($misc);
display($alpha);
display($num);
display($misc);
?>
