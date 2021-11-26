<?php
    //Problem: We cannot replace 'dog' with the class 'animal'.
    
    class Animal{
        public function __construct(
            private string $name,
            private $position = [0,0,0],
            private float $height,
            private float $weigth,
            private int $age
        ){}

        public function eat($foodWeigth){
            $this->weigth += $foodWeigth;
            return $this->weigth;
        }

        public function move($displacement){
            $this->position[0] += $displacement[0];
            $this->position[1] += $displacement[1];
            $this->position[2] += $displacement[3];
        }

        public function breath($substance){
            echo "This animal is breathing {$substance}";
        }
    }

    class Dog extends Animal{
        //This method doesn´t do nothing and doesn´t return nothing.
        public function eat($foodWeigth){

        }

        //This method is receiving an integer, diferent from 'Animal' method, that receives an array.
        public function move($displacement){
            $this->position[0] += $displacement;
            $this->position[1] += $displacement * 2;
            $this->position[2] += $displacement * 3;
        }

        //This method is twrowing  an exception that doesn´t exist in the 'Animal breath' method.
        public function breath($substance){
            if($substance == "H20"){
                throw new Exception('Dogs can´t breath under water');
            }else{
                echo "This animal is breathing {$substance}";
            }
        }
    }
?>