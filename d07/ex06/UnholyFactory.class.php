<?php

class UnholyFactory
{
	private $_absorbed = array();

	public function absorb($c)
	{
		if (get_parent_class($c) != "Fighter")
		{
			echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
			return ;
		}

		if (!in_array($c, $this->_absorbed))
		{
			$this->_absorbed[$c->getName()] = $c;
			echo "(Factory absorbed a fighter of type " . $c->getName() . ")" . PHP_EOL;
		}
		else
			echo "(Factory already absorbed a fighter of type " . $c->getName() . ")" . PHP_EOL;
	}

	public function fabricate($type)
	{
		if (array_key_exists($type, $this->_absorbed))
		{
			echo "(Factory fabricates a fighter of type " . $type . ")" . PHP_EOL;
			return (clone $this->_absorbed[$type]);
		}
		else
			echo "(Factory hasn't absorbed any fighter of type " . $type . ")" . PHP_EOL;
	}
}

?>
