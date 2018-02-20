<?php
namespace tests;

require_once("vendor/autoload.php");

use backend\guid;
$guid = (new Guid())->NewGuid();
echo $guid;
