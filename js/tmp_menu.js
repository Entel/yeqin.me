(function click(){
	$("#tmp_menu").hide();
	$('.menuli').click(function(){
	$('#tmp_menu').slideDown('500');
	var t = setTimeout("$('#tmp_menu').slideUp('500')",3000);
})	
})();
