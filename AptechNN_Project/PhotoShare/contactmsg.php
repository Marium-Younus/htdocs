<?php 

session_start();
require_once "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhotoShare | Answer Feedback</title>
    <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="scrollbar.css" rel="stylesheet" type="text/css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
    <style>
       a {
            color:black;
        }
  /* Sidebar */
#sidebar-wrapper{
  z-index:1;
  position: fixed;
  width:0;
  height: 100%;

  overflow-y:hidden;
background-image: url('WebsiteImages/panel.jpg');
box-shadow: inset 0 0 0 1000px rgba(0,0,0,0.2);
background-size: cover;
background-repeat: no-repeat;
	transition:all .5s;
	display:flex;
	align-items:center;
}

/* Main Content */
#page-content-wrapper{
  width: 100%;	
  position: absolute;
  padding:15px;
	transition:all .5s;

}

#menu-toggle{
	transition:all .3s;
	font-size:2em;
}


/* Change the width of the sidebar to display it*/
#wrapper.menuDisplayed #sidebar-wrapper{
  width:250px;

}


#wrapper.menuDisplayed #page-content-wrapper{
  padding-left:250px;
}

/* Sidebar styling */
.sidebar-nav{
  padding:0;
  list-style:none; 
	transition:all .5s;
	width:100%;
	text-align:center;
}

.sidebar-nav li{
  line-height:40px;  
	width:100%;
	transition:all .3s;
	padding:10px;
    text-align: left;
    cursor: pointer;
    
}

.sidebar-nav li a {
  display:block;
  text-decoration:none;
  color:#ddd;
}

.sidebar-nav li:hover{
  background:rgba(0,0,0,0.6);
}

h4 a {
    color:white;text-decoration: none;
}
h4 a:hover {
    color:white;text-decoration: none;
}
h4 a:focus {
    color:white;text-decoration: none;
}
.btn:hover {
box-shadow: 0px 0px 2px 2px gray;
}
#div {
  height:auto;
  background-color: white;

  margin-top: 20px;
  margin-bottom: 20px;
  border-radius: 7px;
padding-top:10px;
padding-bottom:10px;
padding-right:0px;
  box-shadow: 0px 0px 8px 0px #ababab;
  border-right: 8px solid white;
}

#div h1:hover {
  transform: scale(1.5,1.5);
  cursor: pointer;
  font-weight: bold;
  text-shadow: 0px 0px 5px gray;

  transition: .5s all;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #fc6100;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

.tt {
  border: none;outline: none;box-shadow: none;border-bottom: 2px solid gray;
   border-radius: 0px;padding: 20px;
   margin-bottom: 10px;letter-spacing: 1px;transition: .4s all;
}
.tt:focus {
  border: none;outline: none;box-shadow: none;border-bottom: 2px solid #c70d00;
   border-radius: 0px;padding: 20px;
   margin-bottom: 10px;letter-spacing: 1px;transition: .4s all;
}

#btn {
    width:50%;
    height: 50px;
    font-size: 15px;
    letter-spacing: 1px;
    background-color: black;
    color:white;
    border-color:black;
    border-radius: 5px;
    transform: scale(1,1);
    transition: 0.3s all;
    outline: none;
}
#btn:hover {
    box-shadow: 0px 0px 5px white;
    transform: scale(1.03,1.03);
    transition: 0.3s all;
}
::selection {
    background-color: #ef6600;
    color: #000;
    text-decoration: none;
}
    </style>
</head>
<body onload="document.getElementById('Answer').focus();" style="background-image: url('https://images.unsplash.com/photo-1520531158340-44015069e78e?ixlib=rb-1.2.1&w=1000&q=80');background-size: cover;;background-repeat: no-repeat;background-attachment: fixed;background-position: center">

<a href="#wrapper"><button id="myBtn" title="Go to top"><span class="	glyphicon glyphicon-chevron-up"></span></button></a>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

</script>

