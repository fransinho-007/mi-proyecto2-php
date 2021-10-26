<?php

function view($view)
{
    $objetoResponse = new \App\Http\Response($view);
    return $objetoResponse;
}

function viewPath($view)
{
    return __DIR__ . "/../views/$view.php";
}
