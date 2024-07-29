<?php
include("header.php");

?>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-1"  style="background-color:#fff;margin-top:50px;padding:20px;">

<h3><a class="btn btn-secondary" href="index.php"><i class="fa fa-plus"></i> Create New</a> Employee List</h3>
<?php
$connect = mysqli_connect("localhost","root","","company_db") or die("Connection a failed"); //1step
$query= "select * from employeetbl";
$execute = mysqli_query($connect,$query) or die("Query Unsuccessful");; //2step
if(mysqli_num_rows($execute))
{

?>
<table class="table table-stripped">
<thead>
    <tr>
    	<th>Id</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>City</th>
        <th></th>
    </tr>
    <tbody>
    <?php
	while($row=mysqli_fetch_assoc($execute))
	{
	?>
       <tr>
           <td><?php echo $row["emp_id"] ?></td>
           <td><?php echo $row["emp_name"] ?></td>
           <td><?php echo $row["emp_email"] ?></td>
           <td><?php echo $row["emp_mobile"] ?></td>
            <td><?php echo $row["emp_city"] ?></td>
           <td><a href="edit.php?id=<?php echo $row["emp_id"]; ?>"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a> &nbsp;&nbsp;
            <a href="#" ><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a></td>
       </tr>
       <?php
	}
	   ?>
    </tbody>
</thead>
</table>
<?php
}
else
{
	echo "<h5 class='text-danger'>No Record Found</h5>";
	

}
mysqli_close($connect);
?>
</div>
</div>

</div>


<?php
include("footer.php")

?>