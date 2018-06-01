$(document).ready(function(){
	var options = {
		valueNames : ['list-name'],
		page : 5,
		pagination :true,
	}
	var employeeList = new List("employee-list",options);
});


var add = (function(){
	var employee = {};
	
	//caching
	$add = $("#emp-add");
	$modal = $(".modal").modal();

	//eventlisteners
	$add.on("click",add_employee);
	//functions
	function add_employee(){
		var name = $("#first_name").val()
		var address = $("#textarea1").val()
		var age = $("#age").val()
		var contact = $("#contact").val() 
		var gender = $("input[type=radio]").attr("id")
		employee ={
			"function":"add",
			"name":name,
			"address":address,
			"age":age,
			"contact":contact,
			"gender":gender,
			"dept_id":1
		}
		$.post("php/employee_functions.php",{ 'details': employee },function(data){
			console.log(data);
		})
		console.log(employee)
	}
})();