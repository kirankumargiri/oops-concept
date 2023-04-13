<?php 
 $x=0;
function hello(){
    global $x;
    $x=2;
    echo $x;
}
function hi(){
    global $x;
    echo $x;
}
hello();
hi();
?>