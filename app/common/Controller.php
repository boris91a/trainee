<?php

namespace app\common;

abstract class Controller {

    protected $controller;
    protected $layout;

    function __construct($layout = "Main"){
        $this->layout = $layout;
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

    public function redirect($view, $params= []) {
        $this->render($view, $params);
    }

    public function classname() {
        $path = get_class($this);
        $class = end(explode("\\", $path));
        return str_replace("Controller", "", $class);
    }

}