<?PHP
header("location:index.php");
include_once("top_filed.php");


if (file_exists("../private/passwd"))
{
	$pass = hash('whirlpool', $_POST['passwd']);
	$file = file_get_contents("../private/passwd");
	$row = unserialize($file);
	foreach ($row as $value)
	{
		if ($_POST['login'] == $value['login'])
		{
			if ($pass == $value['passwd'])
			{
				$_SESSION['loggued_on_user'] = $value['login'];
	//			require_once("index.php");
				exit ();
			}
		}
	}
}
$flash = "Le nom d'utilisateur ou le mot de passe est incorrect.";
$_SESSION['loggued_on_user'] = "";
header("location:log.php");
?>
