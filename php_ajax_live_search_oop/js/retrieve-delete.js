$(document).on("click", ".delete-data", function(e){
	e.preventDefault();
	let id_delete = $(this).attr("id");	
	
	$.ajax({
		url: "retrieve.php",
		method: "POST",
		data:{
			id: id_delete
		},
		dataType: "json",
		success: function(data){
			$("#del_id").val(data.id);
			$("#del_full_name").html(data.full_name);
			$("#del_email").html(data.email);
			$("#fname").html(data.full_name);
		}
	});
});