<?php
namespace app\Config;

use mysqli;

class Conexion
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "ms-viajes";
    private $connection = null;

    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function execute($sql, $params = null)
    {
        $stm = $this->connection->prepare($sql);
        if ($params) {
            $stm->bind_params(...$params);
        }
        $stm->execute();
        return $stm->get_result();
    }

    public function close()
    {
        $this->connection->close();
    }
}