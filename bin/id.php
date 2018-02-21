<?php
declare(strict_types=1);

namespace tests;

require_once(realpath(__DIR__."/../src/libraries/classes/backend")."/guid.php");
use backend\guid;

$guid = new guid();

$ids = array();
for($i=0; $i<5; ++$i)
{
	$ids[] = $guid->NewGuid();
}

echo "\r\n\t", implode("\r\n\t", $ids), "\r\n\r\n";
