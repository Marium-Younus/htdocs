<?php include('header.php') ?>
<div class="container">
	<?php echo form_open("home/update/{$col->id}",['class'=>'form-horizontal'])?>  <!--loading the helper form-->
		  <fieldset>
		    <legend>Create Customer</legend>

		    <div class="row">
		    	<div class="col-md-6">
		    		<div class="form-group">
				      <label for="inputEmail" class="col-lg-4 control-label">Cutomer Name</label>
				      <div class="col-lg-8">				    
				        <?php echo form_input(['name'=>'customername','class'=>'form-control',
				        'placeholder'=>'Customer Name','value'=>set_value('customername',$col->customername)])?>
				      </div>
				    </div>
		    	</div>
		    	<div class="col-md-6">
							<?php echo form_error('customername'); ?>
		    	</div>
		  	</div>
		  	<div class="row">
		    	<div class="col-md-6">
		    		<div class="form-group">
				      <label for="inputEmail" class="col-lg-4 control-label">Phone</label>
				      <div class="col-lg-8">				    
				        <?php echo form_input(['name'=>'phone','class'=>'form-control',
				        'placeholder'=>'Phone Number','value'=>set_value('phone',$col->phone)])?>
				      </div>
				    </div>
		    	</div>
		    	<div class="col-md-6">
						<?php echo form_error('phone'); ?>
		    	</div>
		  	</div>

			<div class="row">
		    	<div class="col-md-6">
		    		<div class="form-group">
				      <label for="inputEmail" class="col-lg-4 control-label">Address</label>
				      <div class="col-lg-8">				    
				        <?php echo form_input(['name'=>'address','class'=>'form-control',
				        'placeholder'=>'Address','value'=>set_value('address',$col->address)])?>
				      </div>
				    </div>
		    	</div>
		    	<div class="col-md-6">
		    			<?php echo form_error('address'); ?>
		    	</div>
		  	</div>		 	
			<div class="row">
		    	<div class="col-md-6">
		    		<div class="form-group">
				      <label for="inputEmail" class="col-lg-4 control-label">City</label>
				      <div class="col-lg-8">				    
				        <?php echo form_input(['name'=>'city','class'=>'form-control',
				        'placeholder'=>'City','value'=>set_value('city',$col->city)])?>
				      </div>
				    </div>
		    	</div>
		    	<div class="col-md-6">
		    			<?php echo form_error('city'); ?>
		    	</div>
		  	</div>

			<div class="row">
		    	<div class="col-md-6">
		    		<div class="form-group">
				      <label for="inputEmail" class="col-lg-4 control-label">Country</label>
				      <div class="col-lg-8">				    
				        <?php echo form_input(['name'=>'country','class'=>'form-control',
				        'placeholder'=>'Country','value'=>set_value('country',$col->country)])?>
				      </div>
				    </div>
		    	</div>
		    	<div class="col-md-6">
		    			<?php echo form_error('country'); ?>
		    	</div>
		  	</div>
		  	

		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">		   
		        <?php echo form_submit(['value'=>'Submit','class'=>'btn btn-primary'])?>
		        <?php echo form_submit(['value'=>'Reset','class'=>'btn btn-default'])?>		       
		      </div>
		    </div>
		  </fieldset>
	<?php echo form_close()?> 
</div>
<?php include('footer.php') ?>