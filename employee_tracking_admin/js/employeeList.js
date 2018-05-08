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
	$select = $('select').formSelect()
	$modal = $(".modal").modal();

	//eventlisteners
	$add.on("click",add_employee);
	//functions
	function add_employee(){
		$form = $(this).parent().find("form");
		console.log($select.val())
	}
})();