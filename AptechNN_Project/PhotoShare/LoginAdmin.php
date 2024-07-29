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
    <title>PhotoShare | Login</title>
    <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
    <link href="scrollbar1.css" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
background-image: url('WebsiteImages/header4.jpg');
background-size: cover;
background-position: center;
background-attachment: fixed;
background-repeat: no-repeat;
/* box-shadow: inset 0 0 0 1000px rgba(0,0,0,0.4); */
height: 100%;
}

#logindiv {
    margin-top: 100px;
    background:rgba(255,255,255,0.2);
    color:White;
    padding:20px;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.9);
    font-family: 'arial';
    position: relative;
    margin-bottom: 30px;

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

    if(isset($_POST['login'])) {

      
                $login="select * from users where `Email`='".$_POST["email"]."' and `Password`='".$_POST["pass"]."'";
                $loginResult=$con->query($login);
                if(mysqli_num_rows($loginResult)=="1") {
                    $updatestatus="update users set Status='Online' where Email='".$_POST["email"]."'";
                    $statusresult=$con->query($updatestatus);
                    if($statusresult) {

                        foreach($loginResult as $loginRow) {

                            if($loginRow['Role']=="1" || $loginRow['Role']=="3") {
                                setcookie("username",$_POST["email"],time() + (86400 * 30));
                                $_SESSION['useremail']=$_POST["email"];
                                header("location:dashboard.php?id=".$loginRow['User_ID']);
                            }
                           
                        }

                    }
                }

                else {

                    header("location:Loginadmin.php?Status=False");
                }

        
       

}


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

    <!--Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
      
      
        <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Go To Home</a></li>
           
        </ul>
     </div>
</nav>

<div class="container" id="con">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" id="logindiv">
        <h2 class="text-center" id="lg">ADMIN LOGIN</h2>
        <hr id="hr">
        <?php
        
            if(!empty($_GET['Pending'])) {

                if($_GET['Pending']=="True") {

                    ?>

                        <div class="alert alert-info">
                        <button style="float: right;margin-top: -6px" class="btn btn-primary" onclick="window.location='Login.php'">Ok</button>
                        <strong>Pending!</strong> Your Email In Pending List Please Wait Till Admin Accept Of Reject Your Request.
                        </div>

                    <?php

                }

            }
        
        ?>

        <?php
            
            if(!empty($_GET['Status'])) {

                if($_GET['Status']=="False") {

                    ?>

                        <div class="alert alert-danger">
                            <button style="float: right;margin-top: -6px" class="btn btn-danger" onclick="window.location='Login.php'">Ok</button>
                            <strong>Error!</strong> Email Or Password Doesn't Match, <a href="Login.php" style="text-decoration: underline;color:black">Try Again</a>.
                        </div>

                    <?php

                }

            }
    
        ?>
        <?php
            
            if(!empty($_GET['Feedback'])) {

                if($_GET['Feedback']=="True") {

                    ?>

                        <div class="alert alert-info">
                        <button style="float: right;margin-top: -6px" class="btn btn-primary" onclick="window.location='Login.php'">Ok</button>
                            <strong>Login Account!</strong> Login Your Account To Send Feedback.
                        </div>

                    <?php

                }

            }
    
        ?>
        <form action="Loginadmin.php" method="post">
            <div class="form-group">
                <h4>Username</h4>
                <?php if(!empty($_COOKIE['username'])) { ?>
                <input id="email" class="form-control tt" type="text" name="email" value="<?php echo $_COOKIE['username'] ?>" placeholder="Enter Email" style="padding:20px">
                <?php }else {
                    ?>
                    <input id="email" class="form-control tt" type="text" name="email" placeholder="Enter Email" style="padding:20px" autocomplete="on">
                    <?php
                } ?>
            </div>
            <div class="form-group">
                <h4>Password<span style="float:right;cursor: pointer" class="glyphicon glyphicon-eye-close" id="eye" onclick="showhidepass();"></span></h4>
                <input id="pass" class="form-control tt" type="password" name="pass" placeholder="Enter Password" style="padding:20px">
            </div>
            <input type="submit" value="Login" id="btn" name="login">
        </form>
        
        <br>
        <h4 style="text-align: center;font-size: 15px">Only Admins Can Login Through This Page</h4>
        
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