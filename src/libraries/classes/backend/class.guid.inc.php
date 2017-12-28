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
	/**
	 * Generate a new GUID
	 * 
	 * @return string
	 */
	public static function NewGuid(): string
	{
		mt_srand((double)microtime()*10000);

		$rand = mt_rand(10000, 99999);
		$uniqid = uniqid(mt_rand(), true);
		$timestamp = date("HisYmd");

		$characters = strtoupper(md5($rand.$uniqid.$timestamp));
		$guid = preg_replace("/^([0-9A-F]{8})([0-9A-F]{4})([0-9A-F]{4})([0-9A-F]{4})([0-9A-F]{12})$/is", "$1-$2-$3-$4-$5", $characters);

		return $guid;
	}
}
