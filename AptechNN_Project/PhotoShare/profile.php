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
    <title>PhotoShare | My Profile</title>
    <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="scrollbar1.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="tags.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="tags.js"></script>
  


    <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">


<script src="jquery.min.js"></script>  
		<script src="bootstrap.min.js"></script>
		<script src="croppie.js"></script>
		<link rel="stylesheet" href="croppie.css" />

		<script>
			$(function() {
				$("#testInput").tags({
					unique: true,
				});
			});
		</script>
  <style>

/* body {
  overflow-x: hidden;
}     */

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





/* html,body{
background-image: url('WebsiteImages/login.jpg');
background-size: cover;
background-position: center;
background-attachment: fixed;
background-repeat: no-repeat;
/* box-shadow: inset 0 0 0 1000px rgba(0,0,0,0.4); */

} */

#logindiv {
    margin-top: 100px;
    background:rgba(0,0,0,0.6);
    color:White;
    padding:20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.6);
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
    background-color: black;font-family: 'Berlin Sans FB';
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


savepic
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
      transform: translateY(-90%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(-90%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }



 .slideanimm {visibility:hidden;}
  .slideee {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(-90%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(-90%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }  
#head {
    width: 100%;
    height: 92.6vh;
    /* background-image: url('WebsiteImages/header.jpg'); */
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: -20px;
    position: relative;
    padding-top: 165px;
    padding-bottom: 260px;
    animation-name: m;
    animation-play-state: running;
    animation-direction: forward;
    animation-duration: 20s;
    animation-iteration-count: infinite;
    margin-bottom: 100px;
}

@-webkit-keyframes m {
  0%   {background-image: url('WebsiteImages/header.jpg')}
  25%  {background-image: url('WebsiteImages/header1.jpg')}
  50%  {background-image: url('WebsiteImages/header4.jpg')}
  75%  {background-image: url('WebsiteImages/header3.jpg')}
  100% {background-image: url('WebsiteImages/header.jpg')}
}
.fit-image {
    width: 100%;
    height: 100%;
    padding: 10px
}

#r {
    height: 200px;
    padding:30px;
    background-color: #f0f0f0;
    margin-left:47px;
    margin-right:47px;
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.3);
    border:2px solid rgba(0,0,0,0.2)
}
#r p {
    margin-top: 30px;
    text-align: center;
    font-size: 15px;
    color:#a1a1a1
}
#r span {
    width: 100%;
    font-size: 50px;
    text-align: center;
    color: white;
    text-shadow: 0px 0px 5px rgba(0,0,0,0.3);
}


#btn {
    width:100%;
    height: 50px;
    font-size: 15px;
    letter-spacing: 1px;
    background-color: black;font-family: 'Berlin Sans FB';
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
#pr {
    overflow: hidden;
    border-radius: 50%;
}
#pr #hh {
    width: 100%;
    height: 50%;
    background:rgba(0,0,0,0.6);
    position: absolute;

      cursor: pointer;
      margin-top:100%;
      text-align: center;
      transition: .5s all;
    }

    #pr #hh:hover {
    width: 100%;
    height: 50%;
    background:rgba(0,0,0,0.8);
    position: absolute;

      cursor: pointer;
      margin-top:50%;
      text-align: center;
    }
    #hh h3 {
        margin-top: 20px;
         color:white
    }
    #pr:hover > #hh {
      margin-top:50%;
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



#h4 a {
  text-decoration: none;
  color: white;
}


#dww {
  animation-name: dd;
  animation-duration: 1s;
  animation-iteration-count: 1;
  animation-play-state: running;
  animation-timing-function: ease;
}
@keyframes dd {
  from { margin-left: 100%;opacity: 0}
  to { margin-left: 0%;opacity: 1}
}

#fiv #rp {
  float:right;color:white;
  margin-top: 10px
            }


            #fiv #p {
              color:white;margin-top:130px;font-family: 'calibri';
            }

            #mgal {
              font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center
            }
@media only screen and (max-width: 600px) {
          #kk {
            margin-top: 100px;
            height: 500px

          }

          .col-lg-12 #fiv {
              margin-top: -80px;
              display: block;
              transition: 1s display;
              background-color: rgba(0,0,0,0);
              position: absolute;
             
          }
          
          .col-lg-12 #fiv #h4 a {
              text-decoration: none;
              color: #171717;
              
            }
            .col-lg-12 #fiv #rp {
  float:right;color:#171717;  margin-top: 10px
            }
            .col-lg-12 #fiv #p {
              color:white;margin-top:140px;
              background: rgba(0,0,0,0.6);
              padding: 10px;
              width: 190px;font-family: 'calibri';text-align: center
            }
            .col-lg-12 #fiv p {
              color:white;
              background: rgba(0,0,0,0.6);
              padding: 10px;
              width: 100%;
              text-align: center
            }
            #mgal {
              font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center;margin-bottom: 80px
            }
            #head {
    width: 100%;
    height: 92.6vh;
    /* background-image: url('WebsiteImages/header.jpg'); */
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: -20px;
    position: relative;
    padding-top: 165px;
    padding-bottom: 260px;
    animation-name: m;
    animation-play-state: running;
    animation-direction: forward;
    animation-duration: 20s;
    animation-iteration-count: infinite;
    margin-bottom: 100px;
}

@-webkit-keyframes m {
  0%   {background-image: url('WebsiteImages/header.jpg')}
  25%  {background-image: url('WebsiteImages/header1.jpg')}
  50%  {background-image: url('WebsiteImages/header4.jpg')}
  75%  {background-image: url('WebsiteImages/header3.jpg')}
  100% {background-image: url('WebsiteImages/header.jpg')}
}
#btn {
    width:100%;
    height: 50px;
    font-size: 15px;
    letter-spacing: 1px;
    background-color: black;font-family: 'Berlin Sans FB';
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
 
#pr #hh {
    width: 100%;
    height: 50%;
    background:rgba(0,0,0,0.6);
    position: absolute;

      cursor: pointer;
      margin-top:60%;
      text-align: center;
      transition: .5s all;
    }

    #pr #hh:hover {
    width: 100%;
    height: 50%;
    background:rgba(0,0,0,0.8);
    position: absolute;

      cursor: pointer;
      margin-top:60%;
      text-align: center;
    }
    #hh h3 {
        margin-top: 20px;
         color:white
    }
    #pr:hover > #hh {
      margin-top:60%;
      transition: .5s all;
    }
 
        } 

