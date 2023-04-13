<?php
   class calculator{
    public $x;
    public $y;

 function add (){ 
    $sum=$this->x + $this->y;
    return $sum;
 }

 function subtract (){
    $subtract=$this->x - $this->y;
    return $subtract;
 }


 function multiply () {
    $multiply=$this->x * $this->y;
    return $multiply;
 }
}
 $calculator = new calculator();
 $calculator ->x=20;
 $calculator ->y=30;
 $result =$calculator-> add ();

 echo $result."<br>";
 

 $calculator = new calculator();
 $calculator ->x=20;
 $calculator ->y=30;
 $result =$calculator-> subtract ();

 echo $result .<"br">; 

 $calculator = new calculator();
 $calculator ->x=20;
 $calculator ->y=30;
 $result =$calculator-> multiply();

 echo $result;


?>