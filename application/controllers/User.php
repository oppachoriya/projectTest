<?php
/**
 * Created by PhpStorm.
 * User: op
 * Date: 6/2/18
 * Time: 8:19 PM
 */

use ProjectJenkins\Jenkins ;

class User extends CI_Controller {

	private $jenkinsObj ;

	public function __construct()
	{
		parent::__construct() ;
		$this->jenkinsObj = new Jenkins() ;
	}

	public function index()
	{
		$this->jenkinsObj->setNameArr(
			Array ('Name1','Name2','Name3','Name4')) ;

		foreach ($this->jenkinsObj->getNameArr() as $obj ) {
			echo $obj ." " ;
		}

	}
}
