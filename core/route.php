<?php

$routes = rtrim($_SERVER['REQUEST_URI'], "/");
$routes = explode('/', $routes);

// get controller name
if ( !empty($routes[1]) ) // trebuie schimbat in 1
{
    $controller_name = $routes[1];
}

// get name action
if ( !empty($routes[2]) )  // trebuie schimbat in 2
{
    $action_name = $routes[2];
}

//if params
$param = null;

if ( !empty($routes[3]) )   // trebuie schimbat in 3
{
    $param = $routes[3];
}


