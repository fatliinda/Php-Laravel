<?php

    class Person{
                    public $name;
                    public $surname;
                    public $age;

                    public function __construct($name,$surname,$age){

                            $this->name=$name;
                            $this->surname=$surname;
                            $this->age=$age;

                    }


                    public function setName($name){

                            $this->name=$name;

                    }
                    
                        
                    



    }

$me= new Person("Fatlinda","Brahaj",19);
$fatmirja=new Person("Fatmirja","braha",21);
$fatmirja->setName("Fatma");
echo $fatmirja->name;
?>