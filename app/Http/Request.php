<?php

namespace App\Http;

class Request
{
    public $url = [];
    public $controller;
    public $method;

    function __construct()
    {
        $this->url = explode('/', $_SERVER['REQUEST_URI']);
        $this->setController();
        $this->setMethod();
    }

    function setController()
    {
        $this->controller = $this->url[1];
    }

    function getController()
    {
        return $this->controller;
    }

    function setMethod()
    {
        $this->method = $this->url[2];
    }

    function getMethod()
    {
        return $this->method;
    }

    function send()
    {
        echo "<p>en el controlador [$this->controller] llamar al metodo [$this->method] </p>";
    }
}
