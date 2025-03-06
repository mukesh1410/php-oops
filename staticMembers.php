<?php
class base{
    public static $name = "Mukesh";

    public static function show(){
        echo self::$name;//implement the ststic property
    }
    
    public function __construct($n){
        // self::show();
        self::$name=$n;
    }
}     
//echo base::$name; //we can use static member function then dont use of object
//base::show();
$test = new base("pawan");
$test->show();
?>

<!-- * if the create class we can create static properties and methods automatically created static class  -->