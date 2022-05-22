<?php

namespace app\common;


abstract class Controller {

    protected $controller;
    protected $layout;
    protected $config;

    function __construct($config){
        $this->config = $config;
        if(!empty($config['layout']))$this->layout = $config['layout'];
        $this->controller = $this->classname();
    }

    public function render($view, $params = []) {
        if(!empty($params)) extract($params);
        $path = "app\\views\\";
        ob_start();
        require $path.$this->controller."\\{$view}.php";
        $content = ob_get_clean();
        require $path."layout\\{$this->layout}.php";
    }

    public function redirect($url) {
        header('location:'. $url);
        exit;
    }

    public function classname() {
        $path = get_class($this);
        $class = end(explode("\\", $path));
        return str_replace("Controller", "", $class);
    }

}