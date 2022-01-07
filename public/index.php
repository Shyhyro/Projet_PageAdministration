<?php

use Bosqu\ProjetPageAdministration\Controller\UserController;

require_once "../vendor/autoload.php";
require '../Config/Config.php';

if(isset($_GET['controller'])) {

    $controller = ucfirst(filter_var($_GET['controller'], FILTER_SANITIZE_STRING)) . "Controller";
    $controller = "Bosqu\\ProjetPageAdministration\\Controller\\" . $controller;

    if(class_exists($controller)) {
        $controller = new $controller();

        if(isset($_GET['action'])) {
            $action = filter_var($_GET['action'], FILTER_SANITIZE_STRING);

            try {
                $reflexion =  new ReflectionClass($controller);

                if($reflexion->hasMethod($action)) {
                    $controller->$action();
                }
                else {
                    $controller->home();
                }
            }
            catch (ReflectionException $e) {
                echo $e->getMessage();
            };
        }
        else {
            (new $controller)->home();
        }
    }
    else {
        (new UserController)->home();
    }
}
else {
    (new UserController)->home();
}