<?php 

use Bframe\Routing\Router;
use Bframe\HTTP\compiler;
use Bframe\HTTP\Response ;
use Bframe\HTTP\Request;



/**
 * 
 * Register the autoloader
 * 
 * 
 */

require __DIR__.'/../vendor/autoload.php';


 





/**
 * Dispatch the application router
 * 
 */
Router::dispatch();