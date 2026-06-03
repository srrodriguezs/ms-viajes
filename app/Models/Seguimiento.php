<?php
namespace app\Models;

use app\Config\Conexion;

class Seguimiento extends Model
{
    protected $id = 0;
    protected $programacion_viaje_id = 0;
    protected $fecha = null;
    protected $hora = null;
    protected $estado = 'programado';
    protected $novedad = null;

    public function __construct($data = [])
    {
        parent::__construct();
        foreach ($data as $key => $value) {
            $this->set($key, $value);
        }
    }
}