<?php 

    include_once __DIR__ . "/Product.php";

    class Miscellaneous extends Product {

        protected string $forWhichAnimal;
        protected bool $isForMedicalPurposes = false;
        protected string $material;
        protected string $dimension;
        protected bool $available = true;

        public function __construct($_name, $_price, $_stock, $_animalType, $_medicalPurpose, $_material, $_dimension, $_startPeriod = null, $_endPeriod = null)
        {
            parent::__construct($_name, $_price, $_stock);
            $this->setAnimalType($_animalType);
            $this->isItForMedicalPurposes($_medicalPurpose);
            $this->setMaterial($_material);
            $this->setDimension($_dimension);
            $this->limitedTimeAvailability($_startPeriod, $_endPeriod);
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

        private function limitedTimeAvailability($startPeriod, $endPeriod) {
            
            $currentMonth = date("m");

            if (is_null($startPeriod) || is_null($endPeriod)) {
                $this->available = true;
            } else {
                if($startPeriod < $endPeriod) {

                    if( ($currentMonth > $startPeriod) && ($currentMonth < $endPeriod) ) {
                        $this->available = true;
                    } else {
                        $this->available = false;
                    }

                } else {

                    if( ($currentMonth > $startPeriod) && ($currentMonth > $endPeriod) ) {
                        $this->available = true;
                    } else {
                        $this->available = false;
                    }
                }

            }

        }
    }

?>