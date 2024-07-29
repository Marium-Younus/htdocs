<?php
include '../db/queries.php';
$function = $_POST['dashboard'];

switch ($function) {
		//============================ Admin Edit ============================
	case 'show_admin':
		$admin_info = admin_table();
		$show_admin = "";
		while($row = mysqli_fetch_assoc($admin_info)){
			$show_admin .= '<center>
			                   <div class="avatar-upload">
									<div class="avatar-edit">
										<input type="button" id="admin_edit" data-backdrop="static" data-toggle="modal" data-target="#login-modal" data-eid='.$row["admin_id"].'/>
										<label for="admin_edit"></label>
									</div>
									<div class="avatar-preview">
									<div id="imagePreview" style="background-image: url('."vendors/images/".$row["admin_image"].');"></div>
									</div>
								</div>
								<h3 class="h3 p-3">'.$row["admin_name"].'</h3>							
								<div class="container">
									<div class="row border-bottom">
										<div class="col-md-6 border-right">
											<p class="h5">Admin</p>
											<p>Admin</p>
										</div>
										<div class="col-md-6 border-left">
											<p class="h5">'.$row["admin_name"].'</p>
											<p>Name</p>
										</div>
									</div>
									<div class="row border-top">
										<div class="col-md-6 border-right">
											<p class="h5">'.$row["admin_email"].'</p>
											<p>Email</p>
										</div>
										<div class="col-md-6 border-left">
											<p class="h5">'.$row["admin_number"].'</p>
											<p>Phone</p>
										</div>
									</div>
								</div>
								</center>	
								';
			echo $show_admin;
		}break;
		
		//============================ Admin Edit ============================
    case 'admin_edit':
        $admin_id = $_POST["admin_id"];
        $admin_update = admin_edit($admin_id);
        $output="";
        while($admin_data = mysqli_fetch_assoc($admin_update)){
	    $output .= '
	    <input type="hidden"  value="'.$admin_data["admin_id"].'" id="admin_id" name="admin_id"/>
	    <input type="hidden"  value="'.$admin_data["admin_image"].'" id="hidden" name="hidden"/>
	               <div class="input-group custom">	                    
						<input type="text" class="form-control form-control-lg" placeholder="Username" value="'.$admin_data["admin_name"].'" id="admin_name" name="admin_name"/>
						<div class="input-group-append custom">
							<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
						</div>
					</div>
					<div class="input-group custom">
						<input type="email" class="form-control form-control-lg" placeholder="Email" value="'.$admin_data["admin_email"].'" id="admin_email" name="admin_email"/>
						<div class="input-group-append custom">
							<span class="input-group-text"><i class="icon-copy dw dw-email1"></i></span>
						</div>
					</div>
					<div class="input-group custom">
						<input type="password" class="form-control form-control-lg" placeholder="**********" value="'.$admin_data["admin_password"].'" id="admin_password" name="admin_password"/>
						<div class="input-group-append custom">
							<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
						</div>
					</div>
					<div class="input-group custom">
						<input type="text" class="form-control form-control-lg" placeholder="Number" value="'.$admin_data["admin_number"].'" id="admin_number" name="admin_number"/>
						<div class="input-group-append custom">
							<span class="input-group-text"><i class="icon-copy dw dw-smartphone2"></i></span>
						</div>
					</div>
					<div class="input-group custom">					
						<input type="file" class="form-control form-control-lg" id="admin_image" name="admin_image"/>
						<div class="input-group-append custom">
							<span class="input-group-text"><i class="icon-copy dw dw-image1"></i></span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-0">
								<button class="btn btn-primary btn-lg btn-block" id="admin_update" type="submit" data-dismiss="modal" aria-hidden="true">Update</button>
							</div>
						</div>
					</div>
	    ';	
	    echo $output;
        }break;
		//============================ Admin Update ============================
	case 'admin_update':
		$admin_id = $_POST["admin_id"];
        $admin_name = $_POST["admin_name"];
        $admin_email = $_POST["admin_email"];
        $admin_password = $_POST["admin_password"];
        $admin_number = $_POST["admin_number"];
        $admin_image = $_FILES["admin_image"]["name"];
        $tempname = $_FILES["admin_image"]["tmp_name"];
        $hidden = $_POST["hidden"];
        if(empty($_FILES["admin_image"]["name"])){
        	admin_update($admin_id,$admin_name,$admin_email,$admin_password,$admin_number,$hidden);
        	echo "<script>alert('record updated')</script>";
        }else{
        	echo "<script>alert('record Not updated')</script>";
        }
        if(!empty($_FILES["admin_image"]["name"])){
        	if(move_uploaded_file($tempname,"images/".$admin_image)){
        		admin_update($admin_id,$admin_name,$admin_email,$admin_password,$admin_number,$admin_image);
        		echo "<script>alert('record updated')</script>";
        	}
        }else{
        	echo "<script>alert('record Not updated')</script>";
        }
        		break;
        		
            default:
                //function not found, error or something
                break;
        }
?>