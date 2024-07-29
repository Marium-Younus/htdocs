<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>
    <label for="from">From: </label>
    <input type="text" name="from" id="from" />
    <label for="pass">Password: </label>
    <input type="password" name="pass" id="pass" />
  </p>
  <p>
    <label for="to">To: </label>
    <input type="text" name="to" id="to" />
  </p>
  <p>
    <label for="subject">Subject: </label>
    <input type="text" name="subject" id="subject" />
  </p>
  <p>
    <label for="msg">Message: </label>
    <textarea name="msg" id="msg" cols="45" rows="5"></textarea>
    <label for="fl">Add Attachment here</label>
    <input type="file" name="fl" id="fl" />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
 <!-- <p>
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" />
    <label for="email">Email: </label>
    <input type="text" name="email" id="email" />
  </p>
  <p>
    <label for="q">Qualification</label>
    <textarea name="q" id="q" cols="45" rows="5"></textarea>-->
    <input type="submit" name="snd" id="snd" value="Send Msg" />
  </p>
</form>
<?php
include("Mail.php");
//Multipurpose internet mail extensions
include("Mail/mime.php");

//Mail_mime
if(isset($_POST['snd']))
{
$to=$_POST['to'];
$pass=$_POST['pass'];
$from=$_POST['from'];
$subject=$_POST['subject'];
$msg=$_POST['msg'];
$host="smtp.gmail.com";
$port=587;
$header=array("to"=>$to,"from"=>$from,"subject"=>$subject);

$name=$_POST['name'];
$email=$_POST['email'];
$q=$_POST['q'];
$size=$_FILES['fl']['size']/1024;



/*$html='<table border=1 width="100%" height="100%">
<tr>
<td>Name: </td>
<td>'.$name.'</td>
</tr>
<tr>
<td>
To:
</td>
<td>'.$email.'
</td>
</tr>
<tr>
<td>
Your Qualifications:
</td>
<td>'.$q.'</td>
</tr>
<tr>
<td>Your Message:</td>
<td>'.$msg.'</td>
</tr>
</table>';*/

if($size>5000)
{
	
	
	echo "<p>Attachment file is too Large</p>";
	
	}
	else
	{
if(move_uploaded_file($_FILES['fl']['tmp_name'],"mail_attachment/".$_FILES['fl']['name']))
		{
			
$path="mail_attachment/".$_FILES['fl']['name'];
$mime=new Mail_mime();
$mime->setHTMLBody($html);
$mime->addAttachment($path);
$body=$mime->get();
$headers=$mime->headers($header);
$mail=Mail::factory("smtp",array("host"=>$host,"port"=>$port,"auth"=>true,"username"=>$from,"password"=>$pass));
			$send=$mail->send($to,$headers,$body);
			if(PEAR::isError($send))
			{
				echo "<p>".$send->getMessage()."</p>";
				
				
				}
				else
				{
					
					echo "Mail has been successfully sent";
					
					}
			
			
			
			
			}
			else
			{
				echo "<p>Attachment cannot be uploaded</p>";
				
				}
		
		
		
		
		}

}
?>

</body>
</html>