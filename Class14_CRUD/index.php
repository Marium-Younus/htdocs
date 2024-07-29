<?php
include("header.php");
if(isset($_POST["btn"]))
{
$connect = mysqli_connect("localhost","root","","company_db"); //1step
$query= "insert into employeetbl (emp_name,emp_email,emp_mobile,emp_city) 
				values 
				('".$_POST["fullName"]."','".$_POST["email"]."','".$_POST["mobile"]."','".$_POST["city"]."')";
$execute = mysqli_query($connect,$query); //2step
if($execute)
{
	$message = "Record Inserted";
}
else
{
	$message = "Record not Inserted";
}
mysqli_close($connect);
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-1"  style="background-color:#fff;margin-top:50px;padding:20px;">
        <h3>
            Insert Employee
        </h3>
            <form method="post">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="fullName" placeholder="Full Name" > 
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" > 
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Mobile" >   
                    </div>
                    <div class="form-group col-md-6">
                    <label>City</label>
                    <select class="form-control" name="city">
                    <option value="Karachi">Karachi</option>
                     <option value="Islamabad">Islamabad</option>
                      <option value="Lahore">Lahore</option>
                        <option value="Multan">Multan</option>
                    </select>
                    
                    </div>
                </div>
                <div class="form-group">
              <button type="submit" name="btn" class="btn btn-info"><i class="fa fa-database"></i> Submit</button>
                    <a class="btn btn-secondary" href="show.php"><i class="fa fa-list-alt"></i> View All</a>
                </div>
                
                <div class="form-group">
                <p><?php echo @$message?></p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>