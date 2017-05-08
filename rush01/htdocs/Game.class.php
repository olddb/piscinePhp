<?php

include_once("SpaceShips/ImpCuirasse.class.php");
include_once("SpaceShips/OrkExplozeur.class.php");

class Game
{
	private $_turn = 0;
	private $_ship_list = 0;

	public function getTurn()			{return ($this->_turn);}
	public function getShip_list()		{return ($this->_ship_list);}

	public function setTurn($arg)		{$this->_turn = $arg;}
	public function setShip_list($arg)		{$this->_ship_list = $arg;}

	public function __construct()
	{
		$_turn = 0;
	}
	public function init_ships()
	{
		$i = 1;
		$tmp[0] =  new ImpCuirasse($i);
		$tmp[0]->setPos(array('x'=> 20, 'y'=> 20));
		$tmp[0]->setSprite(1);
		$tmp[0]->setRotate("South");
		$i++;
		$tmp[1] =  new OrkExplozeur($i);
		$tmp[1]->setPos(array('x'=> 120, 'y'=> 80));
		$tmp[1]->setSprite(2);
		$tmp[1]->setRotate("West");
		$i++;
		$tmp[2] =  new ImpCuirasse($i);
		$tmp[2]->setPos(array('x'=> 20, 'y'=> 25));
		$tmp[2]->setSprite(1);
		$tmp[2]->setRotate("East");
		$this->setShip_list($tmp);
		return ($this->_ship_list);
	}
	public function turn_plus()
	{
		$this->setTurn($_turn + 1);
	}
	public static function doc()
	{
		return (file_get_contents("Game.doc.txt"));
	}
}

?>
