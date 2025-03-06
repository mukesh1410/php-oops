<?php
abstract class A{
    // protected $name;
    abstract protected function show($a,$b);
}

class B extends A{
   public function show($c, $d){
    echo $c+$d;
   }
}

$test = new B();
$test->show(25,25);
?>

<!-- * in abstract class we dont have any create object we can use abstract class 
     * to create anstract class they have 2 condition fullfill 1 is abstract method created and 2 is abstract inherit class -->
