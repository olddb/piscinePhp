<?php
require_once('../BattleShip.class.php');

Class OrkRavajeur extends BattleShip
{
	public function __construct($id)
	{
	$this->_name = 'Oktobre Roug';
	$this->_id = $id;
	$this->_pos = [];
	$this->_z = EnumDirection::SOUTH;
	$this->_rotate = 0;
	$this->_pp = 10;
	$this->_hp = 4;
	$this->_shield = 0;
	$this->_speed = 19;
	$this->_handling = 3;
	$this->_size = ['width' => 1, 'length' => 2];
	$this->_sprite = "lightgreen";
	$this->_weapons = ['laser_battery'];
	$this->verbose = False;
	$this->color = "#8B2323";
	}

	public static function doc()
	{
		return (file_get_contents("OrkRavajeur.doc.txt"));
	}
}
