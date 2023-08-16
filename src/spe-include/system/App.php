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

use STechBD\SPE\System\DB as speDB;
use STechBD\SPE\System\Router as speRouter;

/**
 * Check if SPE is defined to prevent unauthorized access to this file.
 * @since 1.0.0
 */
defined('SPE') or exit('You can not access this \'S PHP Engine (SPE)\' file directly.');

/**
 * The App class to handle the app.
 * @since 1.0.0
 */
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
	 * @todo Add theme path.
	 */
	public static string|null $themePath = null;
	/**
	 * @var bool $debug Debug mode.
	 * @since 1.0.0
	 */
	public static bool $debug = false;

	/**
	 * The constructor method to initialize the app.
	 * @return void
	 * @since 1.0.0
	 */
	protected function __construct()
	{
		self::$theme = speDB::$connection->select('*', 'setting', 'data = :theme', '1', false, false, ['theme' => 'theme'])[0]['value'] ?? 'SPE';
		self::$themePath = SPE_INC . 'theme' . SPE_DS . self::$theme . SPE_DS;

		self::$debug = speDB::$connection->select('*', 'setting', 'data = :debug', '1', false, false, ['debug' => 'debug'])[0]['value'] ?? false;
	}

	/**
	 * The init method to load the App class.
	 * @return App|null
	 * @since 1.0.0
	 */
	public static function init(): ?App
	{
		$instance = null;

		if ($instance === null) {
			$instance = new self();
		}

		return $instance;
	}

	/**
	 * The load method to the block of the app.
	 * @return void
	 * @since 1.0.0
	 */
	public static function load(): void
	{
		$block = ucfirst(speRouter::$block);
		$controller = $block . 'Controller';
		$model = $block . 'Model';
		$template = $block . 'View';

		if (self::$debug) {
			$template::load($controller::load($model::load(speDB::$connection)));
		} else {
			ob_start();

			$template::load($controller::load($model::load(speDB::$connection)));

			$output = ob_get_flush();
			ob_clean();
			ob_end_flush();

			echo $output;
		}
	}
}