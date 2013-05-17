$(document).ready(function(){
	$('.article_list').hide();
	$('.category').toggle(function(){
		$('.article_list').fadeIn('fast');
	},function(){
		$('.article_list').fadeOut('fast');
	});
});
