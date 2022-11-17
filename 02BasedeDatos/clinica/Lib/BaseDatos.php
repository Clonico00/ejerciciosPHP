<?php
namespace Lib;
use PDO;
use PDOException;

require_once 'config\config.php';

class BaseDatos
{
    private $host;
    private $usuario;
    private $password;
    private $baseDatos;
    private $charset;

    private PDO $conexion;
    private mixed $resultado;

    public function __construct()
    {
        $this->host = SERVIDOR;
        $this->usuario = USUARIO;
        $this->password = PASS;
        $this->baseDatos = BASE_DATOS;
        $this->charset = "utf8";
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
    public function consulta($consulta){
        $this->resultado = $this->conexion->query($consulta);
        return $this->resultado;
    }
    public function prepare($sql)
    {
        return $this->conexion->prepare($sql);
    }
    public function extraer_registro(): mixed
    {
        return ($fila = $this->resultado->fetch(PDO::FETCH_ASSOC)) ? $fila : false;
    }
    public function extraer_todos(): mixed
    {
        return ($this->resultado->fetchAll(PDO::FETCH_ASSOC));
    }
    public function filas_afectadas(): int
    {
        return $this->resultado->rowCount();
    }
    public function ultimo_id(): int
    {
        return $this->conexion->lastInsertId();
    }




}
