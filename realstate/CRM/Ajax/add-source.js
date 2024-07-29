$(document).ready(function(){
var SweetAlert = function () {};
//	======================================= load Table =======================================
	function load_table(){
		$.ajax({
			url: "Ajax/add-source.php",
			type: "POST",
			data: {source: "source_table"},
			success: function(data){
				$("#source_table").html(data);
			}
		});
	}
	load_table();
//	======================================= Insert Record =======================================	
		$("#source_btn").on("click", function(e){
			e.preventDefault();
			var source_name = $("#source_name").val();
			var response_massage = $("#response-massage").val();
			if(source_name==""){
					SweetAlert.prototype.init = function () {
						//Custom Position Message
						swal({
							type: 'error',
							title: 'Oops...',
							text: 'Enter Source Name',
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
			if(source_name!=""){
				$("#source_name").removeClass("border border-danger");
				$.ajax({
				url: "Ajax/add-source.php",
				type: "POST",
				data: $("#add_source").serialize(),
				success: function(data){					
					SweetAlert.prototype.init = function () {
						//Custom Position Message
						swal({
							position: 'top-end',
							type: 'success',
							title: 'New Source Name Inserted',
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
	$(document).on("click", "#source_id", function(){
		var source_id = $(this).data("eid");
		$.ajax({
			url: "Ajax/add-source.php",
			type: "POST",
			data: {source: "source_edit", source_id: source_id},
			success: function(data){
				$("#source_update").html(data);
			}
		});
	});
//	======================================= Update Source =======================================	
	$(document).on("click", "#update_source_btn", function(e){
		e.preventDefault();
		$.ajax({
			url: "Ajax/add-source.php",
			type: "POST",
			data: $("#source_update").serialize(),
			success: function(data){					
					SweetAlert.prototype.init = function () {
						//Custom Position Message
						swal({
							position: 'top-end',
							type: 'success',
							title: 'Source Name Updated',
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
	$(document).on("click", "#delete_id", function(){
		var delete_source = $(this).data("did");
			
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
				if(result.value){	
					
					$.ajax({
						url: "Ajax/add-source.php",
						type: "POST",
						data: {source: "delete_source", delete_source:delete_source},
						success: function(data){	
							alert(data)	;		
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
						 'error');
					
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