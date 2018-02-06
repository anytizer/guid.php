<?php
require_once("vendor/autoload.php");
use anytizer\includer;

use backend\guid;
$guid = (new Guid())->NewGuid();
echo $guid;
