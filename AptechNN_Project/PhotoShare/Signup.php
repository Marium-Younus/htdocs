<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhotoShare | Signup</title>
    <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="scrollbar1.css" rel="stylesheet" type="text/css">
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
    

@import url('https://fonts.googleapis.com/css?family=Numans');
.navbar-nav li a{

font-family: 'calibri';
letter-spacing: 1px;
}
.navbar-nav li{

    transform: scale(1,1);
    transition: 0.3s all;
    border-bottom-width: 2px;
    border-bottom-style: solid;
    border-bottom-color: #ededed;
    font-family: sans-serif;
}
.navbar-nav li:hover {
    background-color: #ededed;
    color: white;
    border-bottom-width: 2px;
    border-bottom-style: solid;
    border-bottom-color: #333;
    transition: 0.3s all;

}
/* .form-group input {
border:2px solid #ededed;
outline: none;
letter-spacing: 1px;
}
.form-group input:focus {
border:2px solid #fc6100;
} */






html,body{
background-image: url('WebsiteImages/signup.jpg');
background-size: cover;
background-position: center;
background-attachment: fixed;
background-repeat: no-repeat;
/* box-shadow: inset 0 0 0 1000px rgba(0,0,0,0.4); */
height: 100%;
}

#logindiv {
    margin-top: 30px;
    background:rgba(0,0,0,0.6);
    color:White;
    padding:20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.6);
    font-family: 'arial';
    position: relative;
    margin-bottom: 30px
}
.form-group h4 {
    font-weight: 100;
    font-family: 'calibri';
    font-size: 20px;
    letter-spacing: 0.5px
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

#lg {
    font-weight: bolder;
    animation-name: lgan;
    animation-direction: normal;
    animation-duration: 0.5s;
    animation-iteration-count: 1;
    animation-timing-function: ease;
    letter-spacing: 5px
}

@keyframes lgan {
    0%{letter-spacing: 30px}
    25%{letter-spacing: 25px}
    50%{letter-spacing: 20px}
    75%{letter-spacing: 10px}
    100%{letter-spacing: 5px}
}

footer {
    padding: 30px;
    background-color: #333;
    margin-top: 130px;
    color:white;
}

#hr {
    width: 100%;
    animation-name: hrr;
    animation-direction: normal;
    animation-duration: 0.5s;
    animation-iteration-count: 1;
    animation-timing-function: ease;
    
}
@keyframes hrr {
    0%{width: 0%}
    25%{width: 30%}
    50%{width: 60%}
    75%{width: 80%}
    100%{width: 100%}
}
.tt {
  border: none;outline: none;box-shadow: none;border-bottom: 2px solid white;
   border-radius: 0px;padding: 20px;
   margin-bottom: 20px;letter-spacing: 1px;
   background-color:rgba(0,0,0,0.6);
   color: white;
   transition: .4s all;
}
.tt:focus {
  border: none;outline: none;box-shadow: none;border-bottom: 2px solid #c70d00;
   border-radius: 0px;padding: 20px;
   margin-bottom: 20px;letter-spacing: 1px;
   transition: .4s all;
}
::selection {
    background-color: #ef6600;
    color: #000;
    text-decoration: none;
}
</style>

</head>
<body>
<?php
require_once "connection.php";


if(isset($_POST['signup'])) {

      
    // function get_curl($url)
    // {
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    // $res=curl_exec($ch);
    // curl_close($ch);
    // $result=json_decode($res,true);
    // return $result;
    // }
    // $apikey = "live_32a97476952b75faf8a08aafad6047140d1a10ef6cfa067fcfded3ae3a402f52";
    // $url = 'https://api.kickbox.io/v2/verify?email='.$_POST["email"].'&apikey='.$apikey;
    // $response = get_curl($url);
    // if($response['reason']=="accepted_email"){

        $countPending="select count(*) as count from pendingsignup where `User_Email`='".$_POST["email"]."'";
        $pendingResult=$con->query($countPending);

        foreach($pendingResult as $pendingRow) {

            if($pendingRow['count']=="0") {


                $countUser="select count(*) as count from users where `Email`='".$_POST["email"]."' or `Username`='".$_POST["uname"]."'";
                $userResult=$con->query($countUser);

                foreach($userResult as $userRow) {

                    if($userRow['count']=="0") {

                        $signup="insert into `pendingsignup`(`User_FirstName`, `User_LastName`, `User_Username`, `User_Email`, `User_Password`, `User_Role`, `Request_Date`) values ('".$_POST['fname']."','".$_POST['lname']."','".$_POST["uname"]."','".$_POST['email']."','".$_POST['pass']."',2,'".date("d-M-Y")."')";
                        $result=$con->query($signup);
                        if($result) {
                            echo "<script>
                            Swal.fire({
                            title: 'Success!',
                            text: 'Your Signup Request Successfully Send To Admin!',
                            type: 'success'
                            }).then(function() {
                                window.location='Signup.php';
                            });
                            </script>";
                        }
                        else {
                            echo "<script>
                            Swal.fire({
                            title: 'Error!',
                            text: 'Some Error Occurs While Creating Account.',
                            type: 'error'
                            }).then(function() {
                                window.location='Signup.php';
                            });
                            </script>";
                        }

                    }
                    else {
                        echo "<script>
                            Swal.fire({
                            title: 'Email Already Exist!',
                            text: ' Email You Entered Already Exist.',
                            type: 'info'
                            }).then(function() {
                                window.location='Signup.php';
                            });
                            </script>";
                    }
                }

            }
            else {
                echo "<script>
                            Swal.fire({
                            title: 'Pending!',
                            text: 'Your Email In Pending List Please Wait Till Admin Accept Of Reject Your Request.',
                            type: 'info'
                            }).then(function() {
                                window.location='Signup.php';
                            });
                            </script>";
                header("location:Signup.php?Pending=True");
            }
        }
    } 
