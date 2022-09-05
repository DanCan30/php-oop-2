<?php 

    include_once __DIR__ . "/Product.php";

    class Toy extends Product {

        protected string $material;
        protected string $dimension;
        protected bool $waterproof = false;

        public function __construct($_name, $_price, $_stock, $_material, $_dimension, $_is_waterproof)
        {
            parent::__construct($_name, $_price, $_stock);
            $this->setMaterial($_material);
            $this->setDimension($_dimension);
            $this->isItWaterproof($_is_waterproof);            
        }

        // Setters

        private function setMaterial($_material) {
            $this->material = $_material;
        }

        private function setDimension($_dimension) {
            $this->dimension = strtoupper($_dimension);
        }

        private function isItWaterproof($response) {
            $this->waterproof = $response;
        }

    }

?>