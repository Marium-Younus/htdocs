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
    <title>PhotoShare | Admin Dashboard</title>
    <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
    <link href="scrollbar1.css" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
  transition: .5s all;
  animation-name: rot;
  animation-play-state: running;
  animation-timing-function: ease;
  animation-direction: normal;
  animation-duration: 1s;
  animation-iteration-count: 1;
  text-decoration: none;
}

@keyframes rot {
  from{transform: translateX(-90%);}
  to{transform: translateX(0%);}
}

#div h1:hover {
 
  cursor: pointer;
  font-weight: bold;
  text-shadow: 0px 0px 5px lightgray;

  transition: .5s all;
}

a #div:hover {
  transform: rotate(10deg);
  transition: .5s all;
}

#fiv {
    background-color: rgba(0,0,0,0.6);
    height: 100%;
    width: 100%;
    display: none;
}
.col-lg-12:hover > #fiv {
    display: block;
    transition: 1s display;
}


.slideanim {visibility:hidden;}
  .slidee {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(90%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(90%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  
  .slideanimm {visibility:hidden;}
  .slideee {
    animation-name: slidee;
    -webkit-animation-name: slidee;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slidee {
    0% {
      opacity: 0;
      transform: translateX(-90%);
    } 
    100% {
      opacity: 1;
      transform: translateX(0%);
    }
  }
  @-webkit-keyframes slidee {
    0% {
      opacity: 0;
      -webkit-transform: translateX(-90%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateX(0%);
    }
  }

  .slideanimmm {visibility:hidden;}
  .slideeee {
    animation-name: slideee;
    -webkit-animation-name: slideee;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slideee {
    0% {
      opacity: 0;
      transform: translateY(-90%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slideee {
    0% {
      opacity: 0;
      -webkit-transform: translateY(-90%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }  

#contact {

  transition: .5s all;
  border:2px solid white;
}
#contact:hover {
  border:2px solid gray;

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

#btn2 {
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
#btn2:hover {
    box-shadow: 0px 0px 5px white;
    transform: scale(1.03,1.03);
    transition: 0.3s all;
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
<body style="background-image: url('https://images.unsplash.com/photo-1520531158340-44015069e78e?ixlib=rb-1.2.1&w=1000&q=80');background-size: cover;;background-repeat: no-repeat;background-attachment: fixed;background-position: center">
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

if(!empty($_GET['Action'])) {

  if($_GET['Action']=="Logout") {

    $logout="update users set Status='Offline' where User_ID='".$_GET['id']."'";
    $logoutresult=$con->query($logout);
      if($logoutresult) {
        unset($_SESSION['useremail']);
      }

  }

}

?>


<?php 

if(!empty($_SESSION['useremail'])) {

  if(!empty($_GET['imgid'])) {
    $dltimg="delete from images where Image_ID='".$_GET['imgid']."'";
    $dltimgres=$con->query($dltimg);
    if($dltimgres) {
        echo "<script>window.location='dashboard.php?id=".$_GET['id']."'</script>";
    }
  }

  
if(isset($_POST['save'])) {

  if(empty($_FILES["adminimg"]["name"])) {
 

  $savedata="update users set Email='".$_POST['email']."',First_Name='".$_POST['fname']."',Last_Name='".$_POST['lname']."',Password='".$_POST['pass']."' where User_ID='".$_GET['id']."'";
  $savedataresult=$con->query($savedata);
    if($savedataresult) {

      echo "<script>
    
       
      Swal.fire({
          title: 'Updated!',
          text: 'Admin Profile Has Been Updated!',
          type: 'success'
      }).then(function() {
        window.location='dashboard.php?id=".$_GET['id']."';
    });

      </script>";

    }
  }
  else {
    // $folder1="UserImages/";
    // $tempPath1=$_FILES["adminimg"]["tmp_name"];
    // $path1=$folder1.$_FILES["adminimg"]["name"];
    // echo $path1;
    $folder1="UserImages/";
    $tempPath1=$_FILES["adminimg"]["tmp_name"];
    $path1=$folder1.$_FILES["adminimg"]["name"];
  
    move_uploaded_file($tempPath1,$path1);
    $savedata="update users set  Email='".$_POST['email']."',First_Name='".$_POST['fname']."',Last_Name='".$_POST['lname']."',Password='".$_POST['pass']."',User_Image='".$path1."' where User_ID='".$_GET['id']."'";
    $savedataresult=$con->query($savedata);
      if($savedataresult) {
  
        echo "<script>

       
      Swal.fire({
          title: 'Updated!',
          text: 'Admin Profile Has Been Updated!',
          type: 'success'
      }).then(function() {
        window.location='dashboard.php?id=".$_GET['id']."';
    });

      </script>";
  
      }

  }
}


if(isset($_POST['updatecontact'])) {
  $address=mysqli_real_escape_string($con,$_POST['Address']);
  $savecon="update `contactus` set `Email`='".$_POST['Email']."',`Phone`='".$_POST['Phone']."',`Tel`='".$_POST['Tel']."',`Address`='".$address."' WHERE ID=1";
  $saveconresult=$con->query($savecon);
    if($saveconresult) {

      echo "<script>
      Swal.fire({
        title: 'Updated!',
        text: 'Contact Details Has Been Updated',
        type: 'success'
    }).then(function() {
      window.location='dashboard.php?id=".$_GET['id']."';
  });
      </script>";

    }
}


?>

<?php 
    $userdataforsettings="select * from users where User_ID='".$_GET['id']."'";
    $userfetchforsettings=$con->query($userdataforsettings);
    foreach($userfetchforsettings as $userrowforsettings) {
?>
  <div id="settings" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.6)">
  <div class="modal-dialog">

    <div class="modal-content" style="border-radius: 0px">
      <div class="modal-header" style="border-radius: 0px">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center" style="font-weight: bold"><span class="glyphicon glyphicon-cog" style="margin-right: 0px"></span> Settings</h4>
      </div>
      <div class="col-lg-12" style="background-color: white;padding:20px;">
        <form action="dashboard.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
          <div class="col-lg-6">
            <label for="my-input">First Name</label>
            <input id="my-input" class="form-control tt" type="text" name="fname" value="<?php echo $userrowforsettings['First_Name'] ?>">
          </div>
          <div class="col-lg-6">
            <label for="my-input">Last Name</label>
            <input id="my-input" class="form-control tt" type="text" name="lname" value="<?php echo $userrowforsettings['Last_Name'] ?>">
          </div>
          <div class="col-lg-12">
            <label for="my-input">Username</label>
            <input id="my-input" class="form-control tt" type="text" name="email" value="<?php echo $userrowforsettings['Email'] ?>">
            <!-- <input type="hidden" value="<?php echo $userrowforsettings['User_Email'] ?>" name="email"> -->
          </div>
          <div class="col-lg-12">
            <label for="my-input">Password</label>
            <input id="my-input" class="form-control tt" type="text" name="pass" value="<?php echo $userrowforsettings['Password'] ?>">
          </div>
          <div class="col-lg-12" style="margin-bottom: 30px">
            <label for="my-input">Image</label>
            <input id="my-input" class="form-control" type="file" name="adminimg" style="padding-top: 20px;padding-bottom: 40px;border-radius: 2px">
          </div>
          <div class="col-lg-12">
          <button type="submit" id="btn" name="save">Save <span class="	glyphicon glyphicon-save"></span></button>
          </div>
        </form>
        
        
        
      </div>
      
    </div>

    </div>
  </div>
<?php } ?>

        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
            <ul class="sidebar-nav">

        
            <img src="WebsiteImages/logo.png" style="width: 90%;margin-top: 10px;padding-bottom: 10px;margin-left: 10px"><hr>
            <h4 style="text-align: center;color:white;font-weight: bold"><a href="#"><span class="	glyphicon glyphicon-th-large" style="font-size: 20px;color:white;margin-right: 10px;margin-left: 10px"></span>Dashboard</h4>
        <br>
                <li style="background:rgba(255, 17, 0,0.6)"><a href="dashboard.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-home" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Home</a></li>
                <?php $getadmin="select * from users where User_ID='".$_GET['id']."'";
                      $getadminress=$con->query($getadmin);
                      foreach($getadminress as $getadminroww) {
                        if($getadminroww['Role']==1) {
                          ?>
                           <li><a href="admins.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-star" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Admins</a></li>
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
                    <a href="PendingRequests.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-exclamation-sign" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Prending Requests</a>      
                </li>
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

                    <?php 
                        $userdata="select * from users where User_ID='".$_GET['id']."'";
                        $userfetch=$con->query($userdata);
                        foreach($userfetch as $userrow) {
                    ?>

<div class="dropdown" style="float: right">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="border-radius: 50px;font-weight: bold;padding-bottom: 0px;padding-left: 20px;padding-right: 20px;outline: none;border:2px solid black;margin-bottom: 10px"><h4 style="margin-top: -8px;font-weight: bold;font-family: arial"><img width="40px" height="40px" style="margin-right: 5px;border-radius: 50%" src="<?php echo $userrow['User_Image'] ?>"><?php echo $userrow['First_Name'] ?> <?php echo $userrow['Last_Name'] ?> <span style="color:#00c90a;font-size: 40px;margin-top: -30px">•</span></h4>
  </button>
  <ul class="dropdown-menu">

    <li style="text-align: center" data-toggle="modal" data-target="#settings"><a href="#" style="padding: 20px;"><span class="glyphicon glyphicon-cog" style="margin-right: 10px"></span>Settings</a></li>

    <li style="text-align: center"><a href="dashboard.php?id=<?php echo $_GET['id']; ?>&Action=Logout" style="padding: 20px;"><span class="glyphicon glyphicon-off" style="margin-right: 10px"></span> Logout</a></li>
  </ul>
</div>

              

                        <?php } ?>

<br>

                    <a href="#" title="Show/Hide Menu" class="btn" id="menu-toggle" style="background-color: white;border:2px solid black;padding-top: 10px;"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
                




                    <h1 class="text-center" style="letter-spacing: 0.5px;">PHOTOSHARE ADMIN PANEL</h1>
                   <hr>
                </div>
<div class="col-lg-3 col-md-3">
<a href="Reports.php?id=<?php echo $_GET['id'] ?>">
                  <div class="col-lg-12 col-md-12" id="div" style="border-left: 8px solid #c92a1e;color:#c92a1e;padding-bottom: 20px;position: relative;margin-top: 40px;">
                  <span class="glyphicon glyphicon-alert" style="font-size: 60px;color:#c92a1e;margin-right: 10px;;margin-left: 10px;position: absolute;margin-top: -30px;margin-bottom: 40px"></span>
                          <div class="col-lg-12">
                                <h3 class="text-center" style="font-weight: bold;font-family:'Gill Sans', sans-serif;color:#c92a1e">Reports</h3>
                                <hr>
                                <?php 
                                    $rep="select count(*) as count from report";
                                    $repres=$con->query($rep);
                                    foreach($repres as $reprow) {
                                ?>

                                <h1 style="text-align: center"><?php echo $reprow['count'] ?></h1>

                                <?php } ?>
                          </div>
                  </div>
                  </a>
                  <a href="PendingRequests.php?id=<?php echo $_GET['id'] ?>">
                  <div class="col-lg-12 col-md-12" id="div" style="border-left: 8px solid #ef6600;color:#ef6600;padding-bottom: 20px;position: relative;margin-top: 40px;">
                  <span class="glyphicon glyphicon-exclamation-sign" style="font-size: 60px;color:#ef6600;margin-right: 10px;;margin-left: 10px;position: absolute;margin-top: -30px;margin-bottom: 40px"></span>
                          <div class="col-lg-12">
                                <h3 class="text-center" style="font-weight: bold;font-family:'Gill Sans', sans-serif;color:#ef6600">Pending Requests</h3>
                                <hr>
                                <?php 
                                    $countpending="select count(*) as count from pendingsignup";
                                    $resultcountpending=$con->query($countpending);
                                    foreach($resultcountpending as $rowcountpending) {
                                ?>

                                <h1 style="text-align: center"><?php echo $rowcountpending['count'] ?></h1>

                                <?php } ?>
                          </div>
                  </div>
                  </a>
  <a href="Users.php?id=<?php echo $_GET['id'] ?>">
                <div class="col-lg-12 col-md-12" id="div" style="border-left: 8px solid #0293e0;color:#0293e0;padding-bottom: 20px;position: relative;margin-top: 40px;">
                <span class="glyphicon glyphicon-user" style="font-size: 60px;color:#0293e0;margin-right: 10px;;margin-left: 10px;position: absolute;margin-top: -30px;margin-bottom: 40px"></span>
                <div class="col-lg-12">
                                <h3 class="text-center" style="font-weight: bold;font-family:'Gill Sans', sans-serif;color:#07a2f5">Total Users</h3>
                                <hr>
                                <?php 
                                    $countuser="select count(*) as count from users where Role=2";
                                    $resultcountuser=$con->query($countuser);
                                    foreach($resultcountuser as $rowcountuser) {
                                ?>

                                <h1 style="text-align: center"><?php echo $rowcountuser['count'] ?></h1>

                                <?php } ?>
                          </div>
                  </div>
     </a>
    
                  <a href="Images.php?id=<?php echo $_GET['id'] ?>">
                  <div class="col-lg-12 col-md-12" id="div" style="border-left: 8px solid #03a61c;color:#03a61c;padding-bottom: 20px;position: relative;margin-top: 40px;">
                  <span class="glyphicon glyphicon-camera" style="font-size: 60px;color:#03a61c;margin-right: 10px;;margin-left: 10px;position: absolute;margin-top: -30px;margin-bottom: 40px"></span>
                          <div class="col-lg-12">
                                <h3 class="text-center" style="font-weight: bold;font-family:'Gill Sans', sans-serif;color:#03a61c">Total Images</h3>
                                <hr>
                                <?php 
                                    $countimg="select count(*) as count from images";
                                    $resultcountimg=$con->query($countimg);
                                    foreach($resultcountimg as $rowcountimg) {
                                ?>

                                <h1 style="text-align: center"><?php echo $rowcountimg['count'] ?></h1>

                                <?php } ?>
                          </div>
                  </div>
                  </a>
                  <a>
                  <div class="col-lg-12 col-md-12" id="div" style="border-left: 8px solid #ffbb00;color:#ffbb00;padding-bottom: 20px;position: relative;margin-top: 40px;">
                <span class="glyphicon glyphicon-download" style="font-size: 60px;color:#ffbb00;margin-right: 10px;;margin-left: 10px;position: absolute;margin-top: -30px;margin-bottom: 40px"></span>
                <div class="col-lg-12">
                                <h3 class="text-center" style="font-weight: bold;font-family:'Gill Sans', sans-serif;color:#ffbb00">Total Downloads</h3>
                                <hr>
                                <?php 
                                    $sumimg="select sum(Downloads) as sum from images";
                                    $sumimgres=$con->query($sumimg);
                                    foreach($sumimgres as $sumimgrow) {
                                ?>

                                <h1 style="text-align: center"><?php echo $sumimgrow['sum'] ?></h1>

                                <?php } ?>
                          </div>
                  </div>
                  </a>
                  
</div>

                    <div class="col-lg-9">
                    <div id="contact" class="col-lg-12" style="height:100%;background-color: white;border-radius: 10px;box-shadow: 0px 0px 10px lightgray;padding:30px;margin-bottom: 30px">
                    <a href="contactmsg.php?id=<?php echo $_GET['id'] ?>"><button class="btn btn-default">Contact Messages</button></a>
                    <h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center">Contact Details</h1><br>
                    <?php 

                      $contact="select * from contactus";
                      $conres=$con->query($contact);
                      foreach($conres as $conrow) {

                      ?>

                    <div class="col-lg-6 col-lg-offset-3">
                      <form action="dashboard.php?id=<?php echo $_GET['id'] ?>" method="post">
                          <div class="form-group">
                            <label for="my-input">Email</label>
                            <input id="Email" class="form-control tt" type="email" name="Email" value="<?php echo $conrow['Email'] ?>">
                          </div>
                          <div class="form-group">
                            <label for="my-input">Phone</label>
                            <input id="Phone" class="form-control tt" type="number" name="Phone" value="<?php echo $conrow['Phone'] ?>">
                          </div>
                          <div class="form-group">
                            <label for="my-input">Tel</label>
                            <input id="Tel" class="form-control tt" type="text" name="Tel" value="<?php echo $conrow['Tel'] ?>">
                          </div>
                          <div class="form-group">
                            <label for="my-input">Address</label>
                            <textarea id="Address" class="form-control tt" name="Address" rows="1"><?php echo $conrow['Address'] ?></textarea>
                          </div>
                          <input type="submit" value="Update" name="updatecontact" id="btn" style="float: right"><br><br>
                      </form>
                    </div>
                    <?php } ?>
                    </div>
                    <div class="col-lg-12" style="height:100%;background-color: white;border-radius: 10px;box-shadow: 0px 0px 10px lightgray;padding:30px">
                    <h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center">Recent Uploads</h1><br>
<?php 
    $getimg="select * from images order by Image_ID DESC Limit 12";
    $resimg=$con->query($getimg);

    foreach($resimg as $imgrow) {
  
?>
<div class="modal" id="myModal" style="background:rgba(0,0,0,0.8)">
  <div class="modal-dialog" style="width:80%;margin: auto">
    <div class="modal-content" style="background:transparent;box-shadow: none;border:none;color:White;width: 100%">

    <div class="modal-header" style="">
        <button type="button" style="color:white" class="close" data-dismiss="modal">&times;</button>
        <h4 id="modal-title"></h4>

      </div>
      <!-- Modal body -->
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2" style="overflow: hidden;margin-top: 10px;">
          <img src="" title="" id="popimg" class="img-responsive slideanimmm" style="margin: auto">
       
      </div>

      <!-- Modal footer -->
     

    </div>
  </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 25px;padding: 5px;margin-bottom: 25px;background-color: #f5f5f5;padding:20px;box-shadow: 0px 0px 10px rgba(0,0,0,0.2)" id="kk">
            <?php 
                        $imgbyuser="select * from users where User_ID='".$imgrow['Image_ByUser']."'";
                        $resuser=$con->query($imgbyuser);
                        foreach($resuser as $rowuser) {
                    ?>
           <div class="col-lg-4">
             <img src="<?php echo $imgrow['Image_File'] ?>" width="100%">
           </div>
                  <div class="col-lg-8" style="color:black;word-wrap: break-word;text-align: justify">
                  <p style="float: right">Date : <?php echo $imgrow['Image_Date'] ?></p>
                  <h4><?php echo $imgrow['Image_Name'] ?></h4>
                  <h4 style="padding: 10px;border:1px solid gray;border-radius: 10px;"><?php echo $imgrow['Image_Tags'] ?></h4>
                            <?php  $imagedata = getimagesize($imgrow['Image_File']);
                      $size=$imagedata[0]." x ".$imagedata[1];
                      echo "<p style='color:black;margin-top: 0px'>Image Size : ".$imagedata[0]." x ".$imagedata[1]."</p>" ;

                            ?>
                            <?php
   
   $totalLike="select count(*) as count from likes where `Like_ImageID`='".$imgrow['Image_ID']."'";
   $totalLikeres=$con->query($totalLike);
   foreach($totalLikeres as $totalrow) {
   
   ?>

    <p style="color:black;font-weight: bold;font-family: 'verdana'" id="like<?php echo $imgrow['Image_ID'] ?>"><span class="glyphicon glyphicon-heart" style="color:#fc6100"></span> Likes : <?php echo $totalrow['count'] ?></p>

   <?php } ?>
                             <p style="color:black;font-weight: bold;font-family: 'verdana'" id="dw<?php echo $imgrow['Image_ID'] ?>"><span class="glyphicon glyphicon-download" style="color:#fc6100"></span> Downloads : <?php echo $imgrow['Downloads'] ?></p>
                            <!-- <a href="<?php echo $imgrow['Image_File'] ?>" download><button id="btn" style="">Download</button></a> -->
                            
                 <button class="btn btn-default"  onclick="document.getElementById('modal-title').innerText='Picture By <?php echo $rowuser['First_Name'] ?> <?php echo $rowuser['Last_Name'] ?>';document.getElementById('popimg').src = '<?php echo $imgrow['Image_File'] ?>';document.getElementById('bbb').click();">View Image</button>   
                 <a href="Images.php?id=<?php echo $_GET['id'] ?>&gotoid=<?php echo $imgrow['Image_ID'] ?>"><button class="btn btn-info">Go To Image</button></a>
                 
                 
                <button type="button" id="bbb" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="display: none">
                Open modal
                </button>
                  </div>
        
            <?php } ?>
     
</div>


<?php } ?>
                    </div>
                    
                    </div>
                </div>
            </div>
            </div>
        </div>
<?php 
}
else {
    echo "<script> window.location='Loginadmin.php';</script>";
}
 ?>
<script>
$(document).ready(function(){

  // Add smooth scrolling to all links in navbar + footer link
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
  


  $("#menu-toggle").click(function(e){
    e.preventDefault();
    $("#wrapper").toggleClass("menuDisplayed");
  });


    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slidee");
        }
    });

 
    $(".slideanimm").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 900) {
          $(this).addClass("slideee");
        }
    }); 

    $(".slideanimmm").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 900) {
          $(this).addClass("slideeee");
        }
    });
  });

</script>
    
</body>
</html>