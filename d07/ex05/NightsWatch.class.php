<?php

class NightsWatch{
	private $t = array();

	public function recruit($p){
		array_push($this->t, $p);
	}	

	public function fight(){
		foreach($this->t as $potential)
		{
			if ($potential instanceof IFighter)
			{
				$potential->fight();
			}
		}
	}
}

?>
