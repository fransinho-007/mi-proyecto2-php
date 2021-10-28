<?php

namespace App\Http;

class Request
{
    public $url = [];
    public $controller;
    public $method;
    public $param;

    function __construct()
    {
        $this->url = explode('/', $_SERVER['REQUEST_URI']);
        $this->setController();
        $this->setMethod();
    }

    function setController()
    {
        // ¿pregunta si en la casilla 3 del array url esta vacia?
        if (empty($this->url[1])) {
            // estableser el controllador por defecto
            $this->controller = 'home';
        } else {
            // estableser el controlador solicitado por url
            $this->controller = $this->url[1];
        }
    }

    function getController()
    {
        $miController = strtolower($this->controller);
        $miController = ucfirst($miController);
        return "App\Http\Controllers\\{$miController}Controller";
    }

    function setMethod()
    {
        if (empty($this->url[2])) {
            $this->method = 'index';
        } else {
            $this->method = $this->url[2];
        }
    }

    function getMethod()
    {
        return $this->method;
    }

    function send()
    {
        $miController = $this->getController();
        $miMethod = $this->getMethod();

        $objetoResponse = call_user_func([
            new $miController,
            $miMethod
        ]);

        $objetoResponse->send();
    }
}
