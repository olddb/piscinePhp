<?php 		
echo "<table>".PHP_EOL;
for($i = 0; $i < 100; $i++)
{
	echo "<tr>".PHP_EOL;
	for($j = 0; $j < 150; $j++)
	{
		$id = "p".$i."_".$j;
		echo "<td id=\"".$id."\">".PHP_EOL;
		echo "<p style=\"color:#A3A3A3\"></p>";
		echo "</td>".PHP_EOL;
	}
	echo "</tr>".PHP_EOL;
}
echo "</table>".PHP_EOL;
?>
