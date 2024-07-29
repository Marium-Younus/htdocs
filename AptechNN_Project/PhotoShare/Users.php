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
    <title>PhotoShare | Users</title>
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


function thousandsCurrencyFormat($num) {

  if($num>1000) {

        $x = round($num);
        $x_number_format = number_format($x);
        $x_array = explode(',', $x_number_format);
        $x_parts = array('k', 'm', 'b', 't');
        $x_count_parts = count($x_array) - 1;
        $x_display = $x;
        $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
        $x_display .= $x_parts[$x_count_parts - 1];

        return $x_display;

  }

  return $num;
}


if(!empty($_GET['dltuser'])) {

  $deluser5="delete from `follow` WHERE `Following_User`='".$_GET['dltuser']."' or `Follow_ByUser`='".$_GET['dltuser']."'";
  $deluserres5=$con->query($deluser5);
  if($deluserres5) {
  $deluser1="delete from likes where Like_ByUser='".$_GET['dltuser']."'";
  $deluserres1=$con->query($deluser1);
  if($deluserres1) {

    $deluser2="delete from save where Save_ByUser='".$_GET['dltuser']."'";
    $deluserres2=$con->query($deluser2);
    if($deluserres2) {

      $deluser3="delete from images where Image_ByUser='".$_GET['dltuser']."'";
      $deluserres3=$con->query($deluser3);
      if($deluserres3) {

        $deluser4="delete from reg_apply where Reg_ApplyUser='".$_GET['dltuser']."'";
        $deluserres4=$con->query($deluser4);
        if($deluserres4) {
          $deluser="delete from users where User_ID='".$_GET['dltuser']."'";
          $deluserres=$con->query($deluser);
          if($deluserres) {
              echo "<script> window.location='Users.php?id=".$_GET['id']."&Action=Success';</script>";
          }
          else {
              echo "<script> window.location='Users.php?id=".$_GET['id']."&Action=Failed';</script>";
          }
        }
      }
    }
  }
}

 

}

if(!empty($_GET['unregisteruser'])) {

    
    


  $unuser="update users set Registered='False' where User_ID='".$_GET['unregisteruser']."'";
  $unuserreas=$con->query($unuser);
  if($unuserreas) {
      echo "<script> window.location='Users.php?id=".$_GET['id']."&Unregistered=Success';</script>";
  }
  else {
      echo "<script> window.location='Users.php?id=".$_GET['id']."&Unregistered=Failed';</script>";
  }
  



}


if(!empty($_GET['banid'])) {

    
    


  $unuser="update users set Ban='True' where User_ID='".$_GET['banid']."'";
  $unuserreas=$con->query($unuser);
  if($unuserreas) {
      echo "<script> window.location='Users.php?id=".$_GET['id']."&Ban=Success';</script>";
  }
  else {
      echo "<script> window.location='Users.php?id=".$_GET['id']."&Ban=Failed';</script>";
  }
  



}


if(!empty($_GET['unbanid'])) {

    
    


  $unuser="update users set Ban='False' where User_ID='".$_GET['unbanid']."'";
  $unuserreas=$con->query($unuser);
  if($unuserreas) {
      echo "<script> window.location='Users.php?id=".$_GET['id']."&Unban=Success';</script>";
  }
  else {
      echo "<script> window.location='Users.php?id=".$_GET['id']."&Unban=Failed';</script>";
  }
  



}




?>




<?php 

