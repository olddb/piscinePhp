<?php
require_once('../BattleShip.class.php');

Class Asteroid extends Battleship
{
	public function __construct($id)
	{
	$this->_name = "Big Ass Meteor in your Face";
	$this->_id = $id;
	$this->_pos = [];
	$this->_rotate = 42;
	$this->_pp = 42;
	$this->_hp = 42000;
	$this->_shield = 0;
	$this->_speed = 0;
	$this->_handling = 9000;
	$this->_size = ['width' => 10, 'length' => 10];
	$this->_sprite = "brown";
	$this->_weapons = ['heavy gravity'];
	$this->verbose = False;
	$this->_color = "#EA8273";
	}

	public static function doc()
	{
		return (file_get_contents("Asteroid.doc.txt"));
	}
}
?>
