<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    //Return request uri string
    private function getURI() {
        if(!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();
        foreach ($this->routes as $uriPattern => $path) {
            if(preg_match("~$uriPattern~", $uri)) {
//                echo "<br/>Where search - " . $uri;
//                echo "<br/>What is search - " . $uriPattern;
//                echo "<br/>Who is handling - " . $path;

                $internalRoute = preg_replace("~$uriPattern~" , $path, $uri);
//                echo "<br/>" . $internalRoute;
                $segments = explode('/', $internalRoute);
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action' . ucfirst(array_shift($segments));
                $parameters = $segments;

                //Подключение файла класс контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                if(file_exists($controllerFile)) {
                    include_once($controllerFile);
                }
//                echo"<pre>";
//                print_r($parameters);
//                echo "<br/>" . $controllerFile;
                //Create obj and call method
                $controllerObject = new $controllerName;

//                $result = $controllerObject->$actionName($parameters);
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if($result != null) {
                    break;
                }
            }
        }
    }
}