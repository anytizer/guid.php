<?php
declare(strict_types=1);

namespace tests;

require_once("src/libraries/classes/backend/class.guid.inc.php");
use backend\guid;

$guid = new guid();
$newguid = $guid->NewGuid();

echo "\r\n\t", $newguid, "\r\n";
