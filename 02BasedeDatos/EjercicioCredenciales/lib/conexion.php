<?php
class Conexion
{
    //atributos de la clase
    private $host;
    private $usuario;
    private $password;
    private $baseDatos;
    private $charset;
    private $conexion;
    //constructor de la clase
    public function __construct($host,$usuario,$password,$baseDatos)
    {
        $this->host = $host;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->baseDatos = $baseDatos;
        $this->charset = "utf8";
        $this->conexion = null;
    }
    //método para conectar a la base de datos
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
    //método para desconectar de la base de datos
    public function desconectar()
    {
        $this->conexion = null;
    }
}
