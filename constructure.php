<?php
class person{
    public $first_name;
    public $last_name;

    function __construct($first, $last){
        $this->first_name = $first;
        $this->last_name = $last;
    }
    
    // function show(){
    //     echo $this->first_name . " " . $this->last_name;
    // }
}

$obj = new person("Shivam","Kumar");

// $obj->first_name = "Mukesh";
// $obj->last_name = "Srivastav";

$obj->show();
?>
<!-- I entered lots of property in access modifiers then put the value in the property for own case then create lots of line's objects then we can use constructure -->