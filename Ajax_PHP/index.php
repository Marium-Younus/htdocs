<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Record</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <div class="bg-dark">
            <h1 class="text-center text-white">PHP with Ajax</h1>
          <center> 
          <input type="button"  id="load-button" value="Load Data" class="btn btn-primary btn-lg"/>
          </center> 
            <hr>    
        </div>
    <table class="table" id="main-table">
       
    </table>
    </div>
      <script src="js/jquery-3.6.0.min.js"></script>
      <script type="text/javascript">
            $(document).ready(function()
            {
                $("#load-button").on("click",function()
                {
                    $.ajax({

                           url: "php_show.php",
                           type:"POST",
                           success:function(data){
                            $("#main-table").html(data)
                           } 
                    })
                           
                })
            })
      </script>
</body>
</html>


