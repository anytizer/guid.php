# guid.php

Generates a C# like GUIDs using PHP.
See [Inspirations](http://guid.us/GUID/PHP).

    <?php
    use anytizer\guid;
	
	require_once("vendor/autoload.php");

    $g = new guid();
    $guid = $g->NewGuid();


## Installation

Use one of:

	composer require anytizer/guid.php:dev-master
	composer global require anytizer/guid.php:dev-master


## CLI

Put the ./bin folder in your system path. The new CLI commands will be available.

	guid
	id

Or, symlink `./bin/guid` and `./bin/id` inside `/usr/local/bin`.
