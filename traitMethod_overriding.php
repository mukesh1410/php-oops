<?php
trait hello{
    private function sayhello(){
        echo "hello everyone hello trait";
    }
}

// trait hii{
//     public function sayhello(){
//         echo "hello everyone hii trait";
//     }
// }
 
class base{
    use hello{
        hello::sayhello as public say; 
    }
    // use hello, hii { //error in collision
    //     hello::sayhello insteadOf hii; //to overcome the collision of traits
    // }
    // public function sayhello(){
    //     echo "hello base";
    // }
}

// class child extends base{
//     use hello;
//     public function sayhello(){
//         echo "hello child";
//     }
// }

$test = new base();
$test->say();
?>