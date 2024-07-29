<?php include('header.php')?>
<div class="container">
  <?php echo anchor('Home/InsertPage','Add Record',['class'=>'btn btn-primary'])?>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Customer Name</th> 
      <th>Phone</th>
      <th>Address</th>
      <th>City</th>
      <th>Country</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach( $rd as $row) {?>
    <tr>
      <td><?php echo $row->id ?></td>
      <td><?php echo $row->customername ?></td>
      <td><?php echo $row->Phone ?></td>
      <td><?php echo $row->Address ?></td>
      <td><?php echo $row->City ?></td>
      <td><?php echo $row->Country ?></td>
     <td><?php echo anchor("Home/UpdateAction/{$row->id}","Update",["class"=>"btn btn-primary"]) ?></td>
      <td><?php echo anchor("Home/DeleteAction/{$row->id}",'Delete',['class'=>'btn btn-danger'])?></td>
      
    </tr>
  <?php } ?>
  </tbody>
</table> 
 </div>
 <?php include('footer.php')?>
