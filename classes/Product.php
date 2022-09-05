<?php

    class Product {

        protected string $name;
        protected float $price;
        protected int $stock;

        public function __construct($_name, $_price, $_stock) {
            $this->setProductName($_name);
            $this->setProductPrice($_price);
            $this->setProductStock($_stock);
        }

        // Setter

        private function setProductName($_name) {
            $this->name = ucwords($_name);
        }
        
        private function setProductPrice($_price) {
            $this->price = number_format($_price, 2);
        }
        
        private function setProductStock($_stock) {
            $this->stock = $_stock;
        }
    }

?>