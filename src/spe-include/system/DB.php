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
 * Updated: August 14, 2023
 */


namespace STechBD\SPE\System;
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
	 */
	public static \STechBD\SDE|null $connection = null;
	/**
	 * @var string|null $host Host name of the database.
	 * @since 1.0.0
	 */
	public static string|null $host = null;
	/**
	 * @var string|null $user Username of the database.
	 * @since 1.0.0
	 */
	public static string|null $user = null;
	/**
	 * @var string|null $password Password of the database.
	 * @since 1.0.0
	 */
	public static string|null $password = null;
	/**
	 * @var string|null $name Name of the database.
	 * @since 1.0.0
	 */
	public static string|null $name = null;

	public function __construct()
	{
		require_once(SPE_ROOT . 'config.php');

		global $host, $username, $password, $name;
		self::$host = $host;
		self::$user = $username;
		self::$password = $password;
		self::$name = $name;

		self::$connection = new SDE(self::$name, self::$host, self::$user, self::$password);
	}
}