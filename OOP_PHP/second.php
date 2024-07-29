<?php
//-----------------------------PHP OOP Constructor Function
class person
{
    public $name;
    function __construct($n="No Name")
    {
        $this->name = $n;
    }
    function show()
    {
        echo "My name is : " . $this->name."<br>";

    }
}

$p1 = new person("Muhammad Ali");
$p2 = new person();
$p3 = new person("Sara Khan");
$p1->show();
$p2->show();
$p3->show();
?>