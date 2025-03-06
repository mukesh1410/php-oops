<?php
class base{
    protected static $name = "Mukesh";
    public function show(){
        // echo self::$name;
        echo static::$name;  //late static binding
    }
}

class derived extends base{
    protected static $name = "Suraj";
}

// $test = new base();
$test = new derived();

$test->show();
?>