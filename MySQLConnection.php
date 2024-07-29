<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
echo "<h1>For Connection</h1>";
$connect= mysqli_connect("localhost","root","");
if(!$connect)
    {
	die("Error".mysql_error());	
	}
	else
	{
		echo "Connection established<br>";
	}
/*echo "<h1>All DataBase fetch</h1>";
$lisofdb= mysql_list_dbs($connect);

echo "<b>Th list of database are:<br></b>";
while($row= mysql_fetch_object($lisofdb))
{
	echo $row -> Database. "<br>";
	
	}*/
echo "<h1>My DataBase fetch</h1>";

$mydatabase= mysqli_select_db($connect,"mshop_db");
if(!$mydatabase)
{
	die("Error:".mysql_error());
	}
else
    {
	echo "Current database has been connect";	
	}

echo "<h1>Show table Name in Database</h1>";

$tablename= 'mysql';
$sql= "SHOW TABLES FROM $tablename";
$result= mysqli_query($connect,$sql);
while($row= mysqli_fetch_row($result))
    {	
        echo "Table: {$row[0]}<br>"; 	
	}
//========================================Another way to find a tables ==================
/*echo "<h1>Another WayShow table Name in Database</h1>";
$print= mysql_list_tables("joining",$connect);
while($row= mysql_fetch_row($print))
{
	echo "Tables $row[0]";
	
	}

echo "<h1>Find Number of Row In a table</h1>";
$connection = mysql_connect("localhost","root","");
$database= mysql_select_db("joining",$connection);
$sql= "Select * from student";
$result= mysql_query($sql,$database);
$row= mysql_num_rows($result);
echo "Number of rows in a student table is:".$row;

mysql_close($connection);
echo "the connection of the database has been closed";*/
?>

</body>
</html>