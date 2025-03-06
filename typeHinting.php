<?php
// function sum(int $v){ //type hinting
//     echo $v+1;
// }

// sum("th");

class hello{
    public function sayhello(){
        echo "hello everyone";
    }
}

class bye{
    public function saybye(){
        echo "bye everyone";
    }
}

function wow(hello $c){
    $c->sayhello();
}

$test = new hello();

wow($test);
?>

<!-- type hinting means restriction of argument the function is called type hinting -->