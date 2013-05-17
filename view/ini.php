<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/index.css" />
	<script type="text/javascript" src="../js/jquery.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<style>
	a:link {text-decoration: none;}
	a:visited {text-decoration: none;}
	a:active {text-decoration: none;}
	a:hover {text-decoration: none;}
	</style> 
</head>

<body>
<!--<EMBED SRC="../music/01.mp3" autostart="true" loop="true" hidden="true" >-->
<div id="main">
	<h2><a href="ini.html">This is me!!!</a></h2>
	
	<div id="tr">
		<div id="sp">Hello.</div>My name is Entel Science.<br />
		 I am a student of Sun Yat-san University, school<br />
		 of software. Welcome to my<br /> blog. 	
	</div>

	<div id="article_show">
<!--	<h4>Category</h4>
	<ul id="diary_type">
	    {% for category in site.categories %}
		<li>
			<ul >
			<a href="#" class="category" id="{{ category | first }}">{{ category | first }} ({{ category | last | size }})</a>
				{% for post in category[1] %}
				<li class="article_list"> 
					<a href="/blog/{{ post.url }}" class="title">{{ post.title }}</a><span class="date"> {{ post.date | date: "%d %B %Y" }}</span>
				</li>
				{% endfor %}
			</ul>
	    	</li>
	    {% endfor %}
	</ul>-->
	</div>
	<div id="tmp_menu">
		<br />
		Yah, sorry, there is some problems occur to this function.<br />
		呀，实在不好意思。。。这个功能出了点问题。。。我正在努力调试中。。。<br />
	</div>

	<div id="menu">
		<a href="#" class="menuli"><img src="../img/page.ico" class="menu_list" /></a>
		<a href="#" class="menuli"><img src="../img/photos.ico" class="menu_list" /></a>
		<a href="#" class="menuli"><img src="../img/newspaper.ico" class="menu_list" /></a>
	</div>
	
</div>
	<script language="javascript" type="text/javascript" src="../js/categories.js"></script>
	<script language="javascript" type="text/javascript" src="../js/category.js"></script>
	<script language="javascript" type="text/javascript" src="../js/tmp_menu.js"></script>
</body>
</html>