<?php
 class humanBeing{ 
    public $name;
    public $age;


function speak(){
     echo 'my name is '.$this->name;
}
 }
 $hari =new humanBeing();
 $hari->name="hari";
 $hari->age=25;
 $hari->speak();
 echo  (str('$hari'));


?>