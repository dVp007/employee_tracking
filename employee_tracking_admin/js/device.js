$(document).ready(function(){
	$('.modal').modal();
})
$("#submit").on('click',function(){
	var imei = parseInt($("#imei").val());
	var info = $("#info").val()
	var name = $("#name").val()
	var details = {
		'imei':imei,
		'name':name,
		'info':info,
		'function':'add'
	}
	console.log(details);
	$.post("php/device_functions.php",{ 'details': details },function(data){
		console.log(data);
	})
})