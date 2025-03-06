<?php
class personal{
    public function first(){
        echo "this is a first function";
        return $this;
    }
    public function second(){
        echo "this is a second function";
        return $this;
    }
    public function third(){
        echo "this is a third function";
    }
}

$test = new personal();

$test->first()->second()->third(); //this is a chaining method
?>

