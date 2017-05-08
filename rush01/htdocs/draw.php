<?PHP

include_once("unserialize_ships.php");

$i = 0;

$ar = array();
if (!isset($_POST['ship'.$i]))
	$_POST[] = get_ships();
if (isset($_POST['ship'.$i]))
{
	while ($i < $_POST['nb_ship'])
	{
		$surface = array();
		$surface = $_POST['ship'.$i]['surface'];

		$css = "";
		for($j = 0; $j < count($surface); $j++)
		{
			$css = $css."#p".$surface[$j];
			if (($j + 1) != count($surface))
				$css = $css.", ";
		}
		$css = $css." { background-color:".$_POST['ship'.$i]['color']."; }".PHP_EOL;
		$ar[$i] = $css;
		$i++;
	}
	file_put_contents("css/draw.css", $ar);
}

?>
