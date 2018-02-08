<?php
/**
 * Created by PhpStorm.
 * User: op
 * Date: 8/2/18
 * Time: 2:37 PM
 */

namespace ProjectJenkins\Tests;

use ProjectJenkins\Jenkins;

class JenkinsTest extends \PHPUnit_Framework_TestCase
{

	public function test()
	{
		$jenkinsObj = new Jenkins();
		$data = Array('name1','name2');
		$jenkinsObj->setNameArr($data);

		$this->assertEquals($jenkinsObj->getNameArr(), $data,'Jenkins Test');
	}
}
