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
 * Updated: August 13, 2023
*/

# Check if SPE is defined.
defined('SPE') or exit('You can not access this \'S PHP Engine (SPE)\' file directly.');

class speRouter
{
    /**
     * @var string|string[] $route Current route.
     * @var string $app Current app.
     * @var string $module Current module.
     * @var string $block Current block.
     *
     * @since 1.0.0
     */
    protected static string|array $route;
    public static string $app;
    public static string $module;
    public static string $block;
	public static string $param;

    public function __construct()
    {
        self::$route = isset($_GET['s']) ? explode('/', str_replace('//', '/', rtrim(ltrim($_GET['s'],'/'), '/'))) : '';

        self::$app = self::$route[0] ?? 'spe';
        self::$module = self::$route[1] ?? 'main';
        self::$block = self::$route[2] ?? 'index';

		self::$param = isset($_GET['p']) ?? null;
    }
}