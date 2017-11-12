$(document).ready(function(){
	var employee_options = {
		valueNames : ['employee-list-name'],
		page : 5,
		pagination :true,
	}
	var employeeList = new List("employee-list",employee_options);

	var device_options = {
		valueNames : ['device-list-name'],
		page : 5,
		pagination :true,
	}
	var deviceList = new List("device-list",device_options);

	var pickup_options = {
		valueNames : ['pickup-list-name'],
		page : 5,
		pagination :true,
	}
	var deviceList = new List("pickup-list",pickup_options);
});
$("#add").on("click",function(){
	var emp_id = parseInt($("input[name='employee']:checked").attr('id'));
	var pick_id = parseInt($("input[name='pickup']:checked").attr('id').substr(1));
	var prod_id = 1;
	var device_id = parseInt($("input[name='device']:checked").attr('id'));
	var details = {
		'emp_id':emp_id,
		'pick_id':pick_id,
		'prod_id':prod_id,
		'device_id':device_id,
		'function':'add'
	}
	console.log(details);
	$.post("php/task.php",{ 'details': details },function(data){
		console.log(data);
	})
})