<?php
if (file_exists("../private/passwd"))
{
	if ($_POST["submit"] == "OK" && $_POST["login"] && $_POST["oldpw"] && $_POST["newpw"])
	{
		$new = hash("whirlpool", $_POST["newpw"]);
		$old = hash("whirlpool", $_POST["oldpw"]);
		$file = file_get_contents("../private/passwd");
		$file = unserialize($file);
		$i = -1;
		while (++$i < count($file))
		{
			if ($file[$i]["login"] == $_POST["login"] && $file[$i]["passwd"] == $old)
			{
				$array['login'] = $_POST['login'];
				$array['passwd'] = $new;
				$file[$i] = $array;
				$file = serialize($file);
				file_put_contents("../private/passwd", $file);
				echo "OK\n";
				return ;
			}
		}
		echo "ERROR\n";
	}
	else
		echo "ERROR\n";
}
else
	echo "ERROR\n";
?>
