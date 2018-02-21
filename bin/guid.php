<?php
declare(strict_types=1);

namespace tests;

require_once(realpath(__DIR__."/../src/libraries/classes/backend")."/guid.php");
use backend\guid;

$guid = new guid();
$newguid = $guid->NewGuid();

echo "\r\n\t", $newguid, "\r\n\r\n";
