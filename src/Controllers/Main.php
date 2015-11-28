<?php

namespace Controllers;

class Main extends \Custom\Controller
{
    public function index()
    {
        echo $this->data->message;
    }

    public function test()
    {
        echo "Test page";
    }
}