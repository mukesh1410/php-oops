<?php
require 'products.php';
require 'testing.php';

function wow(){
    echo "wow from index file.<br>";
}

use pro as p;  //to short the namespace

$obj = new p\product();
// $obj = new pro\product();
// $obj = new test\product();
// $obj1 = new pro\product();

pro\wow();
?>

<!-- * namespace is a method to create two or more class and functions in a same page with the help of namespace  -->