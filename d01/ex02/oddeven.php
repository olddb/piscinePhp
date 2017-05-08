#!/usr/bin/php
<?PHP

function read_stdin()
{
	$fr=fopen("php://stdin","r");
	if (($input = fgets($fr,256)) == NULL)
	{
		echo "\n";
		exit(0);
	}
	$input = rtrim($input);
	return $input;
}

function do_the_thing()
{
	echo "Entrez un nombre: ";
	$nb = read_stdin();
	$nb2 = substr($nb, -1);
	if (is_numeric($nb))
	{
		if ($nb2 % 2)
			echo"Le chiffre $nb est Impair\n";
		else
			echo"Le chiffre $nb est Pair\n";
	}
	else
		echo"'$nb' n'est pas un chiffre\n";
}

while(42)
	do_the_thing();
?>
