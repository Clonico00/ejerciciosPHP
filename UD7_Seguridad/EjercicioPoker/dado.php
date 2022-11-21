<?php

namespace Dado;

class Dado
{
    /* se creará la clase Dado. Recuerda que las caras de un dado de pocker tienen las siguientes figuras : AS, K,Q,J, roja(ocho), negra(siete)


·        Crea un método llamado tira() que permita generar un valor aleatorio para el objeto al que se le aplique dicho método.

·        Crea un método llamado nombreFigura() que nos indique la figura ha salido en la última tirada.

·        El jugador puede tirar varias veces el cubilete. En ese caso se indicará el número de tiradas totales que ha realizado.

·        El jugador puede dejar de tirar en cualquier momento, después de la primera tirada, si está satisfecho con su mano.
    Cada vez que se pulse el boton "lanzar", se tirara un dado, los valores se guaradaran en la variable de session y se mostraran todas
las tiradas realizadas hasta que el jugador pulse el boton "rendirse*/

        private $valor;
        private $figura;

        public function __construct()
        {
            $this->valor = 0;
            $this->figura = "";
        }

        public function tira()
        {
            $this->valor = rand(1, 6);
            switch ($this->valor) {
                case 1:
                    $this->figura = "AS";
                    break;
                case 2:
                    $this->figura = "K";
                    break;
                case 3:
                    $this->figura = "Q";
                    break;
                case 4:
                    $this->figura = "J";
                    break;
                case 5:
                    $this->figura = "roja";
                    break;
                case 6:
                    $this->figura = "negra";
                    break;
            }
        }

        public function nombreFigura()
        {
            return $this->figura;
        }

        public function getValor()
        {
            return $this->valor;
        }


}