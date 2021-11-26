<?php
    //Problem: Child class need to implements methods that doesn´t make sense for this class.
    
    Interface Person{
        public function __construct(string $name, int $age);
        public function eat(string $food); 
        public function setJob(string $job);
        public function getJob();
    }
    
    class Child implements Person{
        private $name;
        private $age;

        public function __construct(string $name, int $age){
            $this->name = $name;
            $this->age = $age;
        }

        public function eat(string $food)
        {
            echo "{$this->name} is eating {$food}";
        }

        public function setJob(string $job){

        }

        public function getJob()
        {

        }
    }
?>