<?php

namespace App\pages;

use Bframe\Page\Twig\Twigloader;

/**
 * 
 * This class] will load your twig  templates and render to the browser
 * 
 */

class  Twig extends Twigloader
{


protected static function class($page , $data)
{
    /**
     * this will boot   the twig templates  and enviroment
     */
    Twig::boot();


    /**
     * manipulate the enviroment before remdering to the browser if you wish
     * you could add helper functions to be used on your templates .below is an example of a function that loads your assets when used in a page
     * @param string $name
     * @param  callback  $function
     * 
     */

    Twig::addFunction('asset',  function ($assetPath) {

        return '/assets/' . ltrim($assetPath, '/');
     });

     Twig::addFunction('storage',  function ($storagePath) {

        return '/storage/' . ltrim($storagePath, '/');
     });


    

      








     /**
      * render the twig page to the browser
      */

    Twig::render($page,$data);
}

    

    
}