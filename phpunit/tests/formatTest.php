<?php
namespace tests;

use \anytizer\guid;
use PHPUnit\Framework\TestCase;

class formatTest extends TestCase
{
    public function setup()
    {
    }

	public function testIdFormat()
    {
		$id = (new guid())->NewGuid();
		$new = preg_replace('/[^0-9A-F\-]/s', '', $id);
		
		$this->AssertEquals($id, $new);
    }
}
