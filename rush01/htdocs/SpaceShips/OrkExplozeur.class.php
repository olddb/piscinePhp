<?php

require_once('BattleShip2.class.php');

Class OrkExplozeur extends BattleShip
{
	public function __construct($id)
	{
		$this->_name = "Ork'n'Roll";
		$this->_id = $id;
		$this->_pos = [];
		$this->_pp = 10;
		$this->_hp = 4;
		$this->_shield = 0;
		$this->_speed = 19;
		$this->_handling = 3;
		$this->_size = ['width' => 1, 'length' => 5];
		$this->_rotate = 2;
		$this->_sprite = "lightgreen";
		$this->_weapons = ['laser_battery'];
		$this->verbose = False;
		$this->_color = "#EAB4FD";
	}

	public static function doc()
	{
		return (file_get_contents("OrkExplozeur.doc.txt"));
	}
}
