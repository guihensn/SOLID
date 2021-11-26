<?php
    //Problem: Class 'Car' needs to know 'Radio' class. Car depends of radio.

    class Radio{
        private int $station = 0;

        public function nextStation(){
            $this->station++;
        }

        public function previousStation(){
            $this->station--;
        }
    }

    class Car{
        private string $model; 
        private int $year;
        private Radio $radio;

        public function __construct($model, $year){
            $this->model = $model;
            $this->year = $year;
            $this->radio = new Radio();
        }
    }
?>