<?php 
  
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  
if(!empty($_SESSION['useremail'])) {



if(isset($_POST['anscontact'])) {
   

 require 'PHPMailer-6.0.7/src/PHPMailer.php';
                require 'PHPMailer-6.0.7/src/SMTP.php';
                require 'PHPMailer-6.0.7/src/Exception.php';
                
                // Instantiate Class
                $mail = new PHPMailer();
                
                // Set up SMTP
                $mail->IsSMTP();                // Sets up a SMTP connection
                $mail->SMTPDebug  = 0;          // This will print debugging info
                $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization
                $mail->SMTPSecure = "tls";      // Connect using a TLS connection
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 587;
                $mail->Encoding = '7bit';       // SMS uses 7-bit encoding
                
                // Authentication
                $mail->Username   = "mohjav031010@gmail.com"; // Login
                $mail->Password   = "mohsin034802";

                $mail->setFrom('mohjav031010@gmail.com', 'PhotoShare Admin');
                $mail->addAddress($_POST['Email'], 'User');
                $mail->isHTML(true);

                $mail->Subject = 'PhotoShare ContactUs';
                $mail->Body = "<div><h1 style='font-family:calibri;color:#ff6200'>Contact Us Answer!</h1></div><br/>
                <div>Dear User, Thankyou for sending us your message. We answered your message.
                <br>
          
                    
                    <h4 style='margin-left:50px;'><strong>Your Message :</strong> ".$_POST['Msg']."</h4><br>
                    <h4 style='margin-left:50px;'><strong>Admin's Reply :</strong> ".$_POST['Answer']."</h4>
                   
                </div><br/><br/>
                <div>Thanks,<br/><br/>
                <strong>The PhotoShare Admin.</strong></div>
                ";

                if(!$mail->send()) {
                echo "Opps! For some technical reasons we couldn't able to sent you an email. We will shortly get back to you with download details.";	
                echo "Mailer Error: " . $mail->ErrorInfo;
                } 
                else {

                  $delrep="delete from `contactusmsgs` where `C_ID`='".$_POST['conid']."'";
                  $delrepres=$con->query($delrep);
                  if($delrepres) {
                  
                        echo "<script> window.location='contactmsg.php?id=".$_GET['id']."&Status=Success';</script>";
                   
                  }
                  else {
                      echo "<script> window.location='contactmsg.php?id=".$_GET['id']."&Status=Failed';</script>";
                  }
                  
                     
                }


}

if(!empty($_GET['cid'])) {
    $delrep1="delete from `contactusmsgs` where `C_ID`='".$_GET['cid']."'";
                  $delrepres1=$con->query($delrep1);
                  if($delrepres1) {
                  
                        echo "<script> window.location='contactmsg.php?id=".$_GET['id']."&Delete=Success';</script>";
                   
                  }
                  else {
                      echo "<script> window.location='contactmsg.php?id=".$_GET['id']."&Delete=Failed';</script>";
                  }
}


?>

 
<div class="col-lg-6 col-lg-offset-3">
<h2 class="text-center" style="background-color: #c70d00;color:white;padding:20px;width: 100%;border-top-right-radius: 30px;border-top-left-radius: 30px"><span class="glyphicon glyphicon-send"></span> Answer Contacts</h2>
  
    <div class="col-lg-12" style="height:100%;background-color: white;box-shadow: 0px 0px 10px lightgray;margin-top: -10px;border-bottom-right-radius: 30px;border-bottom-left-radius: 30px;padding-top: 20px;padding-bottom: 20px">
    <a href="dashboard.php?id=<?php echo $_GET['id'] ?>"><button class="btn btn-default">Back To Dashboard</button></a><br>
    <?php

        if(!empty($_GET['Status'])) {

            if($_GET['Status']=="Success") {

                ?>

                    <div class="alert alert-success">
                    <button style="float: right;margin-top: -6px" class="btn btn-success" onclick="window.location='contactmsg.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                    <strong>Answered!</strong> Message answered successfully.
                    </div>

                <?php

            }
            else {

                ?>

                <div class="alert alert-danger">
                <button style="float: right;margin-top: -6px" class="btn btn-danger" onclick="window.location='contactmsg.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                <strong>Error!</strong> Some error occurs while answering message.
                </div>
                                
                <?php

            }

        }
    
    ?>
    
    <?php

        if(!empty($_GET['Delete'])) {

            if($_GET['Delete']=="Success") {

                ?>

                    <div class="alert alert-success">
                    <button style="float: right;margin-top: -6px" class="btn btn-success" onclick="window.location='contactmsg.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                    <strong>Deleted!</strong> Message deleted successfully.
                    </div>

                <?php

            }
            else {

                ?>

                <div class="alert alert-danger">
                <button style="float: right;margin-top: -6px" class="btn btn-danger" onclick="window.location='contactmsg.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                <strong>Error!</strong> Some error occurs while deleted message.
                </div>
                                
                <?php

            }

        }
    
    ?>
    
    
<?php 

$faq="select * from contactusmsgs order by C_ID DESC";
$faqres=$con->query($faq);
if(mysqli_num_rows($faqres)>0) {
foreach($faqres as $faqrow) {

?>
<div class="col-lg-12" style="margin-top: 50px;background-color: #f5f5f5;padding: 20px;border-radius: 5px">

    <form action="contactmsg.php?id=<?php echo $_GET['id'] ?>" method="post">
<input type="hidden" value="<?php echo $faqrow['C_ID'] ?>" name="conid">
    <div class="form-group">
        <label for="Question">Message From</label>
        <input type="email" id="Question" class="form-control tt" name="Email" placeholder="Email" value="<?php echo $faqrow['By_Email'] ?>" readonly>
    </div>  
    <div class="form-group">
        <label for="Question">Message</label>
        <textarea id="Question" class="form-control tt" name="Msg" placeholder="Enter Question" rows="1" readonly><?php echo $faqrow['C_Msg'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="Answer">Answer</label>
        <textarea id="Answer" class="form-control tt" name="Answer" rows="1" placeholder="Enter Answer"></textarea>
    </div>
    <a href="contactmsg.php?id=<?php echo $_GET['id'] ?>&cid=<?php echo $faqrow['C_ID'] ?>"><button class="btn btn-danger" type="button" style="float: right">Delete</button></a>
    <input type="submit" value="Answer" id="btn" name="anscontact">

    </form>
    
</div>
<?php } 
}
else {

  echo "<h4 class='text-center'>No Contact Message</h4>";

}
  ?>      
    </div>

</div>


<?php 
}
else {
    echo "<script> window.location='Login.php';</script>";
}
 ?>
<script>



$(document).ready(function(){

  

  $("#menu-toggle").click(function(e){
    e.preventDefault();
    $("#wrapper").toggleClass("menuDisplayed");
  });

  $("a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 500, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });



});
</script>
    
</body>
</html>