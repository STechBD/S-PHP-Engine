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


namespace System;

use STechBD\SPE\System\DB as speDB;

/**
 * Check if SPE is defined to prevent unauthorized access to this file.
 * @since 1.0.0
 */
defined('SPE') or exit('You can not access this \'S PHP Engine (SPE)\' file directly.');

class App
{
	/**
	 * @var string|null $theme Theme name.
	 * @since 1.0.0
	 */
	public static string|null $theme = null;
	/**
	 * @var string|null $themePath Theme path.
	 * @since 1.0.0
	 */
	public static string|null $themePath = null;

	public function __construct()
	{
		self::$theme = speDB::$connection->select('*', 'settings', 'id = 1')[0]['theme'] ?? 'SPE';
		self::$themePath = SPE_INC . 'theme' . SPE_DS . self::$theme . SPE_DS;
	}
}