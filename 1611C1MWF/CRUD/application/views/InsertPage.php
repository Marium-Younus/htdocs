<?php include('header.php')?>
<div class="container">
    <?php echo form_open('Home/Save',['class'=>'form-horizontal'])?>
    <fieldset>
    <legend>Customer Record</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">CustomerName</label>
      <div class="col-md-10">
        <?php echo form_input(['name'=>'customername','class'=>'form-control',
                                'placeholder'=>'Enter Customer name','value'=>set_value('customername')])?>
        <?php echo form_error('customername') ?>
      </div>
    
    </div>  
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Phone</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'Phone','class'=>'form-control',
        'placeholder'=>'Enter Phone number','value'=>set_value('Phone')])?>
        <?php echo form_error('Phone') ?>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'Address','class'=>'form-control','placeholder'=>'Enter Address','value'=>set_value('Address')])?>
        <?php echo form_error('Address') ?>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">City</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'city','class'=>'form-control','placeholder'=>'Enter Cty','value'=>set_value('city')])?>
        <?php echo form_error('city') ?>
      </div>
      
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Country</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'country','class'=>'form-control','placeholder'=>'Enter Country','value'=>set_value('country')])?>
        <?php echo form_error('country') ?>
      </div>
    
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
          <?php echo form_submit(['value'=>'Insert','class'=>'btn btn-success'])?>
          <?php echo form_submit(['value'=>'Cancel','class'=>'btn btn-default','type'=>'reset'])?>  
      </div>
    </div>
  </fieldset>
<?php echo form_close()?>
</div>
<?php include('footer.php')?>