$(document).ready(function(){
	$("#getName").on("keyup", function(){
		let getName = $(this).val();
		$.ajax({
			url: "inc/class.php",
			method: "POST",
			data:{
				full_name:getName
			},
			success: function(response){
				$("#showData").html(response); // adding new content
			}
		});
	});
});