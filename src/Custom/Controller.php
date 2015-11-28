<?php

namespace Custom;

class Controller extends \Slim\Slim
{
    protected $data;

    public function __construct()
    {
        $config = require("../src/config.php");
        if (isset($config['model'])) {
            $this->data = $config['model'];
        }
        parent::__construct($config);
    }
}