<?php
class calculation{
    public $a, $b, $c;  // this is a property a b and c of the class, public is a access modifier of the class variables a b c use in the class and out the class.
    
    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
}

$c1 = new calculation(); //this is a object of the class
$c1->a = 20;
$c1->b = 25;

echo $c1->sum();
?>
<!-- There are two part of the class 1 is properties and 2 is methods, properties is basically variables to store in the class and methods is function to create in the class -->