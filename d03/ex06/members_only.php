<?PHP
$str = base64_encode(file_get_contents("./../img/42.png"));
if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
{
	echo "<html><body>\nBonjour ".ucfirst($_SERVER['PHP_AUTH_USER'])."<br />\n";
	echo "<img src='data:image/png;base64,$str'>\n</body></html>\n";
}
else
{
	header('WWW-Authenticate: Basic realm="Espace membres"');
	header('HTTP/1.0 401 Unauthorized');
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
}
?>
