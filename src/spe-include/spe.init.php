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
 * Updated: February 26, 2021
*/

# Check if SPE is defined.
defined('SPE') or exit('You can not access this \'S PHP Engine (SPE)\' file directly.');

# Loading some important files
require(SPE_SYS . 'spe.db.php');
require(SPE_SYS . 'spe.router.php');
require(SPE_SYS . 'spe.app.php');

# Load the router
new speRouter();

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


