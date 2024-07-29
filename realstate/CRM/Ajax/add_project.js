$(document).ready(function(){
	$("#add_project").on("submit", function(e){
		e.preventDefault();
		var formdata = new FormData(this);
		var SweetAlert = function () {};
		var project_name = $("#project_name").val();
		var project_location = $("#project_location").val();
		var project_area = $("#project_area").val();
		var project_description = $("#project_description").val();
		
		if(project_name==""){
		   $("#project_name").addClass("border border-danger");
		   }else{
		   $("#project_name").removeClass("border-danger").addClass("border-primary");
		   }
		
		if(project_location==""){
		   $("#project_location").addClass("border border-danger");
		   }else{
		   $("#project_location").removeClass("border-danger").addClass("border-primary");
		   }
		
		if(project_area==""){
		   $("#project_area").addClass("border border-danger");
		   }else{
		   $("#project_area").removeClass("border-danger").addClass("border-primary");
		   }
		
		if(project_description==""){
		   $("#project_description").addClass("border border-danger");
		   }else{
		   $("#project_description").removeClass("border-danger").addClass("border-primary");
		   }
		
		if(project_name!="" && project_location!="" && project_area!="" && project_description!=""){
			$.ajax({
			url: "Ajax/add_project.php",
			type: "POST",
			data: formdata,	
			contentType: false,
			processData: false,
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