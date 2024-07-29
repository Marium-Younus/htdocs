<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mail in Php</title>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
<?php
include("Mail.php");
if(isset($_POST['mail']))
{
$from=$_POST['from'];
$pass=$_POST['pass'];
$to=$_POST['to'];
$sub=$_POST['subject'];
$body=$_POST['body'];

$host="smtp.gmail.com";
$port=587;

$header = array("to"=>$to,"from"=>$from,"subject"=>$sub);

$mail=Mail::factory("smtp",array("host"=>$host,"port"=>$port,"auth"=>true,"username"=>$from,"password"=>$pass));

$send=$mail->send($to,$header,$body);
	if(PEAR::IsError($send))
	{
	echo "<p>".$send->getMessage()."</p>";
	}
	else
	{
		echo "Mail sent Successfully";
	}
}
?>
<body>

<form  method="post" action="">
<div class="container">
<table class="table table-borderless">
    <tr>
    <td> <label for="from">From:</label></td>
    <td> <input class="form-control" type="text" name="from"  placeholder="From" /></td>
    </tr>
    
	<tr>
    <td> <label for="password">Password:</label></td>
    <td>  <input  class="form-control" type="password" name="pass"  placeholder="Password" /></td>
    </tr>
    
	<tr>
    <td> <label for="to">To:</label></td>
    <td> <input  class="form-control" type="text" name="to"  placeholder="To"/></td>
    </tr>
    
	<tr><td>  <label for="subject">Subject</label></td>
    <td> <input type="text"  class="form-control" name="subject"   placeholder="Subject"/></td>
    </tr>
    
	<tr>
    <td> <label for="body">Enter Your Message here</label></td>
    <td><textarea  class="form-control" name="body" cols="45" rows="5" placeholder="Message"></textarea></td>
    </tr>
    
	<tr>
    <td></td>
    <td><input type="submit" name="mail"  value="Send Mail" class="btn btn-info" /></td>
    </tr>
</table>
</div>
</form>



</body>

<?php



?>


</html>