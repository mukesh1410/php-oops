<?php
interface parent1{
    function calc($a,$b); //we do have any to create access modifiers in methods 
}

interface parent2{
    function sub($c,$d);
}

class childClass implements parent1, parent2{
    public function calc($a,$b){
        echo $a+$b;
    }  

    public function sub($c,$d){
        echo $c-$d;
    }  
}

//$test = new parent1();  //any interface cant be create object 
$test = new childClass();  
$test->calc(10,20);
?>
<!-- 
* two or more classes inherit the property and method of another classes then we can use interface
* there are few rule to use interface 1 is we have dont use to create property in interface and 2 is cant make object of interface. 
* do not create access modifiers in methods and properties 
* we dont have create object 
* if the use interface then we can use drived class with the help of implements 
-->