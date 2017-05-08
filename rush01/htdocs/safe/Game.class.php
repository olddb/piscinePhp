<?php

include_once("SpaceShips/ImpCuirasse.class.php");
include_once("SpaceShips/OrkExplozeur.class.php");

class Game
{
	private $_turn = 0;
	private $_phase = 0;
	private $_ground = 0;
	private $_ship_list = 0;

	public function getTurn()			{return ($this->_turn);}
	public function getShip_list()		{return ($this->_ship_list);}
	public function getPhase()			{return ($this->_phase);}

	public function setTurn($arg)		{$this->_turn = $arg;}
	public function setPhase($arg)		{$this->_phase = $arg;}
	public function setShip_list($arg)		{$this->_ship_list = $arg;}

	public function __construct()
	{
		$_turn = 0;
		$_ground = array('WIDTH'=> 100, 'EIGHT' => 150);
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
		$tmp[1]->setPos(array('x'=> 130, 'y'=> 80));
		$tmp[1]->setSprite(2);
		$tmp[1]->setRotate("North");
		$this->setShip_list($tmp);
		return ($this->_ship_list);
	}
	public function turn_plus()
	{
		$this->setTurn($_turn + 1);
	}
	/*
	public function display($arg)
	{
		if (strcmp($arg[0], "phase_1")
		{
			return (array('ok' => 'Plein de trucs a gerer ! ma joie est grande !'));
		}
		if (strcmp($arg[0], "phase_2")
		{
			if (check_move(move_points, dir, curr_ship));
				return (id_ship, new_coord);
			return (error);
		}
		if (strcmp($arg[0], "phase3"))
		{
			if (check_ready(id_ship_shooting))
			{
				if (check_target(id_ship_target, curr_ship_shooting))
				{
					if (id_ship_target->getPv()	<= 0)
						return ("RIP ship");
					else
						return ("Yeah !!");
				}
				else
					return ("Loupe ..");
			}
			return (error);
		}
		else
			return ("Fais ce qu'on te dit connard !!! (de joueur)");
	}
	 */
}

?>
