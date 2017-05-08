<?php

abstract class House
{
	abstract function getHouseName();
	abstract function getHouseSeat();
	abstract function getHouseMotto();

	public function introduce()
	{
		echo "House";
		echo $this->getHouseName();
		echo " of ";
		echo $this->getHouseSeat();
		echo " : \"";
		echo $this->getHouseMotto();
		echo "\"" . PHP_EOL;
	}
}

?>
