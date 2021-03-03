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

# Directory Separator
const SPE_DS = DIRECTORY_SEPARATOR;

# SPE Root Directory
const SPE_DIR = __DIR__ . SPE_DS;

# SPE Other Directories
const SPE_APP = SPE_DIR . 'spe-app' . SPE_DS;
const SPE_FILE = SPE_DIR . 'spe-file' . SPE_DS;
const SPE_INC = SPE_DIR . 'spe-include' . SPE_DS;
const SPE_INS = SPE_DIR . 'spe-install' . SPE_DS;
const SPE_SYS = SPE_INC . 'system' . SPE_DS;
const SPE_CORE = SPE_INC . 'core' . SPE_DS;

# SPE Start Time
define('SPE_START_TIME', array_sum(explode(' ', microtime())));

# Requires SPE Initialization
require(SPE_INC . 'spe.init.php');

# Print the output
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