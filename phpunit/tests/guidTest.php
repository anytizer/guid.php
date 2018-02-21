<?php
namespace tests;

use backend\guid;
use PHPUnit\Framework\TestCase;

class guidTest extends TestCase
{
	private $guid;

	public function setup()
	{
		$g = new guid();
		$this->guid = $g->NewGuid();
	}

	public function testGuidLength()
	{

		$this->assertEquals(36, strlen($this->guid));
	}

	public function testGuidUpperCased()
	{
		$this->assertEquals($this->guid, strtoupper($this->guid));
	}
	
	public function testGuidNotLowerCased()
	{
		$this->assertNotEquals($this->guid, strtolower($this->guid));
	}

	public function testGuidComponentsCount()
	{
		$matches = array();
		$matches = explode("-", $this->guid);

		$this->assertEquals(5, count($matches));
	}

	public function testGuidRegularExpressions()
	{
		$matches = array();
		preg_match("/^([0-9A-Z]{8})\\-([0-9A-Z]{4})\\-([0-9A-Z]{4})\\-([0-9A-Z]{4})\\-([0-9A-Z]{12})$/s", $this->guid, $matches, PREG_OFFSET_CAPTURE);

		$this->assertEquals(1+5, count($matches));
	}
}
