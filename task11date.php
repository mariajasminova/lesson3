<?php


/**
* 
*/
class Task11
{
	private $basedate;

		function __construct($basedate)
	{
		$this->basedate = $basedate;
	}

	public function resultDate()
	{
		$timestamp = strtotime($this -> basedate); 
		echo date('h:i:s d.m.Y', $timestamp); 
	}

}
$admin = new Task11('2018-09-17 12:05:59'); 
$admin -> resultDate();


?>