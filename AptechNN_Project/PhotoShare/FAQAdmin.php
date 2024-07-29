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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
    </style>
</head>
<body style="background-image: url('https://i2.wp.com/cftaft.com/wp-content/uploads/2016/03/white-background-wallpaper-2956247.jpg?ssl=1');background-size: cover;;background-repeat: no-repeat;background-attachment: fixed;background-position: center">

<?php 


if(!empty($_GET['faqid'])) {

    
    


    $delfaq="delete from faq where FAQ_ID='".$_GET['faqid']."'";
    $delfaqred=$con->query($delfaq);
    if($delfaqred) {
        echo "<script> window.location='FAQAdmin.php?id=".$_GET['id']."&Action=Deleted';</script>";
    }
    else {
        echo "<script> window.location='FAQAdmin.php?id=".$_GET['id']."&Action=NotDeleted';</script>";
    }
    

 

}

?>


<?php 

if(!empty($_SESSION['useremail'])) {


  
if(isset($_POST['addfaq'])) {
    $ans=mysqli_real_escape_string($con,$_POST['Answer']);
  $addfaq="insert into faq(`FAQ_Question`, `FAQ_Answer`) values ('".$_POST['Question']."','".$ans."')";
//   echo $addfaq;
  $addfaqres=$con->query($addfaq);
    if($addfaqres) {

      echo "<script> window.location='FAQAdmin.php?id=".$_GET['id']."&Status=Inserted';</script>";

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
                <li style="background:rgba(255, 17, 0,0.6)"><a href="FAQAdmin.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-question-sign" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> FAQ</a></li>
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

                    <div class="col-lg-6">
                    <h2 class="text-center" style="background-color: #c70d00;color:white;padding:20px;width: 100%;border-top-right-radius: 30px;border-top-left-radius: 30px"><span class="glyphicon glyphicon-question-sign"></span> Add FAQ</h2>
                      
                        <div class="col-lg-12" style="height:100%;background-color: white;box-shadow: 0px 0px 10px lightgray;margin-top: -10px;border-bottom-right-radius: 30px;border-bottom-left-radius: 30px;padding-top: 20px;padding-bottom: 20px">
                        <?php
        
                            if(!empty($_GET['Status'])) {

                                if($_GET['Status']=="Inserted") {

                                    ?>

                                        <div class="alert alert-success">
                                        <strong>FAQ Inserted!</strong> FAQ successfully inserted.
                                        </div>

                                    <?php

                                }
                                else {

                                    ?>

                                    <div class="alert alert-danger">
                                    <strong>Error!</strong> Some error occurs while inserted FAQ.
                                    </div>
                                                    
                                    <?php

                                }

                            }
                        
                        ?>

                        <form action="FAQAdmin.php?id=<?php echo $_GET['id'] ?>" method="post">

                            
                        <div class="form-group">
                            <label for="Question">Question</label>
                            <input id="Question" class="form-control" type="text" name="Question" placeholder="Enter Question">
                        </div>
                        <div class="form-group">
                            <label for="Answer">Answer</label>
                            <textarea id="Answer" class="form-control" name="Answer" rows="3" placeholder="Enter Answer"></textarea>
                        </div>
                        <input type="submit" value="Add FAQ" class="btn btn-success" name="addfaq">

                        </form>
                           
                        </div>
                    
                    </div>

                    <div class="col-lg-6">
                    <h2 class="text-center" style="background-color: #c70d00;color:white;padding:20px;width: 100%;border-top-right-radius: 30px;border-top-left-radius: 30px"><span class="glyphicon glyphicon-question-sign"></span> FAQ</h2>
                      
                        <div class="col-lg-12" style="height:100%;background-color: white;box-shadow: 0px 0px 10px lightgray;margin-top: -10px;border-bottom-right-radius: 30px;border-bottom-left-radius: 30px;padding-top: 20px;padding-bottom: 20px">
                        <?php
        
                            if(!empty($_GET['Action'])) {

                                if($_GET['Action']=="Deleted") {

                                    ?>

                                        <div class="alert alert-success">
                                        <strong>FQL Deleted!</strong> Selected FAQ has been deleted.
                                        </div>

                                    <?php

                                }
                                else {

                                    ?>

                                    <div class="alert alert-danger">
                                    <strong>Error!</strong> Some error occurs while deleting FAQ.
                                    </div>
                                                    
                                    <?php

                                }

                            }
                        
                        ?>

                                <table class="table table-hover table-bordered">
                                <tr>
                                    <th style="text-align: center">Question</th>
                                    <th style="text-align: center">Answer</th>
                                    <th style="text-align: center" colspan="2">Options</th>
                                </tr>
                            
                                <?php 

                                    $faq="select * from faq";
                                    $faqres=$con->query($faq);

                                    foreach($faqres as $faqrow) {
                                ?>

                                    <tr>
                                        <td style="text-align: center"><?php echo $faqrow['FAQ_Question'] ?></td>
                                        <td style="text-align: center"><?php echo $faqrow['FAQ_Answer'] ?></td>
                                        <td style="text-align: center">
                                            <a style="cursor: pointer;color:black" href="FAQAdmin.php?id=<?php echo $_GET['id']; ?>&faqid=<?php echo $faqrow['FAQ_ID'] ?>"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                        </td>

                                        
                                    </tr>
                                        
                                <?php 
                                    }
                                ?>
                            </table>
                           
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





});
</script>
    
</body>
</html>