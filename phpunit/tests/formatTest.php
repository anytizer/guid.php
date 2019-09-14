<?php

namespace tests;

use anytizer\guid;
use PHPUnit\Framework\TestCase;

class formatTest extends TestCase
{
    private $guid;

    public function setup(): void
    {
        $this->guid = (new guid())->NewGuid();
    }

    public function testIdFormat()
    {
        $new = preg_replace('/[^0-9A-F\-]/s', '', $this->guid);

        $this->AssertEquals($this->guid, $new);
    }

    public function testGuidRegularExpressions()
    {
        $matches = array();
        preg_match("/^([0-9A-Z]{8})\\-([0-9A-Z]{4})\\-([0-9A-Z]{4})\\-([0-9A-Z]{4})\\-([0-9A-Z]{12})$/s", $this->guid, $matches, PREG_OFFSET_CAPTURE);

        $this->assertEquals(1 + 5, count($matches));
    }
}
