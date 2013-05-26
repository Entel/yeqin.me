$(document).ready(function(){  
		$("button").attr("disabled","disabled");
		$("#username").change(function(){
			/*username=$("#username").val();
			comment=$("#l_commment").val();
			if(username!="" && comment!=""){*/
				$("button").removeAttr("disabled");
	})
});