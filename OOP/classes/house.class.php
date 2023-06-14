<?php
    class House{
        public $place;
        public $number;




        public function __construct($p,$n){
            $this->place=$p;
            $this->number=$n;
        }


        public function getHouse(){
            return "house is in place:".$this->place."and has:".$this->number."of floor";
        }
    }




?>