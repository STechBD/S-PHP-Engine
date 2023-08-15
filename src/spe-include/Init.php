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
 * Updated: August 15, 2023
 */


namespace STechBD\SPE;

use STechBD\SPE\System\App as speApp;
use STechBD\SPE\System\DB as speDB;
use STechBD\SPE\System\Router as speRouter;

/**
 * Check if SPE is defined to prevent unauthorized access to this file.
 * @since 1.0.0
 */
defined('SPE') or exit('You can not access this \'S PHP Engine (SPE)\' file directly.');

class Init
{
	public function __construct()
	{
		new speDB();
		new speRouter();
		new speApp();

		$controller = SPE_APP . speRouter::$app . SPE_DS . speRouter::$module . SPE_DS . 'controller' . SPE_DS . speRouter::$block . '.php';
		$model = SPE_APP . speRouter::$app . SPE_DS . speRouter::$module . SPE_DS . 'model' . SPE_DS . speRouter::$block . '.php';
		$template = SPE_APP . speRouter::$app . SPE_DS . speRouter::$module . SPE_DS . 'template' . SPE_DS . 'theme' . SPE_DS . speApp::$theme . SPE_DS . 'page' . SPE_DS . speRouter::$block . '.php';

		require_once($template);
	}
}


# Load the router


/*if(speApp::isActive())
{
    if (file_exists($ctrlPath))
    {
        require_once __DIR__.'/Models/'.$requestedController.'_model.php';
        require_once __DIR__.'/Controllers/'.$requestedController.'_controller.php';
        require_once __DIR__.'/Views/'.$requestedController.'_view.php';

        $modelName      = ucfirst($requestedController).'Model';
        $controllerName = ucfirst($requestedController).'Controller';
        $viewName       = ucfirst($requestedController).'View';

        $controllerObj  = new $controllerName( new $modelName );
        $viewObj        = new $viewName( $controllerObj, new $modelName );

        // If there is a method - Second parameter
        if ($requestedAction != '')
        {
            // then we call the method via the view
            // dynamic call of the view
            print $viewObj->$requestedAction($requestedParams);

        }

    }
    else
    {

        header('HTTP/1.1 404 Not Found');
        die('404 - The file - '.$ctrlPath.' - not found');
        //require the 404 controller and initiate it
        //Display its view
    }
}*/


