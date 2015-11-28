<?php

namespace Controllers;

class Api extends \Custom\Controller
{
    public function index()
    {
        echo json_encode(["res" => "success"]);
    }
}