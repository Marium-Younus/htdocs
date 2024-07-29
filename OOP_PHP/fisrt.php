<?php
//-----------------------------Class and object in php
class calculation
{
    public $a,$b,$c;
    function add()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }

}
$cal = new calculation();
$cal->a = 10;
$cal->b = 30;
echo "Submission result is $cal->a + $cal->b  = " .$cal->add() . "<br>";
echo "Subtraction result is  $cal->a + $cal->b = " . $cal->sub();
?>