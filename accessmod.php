<?php


class Car{

    public $wheels = 4;
    Protected $seat=5;
    Private $windows=4;
    static $door=4;
    
function num_seats(){
    return $this->seat;
}

    

}

class Bus extends Car{
    


}

$bus=new Bus(5,5,5);
echo $bus->wheels."<br>";

echo $bus->num_seats()."<br>";
echo Car::$door.'doors';
   
?>