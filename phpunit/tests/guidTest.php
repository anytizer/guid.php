<?php
namespace tests;

use backend\guid;
use PHPUnit\Framework\TestCase;

class guidTest extends TestCase
{
    public function setup()
    {
    }

    public function testGuidLength()
    {
		$g = new guid();
		
		$guid = $g->NewGuid();
        
		$this->assertEquals(36, strlen($guid));
    }
	
	public function testGuidUpperCased()
    {
		$g = new guid();
		
		$guid = $g->NewGuid();
        
		$this->assertEquals($guid, strtoupper($guid));
    }
	
	public function testGuidComponentsCount()
    {
		$g = new guid();
		
		$guid = $g->NewGuid();
		
		$matches = array();
		$matches = explode("-", $guid);
		#print_r($matches);
        
		$this->assertEquals(5, count($matches));
    }
	
	public function testGuidRegularExpressions()
    {
		$g = new guid();
		
		$guid = $g->NewGuid();
		
		$matches = array();
		preg_match("/^([0-9A-Z]{8})\\-([0-9A-Z]{4})\\-([0-9A-Z]{4})\\-([0-9A-Z]{4})\\-([0-9A-Z]{12})$/s", $guid, $matches, PREG_OFFSET_CAPTURE);
		#print_r($matches);
        
		$this->assertEquals(1+5, count($matches));
    }
}