/* max 2 */


@media only screen and (max-width: 768px) {
          #kk {
            margin-top: 100px;
            height: 500px

          }

          .col-lg-12 #fiv {
              margin-top: -80px;
              display: block;
              transition: 1s display;
              background-color: rgba(0,0,0,0);
              position: absolute;
             
          }
          
          .col-lg-12 #fiv #h4 a {
              text-decoration: none;
              color: #171717;
              
            }
            .col-lg-12 #fiv #rp {
  float:right;color:#171717;  margin-top: 10px
            }
            .col-lg-12 #fiv #p {
              color:white;margin-top:140px;
              background: rgba(0,0,0,0.6);
              padding: 10px;
              width: 190px;font-family: 'calibri';text-align: center
            }
            .col-lg-12 #fiv p {
              color:white;
              background: rgba(0,0,0,0.6);
              padding: 10px;
              width: 100%;text-align: center
            }
            #mgal {
              font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center;margin-bottom: 80px
            }
            #head {
    width: 100%;
    height: 92.6vh;
    /* background-image: url('WebsiteImages/header.jpg'); */
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: -20px;
    position: relative;
    padding-top: 165px;
    padding-bottom: 260px;
    animation-name: m;
    animation-play-state: running;
    animation-direction: forward;
    animation-duration: 20s;
    animation-iteration-count: infinite;
    margin-bottom: 100px;
}

@-webkit-keyframes m {
  0%   {background-image: url('WebsiteImages/header.jpg')}
  25%  {background-image: url('WebsiteImages/header1.jpg')}
  50%  {background-image: url('WebsiteImages/header4.jpg')}
  75%  {background-image: url('WebsiteImages/header3.jpg')}
  100% {background-image: url('WebsiteImages/header.jpg')}
}
#btn {
    width:100%;
    height: 50px;
    font-size: 15px;
    letter-spacing: 1px;
    background-color: black;font-family: 'Berlin Sans FB';
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


#pr #hh {
    width: 100%;
    height: 50%;
    background:rgba(0,0,0,0.6);
    position: absolute;

      cursor: pointer;
      margin-top:60%;
      text-align: center;
      transition: .5s all;
    }

    #pr #hh:hover {
    width: 100%;
    height: 50%;
    background:rgba(0,0,0,0.8);
    position: absolute;

      cursor: pointer;
      margin-top:60%;
      text-align: center;
    }
    #hh h3 {
        margin-top: 20px;
         color:white
    }
    #pr:hover > #hh {
      margin-top:60%;
      transition: .5s all;
    }
 
        } 






        /* .form-group input {
border:2px solid #ededed;
outline: none;
letter-spacing: 1px;
}
.form-group input:focus {
border:2px solid #fc6100;
} */

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

/* 
.alert {
  opacity: 0;
  animation-name: al;
    animation-play-state: running;
    animation-direction: forward;
    animation-duration: 2s;
    animation-iteration-count: 1;
}
@-webkit-keyframes al {
  from {opacity: 1}
  to {opacity: 0;display: none;}
  
} */

/* #disc{
  background-color: black
} */
#discdiv {
  width: 250px;height: auto;background-color: white;margin-left: -92px;border-radius: 3px;color:black;display: block;background-color: #f5f5f5;text-align: justify;padding: 10px;word-wrap:break-word;margin-top: 10px
}


/* #discdiv table {
  margin-top: 20px;
} */
.tt {
  border: none;outline: none;box-shadow: none;border-bottom: 2px solid gray;
   border-radius: 0px;padding: 20px;
   margin-bottom: 20px;letter-spacing: 1px;
   transition: .4s all;
}
.tt:focus {
  border: none;outline: none;box-shadow: none;border-bottom: 2px solid #fc6100;
   border-radius: 0px;padding: 20px;
   margin-bottom: 20px;letter-spacing: 1px;
   transition: .4s all;
}




img {
    pointer-events: none;
}
::selection {
    background-color: #ef6600;
    color: #000;
    text-decoration: none;
}

li a:hover > #noti {
  font-size: 15px;font-weight: bolder;
  animation-name: no;animation-play-state: running;
  animation-duration: 0.1s;
  animation-iteration-count: infinite;
  animation-direction: normal;
  
  
}
@keyframes no {
  from{transform: rotate(20deg)}
  to{transform: rotate(-20deg)}
}


#srchUserh4 {
color:#333;text-decoration: none;width: 100%;background-color: #f7f7f7;padding: 10px;border-radius: 5px;
}
#srchUserh4:hover {
color:#333;text-decoration: none;width: 100%;background-color: #cfcfcf;padding: 10px;border-radius: 5px;transition: 0.5s all;
}

</style>
</head>
<body onload="load()">

<a href="#top"><button id="myBtn" title="Go to top"><span class="	glyphicon glyphicon-chevron-up"></span></button></a>
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



