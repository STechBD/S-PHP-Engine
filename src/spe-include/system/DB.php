<?php


/**
 * Project: S PHP Engine (SPE)
 * Description: S PHP Engine (SPE) is a simple and lightweight MVC-based framework for PHP.
 * Version: 1.0.0
 * Version Code: 1
 * Since: 1.0.0
 * Author: Md. Ashraful Alam Shemul
 * Email: ceo@stechbd.net
 * Website: https://www.stechbd.net/project/SPE/
 * Developer: S Technologies
 * Homepage: https://www.stechbd.net
 * Contact: product@stechbd.net
 * Created: August 14, 2020
 * Updated: August 16, 2023
 */


namespace STechBD\SPE\System;

use Exception;
use STechBD\SDE;

/**
 * Check if SPE is defined to prevent unauthorized access to this file.
 * @since 1.0.0
 */
defined('SPE') or exit('You can not access this \'S PHP Engine (SPE)\' file directly.');

class DB
{
	/**
	 * The database connection.
	 * @var SDE|null
	 * @since 1.0.0
	 */
	public static ?SDE $connection = null;

	/**
	 * The constructor method to initialize the database connection.
	 * @global string $host The database host.
	 * @global string $username The database username.
	 * @global string $password The database password.
	 * @global string $name The database name.
	 * @global string $prefix The database table prefix.
	 * @return void
	 * @throws Exception If the database connection fails.
	 * @since 1.0.0
	 */
	protected function __construct()
	{
		global $host, $username, $password, $name, $prefix;

		self::$connection = new SDE($name, $username, $password, $host, $prefix);

		$host = null;
		$username = null;
		$password = null;
		$name = null;
		$prefix = null;
	}

	/**
	 * The init method to load the DB class.
	 * @return DB|null
	 * @since 1.0.0
	 */
	public static function init(): ?DB
	{
		$instance = null;

		if ($instance === null) {
			$instance = new self();
		}

		return $instance;
	}
}