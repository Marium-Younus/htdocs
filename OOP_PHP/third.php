<?php 
//---------------------------PHP OOP Inheritance
class employee  //-------------base class
{
    public $name;
    public $age;
    public $salary;
    // function __construct()
    // {
    //     echo "<h2>Employee constructor</h2>";
    // }
    function __construct($n,$a,$s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    function info()
    {
        echo "<h1>Employee Information</h1>";
        echo "Name is : ".$this->name."<br>";
        echo "Age is : ".$this->age."<br>";
        echo "Salary is : ".$this->salary."<br>";
    }
}

class manager extends employee //derived class
{
    public $ta = 1000;
    public $phone = 500;
    public $totalSalary;
    function info()
    {
        $this->totalSalary = $this->salary + $this->ta + $this->phone;
        echo "<h1>Manager Profile</h1>";
        echo "Name is : ".$this->name."<br>";
        echo "Age is : ".$this->age."<br>";
        echo "Salary is : ".$this->totalSalary."<br>";

    }

        // function __construct()
        // {
        //     echo "<h2>Manager constructor</h2>";

        // }

}
$e1 = new employee("Sir harris",22,25000);
$e1->info();

$e2 = new manager("Miss Sara",30,30000);
$e2->info();

$e3  = new manager("Miss Sadia",29,35000);
$e3->info();
?>