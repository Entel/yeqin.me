$(document).ready(function(){  
		$("button").attr("disabled","disabled");
		$("#username,#l_comment").blur(function(){
			username=$("#username").val();
			comment=$("#l_commment").val();
			if(username!="" && comment!=""){
				$("button").removeAttr("disabled");
	}})
});