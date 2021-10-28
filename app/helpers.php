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

function json($data, $status)
{
    header("Content-Type:application/json", true, $status);
    echo json_encode($data);
}
