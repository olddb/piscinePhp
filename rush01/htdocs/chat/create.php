<?php
if ($_POST["text"])
{
	if (!file_exists("private"))
		mkdir("private");
	if (file_exists("private/chat.txt"))
	{
		session_start();
		$file = file_get_contents("private/chat.txt");
		$file = unserialize($file);
		$array['login'] = $_SESSION['loggued_on_user'];
		$array['text'] = $_POST['text'];
		$file[] = $array;
		$file = serialize($file);
	}
	else
	{
		$array['text'] = $_POST['text'];
		$file[] = $array;
		$file = serialize($file);
	}
	file_put_contents("private/chat.txt", $file);
}
else
	file_put_contents("ERROR\n");
header("location: ../index.php");
?>
