<?php

namespace app\common;

class App {

    protected $routes = [];
    protected $params = [];
    protected $config = [];

    function __construct($config = []){
       $routes =  require_once $config['routes'];
       foreach ($routes as $route => $params){
           $this->loadRoute($route, $params);
       }
       $this->config = $config;
    }

    public  function loadRoute($route, $params){
        $route = "@^{$route}$@";
        $this->routes[$route] = $params;
    }

    public function router(){
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params)
            if(preg_match($route, $url)){
                $this->params = $params;
                return true;
            }
        return false;
    }

    public function run(){
        //session_unset();
        if($this->router()){
            $path = "app\controllers\\".$this->params['controller']."Controller";
            if(class_exists($path)){
                $action = "action".$this->params['action'];
                if(method_exists($path, $action)){
                    $controller = new $path($this->config);
                    $controller->$action();
                } else {
                    echo "Action not found";
                }
            } else {
                echo "Class not found";
            }
        } else {
            // Route not found
        }
    }

}
