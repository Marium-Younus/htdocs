<?php include('header.php') ;

?>
<div class="container">
<?php if(count($records)): ?>
<div class="row">
				<?php foreach($records as $row) { ?>

				<div class="col-md-4">
				<div class="card" >
				<img src="<?php echo "../Uploads/".$row->P_Image?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><?php echo $row->P_Name ?></h5>
					<p class="card-text"><?php echo "$ ".$row->P_Price ?></p>
					<a href="#" class="btn btn-primary">Update</a>
					<a href="#" class="btn btn-danger">Delete</a>
				</div>
				</div>
				</div>

				<?php } ?>
</div>
<?php else: ?>
				
					<div >No Record Found</div>
				
	<?php endif; ?>
	</div>