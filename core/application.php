<?php

class Application
{
    public $load;

    static function start()
    {
        // default controller and action - this is hardcoded, we will move to config
        $controller_name = DEFAULT_CONTROLLER;
        $action_name = DEFAULT_INDEX;

        //prepare routes - this can be another router class for example

        include "core/route.php";
		
        // add prefix
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;
		
        // load file this controller class
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "controllers/".$controller_file;
		
        if(file_exists($controller_path))
        {
            include "controllers/".$controller_file;
        }
        else
        {
            // redirect to 404 page
            Application::ErrorPage404('no controller exists');
        }
		
        // create controller
        $controller = new $controller_name;
        $action = $action_name;
		
        if(method_exists($controller, $action))
        {
            // call action of controller
            $controller->$action($param);
        }
        else
        {
            // redirect to 404 page
            Application::ErrorPage404('no method exists');
        }
    }

    static function ErrorPage404($message)
    {
        $view = new View();
        $view->generate('404_view.php', 'template_view.php', array('message' => $message));
 		
		die();

        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}