if(!empty($_SESSION['useremail'])) {


  if(!empty($_GET['imgid'])) {
       $dltinglike="delete from `save` where Save_ImageID='".$_GET['imgid']."'";
       $dltimgres2=$con->query($dltinglike);
       if($dltimgres2) {
            $dltingsave="delete from `likes` where Like_ImageID='".$_GET['imgid']."'";
            $dltimgres3=$con->query($dltingsave);
            if($dltimgres2) {
                    $dltingimage="delete from `images` where Image_ID='".$_GET['imgid']."'";
                    $dltimgres1=$con->query($dltingimage);
                    if($dltimgres1) {
                        echo "<script>
                        
                            Swal.fire({
                                title: 'Deleted!',
                                text: 'Image Has Been Deleted!',
                                type: 'success'
                            }).then(function() {
                              window.location='profile.php?id=".$_GET['id']."';
                          });
                
                    </script>";
                
                    }
              }
        }
     }


 


  if(isset($_POST['savepic'])) {
    $updatepic="update images set `Image_Name`='".$_POST['imgnamee']."',`Image_Tags`='".$_POST['imgtagss']."' where Image_ID='".$_POST['imgidd']."'";
    $updatepicres=$con->query($updatepic);
    if($updatepicres) {
      echo "<script>
       
      Swal.fire({
          title: 'Updated!',
          text: 'Image Has Been Updated!',
          type: 'success'
      }).then(function() {
        window.location='profile.php?id=".$_GET['id']."';
    });

</script>";
    }
  }


    // if(isset($_POST['upload'])) {

    //     if(!empty($_FILES["img"]["name"])){
    //         $folder="UploadedImages/";
    //         $tempPath=$_FILES["img"]["tmp_name"];
    //         $path=$folder.$_FILES["img"]["name"];
      
    //         move_uploaded_file($tempPath,$path);
            
    //         $upload="insert into images(`Image_Name`, `Image_Tags`, `Image_File`, `Image_ByUser`, `Image_Date`) values ('".$_POST['imgname']."','".$_POST['testInput']."','".$path."','".$_GET['id']."','".date("d-m-Y")."')";
    //     }

    // }
if(isset($_POST['savebio'])) {
    $savebio="update users set Bio='".$_POST['bio']."',Country='".$_POST['ctry']."',WorkAt='".$_POST['work']."',WorkAtLink='".$_POST['worklink']."' where User_ID='".$_GET['id']."'";
    $biores=$con->query($savebio);
    if($biores) {
        echo "<script>
        Swal.fire({
          title: 'Updated!',
          text: 'Bio Has Been Updated!',
          type: 'success'
      }).then(function() {
        window.location='profile.php?id=".$_GET['id']."';
    });
        </script>";
    }
}



if(isset($_POST['saveUserName'])) {
  $saveusername="update users set First_Name='".$_POST['editfname']."', Last_Name='".$_POST['editlname']."' where User_ID='".$_GET['id']."'";
    $saveusernameres=$con->query($saveusername);
    if($saveusernameres) {
        echo "<script>
        Swal.fire({
          title: 'Updated!',
          text: 'Username Has Been Updated!',
          type: 'success'
      }).then(function() {
        window.location='profile.php?id=".$_GET['id']."';
    });
        </script>";
    }
}

if(isset($_POST['saveProfilePic'])) {
    $folder="UserImages/";
            $tempPath=$_FILES["img"]["tmp_name"];
            $path=$folder.$_FILES["img"]["name"];
      
            move_uploaded_file($tempPath,$path);

            $imagedata = getimagesize($path);
            
            if($imagedata[0]>0 && $imagedata[0]==$imagedata[1]) {
                        
                $savepic="update users set User_Image='".$path."' where User_ID='".$_GET['id']."'";
                $picres=$con->query($savepic);
                if($picres) {
                    echo "<script>
                    Swal.fire({
                      title: 'Updated!',
                      text: 'Profile Image Has Been Updated!',
                      type: 'success'
                      }).then(function() {
                        window.location='profile.php?id=".$_GET['id']."';
                    });
                    </script>";
                }
             }
             else {
              echo "<script>window.location='profile.php?id=".$_GET['id']."&Update=False'</script>";
             }
}

if(isset($_POST['changePw'])) {
  $getpw="select * from users where User_ID='".$_GET['id']."'";
  $getpwres=$con->query($getpw);
  foreach($getpwres as $getpwrow) {


    if($_POST['prepass']==$getpwrow['Password']) {

      $changepw="update users set Password='".$_POST['newpass']."' where User_ID='".$_GET['id']."'";
      $changepwres=$con->query($changepw);
      if($changepwres) {
          echo "<script>Swal.fire({
            title: 'Changed!',
            text: 'Password Has Been Changed.',
            type: 'success'
        }).then(function() {
          window.location='profile.php?id=".$_GET['id']."';
      });'</script>";
      }
      else {
        echo "<script>window.location='profile.php?id=".$_GET['id']."&Change=False'</script>";
      }

    }
    else {
      echo "<script>window.location='profile.php?id=".$_GET['id']."&PreChange=False'</script>";
    }


  }

}

if(!empty($_GET['Reg'])) {

  if($_GET['Reg']=="True") {

    $checkreg="select count(*) as count from reg_apply where `Reg_ApplyUser`='".$_GET['id']."'";
    $checkregres=$con->query($checkreg);
    foreach($checkregres as $checkregrow) {

      if($checkregrow['count']==1) {
          echo "<script>Swal.fire({
            title: 'Send Successfully!',
            text: 'Your Registration Request Send Successfully.',
            type: 'success'
        }).then(function() {
          window.location='profile.php?id=".$_GET['id']."';
      });</script>";
      }
      else {
        $reg="insert into `reg_apply`(`Reg_ApplyUser`, `Red_ApplyDate`) values ('".$_GET['id']."','".date("d-m-Y")."')";
        $regres=$con->query($reg);
        if($regres) {
          echo "<script>window.location='profile.php?id=".$_GET['id']."&ApplyReg=True'</script>";
        }
        else {
          echo "<script>window.location='profile.php?id=".$_GET['id']."&ApplyReg=False'</script>";
        }
      }

    }

  }

}


?>

<nav class="navbar navbar-default" role="navigation" style="padding:0px;border-radius: 0px;border:none" id="top">
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
            <li><a href="index.php?id=<?php echo $_GET['id'] ?>">Home</a></li>
            <li><a href="About.php?id=<?php echo $_GET['id'] ?>">About Us</a></li>
            <li><a href="Contact.php?id=<?php echo $_GET['id'] ?>">Contact Us</a></li>
            <li><a href="FAQ.php?id=<?php echo $_GET['id'] ?>">FAQ</a></li>
            <li><a href="Feedback.php?id=<?php echo $_GET['id'] ?>">Feedback</a></li>
        </ul>
        <!-- <form class="navbar-form navbar-left" role="search" action="searchImage.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search Images" name="srch">
            </div>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" style="margin-left: 0px"></span></button>
        </form> -->
        <ul class="nav navbar-nav navbar-right">
            <li onclick="document.getElementById('username').value='';document.getElementById('results').innerHTML=''" data-toggle="modal" data-target="#srchuser"><a href="#"><span class="glyphicon glyphicon-search" style="margin-right: 5px"></span> Search User</a></li>
            <li><a href="upload.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-upload" style="margin-left: 0px"></span> Upload Image</a></li>
            <li style="background-color: #fc6100;color:white;border-bottom-color: black"><a style="color:white;font-weight: bold" href="profile.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-user" style="margin-left: 0px"></span> My Profile</a></li>
            <li><a href="index.php?id=<?php echo $_GET['id']; ?>&Action=Logout"><span class="glyphicon glyphicon-log-out" style="margin-left: 0px"></span> Logout</a></li>
            
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>







