$(document).ready(function(){  
		$("button").attr("disabled","disabled");
		$("#username").change(function(){
			/*username=$("#username").val();
			message=$("#l_message").val();*/
			/*console.log(username);
			console.log(message);*/
			
			/*if(username!="" && message!=""){*/
				$("button").removeAttr("disabled");
	})
});