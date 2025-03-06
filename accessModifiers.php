<?php
class base{
    // public $name;
    protected $name;

    protected function __construct($n){
        $this->name=$n;
    }

    function show(){
        echo "Your name is " . $this->name . "<br>";
    }
}

class drived extends base{
    public function get(){
        echo "Your name is " . $this->name . "<br>";
    }
}

// $obj = new base("Mukesh");
$obj = new drived("Mukesh");


$obj->name="Suraj";

$obj->get();

?>

<!-- * there are three type of access modifiers 1 is public 2 is protected 3 is private  
* in protected modifiers drived class is access to base class variables but there is no access to outside class
* in private modifiers drived class cannot access to base class as well as no access to outside class -->