<div class="col-lg-12" style="margin-top: 50px;margin-bottom: 100px">
<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
<?php
        
        if(!empty($_GET['Change'])) {

            if($_GET['Change']=="True") {

                ?>

                    <div class="alert alert-success">
                    <button style="float: right;margin-top: -6px" class="btn btn-success" onclick="window.location='profile.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                    <strong>Password Changed!</strong> Your password has been changed successfully.
                    </div>
        <?php
            }  
            else {

        ?>

                        <div class="alert alert-danger">
                        <strong>Error!</strong> Some error occurs while cahing password.
                        </div>
                
        <?php

            }

        }

        ?>

<?php
        
        if(!empty($_GET['Reg'])) {

            if($_GET['Reg']=="Applied") {

                ?>

                    <div class="alert alert-info">
                    <button style="float: right;margin-top: -6px" class="btn btn-primary" onclick="window.location='profile.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                    <strong>Already Applied!</strong> Your registeration request is in pending.
                    </div>
        <?php
            }  }
            ?>


<?php
        
        if(!empty($_GET['ApplyReg'])) {

            if($_GET['ApplyReg']=="True") {

                ?>

                    <div class="alert alert-success">
                    <button style="float: right;margin-top: -6px" class="btn btn-success" onclick="window.location='profile.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                    <strong>Registeration Applied!</strong> Your registration request has been send to the admin.
                    </div>
        <?php
            }  
            else {

        ?>

                        <div class="alert alert-danger">
                        <button style="float: right;margin-top: -6px" class="btn btn-danger" onclick="window.location='profile.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                        <strong>Registeration Failed!</strong> Some error occurs while sending request.
                        </div>
                
        <?php

            }

        }

        ?>





<?php
        
        if(!empty($_GET['PreChange'])) {

            if($_GET['PreChange']=="False") {

                ?>

                    <div class="alert alert-danger">
                    <button style="float: right;margin-top: -6px" class="btn btn-danger" onclick="window.location='profile.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                    <strong>Warning!</strong> Your entered previous password does not match, Try again.
                    </div>
        <?php
            }  }
            ?>



<?php
        
        if(!empty($_GET['Update'])) {

            if($_GET['Update']=="True") {

                ?>

                    <div class="alert alert-success" id="alert1">
                    <button style="float: right;margin-top: -6px" class="btn btn-success" onclick="window.location='profile.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                    <strong>Image Updated!</strong> Image successfully updated.
                    </div>
        <?php
            }  
            else {

        ?>

                        <div class="alert alert-danger">
                        <button style="float: right;margin-top: -6px" class="btn btn-danger" onclick="window.location='profile.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                        <strong>Error!</strong> Image width and height must be equal. Like (500x500 pixels).
                        </div>
                
        <?php

            }

        }

        ?>

</div>

        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php 
                    $user="select * from users where User_ID='".$_GET['id']."'";
                    $resuser=$con->query($user);
                    foreach($resuser as $rowuser) {
            ?>

<div id="myBio" class="modal fade" role="dialog" style="background:rgba(0,0,0,0.8)">
  <div class="modal-dialog" style="top:5%">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Edit Bio</h4>
      </div>
      <div class="modal-body">
        <form action="profile.php?id=<?php echo $_GET['id']; ?>" method="post">
        <label>Bio</label>
              <textarea id="bio" name="bio" class="form-control tt" rows="1" placeholder="Enter Bio"><?php echo $rowuser['Bio'] ?></textarea> <br>
              
              <label>Country</label>
              <select id="ctry" name="ctry" style="width:100%;border-color: lightgray;padding: 10px;border-radius: 0px;border:none;border-bottom:2px solid gray;outline: none;margin-bottom: 25px;">
              <?php

$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

foreach($countries as $country) {
  ?>
  <option value="<?php echo $country ?>"><?php echo $country ?></option>
  
  <?php
}
?>
              </select>
              <label>Work At</label>
              <input type="text" class="form-control tt" name="work" placeholder="No Work Place..." value="<?php echo $rowuser['WorkAt'] ?>">
              <label>Link Of Work Place</label><p>i.e. ( Facebook Page / Website )</p>
              <input type="text" class="form-control tt" name="worklink" placeholder="Facebook Page Link Of Your Work Place..." value="<?php echo $rowuser['WorkAtLink'] ?>">
              <input type="hidden" value="<?php echo $rowuser['Country'] ?>" id="contry">
              <input type="submit" value="Save" id="btn" name="savebio">         
        </form>
        <script>
          function load() {
            document.getElementById('ctry').value=document.getElementById('contry').value;
          }
        </script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="uploadimageModal" class="modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content" style="margin-bottom: 100px;">
      		<!-- <div class="modal-header">
          <a href="profile.php?id=<?php echo $_GET['id']; ?>"><button class="btn btn-default" style="float:right" type="button">&times;</button></a>
        		<h4 class="modal-title">Upload & Crop Image</h4>
      		</div> -->
      		<div class="modal-body" style="height: 500px;overflow: scroll;overflow-x:hidden;padding-top: 20px">
        		<div class="row">
  					<div class="col-md-10 col-md-offset-1 text-center">
						  <div id="image_demo" style="width:350px; margin-top:10px"></div>
  					</div>
  					<div class="col-md-12" style="padding-top:20px;">
  				
						  <button class="crop_image" id="btn">Crop & Upload Image</button>
					</div>
				</div>
      		</div>
      		<div class="modal-footer">
        		<a href="profile.php?id=<?php echo $_GET['id']; ?>"><button class="btn btn-default" type="button">Close</button></a>
      		</div>
    	</div>
    </div>
</div>

<div id="myPic" class="modal fade" role="dialog" style="background:rgba(0,0,0,0.8)">
  <div class="modal-dialog" style="top:20%">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Update Profile Picture</h4>
      </div>
      <div class="modal-body">

      <br />
			<div class="panel panel-default">
          <div class="panel-heading">Select Profile Image</div>
  				<div class="panel-body">
  					<input type="file" name="upload_image" id="upload_image" style="display: none" />
            <button id="btn" onclick="document.getElementById('upload_image').click();">Choose File</button>
            
  				</div>
  			</div>









      <!-- <form action="profile.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
      <h4>Upload Image</h4>
      <p><span class="glyphicon glyphicon-info-sign"></span> Image width and hight must be equal eg.(500x500 pixels)</p>
      <input type="file" name="img" id="img" class="form-control tt" style="padding-top:20px;padding-bottom:40px;box-shadow: 0px 0px 10px rgba(0,0,0,0.1);border:2px solid rgba(0,0,0,0.3);"><br>
              <input type="submit" value="Save" id="btn" name="saveProfilePic">         
        </form> -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<input type="hidden" value="<?php echo $_GET['id'] ?>" id="myidd">
<script> 

$image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:400,
      height:400,
      type:'square' //circle
    },
    boundary:{
      width:430,
      height:430
    }
  });

  $('#upload_image').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
    $('#myPic').modal('hide');
    
  });

  $('.crop_image').click(function(event){
    var id=document.getElementById('myidd').value;
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"uploadprofile.php",
        type: "POST",
        data:{"image": response,id:id},
        success:function(data)
        {
          $('#uploadimageModal').modal('hide');
          window.location="profile.php?id="+id;
        }
      });
    })
  });






