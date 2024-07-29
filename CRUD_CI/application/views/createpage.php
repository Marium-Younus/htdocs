<?php include("header.php")?>
<div class="container">


<?php echo form_open('home/save',['class'=>'form-horizontal']) ?>
  <fieldset>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Customer Name</label>
      <div class="col-lg-6">
        <?php echo form_input(['name'=>'customername','class'=>'form-control',
                        'placeholder'=>'Customer Name','value'=>set_value('customername')])?>
      </div>
      <div class="col-lg-6">
      <?php echo form_error('customername')?>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Phone</label>
      <div class="col-lg-6">
      <?php echo form_input(['name'=>'phone','class'=>'form-control',
                            'placeholder'=>'phone','value'=>set_value('phone')])?>
      </div>
      <div class="col-lg-6">
      <?php echo form_error('phone')?>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-6">
      <?php echo form_input(['name'=>'address','class'=>'form-control',
                                'placeholder'=>'Address','value'=>set_value('address')])?>
      </div>
      <div class="col-lg-6">
      <?php echo form_error('address')?>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">City</label>
      <div class="col-lg-6">
      <?php echo form_input(['name'=>'city','class'=>'form-control',
                            'placeholder'=>'City','value'=>set_value('city')])?>
      </div>
      <div class="col-lg-6">
      <?php echo form_error('city')?>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Country</label>
      <div class="col-lg-6">
      <?php echo form_input(['name'=>'country','class'=>'form-control',
                            'placeholder'=>'Country','value'=>set_value('country')])?>
      </div>
      <div class="col-lg-6">
      <?php echo form_error('country')?>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10">
      <?php echo form_submit(['value'=>'Submit','class'=>'btn btn-primary'])?>
      <?php echo form_submit(['value'=>'Reset','class'=>'btn btn-info'])?>
      </div>
    </div>
    </fieldset>
<?php form_close()?>




    </div>








<?php include("footer.php")?>