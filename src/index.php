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
 * Updated: February 21, 2021
*/


/**
 * Check if SPE is running on PHP 7.4 or newer.
 * @since 1.0.0
 */
if(PHP_VERSION_ID < 70400 === true)
{
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
 * @const SPE_DIR Root Directory
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
const SPE_DIR = __DIR__ . SPE_DS;
const SPE_APP = SPE_DIR . 'spe-app' . SPE_DS;
const SPE_FILE = SPE_DIR . 'spe-file' . SPE_DS;
const SPE_INC = SPE_DIR . 'spe-include' . SPE_DS;
const SPE_INS = SPE_DIR . 'spe-install' . SPE_DS;
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
 * Include the initialization file.
 * @since 1.0.0
 */
require(SPE_INC . 'Init.php');
new speInit();

/**
 * Show output. This is a development feature.
 * @since 1.0.0
 */
echo('App: ' . speRouter::$app . ', Module: ' . speRouter::$module . ', Block: ' . speRouter::$block);

/*if($url == 'index')
{
    # This is the home page
    # Initiate the home controller
    # and render the home view

    require_once __DIR__.'/Models/index_model.php';
    require_once __DIR__.'/Controllers/index_controller.php';
    require_once __DIR__.'/Views/index_view.php';

    $indexModel = New IndexModel();
    $indexController = New IndexController($indexModel);
    $indexView = New IndexView($indexController, $indexModel);

    print $indexView->index();

}
else
{
    # This is not home page
    # Initiate the appropriate controller
    # and render the required view

    //The first element should be a controller
    $requestedController = $url[0]; 

    # If a second part is added in the URI, 
    # it should be a method
    $requestedAction = isset($url[1])? $url[1] :'';

    # Remaining parts are considered as arguments of the method
    $requestedParams = array_slice($url, 2);

    # Check if controller exists. NB: 
    # You have to do that for the model and the view too
    $ctrlPath = __DIR__.'/Controllers/'.$requestedController.'_controller.php';

    
}*/