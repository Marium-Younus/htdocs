<?php include('header.php') ;
//session_start();
?>

<div class="container">



<?php
echo '<pre>';
	//print_r($records);
echo '</pre>';
?>
<div class="row">
		<div class="col-md-12">
			<?php echo anchor('Home/create','Add Record',['class'=>'btn btn-success']) ?>
		
		</div>
</div>

<br/>

<table class="table table-bordered table-striped table-hover ">
  <thead>
    <tr>
      <th>Customer Name</th>
      <th>Phone</th>
      <th>Address</th>
      <th>City</th>
      <th>Country</th>
      <th>Operation</th>
    </tr>
  </thead>
  <tbody>
  	<?php if(count($records)): ?>
  		<?php foreach($records as $row) { ?>
			    <tr>
			      <td><?php echo $row->customername ?></td>
			      <td><?php echo $row->phone        ?></td>
			      <td><?php echo $row->address      ?></td>
			      <td><?php echo $row->city         ?></td>
			      <td><?php echo $row->country       ?></td>
			      <td>
			      	<?php echo anchor("Home/edit/{$row->id}",'Update',['class'=>'btn btn-primary']);      ?>
			        <?php echo anchor("Home/delete/{$row->id}","Delete",['class'=>'btn btn-danger']);      ?>
			      </td>
			    </tr>
		<?php } ?>
	<?php else: ?>
				<tr>
					<td colspan="6">No Record Found</td>
				</tr>
	<?php endif; ?>
  </tbody>
</table> 
</div>

<?php include('footer.php') ?>