</script>

<div id="uname" class="modal fade" role="dialog" style="background:rgba(0,0,0,0.8)">
  <div class="modal-dialog" style="top:20%">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Edit Username</h4>
      </div>
      <div class="modal-body">
        
      <form action="profile.php?id=<?php echo $_GET['id']; ?>" method="post">
      <h4>First Name</h4>
      <input type="text" name="editfname" id="editfname" class="form-control tt" value="<?php echo $rowuser['First_Name'] ?>"><br>
      <h4>Last Name</h4>
      <input type="text" name="editlname" id="editlname" class="form-control tt" value="<?php echo $rowuser['Last_Name'] ?>"><br>
       <input type="submit" value="Save" id="btn" name="saveUserName">         
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div id="srchuser" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Search User</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <!-- <label for="username">Username</label> -->
          
          <input id="username" class="form-control tt" type="text" placeholder="Enter Username" name="username">
        </div>
        <table class="table table-hover">
          
            <h4><span class="glyphicon glyphicon-search"></span> Search Results</h4>
         <hr>
          <div class="col-lg-12" id="results" style="cursor: pointer">

          </div>
          
        </table>
      </div>
      
    </div>

  </div>
</div>

<script>

$("#username").on('change paste keyup',function() {
  var srch=$("#username").val();
  if(srch!="") {

var id=document.getElementById('uid').value;


$.ajax({
        type : 'post',
        url : 'searchuser.php', //Here you will fetch records 
        data :  {id:id,srch:srch}, //Pass $id
        success : function(data){

          $("#results").html(data);
                   
                }
          
    
    });
  }else {
    $("#results").html("");
  }
});

</script>


<div id="myPw" class="modal fade" role="dialog" style="background:rgba(0,0,0,0.8)">
  <div class="modal-dialog" style="top:20%">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Change Password</h4>
      </div>
      <div class="modal-body">
      <form action="profile.php?id=<?php echo $_GET['id']; ?>" method="post">
      <h4>Previous Password<span style="float:right;cursor: pointer" class="glyphicon glyphicon-eye-close" id="eye1" onclick="showhidepass1();"></span></h4>
      <input type="password" name="prepass" id="prepass" class="form-control tt"><br>

      <h4>New Password<span style="float:right;cursor: pointer" class="glyphicon glyphicon-eye-close" id="eye" onclick="showhidepass();"></span></h4>
      <input type="password" name="newpass" id="newpass" class="form-control tt" minlength="8" maxlength="15"><br>
              <input type="submit" value="Change Password" id="btn" name="changePw">         
        </form>
        <script>

function showhidepass() {

    var x = document.getElementById("newpass");
    var y=document.getElementById("eye");
  if (x.type === "password") {
    x.type = "text";
    y.setAttribute("class","glyphicon glyphicon-eye-open");
  } else {
    x.type = "password";
    y.setAttribute("class","glyphicon glyphicon-eye-close");
  }

}

function showhidepass1() {

var x = document.getElementById("prepass");
var y=document.getElementById("eye1");
if (x.type === "password") {
x.type = "text";
y.setAttribute("class","glyphicon glyphicon-eye-open");
} else {
x.type = "password";
y.setAttribute("class","glyphicon glyphicon-eye-close");
}

}


</script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

            <div class="col-lg-4 col-md-4 col-sm-5" id="pr" style="padding: 0px">
            
            <div id="hh">
            <h3 data-toggle="modal" data-target="#myPic"><span class="glyphicon glyphicon-camera" style="color:white;font-size: 25px"></span><br> Update Image</h3>
            </div>
            
            <img src="<?php echo $rowuser['User_Image'] ?>" width="100%" height="" style="border-radius: 50%">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-7">
            <div class="dropdown" style="float: right">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
  <span class="	glyphicon glyphicon-option-horizontal"></span></button>
  <ul class="dropdown-menu" style="margin-left: -120px;">
  <li data-toggle="modal" data-target="#uname"><a href="#">Edit Username</a></li>
  <li title="Edit Bio" data-toggle="modal" onclick="document.getElementById('bio').focus();" data-target="#myBio"><a href="#">Edit Abouts</a></li>

    <li data-toggle="modal" data-target="#myPw"><a href="#">Change Password</a></li>

    <?php if($rowuser['Registered']=="False") { ?>
      <li><a href="profile.php?id=<?php echo $_GET['id'] ?>&Reg=True">Apply For Registeration</a></li>
    <?php } ?>
    
  </ul>
</div>
    <h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri'"><?php echo $rowuser['First_Name']." ".$rowuser['Last_Name']; ?> 
    <?php if($rowuser['Registered']=="True") { ?>
    <span class="glyphicon glyphicon-ok-sign" style="color:#fc6100;font-size: 25px"></span>
    <?php } ?>
  </h1>
  <h4 style="font-weight: bold;color:#c8c8c8;font-family: calibri">@<?php echo $rowuser['Username']; ?></h4>    
  <?php if(!empty($rowuser['Country']) && !empty($rowuser['Bio'])) { ?>
    <h4 style="font-family: calibri"><?php echo $rowuser['Bio']; ?></h4>
    <h5><span class="	glyphicon glyphicon-map-marker"></span> From <strong><?php echo $rowuser['Country']; ?></strong></h5>
    <?php } ?>
    <?php if(!empty($rowuser['WorkAt'])) {
      
      if(!empty($rowuser['WorkAtLink'])) {
      ?>
      
    <h5><span class="glyphicon glyphicon-briefcase"></span> Work At <a href="<?php echo $rowuser['WorkAtLink'];  ?>" style="color:#000" title="Click here to open facebook page" target="_blank"><strong><?php echo $rowuser['WorkAt']; ?></strong></a></h5>
    <?php }else {
      ?>
       <h5><span class="glyphicon glyphicon-briefcase"></span> Work At <strong><?php echo $rowuser['WorkAt']; ?></strong></h5>
      <?php
    }
  
  } ?>

