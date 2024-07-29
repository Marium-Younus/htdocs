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
    <title>PhotoShare | Add Admin</title>
    <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="scrollbar1.css" rel="stylesheet" type="text/css">
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
   margin-bottom: 40px;letter-spacing: 1px;transition: .4s all;
}
.tt:focus {
  border: none;outline: none;box-shadow: none;border-bottom: 2px solid #c70d00;
   border-radius: 0px;padding: 20px;
   margin-bottom: 40px;letter-spacing: 1px;transition: .4s all;
}

#btn {
    width:100%;
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
<body onload="l();" style="background-image: url('https://images.unsplash.com/photo-1520531158340-44015069e78e?ixlib=rb-1.2.1&w=1000&q=80');background-size: cover;;background-repeat: no-repeat;background-attachment: fixed;background-position: center">

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

if(!empty($_SESSION['useremail'])) {


  
if(isset($_POST['addadmin'])) {
    $folder="UserImages/";
    $tempPath=$_FILES["img"]["tmp_name"];
    $path=$folder.$_FILES["img"]["name"];

    move_uploaded_file($tempPath,$path);
  $addadmin="insert into users(`First_Name`, `Last_Name`, `Email`, `Password`, `Role`, `Signup_Date`, `User_Image`, `Status`) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['pass']."','".$_POST['role']."','".date("d-m-Y")."','".$path."','Offline')";
//   echo $addfaq;
  $addadminres=$con->query($addadmin);
    if($addadminres) {

      echo "<script> window.location='addAdmin.php?id=".$_GET['id']."&Status=Success';</script>";

    }
    else {
        echo "<script> window.location='addAdmin.php?id=".$_GET['id']."&Status=Failed';</script>";
    }
}



?>

        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
            <ul class="sidebar-nav">

        
            <img src="WebsiteImages/logo.png" style="width: 90%;margin-top: 10px;padding-bottom: 10px;margin-left: 10px"><hr>
            <h4 style="text-align: center;color:white;font-weight: bold"><a href="#"><span class="	glyphicon glyphicon-th-large" style="font-size: 20px;color:white;margin-right: 10px;margin-left: 10px"></span>Dashboard</h4>
        <br>
                <li><a href="dashboard.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-home" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Home</a></li>
                <?php $getadmin="select * from users where User_ID='".$_GET['id']."'";
                      $getadminress=$con->query($getadmin);
                      foreach($getadminress as $getadminroww) {
                        if($getadminroww['Role']==1) {
                          ?>
                           <li style="background:rgba(255, 17, 0,0.6)"><a href="admins.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-star" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Admins</a></li>
                          <?php
                        }
                      }
                ?>
                <li>
                <?php 
                                    $countpending1="select count(*) as count from pendingsignup";
                                    $resultcountpending1=$con->query($countpending1);
                                    foreach($resultcountpending1 as $rowcountpending1) {
                    ?>

                                <p style="float: right;color:white"><?php echo $rowcountpending1['count'] ?></p>

                    <?php } ?>
                <a href="PendingRequests.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-exclamation-sign" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Prending Requests</a></li>
                <li><a href="Users.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-user" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Users</a></li>
                <li><a href="Images.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-picture" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Images</a></li>
                <li><a href="FeedbackAdmin.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-comment" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Feedback</a></li>
                <li><a href="registration.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-ok-sign" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Registerations</a></li>
                <li>
                <?php 
                                    $countrep="select count(*) as count from report";
                                    $countrepres=$con->query($countrep);
                                    foreach($countrepres as $countreprow) {
                    ?>

                                <p style="float: right;color:white"><?php echo $countreprow['count'] ?></p>

                    <?php } ?>
                <a href="Reports.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-alert" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Reports</a></li>
            </ul>
            </div>
            
            <!-- Page Content -->
            <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12">


                    <a href="#" title="Show/Hide Menu" class="btn" id="menu-toggle" style="background-color: white;border:2px solid black;padding-top: 10px;"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
                




                    <h1 class="text-center" style="letter-spacing: 0.5px;">PHOTOSHARE ADMIN PANEL</h1>

                </div>

                   
 
<div class="col-lg-6 col-lg-offset-3">
<h2 class="text-center" style="background-color: #c70d00;color:white;padding:20px;width: 100%;border-top-right-radius: 30px;border-top-left-radius: 30px"><span class="glyphicon glyphicon-plus"></span> Add Admin</h2>
  
    <div class="col-lg-12" style="height:100%;background-color: white;box-shadow: 0px 0px 10px lightgray;margin-top: -10px;border-bottom-right-radius: 30px;border-bottom-left-radius: 30px;padding-top: 20px;padding-bottom: 20px">
    <a href="admins.php?id=<?php echo $_GET['id'] ?>"><button class="btn btn-default">Back</button></a><br><br>
    <?php

        if(!empty($_GET['Status'])) {

            if($_GET['Status']=="Success") {

                ?>

                    <div class="alert alert-success">
                    <button style="float: right;margin-top: -6px" class="btn btn-success" onclick="window.location='admins.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                    <strong>Admin Inserted!</strong> Admin Created Successfully.
                    </div>

                <?php

            }
            else {

                ?>

                <div class="alert alert-danger">
                <button style="float: right;margin-top: -6px" class="btn btn-danger" onclick="window.location='addAdmin.php?id=<?php echo $_GET['id'] ?>'">Try Again</button>
                <strong>Error!</strong> Some error occurs while adding admin.
                </div>
                                
                <?php

            }

        }
    
    ?>
    <h3 style="text-align: center">Admin Information</h3>
  <hr style="width: 50%">

    <form action="addAdmin.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">

  <div class="col-lg-6">
      <label for="fname">First Name</label>
      <input id="fname" class="form-control tt" type="text" name="fname" placeholder="First Name">
  </div>

  <div class="col-lg-6">
      <label for="lname">Last Name</label>
      <input id="lname" class="form-control tt" type="text" name="lname" placeholder="Last Name">
  </div>

  <div class="col-lg-12">
      <label for="email">Email</label>
      <input id="email" class="form-control tt" type="text" name="email" placeholder="Email">
  </div>
  <div class="col-lg-12">
      <label for="pass">Password</label>
      <input id="pass" class="form-control tt" type="text" name="pass" placeholder="Password">
  </div>
  <div class="col-lg-12">
  <label for="role">Role</label>
  <select id="role" name="role" style="width:100%;border-color: lightgray;padding: 10px;border-radius: 0px;border:none;border-bottom:2px solid gray;outline: none;margin-bottom: 25px">
        <option style="padding: 10px;" value="1">Admin</option>
        <option style="padding: 10px;" value="3">Sub Admin</option>
  </select>
  </div>
  <div class="col-lg-12" style="margin-bottom: 30px;">
      <label for="img">Image</label>
      <input id="img" class="form-control" type="file" name="img" style="padding-top: 20px;padding-bottom: 40px;border-radius: 2px">
  </div>
  <div class="col-lg-12" style="margin-bottom: 30px;">
    <input type="submit" value="Insert" id="btn" name="addadmin">
    </div>
    </form>
   
    </div>

</div>


                </div>
            </div>
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