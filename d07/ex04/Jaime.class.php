<?php

Class Jaime extends Lannister
{
	public function sleepWith($c){
		if ($c instanceof Lannister)
		{
			if ($c instanceof Tyrion)
				print("Not even if I'm drunk !" . PHP_EOL);
			if ($c instanceof Cersei)
				print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		}
		else
			Lannister::sleepWith($c);
	}
}

?>
