<?php 
    class Person{
        public function __construct(
            private int $id,
            private string $name,
            private float $height,
            private DateTime $birthDay,
        ){}

        public function setName($name){ 
            $this->name = $name;
        }
        public function setHeight($height){
             $this->height = $height;
        }
        
        public function showName(){
            echo "{$this->name}";
        }

        public function showHeight(){
            echo "{$this->height}";
        }

        public function findPersonByID($id){
            //--Code--//
        }

        public function addNewPerson(Person $person){
             //--Code--//
        }
    }
?>