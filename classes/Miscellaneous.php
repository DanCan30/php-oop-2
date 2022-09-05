<?php 

    include_once __DIR__ . "/Product.php";

    class Miscellaneous extends Product {

        protected string $forWhichAnimal;
        protected bool $isForMedicalPurposes = false;
        protected string $material;
        protected string $dimension;

        public function __construct($_name, $_price, $_stock, $_animalType, $_medicalPurpose, $_material, $_dimension)
        {
            parent::__construct($_name, $_price, $_stock);
            $this->setAnimalType($_animalType);
            $this->isItForMedicalPurposes($_medicalPurpose);
            $this->setMaterial($_material);
            $this->setDimension($_dimension);
        }

        // Setters

        private function setAnimalType($animalType) {
            $this->forWhichAnimal = $animalType;
        }

        private function isItForMedicalPurposes($response) {
            $this->isForMedicalPurposes = $response;
        }

        private function setMaterial($_material) {
            $this->material = $_material;
        }

        private function setDimension($_dimension) {
            $this->dimension = strtoupper($_dimension);
        }


    }

?>