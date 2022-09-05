<?php

    class Customer {

        protected string $name;
        protected string $surname;
        protected string $cardNumber;
        protected string $cardExpirationDate;
        protected bool $isCardValid;
        protected string $message = "Card validation done!";
        protected string $email;
        protected string $phoneNumber;
        protected string $address;
        protected bool $isRegistered;
        protected int $discount = 0;
        protected array $animalsOwned = [];

        public function __construct($_name, $_surname, $_cardNumber, $_cardExpirationDate) {
            $this->setName($_name);
            $this->setSurname($_surname);
            $this->setCardNumber($_cardNumber);
            $this->setCardExpirationDate($_cardExpirationDate);
            $this->isCardValid();
            // $this->isRegistered();
        }

        // Setter

        private function setName($_name) {
            $this->name = ucwords($_name);
        }
        
        private function setSurname($_surname) {
            $this->surname = ucwords($_surname);
        }

        private function setCardNumber($_cardNumber) {

            if(strlen($_cardNumber) === 10) {
                $this->cardNumber = $_cardNumber;
            } else {
                $this->cardNumber = "Card not valid";
            }
            
        }

        private function setCardExpirationDate($_date) {
            $timestamp = strtotime($_date);
            $this->cardExpirationDate = date("d-m-Y", $timestamp);
        }
        
        // Validations
        private function isCardValid() {
            if(strtotime("now") < strtotime($this->cardExpirationDate)) {
                $this->isCardValid = true;
            } else {
                $this->isCardValid = false;
                $this->message = "Card expired, use another card or contact Your bank institute.";
            }
        }

        public function setEmail($_email) {
            if(strpos($_email, "@") && strpos($_email, ".")) {
                $this->email = $_email;
            }
        }
        
        public function setPhoneNumber($_phoneNumber) {
            if(strlen($_phoneNumber) === 10) {
                $this->phoneNumber = $_phoneNumber;
            }
        }
        
        public function setAddress($_address) {
            $this->address = $_address;
        }

        public function isRegistered() {
            if(!empty($this->email) && !empty($this->phoneNumber) && !empty($this->address)) {
                $this->isRegistered = true;
                $this->discount = 20;
            } else {
                $this->isRegistered = false;
            }
        }
        
        
    }

?>