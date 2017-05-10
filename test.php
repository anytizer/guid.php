<?php
declare(strict_types=1);

namespace tests;

require_once("src/libraries/classes/backend/class.guid.inc.php");
use backend\guid;

$g = new guid();
for($i=0; $i<5; ++$i)
{
	echo $g->NewGuid();
	echo "\r\n";
}