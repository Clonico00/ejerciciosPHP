<?php

require_once 'config/config.php';

class Conexion
{
    private $host;
    private $usuario;
    private $password;
    private $baseDatos;
    private $charset;
    private $conexion;

    public function __construct()
    {
        $this->host = SERVIDOR;
        $this->usuario = USUARIO;
        $this->password = PASS;
        $this->baseDatos = BASE_DATOS;
        $this->charset = "utf8";
        $this->conexion = null;
    }

    public function conectar()
    {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->baseDatos . ";charset=" . $this->charset;
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $this->conexion = new PDO($dsn, $this->usuario, $this->password, $opciones);
            return $this->conexion;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function desconectar()
    {
        $this->conexion = null;
    }
}
