# guid.php

Generates a unique ID, alike C# GUIDs, using PHP.
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
