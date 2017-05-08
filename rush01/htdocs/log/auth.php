<?php

function	auth($login, $passwd)
{
	$hashed = hash("whirlpool", $passwd);
	$file = file_get_contents("../private/passwd");
	$file = unserialize($file);
	$i = -1;
	while (++$i < count($file))
	{
		if ($file[$i]["login"] == $login && $file[$i]["passwd"] == $hashed)
			return (TRUE);
	}
	return (FALSE);
}
?>
