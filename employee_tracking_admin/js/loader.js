$('#buttonID').click(function(){
  $('#loader').show();
  $('#tbl').hide();
  setTimeout(
  		function(){
  			$('#loader').hide();
  			$('#tbl').show();
  		}, 500);
});
  	