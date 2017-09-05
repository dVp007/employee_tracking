/*
* Login module
*/
$('.et-login').on('click',function(){
	var uname = $('.et-uname').val(); //username value
	var pass = $('.et-pass').val();	//password value
	//ajax parsing
	$.post('php/login.php', {uname: uname,pass: pass}, function(data) {
		/*optional stuff to do after success */
		console.log(data);
		switch (data){
			case "1" :
				window.location = "index.php";
		}
	});
});