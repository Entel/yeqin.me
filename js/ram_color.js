window.onload = function() {
	var aLink = document.getElementById("main").getElementsByTagName("a");
	for(var len = aLink.length; len--;) {
		aLink[len].onmouseover = function() {
			setColor(this, 15)
		};
		
		aLink[len].onmouseout = function() {
			setColor(this, 0)
		};
	}	
	
	function setColor(obj, num) {
		console.log(num);
		clearInterval(obj.timer);
		var i = num;
		obj.timer = setInterval(function() {
			obj.style.color = getColor(i)
			num ? i-- : i++;
			if(i < 0 || i > 15) clearInterval(obj.timer)
		}, 30)
	}
	
	function getColor(num) {
		var Color="";
/*		//循环6次，生成一个随机的六位数
		for (var i = 0 ; i < 6 ; i++)
		  {
		  	Color += "" + Math.round(Math.random() * 9);
*/		  }
		for(var result = "", len = 3; len--;) {
			result += num.toString(16)
		}
		return "#" + result
	}

