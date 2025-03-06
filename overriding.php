<?php
// class A{
//     public $name = "some text";
// }

// class B extends A{
//     public $name = "another text";
// } //this process is known as property overriding class A property override the property of class B property

class A{
    public $name = "Mukesh";

    public function fun(){
        echo "my name is" . $this->name;
    }
}

class B extends A{
    public function fun(){
        echo "your name is" . $this->name;
    }
}//this process is known as method overriding class A method override the method of class B method

$obj = new B();
$obj->fun();
?>