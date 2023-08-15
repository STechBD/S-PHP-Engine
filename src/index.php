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
 * Updated: August 14, 2021
 */


/**
 * Check if SPE is running on PHP 7.4 or newer.
 * @since 1.0.0
 */
if (PHP_VERSION_ID < 70400 === true) {
	exit('SPE requires PHP 7.4 or newer.');
}

/**
 * Define SPE to prevent unnecessary access.
 * @since 1.0.0
 */
const SPE = true;

/**
 * Define SPE Version.
 * @since 1.0.0
 */
const SPE_VERSION = '1.0.0';

/**
 * Define SPE Version Code.
 * @since 1.0.0
 */
const SPE_VERSION_CODE = 1;

/**
 * Define required directories.
 *
 * @const SPE_DS Directory Separator
 * @const SPE_ROOT Root Directory
 * @const SPE_APP App Directory
 * @const SPE_FILE Static files' Directory
 * @const SPE_INC Include Directory
 * @const SPE_INS Installation Directory
 * @const SPE_SYS System Directory
 * @const SPE_CORE Core Directory
 *
 * @since 1.0.0
 */
const SPE_DS = DIRECTORY_SEPARATOR;
const SPE_ROOT = __DIR__ . SPE_DS;
const SPE_APP = SPE_ROOT . 'spe-app' . SPE_DS;
const SPE_FILE = SPE_ROOT . 'spe-file' . SPE_DS;
const SPE_INC = SPE_ROOT . 'spe-include' . SPE_DS;
const SPE_INS = SPE_ROOT . 'spe-install' . SPE_DS;
const SPE_SYS = SPE_INC . 'system' . SPE_DS;
const SPE_CORE = SPE_INC . 'core' . SPE_DS;

/**
 * Define app starting time.
 * @since 1.0.0
 */
define('SPE_START_TIME', array_sum(explode(' ', microtime())));

/**
 * Define app starting memory usage.
 * @since 1.0.0
 */
define('SPE_START_MEMORY', memory_get_usage());

/**
 * Define app starting memory peak usage.
 * @since 1.0.0
 */
define('SPE_START_MEMORY_PEAK', memory_get_peak_usage());

/**
 * Load the autoloader.
 * @since 1.0.0
 */
require_once(SPE_INC . 'vendor' . SPE_DS . 'autoload.php');

/**
 * Initialize the system.
 * @since 1.0.0
 */
use STechBD\SPE\Init as speInit;

new speInit();
