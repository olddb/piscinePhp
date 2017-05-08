<?php
require_once('BattleShip2.class.php');

Class ImpCuirasse extends BattleShip
{

	public function __construct($id)
	{
		$this->_name = "Imperator Deus";
		$this->_id = $id;
		$this->_pos = 0;
		$this->_rotate = 3;
		$this->_pp = 10;
		$this->_hp = 4;
		$this->_shield = 2;
		$this->_speed = 19;
		$this->_handling = 3;
		$this->_size = ['width' => 2, 'length' => 7];
		$this->_sprite = "red";
		$this->_weapons = ['laser_battery'];
		$this->verbose = False;
		$this->_color = "#176B06";
	}

	public static function doc()
	{
		return (file_get_contents("ImpCuirasse.doc.txt"));
	}
}
