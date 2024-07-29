$(document).ready(function(){
	$("#agent_btn").on("click", function(e){
		e.preventDefault();
		var SweetAlert = function () {};
		var agent_name = $("#agent_name").val();
		var agent_contact = $("#agent_contact").val();
		var agent_email = $("#agent_email").val();
		var agent_cnic = $("#agent_cnic").val();
		var agent_pan = $("#agent_pan").val();
		var agent_address = $("#agent_address").val();
		var agent_city = $("#agent_city").val();
		var agent_state = $("#agent_state").val();
		var agent_pin = $("#agent_pin").val();
		var agent_deal = $("#agent_deal").val();
		
		if(agent_name==""){
		   $("#agent_name").addClass("border border-danger");
		   }else{
			$("#agent_name").removeClass("border-danger").addClass("border-primary");
		}
		
		if(agent_contact==""){
		   $("#agent_contact").addClass("border border-danger");
		   }else{
			$("#agent_contact").removeClass("border-danger").addClass("border-primary");
		}
		
		if(agent_email==""){
		   $("#agent_email").addClass("border border-danger");
		   }else{
			$("#agent_email").removeClass("border-danger").addClass("border-primary");
		}
		
		if(agent_cnic==""){
		   $("#agent_cnic").addClass("border border-danger");
		   }else{
			$("#agent_cnic").removeClass("border-danger").addClass("border-primary");
		}
		
		if(agent_pan==""){
		   $("#agent_pan").addClass("border border-danger");
		   }else{
			$("#agent_pan").removeClass("border-danger").addClass("border-primary");
		}
		
		if(agent_address==""){
		   $("#agent_address").addClass("border border-danger");
		   }else{
			$("#agent_address").removeClass("border-danger").addClass("border-primary");
		}
		
		if(agent_city==""){
		   $("#agent_city").addClass("border border-danger");
		   }else{
			$("#agent_city").removeClass("border-danger").addClass("border-primary");
		}
		
		if(agent_state==""){
		   $("#agent_state").addClass("border border-danger");
		   }else{
			$("#agent_state").removeClass("border-danger").addClass("border-primary");
		}
		
		if(agent_pin==""){
		   $("#agent_pin").addClass("border border-danger");
		   }else{
			$("#agent_pin").removeClass("border-danger").addClass("border-primary");
		}
		
		if(agent_deal==""){
		   $("#agent_deal").addClass("border border-danger");
		   }else{
			$("#agent_deal").removeClass("border-danger").addClass("border-primary");
		}
		
		if(agent_name!="" && agent_contact!="" && agent_email!="" && agent_cnic!="" && agent_pan!="" && agent_address!="" &&
		  agent_city!="" && agent_state!="" && agent_pin!="" && agent_deal!=""){
		   $.ajax({
			url: "Ajax/add_agent.php",
			type: "POST",
			data: $("#add_agent").serialize(),
			success: function(data){
				if(data.success == 1){
					SweetAlert.prototype.init = function () {
							swal(
								{
									position: 'top-end',
									type: 'success',
									title: 'New Project Added',
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