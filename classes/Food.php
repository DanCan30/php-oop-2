<?php 

    include_once __DIR__ . "/Product.php";

    class Food extends Product {

        protected string $forWhichAnimal;
        protected string $expirationDate;
        protected float $weight;
        protected array $allergens = [];

        public function __construct($_name, $_price, $_stock, $_animal, $_expirationDate, $_weight, ...$_allergens)
        {
            parent::__construct($_name, $_price, $_stock);
            $this->setAnimalType($_animal);
            $this->setExpirationDate($_expirationDate);
            $this->setWeight($_weight);
            $this->addAllergens($_allergens);
            
        }

        // Setters

        private function setAnimalType($animalType) {
            $this->forWhichAnimal = $animalType;
        }

        private function setExpirationDate($_date) {
            $timestamp = strtotime($_date);
            $this->expirationDate = date("d-m-Y", $timestamp);
        }

        private function setWeight($_weight) {
            $this->weight = $_weight;
        }

        private function addAllergens($_allergens) {
            $this->allergens = array_merge($this->allergens, $_allergens);
        }

    }

?>