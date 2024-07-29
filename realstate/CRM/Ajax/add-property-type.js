$(document).ready(function(){
var SweetAlert = function () {};
//	======================================= load Table =======================================
	function load_table(){
		$.ajax({
			url: "Ajax/add-property-type.php",
			type: "POST",
			data: {property_type: "property_type_table"},
			success: function(data){
				$("#property_type_table").html(data);
			}
		});
	}
	load_table();
//	======================================= Insert Record =======================================	
		$("#property-type-btn").on("click", function(e){
			e.preventDefault();
			var property_type = $("#property-type-name").val();
			if(property_type==""){
				SweetAlert.prototype.init = function () {
						//Custom Position Message
						swal({
							type: 'error',
							title: 'Oops...',
							text: 'Enter Property Type',
						})
					},
						$.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
				(window.jQuery),
					//initializing
					function ($) {
					"use strict";
					$.SweetAlert.init()
				}(window.jQuery);
			}
			if(property_type!=""){
				$("#property-type-name").removeClass("border border-danger");
				$.ajax({
				url: "Ajax/add-property-type.php",
				type: "POST",
				data: $("#add-property-type").serialize(),
				success: function(data){
					   SweetAlert.prototype.init = function () {
						//Custom Position Message
						swal({
							position: 'top-end',
							type: 'success',
							title: 'New Property Type Inserted',
							showConfirmButton: false,
							timer: 1500
						})
					},
						//init
						$.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
				(window.jQuery),
					//initializing
					function ($) {
					"use strict";
					$.SweetAlert.init()
				}(window.jQuery);
						load_table();
				}
				});
			}
		});
//	======================================= Edit Source =======================================	
	$(document).on("click", "#edit_id_btn", function(){
		var edit_id = $(this).data("eid");
		$.ajax({
			url: "Ajax/add-property-type.php",
			type: "POST",
			data: {property_type: "edit_property_type", edit_id: edit_id},
			success: function(data){
				$("#update_property_type").html(data);
			}
		});
	});
//	======================================= Update Source =======================================		
	$(document).on("click", "#update_property_type_btn", function(e){
		e.preventDefault();
		$.ajax({
			url: "Ajax/add-property-type.php",
			type: "POST",
			data: $("#update_property_type").serialize(),
			success: function(data){
				SweetAlert.prototype.init = function () {
						//Custom Position Message
						swal({
							position: 'top-end',
							type: 'success',
							title: 'Property Type Updated',
							showConfirmButton: false,
							timer: 1500
						})
					},
						//init
						$.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
				(window.jQuery),
					//initializing
					function ($) {
					"use strict";
					$.SweetAlert.init()
				}(window.jQuery);
				load_table();
			}
		});
	});
//	======================================= Delete modal Source =======================================		
	$(document).on("click", "#delete_id_btn", function(){
		var delete_id = $(this).data("did");
		SweetAlert.prototype.init = function () {
			swal({
				title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success margin-5',
                cancelButtonClass: 'btn btn-danger margin-5',
                buttonsStyling: false
			}).then(function (result) {
				if(result.isConfirmed){
					$.ajax({
						url: "Ajax/add-property-type.php",
						type: "POST",
						data: {property_type: "delete_id", delete_id:delete_id},
						success: function(data){
							$("#delete-property-type-modal").html(data);
							load_table();
						}
					});
					swal('Deleted!',
						'Your file has been deleted.',
						'success')
				}
				else{
					swal('Cancelled',
						 'Your imaginary file is safe :)',
						 'error')
				}
			}, 
				   )
		},
			$.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
		(window.jQuery),
			function ($) {
			"use strict";
			$.SweetAlert.init()
		}(window.jQuery);		
	});	
	
});