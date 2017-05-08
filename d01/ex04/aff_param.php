#!/usr/bin/php
<?PHP
array_shift($argv);
$i = 0;
while ($argv[$i] != NULL)
{
	echo ($argv[$i]);
	echo ("\n");
	$i++;
}
?>