<?php 
  
  $countfollowing="select count(*) as count from follow where Follow_ByUser='".$_GET['id']."'";
  $countfollowingres=$con->query($countfollowing);

    foreach($countfollowingres as $countfollowingrow){
  ?>
    <h5 data-toggle="modal" data-target="#following" style="cursor: pointer" title="See Following Peoples"><span class="glyphicon glyphicon-flash"></span>  Following <strong><?php echo thousandsCurrencyFormat($countfollowingrow['count']); ?></strong></h5>
  <?php 

    } ?>
    
<hr>




<div id="following" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Following</h4>
      </div>
      <div class="modal-body">
        <?php 
        // SELECT `Follow_ID`, `Following_User`, `Follow_ByUser`, `Follow_Date` FROM `follow` WHERE 1
          $seefollow="select * from follow where Follow_ByUser='".$_GET['id']."'";
          $seefollowres=$con->query($seefollow);
          foreach($seefollowres as $seefollowrow) {
          
            $seeuser="select * from users where User_ID='".$seefollowrow['Following_User']."'";
            $seeuserres=$con->query($seeuser);

            foreach($seeuserres as $seeuserrow){
            ?>

<a href="userProfile.php?id=<?php echo $_GET['id'] ?>&userid=<?php echo $seeuserrow['User_ID'] ?>" style="color:#333;text-decoration: none;width: 100%;background-color: c7c7c7"><h4 style="color:#333;text-decoration: none;width: 100%;background-color: #f7f7f7;padding: 10px;border-radius: 5px;"><img src="<?php echo $seeuserrow['User_Image'] ?>" width="40px" height="40px" style="margin-right: 20px;border-radius: 50%"><?php echo $seeuserrow['First_Name'] ?> <?php echo $seeuserrow['Last_Name'] ?> 
<?php if($seeuserrow['Registered']=="True") { ?>
    <span class="glyphicon glyphicon-ok-sign" style="color:#fc6100;font-size: 15px"></span>
    <?php } ?></h4>
  </a>


            <?php
            }
          }

        
        ?>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>











<div id="followers" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Followers</h4>
      </div>
      <div class="modal-body">
        <?php 
        // SELECT `Follow_ID`, `Following_User`, `Follow_ByUser`, `Follow_Date` FROM `follow` WHERE 1
          $seefollow="select * from follow where Following_User='".$_GET['id']."'";
          $seefollowres=$con->query($seefollow);
          foreach($seefollowres as $seefollowrow) {
          
            $seeuser="select * from users where User_ID='".$seefollowrow['Follow_ByUser']."'";
            $seeuserres=$con->query($seeuser);

            foreach($seeuserres as $seeuserrow){
            ?>

<a href="userProfile.php?id=<?php echo $_GET['id'] ?>&userid=<?php echo $seeuserrow['User_ID'] ?>" style="color:#333;text-decoration: none;width: 100%;background-color: c7c7c7"><h4 style="color:#333;text-decoration: none;width: 100%;background-color: #f7f7f7;padding: 10px;border-radius: 5px;"><img src="<?php echo $seeuserrow['User_Image'] ?>" width="40px" height="40px" style="margin-right: 20px;border-radius: 50%"><?php echo $seeuserrow['First_Name'] ?> <?php echo $seeuserrow['Last_Name'] ?> 
<?php if($seeuserrow['Registered']=="True") { ?>
    <span class="glyphicon glyphicon-ok-sign" style="color:#fc6100;font-size: 15px"></span>
    <?php } ?></h4>
  </a>


            <?php
            }
          }

        
        ?>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>
    <h4 data-toggle="modal" data-target="#followers" style="cursor: pointer" title="Click to see your followers"><span class="glyphicon glyphicon-globe" style="color:#fc6100"></span> <span id="fll"></span></h4>
    <h4><span class="glyphicon glyphicon-download" style="color:#fc6100"></span> <span id="dwl"></span> Downloads</h4>
    <h4><span class="glyphicon glyphicon-heart" style="color:#fc6100"></span> <span id="lk"></span> Likes</h4>
    <input type="hidden" value="<?php echo $_GET['id'] ?>" id="uid">
<script>

setInterval(function(){ 
var id=document.getElementById('uid').value;
  $.ajax({
              type: "post",
                    url: "countlikes.php",
                    data: {id:id},
                    success: function (data1) {

                        $('#lk').html(data1);
                        
                    }
                  });


 }, 100);

 setInterval(function(){ 
var userid=document.getElementById('uid').value;
  $.ajax({
              type: "post",
                    url: "countfollow.php",
                    data: {userid:userid},
                    success: function (data1) {
              
                      if(data1=="1") {
                        $('#fll').html(data1+" Follower");
                      }
                      else {
                        $('#fll').html(data1+" Followers");
                      }
                        
                    }
                  });


 }, 100);



 setInterval(function(){ 
var idd=document.getElementById('uid').value;
  $.ajax({
              type: "post",
                    url: "countdownloads.php",
                    data: {idd:idd},
                    success: function (data1) {

                        $('#dwl').html(data1);
                        
                    }
                  });


 }, 100);
