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


/**
 * Check if SPE is defined to prevent unauthorized access to this file.
 * @since 1.0.0
 */
defined('SPE') or exit('You can not access this \'S PHP Engine (SPE)\' file directly.');

$host = 'localhost';
$username = 'root';
$password = '';
$name = 'spe';

require_once 'spe-include/system/DB.php';

STechBD\SPE\System\DB::$host = $host;
STechBD\SPE\System\DB::$user = $username;
STechBD\SPE\System\DB::$password = $password;
STechBD\SPE\System\DB::$name = $name;
