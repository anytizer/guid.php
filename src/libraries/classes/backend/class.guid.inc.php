<?php
namespace backend;

/**
 * GUID Generator
 * @package backend
 *
 * @see http://guid.us/GUID/PHP
 */
class guid
{
    public static function NewGuid(): string
    {
        mt_srand((double)microtime()*10000);
        $characters = strtoupper(md5(uniqid(rand(), true).date("HisYmd")));

        $guid = implode("-", array(
            substr($characters,  0,  8),
            substr($characters,  8,  4),
            substr($characters, 12,  4),
            substr($characters, 16,  4),
            substr($characters, 20, 12)
        ));

        return $guid;
    }
}
