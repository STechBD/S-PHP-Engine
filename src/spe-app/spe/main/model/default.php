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


use STechBD\SDE;

/**
 * Check if SPE is defined to prevent unauthorized access to this file.
 * @since 1.0.0
 */
defined('SPE') or exit('You can not access this \'S PHP Engine (SPE)\' file directly.');

/**
 * The Index class to handle the index page.
 * @since 1.0.0
 */
class DefaultModel
{
	/**
	 * @var SDE|null $database The database connection.
	 * @since 1.0.0
	 */
	private static ?SDE $database = null;

	/**
	 * The constructor method to initialize the index page.
	 * @return void Nothing is returned from this method.
	 * @since 1.0.0
	 */
	protected function __construct()
	{
		// To be added later.
	}

	/**
	 * The output method to output the index page.
	 * @param SDE $database
	 * @return DefaultModel
	 * @since 1.0.0
	 */
	public static function load(SDE $database): DefaultModel
	{
		self::$database = $database;

		return new self();
	}
}