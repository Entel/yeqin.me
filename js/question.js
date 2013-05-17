$(".question").hide();
$(".result").hide();

var ne = "";
var val = "";

$("#start").click(function()
{
	$("#intr").hide();
	$("#q1").fadeIn("slow");
	ne = "q1";
	$("button").click(function()
	{
		//alert(ne+val)
		val=$('input:radio[name="'+ne+'"]:checked').val();
		//alert(ne + val)
		if (val != null)
		{
			$("#"+ne).hide();
			ne = $('input[name="'+ne+'"]:checked').val();
			$("#"+ne).fadeIn("slow");
			//alert(ne+val)
		}
	})
});

/*var val=$('input:radio[name="'+ne+'"]:checked').val();
if (val != null){
	$("#"+ne+">.next").removeAttr("disabled");
		$("#"+ne+">.next").attr("disabled",false);
	};*/

	
/*$("#"+ ne +" button").click(function()
	{
		alert(_
		$("#"+ne).hide();
		ne = $('input[name="'+ne+'"]:checked').val();
		$("#"+ne).fadeIn("slow");
	})*/