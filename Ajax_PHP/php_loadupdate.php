<?php
$edit_id = $_POST["edit_id"];
$connect = mysqli_connect("localhost","root","","ajaxphp_db");
$query= "select * from student where std_id = $edit_id";
$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
if(mysqli_num_rows($result)  > 0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        $output = " <tr>
                    <td class='text-white'><input type='text' id='e_s_id' class='form-control' hidden value='{$row["std_id"]}'>
                    <input type='text' id='e_s_name' class='form-control' value='{$row["std_name"]}'></td> 
                    </tr>
                    <tr><td class='text-white'><input type='text' id='e_s_sub' class='form-control'  value='{$row["std_subject"]}'></td></tr>
                    <tr><td class='text-white'><input type='text' id='e_s_age' class='form-control' value='{$row["std_age"]}'></td></tr>
                    <tr><td ><input type='submit'  id='update-button' value='Edit Data' class='btn btn-primary'/</td></tr>  ";
        
    }          
    mysqli_close($connect);
    echo $output;
}

?>