//     else {
//         header("location:Signup.php?Email=False");
//     }

// }




?>



<nav class="navbar navbar-default" role="navigation" style="padding:0px;border-radius: 0px;border:none">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <?php if(!empty($_GET['id'])) { ?>
        <a href="index.php?id=<?php echo $_GET['id'] ?>"><img src="WebsiteImages/logo.png" style="width: 50%;margin-top: 10px;padding-bottom: 10px;margin-left: 10px"></a>
        <?php }
        else {
          ?>
          <a href="index.php"><img src="WebsiteImages/logo.png" style="width: 50%;margin-top: 10px;padding-bottom: 10px;margin-left: 10px"></a>
          <?php
        } ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="About.php">About Us</a></li>
            <li><a href="Contact.php">Contact Us</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
            <li><a href="Feedback.php">Feedback</a></li>
        </ul>
      
        <ul class="nav navbar-nav navbar-right">
             <li class="text-center"><a href="Login.php"><span class="glyphicon glyphicon-log-in" style="margin-left: 0px"></span> Login</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

<div class="container" id="con">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" id="logindiv">
        <h2 class="text-center" id="lg">SIGNUP</h2>
        <hr id="hr">

  
<!-- 
        <?php
        
            if(!empty($_GET['Pending'])) {

                if($_GET['Pending']=="True") {

                    ?>

                        <div class="alert alert-info">
                        <button style="float: right;margin-top: -6px" class="btn btn-primary" onclick="window.location='Signup.php'">Ok</button>
                        <strong>Pending!</strong> Your Email In Pending List Please Wait Till Admin Accept Of Reject Your Request.
                        </div>

                    <?php

                }

            }
        
        ?>

    <?php
        
        if(!empty($_GET['Exist'])) {

            if($_GET['Exist']=="True") {

                ?>

                    <div class="alert alert-info">
                    <button style="float: right;margin-top: -6px" class="btn btn-primary" onclick="window.location='Signup.php'">Ok</button>
                    <strong>Email Or Username Already Exist!</strong> Email/Username You Entered Already Exist. <a href="Login.php" style="text-decoration: underline;color:black">Login</a>
                    </div>

                <?php

            }

        }
    
    ?>


        <?php
        
            if(!empty($_GET['Status'])) {

                if($_GET['Status']=="Success") {

                    ?>

                        <div class="alert alert-success">
                        <button style="float: right;margin-top: -6px" class="btn btn-success" onclick="window.location='Signup.php'">Ok</button>
                        <strong>Success!</strong> Your Signup Request Successfully Send To Admin.
                        </div>

                    <?php

                }
                else {

                    ?>

                    <div class="alert alert-danger">
                    <strong>Error!</strong> Some Error Occurs While Sending Request.
                    </div>
                                    
                    <?php

                }

            }
        
        ?> -->
        
        <form action="Signup.php" method="post">
            <div class="form-group">
                <h4>First Name</h4>
                <input id="fname" class="form-control tt" type="text" name="fname" placeholder="Enter First Name" style="padding:20px" required minlength="3" maxlength="15">
            </div>
            <div class="form-group">
                <h4>Last Name</h4>
                <input id="lname" class="form-control tt" type="text" name="lname" placeholder="Enter Last Name" style="padding:20px" required minlength="3" maxlength="15">
            </div>
            <div class="form-group">
                <h4>Username</h4>
                <input id="uname" class="form-control tt" type="text" name="uname" placeholder="Enter Username" style="padding:20px" required minlength="3" maxlength="20">
                <h5 id="alert" style="display: none;color:red;font-weight: bold"></h5>
            </div>
            <script>

$("#uname").on('change paste keyup',function() {

var uname=$("#uname").val();
if(uname!="") {
$.ajax({
        type : 'post',
        url : 'checkusername.php', //Here you will fetch records 
        data :  {uname:uname}, //Pass $id
        success : function(data){
            if(data=="Not Taken") {
            document.getElementById('alert').style.display="none";
            document.getElementById('alert').innerText="";
            document.getElementById('btn').disabled = false;
            
            }
            else {
            document.getElementById('alert').style.display="block";
            document.getElementById('alert').innerText=data;
            document.getElementById('btn').disabled = true;
            }
        }
          
    
    });
}else {
    document.getElementById('alert').style.display="none";
    document.getElementById('alert').innerText="";
}
});

</script>
            <div class="form-group">
                <h4>Email Address</h4>
                <input id="email" class="form-control tt" type="email" name="email" placeholder="Enter Email" style="padding:20px" required>
            </div>
            <div class="form-group">
                <h4>Password<span style="float:right;cursor: pointer" class="glyphicon glyphicon-eye-close" id="eye" onclick="showhidepass();"></span></h4>
                <input id="pass" class="form-control tt" type="password" name="pass" placeholder="Enter Password" style="padding:20px" required minlength="8" maxlength="15">
            </div>
            <input type="submit" value="Signup" id="btn" name="signup">
        </form>
      
        <br>
        <h4 style="text-align: center;font-size: 15px">Already have an account? <a href="Login.php" style="text-decoration: underline;color:white;">Login</a></h4>
        
    </div>
</div>

<script>

function showhidepass() {

    var x = document.getElementById("pass");
    var y=document.getElementById("eye");
  if (x.type === "password") {
    x.type = "text";
    y.setAttribute("class","glyphicon glyphicon-eye-open");
  } else {
    x.type = "password";
    y.setAttribute("class","glyphicon glyphicon-eye-close");
  }

}

</script>
</body>
</html>