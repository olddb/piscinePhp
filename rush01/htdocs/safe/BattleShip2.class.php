<?php

Class BattleShip
{
	protected	$_name;
	protected	$_id;
	protected	$_pos = 0;
	protected	$_rotate = 0;
	protected	$_pp = 0;
	protected	$_hp = 0;
	protected	$_shield = 0;
	protected	$_speed = 0;
	protected	$_handling = 0;
	protected	$_size = ['width' => 0, 'length' => 0];
	protected	$_sprite = "red";
	protected	$_weapons = 0;
	public 		$verbose = False;

	public static function doc()
	{
		return (file_get_contents("BattleShip.doc.txt"));
	}
	public function getName()		{return ($this->_name);}
	public function getId()			{return ($this->_id);}
	public function getPos()		{return ($this->_pos);}
	public function getRotate()		{return ($this->_rotate);}
	public function getPp()			{return ($this->_pp);}
	public function getHp()			{return ($this->_hp);}
	public function getShield()		{return ($this->_shield);}
	public function getSpeed()		{return ($this->_speed);}
	public function getHandling()	{return ($this->_handling);}
	public function getSize()		{return ($this->_size);}
	public function getSprite()		{return ($this->_sprite);}
	public function getWeapon()		{return ($this->_weapon);}

	public function setName($arg)		{$this->_name = $arg;}
	public function setPos($arg)		{$this->_pos = $arg;}
	public function setRotate($arg)		{$this->_rotate = $arg;}
	public function setPp($arg)			{$this->_pp = $arg;}
	public function setHp($arg)			{$this->_hp = $arg;}
	public function setShield($arg)		{$this->_shield = $arg;}
	public function setSpeed($arg)		{$this->_speed = $arg;}
	public function setHandling($arg)	{$this->_handling = $arg;}
	public function setSize($arg)		{$this->_size = $arg;}
	public function setSprite($arg)		{$this->_sprite = $arg;}
	public function setWeapon($arg)		{$this->_weapon = $arg;}

	public function __construct()
	{
		$this->_name = 0;
		$this->_pos = 0;
		$this->_rotate = 0;
		$this->_pp = 0;
		$this->_hp = 0;
		$this->_shield = 0;
		$this->_speed = 0;
		$this->_handling = 0;
		$this->_size = ['width' => 0, 'length' => 0];
		$this->_sprite = 0;
		$this->_weapons = 0;
	}
}
