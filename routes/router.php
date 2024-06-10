<?php

use Bframe\Routing\Router;
use Bframe\HTTP\Response;
use Bframe\HTTP\compiler;
use Bframe\HTTP\Request;

/**
 *  This is where your declare routing URL and callbacks for your application
 * 
 * @param  Router  
 * 
 * You can either reurn a Response class in a callback , a controller and method, or a full Bframe component.
 * 
 * 
 * 
 * 
 */

 // Example usage within a routing setup
//  Router::get('/assets/{path}', function($path) {
//      $assetLoader = new compiler(__DIR__ . '/../Resources');
//      $assetLoader->serveAsset($path);
//  });

 Router::get('/test/{id}', function ($id)  {
     return  $id;
 } );


 Router::get('/', function(){

    return  Response::page('welcome', ['title' => 'BayScope']);
  });

