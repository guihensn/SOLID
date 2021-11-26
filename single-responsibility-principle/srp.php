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
    }

    class PersonView{
        public function __construct(
            private Person $person
        ){}

        public function showName(){
            echo "{$this->person->name}";
        }

        public function showHeight(){
            echo "{$this->person->height}";
        }
    }

    class PersonDAO{
        public function findPersonByID($id){
            //--Code--//
        }

        public function addNewPerson(Person $person){
             //--Code--//
        }
    }
?>