<?php
$connect = mysqli_connect("localhost","root","","ajaxphp_db");
$query= "select * from student";
$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
if(mysqli_num_rows($result)  > 0)
{
    $output =  ' <table class="table" id="main-table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Age</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                <thead>';
    while($row=mysqli_fetch_assoc($result))
    {

        $output .= " <tbody>
                        <tr>
                         <th scope='row'>{$row["std_id"]}</th>
                         <td>{$row["std_name"]}</td>
                         <td>{$row["std_subject"]}</td>
                         <td>{$row["std_age"]}</td>
                         <td><button class='btn btn-primary' data-eid='{$row["std_id"]}' id='edit-btn'>Edit</button></td>
                         <td><button class='btn btn-danger' data-id='{$row["std_id"]}' id='delete-btn'>Delete</button></td>
                         </tr> ";
        
    }          
    $output .=  '</table>';
    mysqli_close($connect);
    echo $output;
}
else{
  echo "<h1>No Record Found</h1>";
}
?>


