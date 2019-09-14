<?php

namespace tests;

require_once("./vendor/autoload.php");

use anytizer\guid;

$guid = (new Guid())->NewGuid();
echo $guid;
