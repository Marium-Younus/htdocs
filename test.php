<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST["btn"]))
{

$day1 = date_create($_POST["d1"]); 
$day2 =  date_create($_POST["d2"]);
  
// Calculates the difference between DateTime objects 
$interval = date_diff($day1, $day2); 
  $total = 500 * $interval->format('%a');

// Display the result
echo $interval->format('Difference between two dates: %a days <p>');
echo "Total Cost is ".$total;


}
?>
<form method="post">

        <label for="shootdate">Desired Date:</label>
        <input required type="text" name="d1"  value="<?php echo date('Y-m-d');  ?>" />
        <input required type="date" name="d2"  min="<?php echo date('Y-m-d'); ?>"/>
        <input type="submit" value="click" name="btn"/>
  </form>
</body>
</html>