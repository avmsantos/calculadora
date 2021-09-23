<?php

    class Calculadora
    {
        private $total;
        private $numero1;
        private $numero2;

        function __construct()
        {
            $this->total = 0;
            $this->numero1 = 0;
            $this->numero2 = 0;
        }

        public function setNumero1($numero1)
        {
            $this->numero1 = $numero1;
        }
        public function setNumero2($numero2)
        {
            $this->numero2 = $numero2;
        }

        public function Somar()
        {
            $this->total = $this->numero1 + $this->numero2;
        }
        
        public function Subtrair()
        {
            $this->total = $this->numero1 - $this->numero2;
        }
        public function Dividir()
        {
            $this->total = $this->numero1 / $this->numero2;
        }
        public function Multiplicar()
        {
            $this->total = $this->numero1 * $this->numero2;
        }

        public function getTotal()
        {
            return $this->total;
        }
    }

?>