if(!empty($_SESSION['useremail'])) {


  
if(isset($_POST['save'])) {

  $savedata="update users set First_Name='".$_POST['fname']."',Last_Name='".$_POST['lname']."',Password='".$_POST['pass']."' where User_ID='".$_GET['id']."'";
  $savedataresult=$con->query($savedata);
    if($savedataresult) {

      echo "<script> window.location='dashboard.php?id=".$_GET['id']."';</script>";

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
                <a href="PendingRequests.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-exclamation-sign" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Prending Requests</a></li>
                <li style="background:rgba(255, 17, 0,0.6)"><a href="Users.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-user" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Users</a></li>
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
                <div class="col-lg-12 col-md-12 col-sm-12">


                    <a href="#" title="Show/Hide Menu" class="btn" id="menu-toggle" style="background-color: white;border:2px solid black;padding-top: 10px;"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
                




                    <h1 class="text-center" style="letter-spacing: 0.5px;">PHOTOSHARE ADMIN PANEL</h1>

                </div>

                    <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-12">
                    <h2 class="text-center" style="background-color: #c70d00;color:white;padding:20px;width: 100%;border-top-right-radius: 30px;border-top-left-radius: 30px"><span class="glyphicon glyphicon-user"></span> Users</h2>
                      
                        <div class="col-lg-12 col-md-12 col-sm-12" style="height:100%;background-color: white;box-shadow: 0px 0px 10px lightgray;margin-top: -10px;border-bottom-right-radius: 30px;border-bottom-left-radius: 30px;padding-top: 20px;padding-bottom: 20px">
                        <?php
        
                            if(!empty($_GET['Action'])) {

                                if($_GET['Action']=="Success") {

                                    ?>

                                        <div class="alert alert-success">
                                        <button style="float: right;margin-top: -6px" class="btn btn-success" onclick="window.location='Users.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                                        <strong>User Deleted!</strong> Selected user has been deleted.
                                        </div>

                                    <?php

                                }
                                else {

                                    ?>

                                    <div class="alert alert-danger">
                                    <button style="float: right;margin-top: -6px" class="btn btn-danger" onclick="window.location='Users.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                                    <strong>Error!</strong> Some error occurs while deleting user.
                                    </div>
                                                    
                                    <?php

                                }

                            }
                        
                        ?>
                        <?php
        
        if(!empty($_GET['Ban'])) {

            if($_GET['Ban']=="Success") {

                ?>

                    <div class="alert alert-success">
                    <button style="float: right;margin-top: -6px" class="btn btn-success" onclick="window.location='Users.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                    <strong>User Banned!</strong> Selected user has been banned.
                    </div>

                <?php

            }
            else {

                ?>

                <div class="alert alert-danger">
                <button style="float: right;margin-top: -6px" class="btn btn-danger" onclick="window.location='Users.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                <strong>Error!</strong> Some error occurs while Banning user.
                </div>
                                
                <?php

            }

        }
    
    ?>

<?php
        
        if(!empty($_GET['Unban'])) {

            if($_GET['Unban']=="Success") {

                ?>

                    <div class="alert alert-success">
                    <button style="float: right;margin-top: -6px" class="btn btn-success" onclick="window.location='Users.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                    <strong>User unban!</strong> Selected user has been unban.
                    </div>

                <?php

            }
            else {

                ?>

                <div class="alert alert-danger">
                <button style="float: right;margin-top: -6px" class="btn btn-danger" onclick="window.location='Users.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                <strong>Error!</strong> Some error occurs while unbanning user.
                </div>
                                
                <?php

            }

        }
    
    ?>
                        
                        <?php
        
        if(!empty($_GET['Unregistered'])) {

            if($_GET['Unregistered']=="Success") {

                ?>

                    <div class="alert alert-success">
                    <strong>User Unregistered!</strong> Selected user has been unregistered.
                    </div>

                <?php

            }
            else {

                ?>

                <div class="alert alert-danger">
                <strong>Error!</strong> Some error occurs while unregistering user.
                </div>
                                
                <?php

            }

        }
    
    ?>
                        
                          
                                <?php 

                                    $users="select * from users where Role=2 order by User_ID DESC";
                                    $usersres=$con->query($users);

                                    foreach($usersres as $usersrow) {
                                ?>
                                <div class="col-lg-12 col-md-12 col-sm-12"  style="margin-top: 25px;padding: 5px;margin-bottom: 25px;background-color: #f5f5f5;padding:20px;box-shadow: 0px 0px 10px rgba(0,0,0,0.2)">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                    <?php if($usersrow['Registered']=="True") { ?>
                                        <span title="Registered User" class="glyphicon glyphicon-ok-sign" style="font-size: 30px;color:#ef6600;position: absolute;background-color: rgba(0,0,0,0.6);border-radius: 50%;padding: 15px"></span>
                                        </button></a>
                                        <?php } ?>
                                            <img src="<?php echo $usersrow['User_Image'] ?>" width="100%" style="border-radius: 50%;">
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-6">
                                      <div class="col-md-9">
                                        <h5><strong>First Name : </strong> <?php echo $usersrow['First_Name'] ?></h5>
                                        <h5><strong>Last Name : </strong> <?php echo $usersrow['Last_Name'] ?></h5>
                                        <h5><strong>Email : </strong> <?php echo $usersrow['Email'] ?></h5>
                                        <!-- <h5><strong>Password : </strong> <?php echo $usersrow['Password'] ?></h5> -->
                                        <h5><strong>Signup Date : </strong> <?php echo $usersrow['Signup_Date'] ?></h5>
                                        <h5><strong>From : </strong> <?php echo $usersrow['Country'] ?></h5>
                                  
                                      </div>
                                      <div class="col-md-3">
                                        <?php
                                        
                                        
                                        ?>
                                        <h5><?php 

                                            $totalfollow="select count(*) as count from follow where `Following_User`='".$usersrow['User_ID']."'";
                                            $totalfollowres=$con->query($totalfollow);
                                            foreach($totalfollowres as $totalfollowrow) {
                                                echo "<strong style='color:#ff6a00;font-size:25px;'>".thousandsCurrencyFormat($totalfollowrow['count'])."</strong><br>Followers"; 
                                            }

                                        ?>
                                        </h5>
                                        <h5>
                                          <?php 

                                                $totalLike="select count(*) as count from likes where `Image_ByUserID`='".$usersrow['User_ID']."'";
                                                $totalLikeres=$con->query($totalLike);
                                                foreach($totalLikeres as $totalrow) {
                                                    echo "<strong style='color:#ff6a00;font-size:25px;'>".thousandsCurrencyFormat($totalrow['count'])."</strong><br>Likes"; 
                                                }

                                            ?>
                                        </h5>
                                        <h5>
                                          <?php 
                                          
                                          $totaldownloads="select sum(Downloads) as sum from images where `Image_ByUser`='".$usersrow['User_ID']."'";
                                          $totalres=$con->query($totaldownloads);
                                          foreach($totalres as $totalrow) {
                                              echo "<strong style='color:#ff6a00;font-size:25px;'>".thousandsCurrencyFormat($totalrow['sum'])."</strong><br>Downloads"; 
                                          }
                                          ?>
                                        </h5>
                                      </div>
                                      <div class="col-md-12">
                                        <hr>
                                      <?php if($usersrow['Registered']=="True") { ?>
                                            <a style="cursor: pointer;color:black" href="Users.php?id=<?php echo $_GET['id']; ?>&unregisteruser=<?php echo $usersrow['User_ID'] ?>" onclick="return confirm('Are you sure you want unregistered the user?')"><button class="btn btn-primary">
                                        <span class="	glyphicon glyphicon-remove-sign"></span> Unregister
                                        </button></a>
                                        <?php } ?>
                                        
                                        <a style="cursor: pointer;color:black" href="Users.php?id=<?php echo $_GET['id']; ?>&dltuser=<?php echo $usersrow['User_ID'] ?>" onclick="return confirm('Are you sure you want to delete?')"><button class="btn btn-danger">
                                            <span class="glyphicon glyphicon-trash"></span> Delete
                                        </button></a>
                                        <?php if($usersrow['Ban']=="" || $usersrow['Ban']=="False") { ?>
                                        <a style="cursor: pointer;color:black" href="Users.php?id=<?php echo $_GET['id']; ?>&banid=<?php echo $usersrow['User_ID'] ?>" onclick="return confirm('Are you sure you want to ban?')"><button class="btn btn-default">
                                            <span class="	glyphicon glyphicon-ban-circle"></span> Ban
                                        </button></a>
                                        <?php }
                                        else {
                                          ?>
                                          <a style="cursor: pointer;color:black" href="Users.php?id=<?php echo $_GET['id']; ?>&unbanid=<?php echo $usersrow['User_ID'] ?>" onclick="return confirm('Are you sure you want to ban?')"><button class="btn btn-default">
                                            <span class="	glyphicon glyphicon-ban-circle"></span> Unban
                                        </button></a>
                                          <?php
                                        } ?>
                                      </div>
                                        </div>
                                    </div>  
                                <?php 
                                    }
                                ?>
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