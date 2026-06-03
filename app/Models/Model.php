<?php
namespace app\Models;

use app\Config\Conexion;

abstract class Model
{
    public function get($prop)
    {
        return $this->$prop;
    }

    public function set($prop, $value)
    {
        $this->$prop = $value;
    }
}