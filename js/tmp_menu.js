(function click(){
	$("#tmp_menu").hide();
	$("#article_sho").hide();
	$("#lam").hide();
	$("#player").hide();
	
	$('#article').click(function(){
	$('#article_sho').slideDown('500');
	var t = setTimeout("$('#article_sho').slideUp('500')",4000);
	});
	
	$('#message').click(function(){
		$('#lam').slideDown(1300);
	});
	
	$('#music').click(function(){
	$('#player').slideDown('500');
	var t = setTimeout("$('#player').slideUp('500')",3000);
	});	
	
})();
