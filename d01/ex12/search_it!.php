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

if ($argc <= 2)
	exit (0);

$i = count($argv);
$i--;
$tab = array();
while ($argv[$i])
{
	$tab = explode(":", $argv[$i]);
	if (!strcmp($tab[0], $argv[1]))
	{
		echo "$tab[1]"."\n";
		exit (0);
	}
	$i--;
	if ($i == 1)
		exit (0);
}

?>
