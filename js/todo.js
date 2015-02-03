$(document).ready(function() {
	initWYSIWYG("todo-description");
	$(".s").delay(5000).fadeOut("slow");
	$("#todo-error").hide();
	
	$("#add-new-record").submit(function(e){
		var message = tinyMCE.get('todo-description').getContent();
		//alert(message);
		if ($("#todo-title").val() == "" || message == ""){
			$("#todo-error").show().delay(5000).fadeOut("slow");
			e.preventDefault();
		}
	});
});

function initWYSIWYG(id){
	tinymce.init({selector:"#"+id});
}

function deleteConfirm(){
	if (confirm("Are you sure, you want to delete this record?") == true) {
		return true;
	} else {
		return false;
	}
}

function redirectForm(){
	$('#active-activities').attr('action', 'admin_todo.php');
}