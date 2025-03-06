<?php
class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }

    function info(){
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name: " . $this->name. "</br>";
        echo "Employee Age: " . $this->age. "</br>";
        echo "Employee Salary: " . $this->salary. "</br>";
    }
}

class manager extends employee{
    public $ta = 1000;
    public $totalSalary;

    function info(){
        $this->totalSalary = $this->salary + $this->ta;

        echo "<h3>Manager Profile</h3>";
        echo "Employee Name: " . $this->name. "</br>";
        echo "Employee Age: " . $this->age. "</br>";
        echo "Employee Salary: " . $this->totalSalary. "</br>";
    }
}

$e1 = new manager("Mukesh",24,2500);
$e2 = new employee("Ravi",20,2000);

$e1->info();
$e2->info();
?>

<!-- there are two class first class inherit the property and method of second class then we can use inheritance  -->