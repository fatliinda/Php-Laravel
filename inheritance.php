<?php


class Car{

    public $wheels = 4;



    function __construct($wheels){


        $this->wheels=$wheels;
    }
}
        
    $motor=new Car(2);
    class Bus extends Car{


        public $nchairs=20;
        public $windows;


        function __construct($wheels,$chairs,$wind){


                 $this->wheels=$wheels;
                 $this->nchairs=$chairs;
                 $this->windows=$wind;
        }
         
         

 }
$bus=  new Bus(4,5,24);
echo $bus->wheels.',';
echo $bus->nchairs;




   
?>