<?php
namespace tests;

use \anytizer\guid;
use PHPUnit\Framework\TestCase;

class uniquenessTest extends TestCase
{
    public function setup()
    {
    }

	/**
	 * Generate N GUIDs and return unique ones.
	 *
	 * @param int $times
	 * @return int
	 */
	private function generateNTimes(int $times): int
	{
		//$total = 10;
		$total = $times;

		$g = new guid();
		for($i=0; $i<$total; ++$i)
		{
			$guids[] = $g->newGuid();
		}

		$guids = array_unique($guids);
		$uniques = count($guids);

		return $uniques;
	}

	public function testUniqueOn10Draws()
    {
        $total = 10;
		$uniques = $this->generateNTimes($total);
		
		$this->assertEquals($total, $uniques);
    }

	public function testUniqueOn99Draws()
    {
		$total = 99;
		$uniques = $this->generateNTimes($total);

		$this->assertEquals($total, $uniques);
    }

	public function testUniqueOn5000Draws()
    {
		$total = 5000;
		$uniques = $this->generateNTimes($total);

		$this->assertEquals($total, $uniques);
    }

	public function testUniqueOn9999Draws()
    {
		$total = 9999;
		$uniques = $this->generateNTimes($total);

		$this->assertEquals($total, $uniques);
    }
}
