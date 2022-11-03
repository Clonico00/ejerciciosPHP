<?php

/*crear una clase coche con atributos marca, color, precio y los metodos getter y setter*/
class Coche
{
    private $marca;
    private $color;
    private $precio;

    public function __construct($marca, $color, $precio)
    {
        $this->marca = $marca;
        $this->color = $color;
        $this->precio = $precio;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
}