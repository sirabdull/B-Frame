<?php

return [

/**
 * templating engine configuration 
 * This frameworks supports twig templating engine and the usual php templating .
 * we are using twig by default  you can set the 'use' key to false to use the normal php templating i.e <?php echo $title ?>
 * set to true(default) to use twig engine I.e {% block title}  {% endblock %}
 * 
 */
   'twig' =>  
            [
                //determine if you want to use twig engine
                'use' => true,
                //determine caching of pages for faster loading time  HINT(only enable this in production)
                'cache' => false,
                // debug for development
                'debug' => true,
                // use strict variables this will throw an exception if the variable you're including in a page is not found
                'strict_variables' => true


            ],

    

  




];