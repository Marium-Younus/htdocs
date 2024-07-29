$(document).ready(function(){
	$("#client_btn").on("click",function(e){
		e.preventDefault();
		var c_name = $("#client_name").val();
		var c_contact = $("#client_contact").val();
		var client_email = $("#client_email").val();
		var client_dob = $("#client_dob").val();
		var client_cnic = $("#client_cnic").val();
		var client_pan = $("#client_pan").val();
		var client_address = $("#client_address").val();
		var client_city = $("#client_city").val();
		var client_state = $("#client_state").val();
		var client_pin = $("#client_pin").val();
		var client_occupation = $("#client_occupation").val();
		var client_organization = $("#client_organization").val();
		var client_designation = $("#client_designation").val();
		var client_source = $("#client_source").val();
		if( c_name==null || c_contact=="" || client_email=="" || client_dob=="" || client_cnic=="" || client_pan=="" || client_address=="" || client_city=="" || client_state=="" || client_pin=="" || client_occupation=="" || client_organization=="" || client_designation=="" || client_source==""){
			$("#client_name").addClass("border border-danger");	
			$("#client_contact").addClass("border border-danger");
			$("#client_email").addClass("border border-danger");	
			$("#client_dob").addClass("border border-danger");
			$("#client_cnic").addClass("border border-danger");	
			$("#client_pan").addClass("border border-danger");
			$("#client_address").addClass("border border-danger");	
			$("#client_city").addClass("border border-danger");
			$("#client_state").addClass("border border-danger");	
			$("#client_pin").addClass("border border-danger");
			$("#client_occupation").addClass("border border-danger");	
			$("#client_organization").addClass("border border-danger");
			$("#client_designation").addClass("border border-danger");	
			$("#client_source").addClass("border border-danger");
		}
		else{
			$.ajax({
			url: "Ajax/add_client.php",
			type: "POST",
			data: $("#add_client").serialize(),
			success: function(data){
				$("#client_name").removeClass("border border-danger");
				$("#client_contact").removeClass("border border-danger");
			    $("#client_email").removeClass("border border-danger");	
			    $("#client_dob").removeClass("border border-danger");
			    $("#client_cnic").removeClass("border border-danger");	
			    $("#client_pan").removeClass("border border-danger");
			    $("#client_address").removeClass("border border-danger");	
			    $("#client_city").removeClass("border border-danger");
			    $("#client_state").removeClass("border border-danger");	
			    $("#client_pin").removeClass("border border-danger");
			    $("#client_occupation").removeClass("border border-danger");	
			    $("#client_organization").removeClass("border border-danger");
			    $("#client_designation").removeClass("border border-danger");	
			    $("#client_source").removeClass("border border-danger");
				if(data.success == 1){
					$("#response-div").removeClass("d-none").addClass("d-block border border-success").html(data);
					$("#response").html(data);
					}
				else{
					$("#response-div").removeClass("d-none").addClass("border border-danger").html(data);
					$("#response").html(data);
					}
			}
			}); 
		}
	});
});