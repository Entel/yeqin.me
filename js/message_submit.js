$(document).ready(function(){  
		$("button").attr("disabled","disabled");
		$("#username,#l_message").blur(function(){
			username=$("#username").val();
			message=$("#l_message").val();
			if(username!="" && message!=""){
				$("button").removeAttr("disabled");
	}})
});