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

		$data['userList'] = $this->jenkinsObj->getNameArr();
		$this->load->view('userList', $data) ;

	}

	public function listUsers()
	{

		$data['userList'] = Array ('User1','User2','User3','User4','User5','User6') ;
		$this->load->view('userList', $data) ;

	}
}