</script>


   <?php
   
   $totalc="select count(*) as count from images where `Image_ByUser`='".$_GET['id']."'";
   $totalcs=$con->query($totalc);
   foreach($totalcs as $totalr) {
   
   ?>
    <h4><span class="glyphicon glyphicon-picture" style="color:#fc6100"></span> <?php echo $totalr['count'] ?> out of 35 Images Uploaded</h4>

   <?php } ?>
   
    <!-- <br><h4 style="text-decoration: underline;color:#fc6100;cursor: pointer">Change Password</h4>
    <?php if($rowuser['Registered']=="False") { ?>
      <h4 style="text-decoration: underline;color:#fc6100;cursor: pointer" data-toggle="modal" data-target="#myPw">Apply For Registeration</h4>
    <?php } ?> -->
    <hr>
    <!-- <a href="LikedImages.php?id=<?php echo $_GET['id'] ?>" class="btn btn-default"><span class="glyphicon glyphicon-paperclip" style="margin-right: 5px"></span> Saved Images
      <?php 
        $countlikedimg="select count(*) as counts from likes where Like_ByUser='".$_GET['id']."' and Saved='True'";
        $countlikedimgres=$con->query($countlikedimg);
        foreach($countlikedimgres as $countlikedimgrow) {
          echo  "(".$countlikedimgrow['counts'].")";
        } ?>
    </a> -->

    <a href="saves.php?id=<?php echo $_GET['id'] ?>" class="btn btn-default"><span class="glyphicon glyphicon-paperclip" style="margin-right: 5px"></span> Saved Images
    <?php 
        $countlikedimg="select count(*) as counts from save where Save_ByUser='".$_GET['id']."' and Saved='True'";
        $countlikedimgres=$con->query($countlikedimg);
        foreach($countlikedimgres as $countlikedimgrow) {
          echo  "(".$countlikedimgrow['counts'].")";
        } ?>
  </a>
  
            </div>
    <?php  } ?>
        </div>
 </div>

<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12">

<!-- <div class="col-lg-12 col-md-12  col-sm-12">
  <div class="col-lg-3 col-md-3 col-sm-3">
  <label for="role">Sort Images</label>
  <select id="role" name="role" style="width:100%;border-color: lightgray;padding: 10px;border-radius: 0px;border:none;border-bottom:2px solid gray;outline: none;margin-bottom: 25px">
  <option style="padding: 10px;" value="Default">Default</option>      
  <option style="padding: 10px;" value="Most Likes">Most Likes</option>
        <option style="padding: 10px;" value="Most Downloads">Most Downloads</option>
  </select>
  </div>
</div> -->

