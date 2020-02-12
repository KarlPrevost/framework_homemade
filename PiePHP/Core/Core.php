<?php

namespace Core;

use Router;

class Core
{
    public function run()
    {
        echo __CLASS__ . " [OK]" . PHP_EOL;
        // Router :: get(URI);
        require_once("src/routes.php");
        $route = \Router :: get(URI);
        //var_dump($route);
        // ['/add'] ------> Controller/UserController -----> 'add()';
        // $route : ['controller' => "UserController", 'action' => 'add']
        if ($route !== null) {
            $className =  "Controller\\". $route["controller"];
            // $className = "Controller\UserController";
            $controller = new $className;
            // $controller = new Controller\UserController;
            
            // $route["action"] === "add"
            $controller->{$route["action"]}();
            // $controller->add();
        } else {
            echo "ERROR 404 : Cannot get " . URI;
        }
    }
    public function indexAction()
    {
        
    }
}
