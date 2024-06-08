<?php

use Bframe\Routing\Router;
use Bframe\HTTP\Response;
use Bframe\HTTP\Request;

/**
 *  This is where your declare routing URL and callbacks for your application
 * 
 * @param  Router  
 * 
 * You can either reurn a Response class in a callback , a controller and method, or a full Bframe component.
 * 
 * @return Response 
 * 
 * 
 */


     Router::get('/', function(){

                return  Response::page('welcome');
        });