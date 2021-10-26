<?php

namespace App\Http;

class Response
{
    public $view;

    function __construct($view)
    {
        $this->view = $view;
    }

    function getView()
    {
        return $this->view;
    }

    function send()
    {
        $miView = $this->getView();

        $content = file_get_contents(viewPath($miView));

        require viewPath('layout');
    }
}
