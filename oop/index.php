<?php


class Employee
{
	//members /properties
	 public $emp_id;
	 public $emp_name;
	 public $emp_salary;
	
	
	function emp_info($emp_id,$emp_name,$emp_salary)
	{
 		
				echo "<h1>".$this->emp_id = $emp_id.
				$this->emp_name = $emp_name.
				$this->emp_salary = $emp_salary."</h1>";
		
		
	}
	
}
$emp = new Employee();
$emp->emp_info(1,'Faizan','25000');
$emp->emp_info(2,'Sameer','22000');


?>