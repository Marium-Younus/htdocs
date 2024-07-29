<?php include("header.php")?>


<div class="container">
<div class="col-md-12">
<?php echo anchor('Home/create','Add Customer','btn btn-primary')?>

</div>

<div class="col-md-12">
<table class="table table-hover">
  <thead>
  <tr class="table-active">
    
    <th>Customer Name</th>
    <th>Phone</th>
    <th>Address</th>
    <th>City</th>
    <th>Country</th>
    <th colspan=2>Action</th>
  </tr>
  </thead>
  <tbody>
    <?php if(count($rec)):?>
    <?php foreach($rec as $row) {?>
    <tr>
      <td><?php echo $row->customername ?></td>
      <td><?php echo $row->phone ?></td>
      <td><?php echo $row->address ?></td>
      <td><?php echo $row->city ?></td>
      <td><?php echo $row->country ?></td>
      <td><?php echo anchor("Home/Edit/{$row->id}",'Update',['class'=>'btn btn-primary']) ?></td>
      <td><?php echo anchor("Home/Delete/{$row->id}",'Delete',['class'=>'btn btn-danger']) ?></td>
    </tr>
    <?php } ?>
    <?php else: ?>
    <tr>
      <td>No Record Found</td>
    </tr>
<?php endif;?>
    
  </tbody>
</table>

</div>


</div>

















<?php include("footer.php")?>