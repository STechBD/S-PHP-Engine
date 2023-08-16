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

/**
 * Check if SPE is defined to prevent unauthorized access to this file.
 * @since 1.0.0
 */
defined('SPE') or exit('You can not access this \'S PHP Engine (SPE)\' file directly.');

/**
 * The Router class to handle the routes.
 * @since 1.0.0
 */
class Router
{
	/**
	 * @var string|null Current app.
	 * @since 1.0.0
	 */
	public static ?string $app = null;
	/**
	 * @var string|null Current module of the app.
	 * @since 1.0.0
	 */
	public static ?string $module = null;
	/**
	 * @var string|null Current block of the module.
	 * @since 1.0.0
	 */
	public static ?string $block = null;
	/**
	 * @var array|null Parameters received from the get method of the URL.
	 * @since 1.0.0
	 */
	public static ?array $param = null;
	/**
	 * @var string[]|null $route Current route.
	 * @since 1.0.0
	 */
	protected static ?array $route = null;

	/**
	 * The constructor of the class. The constructor will set the current route, app, module, block and parameters.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	protected function __construct()
	{
		self::$route = isset($_GET['s']) ? explode('/', str_replace('//', '/', rtrim(ltrim($_GET['s'], '/'), '/'))) : null;

		if (isset(self::$route[0]) && self::$route[0] === '') {
			self::$route = null;
		}

		self::$app = strtolower(self::$route[0] ?? 'spe');
		self::$module = strtolower(self::$route[1] ?? 'main');
		self::$block = strtolower(self::$route[2] ?? 'default');

		if (is_array($_GET) && count($_GET) > 1) {
			foreach ($_GET as $key => $value) {
				if ($key !== 's') {
					self::$param[$key] = $value;
				}
			}
		}
	}

	/**
	 * The init method to load the Router class.
	 * @return Router|null
	 * @since 1.0.0
	 */
	public static function init(): ?Router
	{
		$instance = null;

		if ($instance === null) {
			$instance = new self();
		}

		return $instance;
	}
}