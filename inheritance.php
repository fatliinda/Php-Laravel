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


           function __construct($wheels,$chairs){


                    $this->wheels=$wheels;
                    $this->nchairs=$chairs;
           }
            
            

    }
  $bus=  new Bus(4,5);
  echo $bus->wheels.',';
  echo $bus->nchairs;

?>