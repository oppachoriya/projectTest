<?php
/**
 * Created by PhpStorm.
 * User: op
 * Date: 6/2/18
 * Time: 7:49 PM
 */

namespace ProjectJenkins;



class Jenkins
{
	private $nameArr ;

	public function __construct()
	{

	}

	public function setNameArr($nameArr)
	{
		$this->nameArr = $nameArr ;
	}

	public function getNameArr()
	{
		return $this->nameArr ;
	}
}
