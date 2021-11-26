<?php
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
        public function move($displacement){
            $this->position[0] += $displacement[0];
            $this->position[1] += $displacement[1] * 2;
            $this->position[2] += $displacement[2] * 3;
        }

        public function breath($substance){
            if($substance == "H20"){
                echo 'This animal is drowning';
            }else{
                echo "This animal is breathing {$substance}";
            }
        }
    }
?>