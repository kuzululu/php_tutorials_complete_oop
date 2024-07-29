$(document).ready(function(){
	let i=1;
	$(".add").click(function(){
		i++;
		$("#dynamic-field").append("<p id='row"+i+"'><input type='text' name='skill[]' placeholder='Enter Skills' required=''><input type='button' name='remove' class='btn-remove' id='"+i+"' value='X'></p>");
	});

$(document).on("click",".btn-remove", function(){
	let btn_id = $(this).attr("id");
	$("#row"+btn_id+"").remove();
});

});