$(document).ready(function(){
	$('.modal').modal();
})
$("#submit").on('click',function(){
	location.reload(true);
	var name = $("#name").val();
	var contact = $("#contact").val()
	var prod_id = 1
	var details = {
		'name':name,
		'contact':contact,
		'prod_id':prod_id,
		'function':'add'
	}
	console.log(details);
	$.post("php/vendor_functions.php",{ 'details': details },function(data){
		console.log(data);

	})
})