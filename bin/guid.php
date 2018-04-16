<?php
declare(strict_types=1);

namespace tests;

require_once(realpath(__DIR__."/../src/libraries/classes/anytizer")."/guid.php");
use anytizer\guid;

$guid = new guid();
$newguid = $guid->NewGuid();

echo "\r\n\t", $newguid, "\r\n\r\n";
