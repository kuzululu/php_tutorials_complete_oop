$(document).on("click", ".edit-data", function(e){
	e.preventDefault();
	let id = $(this).attr("id");

	$.ajax({
		url: "retrieve.php",
		method: "POST",
		data:{
			id: id
		},
		dataType: "json",
		success: function(data){
			$("#id").val(data.id);
			$("#full_name").val(data.full_name);
			$("#email").val(data.email);
		}
	});
});
