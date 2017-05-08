<?php

include_once 'auth.php';

if (TRUE === auth($_GET['login'], $_GET['passwd']))
{
	session_start();
	$_SESSION['loggued_on_user'] = $_GET['login'];
	echo "OK\n";
}
else
{
	session_start();
	$_SESSION['logged_on_user'] = '';
	echo "ERROR\n";
}

?>
