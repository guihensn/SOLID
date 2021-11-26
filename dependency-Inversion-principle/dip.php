<?php
    interface RadioInterface{
        public function nextStation();
        public function previousStation();
    }

    class Radio implements RadioInterface{
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
        private RadioInterface $radio;

        public function __construct($model, $year, RadioInterface $radio){
            $this->model = $model;
            $this->year = $year;
            $this->radio = $radio;
        }
    }
?>