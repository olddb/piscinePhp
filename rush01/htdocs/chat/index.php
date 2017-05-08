<?php
if (file_exists("private/chat.txt"))
{
	$file = file_get_contents("private/chat.txt");
	$file = unserialize($file);
	echo "<p style=\"color:#FFFFFF:\"" ;
	foreach($file as $bla)
	{
		echo "<p><font color=\"#5F6872\">" . $bla['login'] . " : " . $bla['text'] . "</font></p>";

	}
}
?>
