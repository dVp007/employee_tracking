$(document).ready(function(){

	var history_options = {
		valueNames : ['list-date','list-name','list-device','list-pickup'],
		page : 5,
		pagination :true,
	}
	var deviceList = new List("history-list",history_options);
});