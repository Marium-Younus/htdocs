$(document).ready(function(){
	$("#client_btn").on("click",function(e){
		e.preventDefault();
		var SweetAlert = function () {};
		var client_name = $("#client_name").val();
		var client_contact = $("#client_contact").val();
		var client_email = $("#client_email").val();
		var client_dob = $("#client_contact").val();
		var client_cnic = $("#client_cnic").val();
		var client_pan = $("#client_pan").val();
		var client_address = $("#client_address").val();
		var client_city = $("#client_city").val();
		var client_state = $("#client_state").val();
		var client_pin = $("#client_pin").val();
		var client_occupation = $("#client_occupation").val();
		var client_organization = $("#client_pan").val();
		var client_designation = $("#client_designation").val();
		var client_source = $("#client_source").val();
		if(client_name==""){
		   $("#client_name").addClass("border border-danger");
		   }else{
		   $("#client_name").removeClass("border-danger").addClass("border-primary");
		}
		
		if(client_contact==""){
		   $("#client_contact").addClass("border border-danger");
		   }else{
		   $("#client_contact").removeClass("border-danger").addClass("border-primary");
		}
		
		if(client_email==""){
		   $("#client_email").addClass("border border-danger");
		   }else{
		   $("#client_email").removeClass("border-danger").addClass("border-primary");
		}
		
		if(client_dob==""){
		   $("#client_dob").addClass("border border-danger");
		   }else{
		   $("#client_dob").removeClass("border-danger").addClass("border-primary");
		}
		
		if(client_cnic==""){
		   $("#client_cnic").addClass("border border-danger");
		   }else{
		   $("#client_cnic").removeClass("border-danger").addClass("border-primary");
		}
		
		if(client_pan==""){
		   $("#client_pan").addClass("border border-danger");
		   }else{
		   $("#client_pan").removeClass("border-danger").addClass("border-primary");
		}
		
		if(client_address==""){
		   $("#client_address").addClass("border border-danger");
		   }else{
		   $("#client_address").removeClass("border-danger").addClass("border-primary");
		}
		
		if(client_city==""){
		   $("#client_city").addClass("border border-danger");
		   }else{
		   $("#client_city").removeClass("border-danger").addClass("border-primary");
		}
		
		if(client_state==""){
		   $("#client_state").addClass("border border-danger");
		   }else{
		   $("#client_state").removeClass("border-danger").addClass("border-primary");
		}
		
		if(client_pin==""){
		   $("#client_pin").addClass("border border-danger");
		   }else{
		   $("#client_pin").removeClass("border-danger").addClass("border-primary");
		}
		
		if(client_occupation==0){
		   $("#client_occupation").addClass("border border-danger");
		   }else{
		   $("#client_occupation").removeClass("border-danger").addClass("border-primary");
		}
		
		if(client_organization==""){
		   $("#client_organization").addClass("border border-danger");
		   }else{
		   $("#client_organization").removeClass("border-danger").addClass("border-primary");
		}
		
		if(client_designation==""){
		   $("#client_designation").addClass("border border-danger");
		   }else{
		   $("#client_designation").removeClass("border-danger").addClass("border-primary");
		}
		
		if(client_source==0){
		   $("#client_source").addClass("border border-danger");
		   }else{
		   $("#client_source").removeClass("border-danger").addClass("border-primary");
		}		
		
		if(client_name!="" && client_contact!="" && client_email!="" && client_dob!="" && client_cnic!="" && 
		   client_pan!="" && client_address!="" && client_city!="" && client_state!="" && client_pin!="" && 
		   client_occupation!=0 && client_organization!="" && client_designation!="" &&  client_source!=0){
		   $.ajax({
			url: "Ajax/add_client.php",
			type: "POST",
			data: $("#add_client").serialize(),
			success: function(data){
				if(data.success == 1){
					SweetAlert.prototype.init = function () {
							swal(
								{
									position: 'top-end',
									type: 'success',
									title: 'New Client Added',
									showConfirmButton: false,
									timer: 1500
								}
							)
					},
						$.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
					(window.jQuery),
						function ($) {
						"use strict";
						$.SweetAlert.init()
					}(window.jQuery);
				}
				else{
					SweetAlert.prototype.init = function () {
							swal(
								{
									type: 'error',
									title: 'Oops...',
									text: data,
								}
							)
					},
						$.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
					(window.jQuery),
						function ($) {
						"use strict";
						$.SweetAlert.init()
					}(window.jQuery);					
				}
			}
		   }); 
		}			
	});
});