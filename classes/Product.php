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

        private function setProductName($name) {
            $this->name = ucwords($name);
        }
        
        private function setProductPrice($price) {
            $this->price = number_format($price, 2);
        }
        
        private function setProductStock($stock) {
            if(is_int($stock)) {
                $this->stock = $stock;
            }
        }
    }

?>