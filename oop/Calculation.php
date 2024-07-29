<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<?php
if(isset($_POST["btn"]))
{
	$number1 = $_POST["num1"];
	$number2 = $_POST["num2"];
	$radio = 	$_POST["arithematic"];	
	//echo $radio;
	if($radio == '+')
	{
		$result =  $number1+$number2;
	}
	else if($radio == '-')
	{
		$result = $number1-$number2;
	}
	else if($radio == '*')
	{
		$result = $number1*$number2;
	}
	else if($radio == '/')
	{
		$result = $number1/$number2;
	}
	else if($radio == '%')
	{
		$result = $number1%$number2;
	}
	else
	{
		$result = "Error";
	}
}

?>
<form method="post" action="Calculation.php">
<table class="table table-bordered">
		<tr>
        	<td><input type="text" placeholder="Enter 1st Number" name="num1" class="form-control"/></td>
         </tr>    
		 <tr>
        	<td><input type="text" placeholder="Enter 2nd Number" name="num2" class="form-control"/></td>
         </tr>	
         <tr>
        	<td>
            <input type="radio" name="arithematic" value="+"/><span>+</span>
            <input type="radio" name="arithematic" value="-"/><span>-</span>
            <input type="radio" name="arithematic" value="*"/><span>*</span>
            <input type="radio" name="arithematic" value="/"/><span>/</span>
            <input type="radio" name="arithematic" value="%"/><span>%</span>
            
            </td>
         </tr>
		<tr>
        	<td><input type="submit" value="Calculate" name="btn" class="btn btn-info"/></td>
         </tr>
         
         <tr>
         
         <td align="center"><?php  echo "Answer is : <b>" .@$result."</b>" ?></td>
         
         </tr>
</table>



</form>
</body>
</html>