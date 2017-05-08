<?php
#!/bin/php
function		getRandomName()
{
	$name = array("Jacques", "Pierre", "PGM", "RemyDavid", "Yamamoto");
	return ($name[rand() % count($name)]);
}

for($i = 0; $i < 10; $i++)
	$users[] = array('login' => getRandomName(), 'score' => rand() % 100000);
file_put_contents("../private/score", serialize($users));
?>