<h1 id="mgal">My Gallery</h1>
    <div class="grid-padding">

        <div class="row">
        <?php 
    $countimg="select count(*) as counts from images where Image_ByUser='".$_GET['id']."'";
    $rescount=$con->query($countimg);
    foreach($rescount as $countrow) {
      if($countrow['counts']!=0) {
  
?>
<?php 

    $getimg="select * from images where Image_ByUser='".$_GET['id']."' order by Image_ID DESC";
    $resimg=$con->query($getimg);

    foreach($resimg as $imgrow) {
  
?>
<div class="modal" id="ppp" style="background:rgba(0,0,0,0.8)">
  <div class="modal-dialog" style="width:80%;margin: auto">
    <div class="modal-content" style="background:transparent;box-shadow: none;border:none;color:White;width: 100%;">

    <div class="modal-header" style="">
        <button type="button" style="color:white" class="close" data-dismiss="modal">&times;</button>
        <h4 id="modal-title"></h4>

      </div>
      <!-- Modal body -->
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2" id="imgshowid" style="overflow: hidden;margin-top: 10px;cursor: zoom-in" onclick="zoom()">
          <img src="" title="" id="popimg" class="img-responsive slideanimm" style="margin: auto;transform:scale(1,1);cursor: zoom-in;visibility: visible">
          <!-- <h1 style="position: absolute;top:40%;left:35%;color:rgba(255,255,255,0.3);font-weight: bold;font-size: 3vh">PhotoShare Image</h1>
          <p style="position: absolute;top:40%;left:35%;color:rgba(255,255,255,0.3);font-weight: bold">Download Image</p> -->
      </div>

      <!-- Modal footer -->
     

    </div>
  </div>
</div>
<script>
  function zoom() {
    var img=document.getElementById('imgshowid');
    var imgdiv=document.getElementById('imgshowid');
    imgdiv.style.overflow="visible";
    img.style.transition="0.5s all";
      img.style.transform="scale(1.3,1.3)";
      img.style.cursor="zoom-out";
      img.setAttribute("onclick","zoomout()");

    
  }
  function zoomout() {
    var img=document.getElementById('imgshowid');
    var imgdiv=document.getElementById('imgshowid');
    img.style.transition="0.5s all";
      img.style.transform="scale(1,1)";
      img.style.cursor="zoom-in";
      img.setAttribute("onclick","zoom()");
  }
</script>


<div id="editpic" class="modal fade" role="dialog" style="background:rgba(0,0,0,0.8)">
  <div class="modal-dialog" style="">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Edit Image</h4>
      </div>
      <div class="modal-body">
      <form action="profile.php?id=<?php echo $_GET['id'] ?>" method="post">
      <input id="imgidd" class="form-control tt" type="hidden" name="imgidd">
              <div class="form-group">
                <label for="imgnamee">Image Name</label>
                <input id="imgnamee" class="form-control tt" type="text" name="imgnamee">
              </div>
              <div class="form-group">
                <label for="imgtagss">Image Tags</label>
                <input id="imgtagss" class="form-control tt" type="text" name="imgtagss">
                <p style="margin-top: -15px;font-size: 13px"><span class="glyphicon glyphicon-info-sign"></span> Please seperate tags with comma.</p>
              </div> 
              <input type="submit" value="Save" id="btn" name="savepic">  
           
              
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




<div class="col-lg-4 col-md-6 col-sm-6" style="margin-top: 2.5px;padding: 5px;margin-bottom: 2.5px" id="kk">
            <?php 
                  $imgbyuser="select * from users where User_ID='".$imgrow['Image_ByUser']."'";
                  $resuser=$con->query($imgbyuser);
                  foreach($resuser as $rowuser) {
            ?>

            <div title="<?php echo $imgrow['Image_Name'] ?>" class="col-lg-12" id="imgs" style="padding: 0px;background-image: url('<?php echo $imgrow['Image_File'] ?>');height: 400px;background-size: cover;background-position: center;background-repeat: no-repeat;margin:0px;cursor: pointer">
               
                <div class="col-lg-12" id="fiv">
                    
                    <br>
                    <div class="dropdown" style="float: right;margin-top: 10px" title="Options">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
  <span class="	glyphicon glyphicon-option-horizontal"></span></button>
  <ul class="dropdown-menu" style="margin-left: -120px;">
  <li><a href="profile.php?id=<?php echo $_GET['id'] ?>&imgid=<?php echo $imgrow['Image_ID'] ?>" title="Delete Image"  onclick="return confirm('Are you sure you want to delete this image?')">Delete</a></li>
  <li><a id="ed" title="Edit Image Details" onclick="document.getElementById('imgidd').value='<?php echo $imgrow['Image_ID'] ?>';document.getElementById('imgnamee').value='<?php echo $imgrow['Image_Name'] ?>';document.getElementById('imgtagss').value='<?php echo $imgrow['Image_Tags'] ?>';" data-toggle="modal" data-target="#editpic">Edit</a></li>
  <!-- <div id="discdiv" class="text-center" title="Image Details">
 <h5 class="text-center"><span class="glyphicon glyphicon-info-sign"></span> Details</h5>
  <table class="table table-hover table-striped">
    <tr>
      <td><strong>Name</strong></td>
      <td><?php echo $imgrow['Image_Name'] ?></td>
    </tr>
    <tr>
      <td><strong>Tags</strong></td>
      <td><?php echo $imgrow['Image_Tags'] ?></td>
    </tr>
  </table>

        <h4 style="font-size: 15px;"><strong>Image Name :</strong> <?php echo $imgrow['Image_Name'] ?></h4>
        
<hr style="border-color: white;width: 50%">

        <h4 style="font-size: 15px;"><strong>Image Tags</strong></h4>
        <p style="border-radius: 10px;"><?php echo $imgrow['Image_Tags'] ?></p> 
</div> -->

  </ul>
</div>

<div class="dropdown" style="float: right;margin-top: 10px;margin-right: 10px;word-wrap: break-word;" title="Details">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
  <span class="glyphicon glyphicon-info-sign"></span></button>
  <ul class="dropdown-menu" style="margin-left: -210px;width: 250px;padding: 10px">
  <li style="word-wrap: break-word;">
  <div class="col-lg-12" style="cursor: default">
  <h4>Name</h4>
  <p><?php echo $imgrow['Image_Name'] ?></p>
  </div>
  <div class="col-lg-12">
  <h4>Tags</h4>
 <?php 

  $myString = $imgrow['Image_Tags'];
  $myArray = explode(',', $myString);
  foreach($myArray as $my_Array){
     ?>
     <p style="background-color: #f2f2f2;text-align: center;padding: 5px;border-radius: 5px;color:black"><?php echo $my_Array; ?></p>
     <?php  
  }
  ?>
  </div> 
            

  </li>
  <!-- <div id="discdiv" class="text-center" title="Image Details">
 <h5 class="text-center"><span class="glyphicon glyphicon-info-sign"></span> Details</h5> 
  <table class="table table-hover table-striped">
    <tr>
      <td><strong>Name</strong></td>
      <td><?php echo $imgrow['Image_Name'] ?></td>
    </tr>
    <tr>
      <td><strong>Tags</strong></td>
      <td><?php echo $imgrow['Image_Tags'] ?></td>
    </tr>
  </table>

                  </div> -->

  </ul>
</div>
                   
                        <h4 id="h4" title="<?php echo $rowuser['First_Name'] ?> <?php echo $rowuser['Last_Name'] ?>"><a href="profile.php?id=<?php echo $_GET['id'] ?>&userid=<?php echo $rowuser['User_ID'] ?>"><img src="<?php echo $rowuser['User_Image'] ?>" width="45px" height="45px" style="border-radius: 50%;margin-top: -5px"> <?php echo $rowuser['First_Name'] ?> <?php echo $rowuser['Last_Name'] ?></a>
                        <?php if($rowuser['Registered']=="True") { ?>
                    <span class="glyphicon glyphicon-ok-sign" style="color:#fc6100;font-size: 15px"></span>
                    <?php } ?>
                    <h5 style="font-weight: bold;color:#c8c8c8;font-family: calibri;margin-left: 50px;margin-top: -20px;">@<?php echo $rowuser['Username']; ?></h5> 
                      </h4>
      

                    <br><br>
                            
                            <?php  

                                  $imagedata = getimagesize($imgrow['Image_File']);
                                  $size=$imagedata[0]." x ".$imagedata[1];
                                  echo "<h5 id='p' style='font-weight: bold;'><span class='glyphicon glyphicon-fire' style='color:#fc6100;'></span> Size : ".$imagedata[0]." x ".$imagedata[1]."</h5>" ;

                            ?>
<?php
   
   $totalLike="select count(*) as count from likes where `Like_ImageID`='".$imgrow['Image_ID']."'";
   $totalLikeres=$con->query($totalLike);
   foreach($totalLikeres as $totalrow) {
   
   ?>

<p style="color:white;font-weight: bold;font-family: 'calibri'" id="like<?php echo $imgrow['Image_ID'] ?>"><span class="glyphicon glyphicon-heart" style="color:#fc6100"></span> Likes : <?php echo thousandsCurrencyFormat($totalrow['count']); ?></p>
    
    <?php } ?>
                         <p style="color:white;font-weight: bold;font-family: 'calibri'" id="dw<?php echo $imgrow['Image_ID'] ?>"><span class="glyphicon glyphicon-download" style="color:#fc6100"></span> Downloads : <?php echo thousandsCurrencyFormat($imgrow['Downloads']); ?></p>
                       
                        <button id="btn" onclick="document.getElementById('imgshowid').style.overflow='hidden';document.getElementById('modal-title').innerText='Picture By <?php echo $rowuser['First_Name'] ?> <?php echo $rowuser['Last_Name'] ?>';document.getElementById('popimg').src = '<?php echo $imgrow['Image_File'] ?>';document.getElementById('bbb').click();" style="background-color: rgba(0,0,0,0.6)">View Image <span class="glyphicon glyphicon-fullscreen"></span></button>
                        

                            
                </div>
                <button type="button" id="bbb" class="btn btn-primary" data-toggle="modal" data-target="#ppp" style="display: none">Open modal</button>
               
            </div>
            <?php } ?>
</div>
           

            
    <?php } ?>
    <?php }

    else {

      ?>
<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4">
  <img src="WebsiteImages/noimage.png" width="100%" title="No Images">
</div>

      <?php 
    }
  
  } ?>
        </div>

    </div>
</div>


<script>


$(document).ready(function(){










  // Add smooth scrolling to all links in navbar + footer link
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

   


});
</script>
<?php 
}
else {
    echo "<script> window.location='Login.php';</script>";
}
 ?>
</body>
</html>