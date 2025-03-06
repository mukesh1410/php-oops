<?php
trait hello{
    public function sayhello(){
        echo "hello everyone";
    }
}

class base{
    use hello;
}

class anotherbase{
    use hello;
}

$test = new anotherbase();
$test->sayhello();
?>

<!-- if the 3 classes to create a comman function in each class then we can use createclass base{
 } a comman function with the help of traits -->