<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Record</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/custom.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <div class="bg-dark">
            <h1 class="text-center text-white">PHP with Ajax</h1>
            <div id="search-bar" style="float:right">
                <label for="search" class="text-white">Search </label>
                <input type="text" id="search" autocomplete="off">
            </div>
            
          <center> 
            <table class="table" id="form-table">
                <form id="reloadform">
                <tr>
                    <td class="text-white">Name : <input type="text" id="s_name" class="form-control"></td>
                    <td class="text-white">Subject : <input type="text" id="s_sub" class="form-control"></td>
                    <td class="text-white">Age : <input type="text" id="s_age" class="form-control"></td>
                    <td ><input  type="submit"  id="save-button" value="Save Data" class="btn btn-success"/</td> 
                </tr>
                </form>
            </table> 
          </center> 
            <hr>   
            <div id="error-message" class="bg-danger text-white text-center"></div> 
            <div id="success-message" class="bg-success text-white text-center"></div> 
        </div>

        <table class="table" id="main-table">      
        </table>


          
        <!-----------------------------Edit Div-------------------->
        
            
        <div id="model" class="modal">
            <!-- Modal content -->
            <div class="modal-content" id="modal-content">
            <span class="close" id="close">&times;</span>
                <h2 class="text-center text-primary">Edit Form</h2>
                <table class="table">                    
                </table> 
            </div>
        </div>

        </div>
    
    </div>
      <script src="js/jquery-3.6.0.min.js"></script>
      <script type="text/javascript">
            $(document).ready(function(){
                 //-------------------------------Show Work
                function loadTable()
                {
                    $.ajax({
                    url: "php_show.php",
                    type:"POST",
                    success:function(data){
                    $("#main-table").html(data)
                    } 
                    });
                }
                loadTable();
                 //-------------------------------Insert Work
                $("#save-button").on("click",function(e){
                    e.preventDefault(); // default programming end
                    var name = $("#s_name").val();
                    var subject = $("#s_sub").val();
                    var age = $("#s_age").val();
                    if(name == "" || subject == "" || age == "")
                    {
                        $("#error-message").html("All feilds are required").slideDown();
                        $("#success-message").slideUp();
                    }
                   else
                   {
                        $.ajax({
                        url  : "php_insert.php",
                        type :"POST",
                        data : {n:name ,s:subject,a:age}, // data pass here as object via key:value pair 
                        success:function(data)
                            {    
                                if(data == 1)
                                {
                                    loadTable();
                                    $("#reloadform").trigger("reset");//reset the form
                                    $("#success-message").html("Data Inserted Successfully").slideDown();
                                    $("#error-message").slideUp(); 
                                }
                                else
                                {
                                    alert("Can't Save Record");
                                    $("#error-message").html("Can't Save Record").slideDown();
                                    $("#success-message").slideUp(); 
                                }            
                            } 
                        });   
                   }
                    
                });

                //-------------------------------Delete Work
                //-----Button is dymanically call by ajax to we cann't call event just we create selector on it
                $(document).on("click","#delete-btn",function(){
                    if(confirm("Do you want to delete this record ? ")) //javascript function
                    {
                        var studentId = $(this).data("id");
                        var element = this;
                        //alert(studentId); -----------Show ID

                        $.ajax({
                            url  : "php_delete.php",
                            type :"POST",
                            data : {d_id:studentId}, // data pass here as object via key:value pair
                            success:function(data)
                            {
                                if(data == 1)
                                {
                                    // var element is close the table 'tr' we cann't use 'this' here because 'this' is already used in ajax 
                                    $(element).closest("tr").fadeOut(); //---->this closest methis to check parent basically its a jquery method
                                }
                                else
                                {
                                    $("#error-message").html("Can't Delete Record").slideDown();
                                    $("#success-message").slideUp();
                                }
                            }
                        });
                    }
                });

                //-------------------------------Edit Work
                $(document).on("click","#edit-btn",function(){
                    $("#model").fadeIn();
                    var studentId = $(this).data("eid");
                    //alert(studentId);
                    $.ajax({
                            url:"php_loadupdate.php",
                            type:"POST",
                            data : {edit_id :studentId},
                            success: function(data)
                            {
                                if(data)
                                {
                                    $("#modal-content table").html(data)  
                                }
                            }
                    });   
                });
                $(document).on("click","#close",function(){
                    $("#model").fadeOut();
                });

                $(document).on("click","#update-button",function(){
                    var StdID = $("#e_s_id").val();
                    var StdName = $("#e_s_name").val();
                    var StdSubject = $("#e_s_sub").val();
                    var StdAge = $("#e_s_age").val();
                    $.ajax({
                        url:"php_update.php",
                            type:"POST",
                            data : {up_id :StdID ,up_name:StdName , up_subject:StdSubject ,up_age:StdAge},//pass value as an object
                            success: function(data)
                            {
                                if(data == 1)
                                {                             
                                    $("#model").fadeOut();
                                    loadTable();
                                }
                                else
                                {
                                    alert(data);
                                }
                            }
                    });
                });

                //----------------------------- Live Search
                $("#search").on("keyup",function(){
                 var searchterm = $(this).val();
                 $.ajax({
                        url:"php_search.php",
                            type:"POST",
                            data : {search :searchterm},//pass value as an object
                            success: function(data)
                            {
                                $("#main-table").html(data);
                            }
                    });
                });

                //---------------------------Pagination
                function loadTable(page){
                    $.ajax({
                        url:"php_pagination.php",
                            type:"POST",
                            data : {page_no :page},//pass value as an object
                            success: function(data)
                            {
                                $("#main-table").html(data);
                            }
                    });
                
                }
                loadTable();
            
                    //-------------------------Pagination Code
                    $(document).on("click","#pagination a",function(e){
                            e.preventDefault();
                            var page_id = $(this).attr("id");
                                      // alert(page_id)     
                                      
                            loadTable(page_id)

                                    });
                                  
            });
      </script>
</body>
</html>


