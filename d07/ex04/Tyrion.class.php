<?php

Class Tyrion extends Lannister
{
	public function sleepWith($c){
		if ($c instanceof Lannister)
			print ("Not even if I'm drunk !" . PHP_EOL);
		else
			Lannister::sleepWith($c);
	}
}

?>
