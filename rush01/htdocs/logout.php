<?PHP
header("location:index.php");
include_once("top_filed.php");
if (isset($_SESSION['loggued_on_user']))
{
	unset($_SESSION['loggued_on_user']);
	unset($_SESSION['game_on']);
	session_destroy();
}

?>
