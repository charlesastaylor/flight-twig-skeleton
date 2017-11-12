<?php

/*
    Initiate twig and register to Flight.
    Twig is configured by means of a callback.
*/
$loader = new \Twig_Loader_Filesystem(__DIR__.'/templates');
Flight::register(
    'view',
    'Twig_Environment',                      // Class registered
    array($loader, array('debug' => true)),  // Constructor arguments for class
    function($twig) {
        // Call back that takes instance as arugment
        // Included to show how to configure twig
        $twig->addExtension(new Twig_Extension_Debug()); 
    }
);
Flight::map('render', function($template, $data=array()) {
    Flight::view()->display($template, $data);
});

/*
    Flight Config
*/
Flight::set('flight.handle_errors', true); // example flight config