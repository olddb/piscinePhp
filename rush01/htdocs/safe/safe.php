<?PHP require_once("top_filed.php"); ?>

	<div class="battlefield"> 
		<?PHP require_once("map_display.php"); ?>
	</div>

<?PHP 
require_once("init_game.php");
while (isset($_POST['game_on']))
{
	require_once("draw_ship.php");
	require_once("send_action.php");
	require_once("handle.php");
}
?>

<?PHP require_once("footer.php"); ?>
