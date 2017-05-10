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
	
	public function testUniqueOn10Draws()
    {
		$total = 10;

		$g = new guid();
		for($i=0; $i<$total; ++$i)
		{
			$guids[] = $g->newGuid();
		}
		$guids = array_unique($guids);
        
		$this->assertEquals($total, count($guids));
    }

	public function testUniqueOn5000Draws()
    {
		$total = 5000;

		$g = new guid();
		for($i=0; $i<$total; ++$i)
		{
			$guids[] = $g->newGuid();
		}
		$guids = array_unique($guids);
        
		$this->assertEquals($total, count($guids));
    }
}

/*


# http://guid.us/GUID/PHP

#require_once("libraries/classes/backend/class.guid.inc.php");

$guid = new guid();


$time_start = microtime(true);

$included = array();
for($i=0; $i<5; ++$i)
{
	$guids[] = $guid->newGuid();
}
$guids = array_unique($guids);
print_r($guids);
#echo "\r\n", "Count: ", count($guids);

$time_end = microtime(true);
echo "\r\n", sprintf("Count: %s, Time taken: %s seconds", count($guids), $time_end - $time_start);

*/