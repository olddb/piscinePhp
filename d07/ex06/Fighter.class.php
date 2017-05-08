<?php

abstract class Fighter
{
	protected $_name;

	public function __construct($str)
	{
		$this->_name = $str;
	}

	public function getName() {return $this->_name;}

	abstract public function fight($target);
}

?>
