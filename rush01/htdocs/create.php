<?php
require_once("top_filed.php");
function error_signed()
{
//	header("Location:log.php");
}
if (isset($_POST['submit']) && $_POST['submit'] == "OK")
{
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['passwd']) && !empty($_POST['passwd'])) && (isset($_POST['passwd2']) && !empty($_POST['passwd2'])) && ($_POST['passwd'] == $_POST['passwd2']))
	{
		if (!file_exists("../private"))
			mkdir("../private");
		$pass = hash("whirlpool", $_POST['passwd']);
		if (file_exists("../private/passwd"))
			$file = file_get_contents("../private/passwd");
		$row = unserialize($file);
		foreach ($row as $value)
		{
			if ($_POST['login'] == $value['login'])
			{
				echo "login already exists.\n";
				return ;
			}
		}
		$array['login'] = $_POST['login'];
		$array['passwd'] = $pass;
		$row[] = $array;
		$file = serialize($row);
	}
	else
	{
		$array['login'] = $_POST['login'];
		$array['passwd'] = $pass;
		$row[] = $array;
		$file = serialize($row);
	}
	file_put_contents("../private/passwd", $file);
}
else
	echo "enter your login, your password and your password again.\n";

require_once("footer.php"); 
?>
