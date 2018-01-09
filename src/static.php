<?php
use anytizer/includer;

/**
 * You can register multiple paths
 */
spl_autoload_register(array(new includer("../vendor/anytizer/guid.php/src/libraries/classes"), "namespaced_inc_dot"));
