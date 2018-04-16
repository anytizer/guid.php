<?php
namespace tests;

#require_once("vendor/autoload.php");
require_once "vendor/anytizer/guid.php/src/anytizer/guid.php";
use anytizer\guid;

$g = new guid();
for($i=0; $i<20; ++$i)
{
	echo $g->NewGuid();
	echo "\r\n";
}
