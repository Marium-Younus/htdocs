<?php include('header.php') ;

?>
<?php echo form_open_multipart('Home/Save',['class'=>'form-horizontal'])?>
<div class="container" style="margin-top:-80px;border-radius:10px;background-color:#E3E4E7">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="form-group">
<br/>
    <h5>Electronics Product</h5>
<hr style="background-color:#E06287">
  </div>
  <div class="form-group">
    <?php echo form_input(['name'=>'pro_name','class'=>'form-control', 'placeholder'=>'Product Name','value'=>set_value('pro_name')])?>
    
  </div>
  <div class="form-group">
   
    <input type="file" class="form-control" name="pro_image" />
  </div>
  <div class="form-group">
  <?php echo form_input(['name'=>'pro_price','class'=>'form-control', 'placeholder'=>'Product Price','value'=>set_value('pro_price')])?>
  </div>
  <div class="form-group">
            <input type="submit" value="Save"  class="btn btn-block" style="background-color:#A0628C"/>
  </div>
 
  <hr style="background-color:#E06287">


</div>
<div class="col-md-2"></div>



</div>






</div>
<?php echo form_close()?> 