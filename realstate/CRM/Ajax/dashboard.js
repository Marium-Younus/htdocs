//	=================== fetch record ======================
$(document).ready(function(){
	function load_admin(){
		$.ajax({
		url: "Ajax/dashboard.php",
		type: "POST",
		data: {dashboard: "show_admin"},
		success: function(data){
			$("#card-body").html(data);
		}
	})}
	load_admin();
	
	//	=================== Edit record ======================
$(document).on("click","#admin_edit", function(){
	var admin_id = $(this).data("eid");
	$.ajax({
		url: "Ajax/dashboard.php",
		type: "POST",
		data: {dashboard: 'admin_edit', admin_id: admin_id},
		success: function(data){	
		$("#admin_update").html(data);
	}
	})	
});
//	=================== update record ======================
$(document).on("click","#admin_update", function(){
	var admin_id = $("#admin_id").val();
	var admin_name = $("#admin_name").val();
	var admin_email = $("#admin_email").val();
	var admin_password = $("#admin_password").val();
	var admin_number = $("#admin_number").val();
	var admin_image = $("#admin_image").val();
	var hidden = $("#hidden").val();
	$.ajax({
		url: "Ajax/dashboard.php",
		type: "POST",
		data: {dashboard: 'admin_update', admin_id: admin_id, admin_name: admin_name, admin_email: admin_email, admin_password: admin_password, admin_number: admin_number, admin_image: admin_image, hidden: hidden},
		success: function(data){
			load_admin();
		}
	})
});	
	
});
