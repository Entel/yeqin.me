<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/profile.css" />
	<script type="text/javascript" src="../js/jquery.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<style>
	a:link {text-decoration: none;}
	a:visited {text-decoration: none;}
	a:active {text-decoration: none;}
	a:hover {text-decoration: none;}
	</style> 
	<?php
		include '../model/database_connect.php';
	?>
	<title> This is me!!!——About me</title>
</head>

<body>
<div id="main">
	<h2><a href="ini.php">This is me!!!</a></h2>
	
<!--	<div id="tr">
		<div id="sp">Hello.</div>My name is Entel Science.<br />
		 I am a student of Sun Yat-san University, school<br />
		 of software. Welcome to my<br /> blog. 	
	</div>-->
	
	<div id="pic">
		<img src="" />
	</div>
	
	<div id="ch_pi">
			<pre>
			  呀，大家好，我是<span class="sp">束负左月</span>
			  原名<span class="sp">郑业勤</span>
			  90后，95前，<span class="sp">平安夜</span>出生的哦。。。
			  广东<span class="sp">汕头人</span>
			  固有属性是<span class="sp">冰</span>，又被称作。。。<span class="sp">冷血</span>。。。
			  呢称好多，叶子，月，Enty 。。。
			  座右铭：<span class="sp">我要努力实现梦想，以弥补小时候吹过的牛。</span>
			  极其讨厌吸烟，十分讨厌喝酒。。。
			  热爱<span class="sp">技术</span>，喜欢<span class="sp">二次元</span>。。。
			  <span class="sp">中山魔法大学软件学院的一只小程序猿</span>。。。
			  传说中的，<span class="sp">打得了代码，入得了厨房</span>。。。
			  <span class="sp">外表善良，内在邪恶</span>。。。
			  综上所诉，我还是个很不错的人的，嗯嗯！！！
			  哦，对了，还有联系方式。。。
			  <span class="sp">我的QQ是 499601435
			  E-mail address : entel.science@gmail.com</span>
			  如果有什么意见建议的话别忘了给我留言哦！！！
			 </pre>
	</div>
	
	<div id="tmp_menu">
		<br />
		Yah, sorry, there is some problems occur to this function.<br />
		呀，实在不好意思。。。这个功能出了点问题。。。我正在努力调试中。。。<br />
	</div>
	
	<div id="article_sho">
		<br />
		<?php
			$article_result = mysqli_query($dbc, "
			SELECT *
			FROM article A
			WHERE A.a_id=(SELECT MAX(A2.a_id)
							FROM article A2)");
			$article_row = mysqli_fetch_array($article_result);
			echo '<div>The last post: <a href="article.php?a_id='.$article_row['a_id'].'" target="_blank">'.$article_row['title'].'</a></div>';
			echo '<div><a href="#">All artitles ...</a></div>';
		?>
	</div>
	
	<div id="lam">
		<br />
		<div id="lm">
		<?php
			$message_result = mysqli_query($dbc, "
			SELECT *
			FROM message A
			WHERE A.m_id=(SELECT MAX(A2.m_id)
							FROM message A2)");
			$message_row = mysqli_fetch_array($message_result);
			echo '<div id="mun">'.$message_row['username'].':<br /></div>
			<div id="mm">'.$message_row['message'].'</div>';
			echo '<div><a href="message.php">All messages ...</a></div>';
		?>
		</div>
		<form id="lam_box" method="post" action="../controller/tmp_message.php">
			<fieldset >
				<legend>Leave a message</legend>
				<span class="lc">Username:</span><input type="text" name="username" /></br>
				<span class="lc">E-mail:</span><input type="text" name="email" /></br>
				<span class="lc">Message:</span><textarea name="message" rows="4" cols="70" ></textarea></br></br>
				<button id="submit">Submit</button>
			</fieldset>
		</div>
	</div>
	
	<div id="player">
		<br />
		<audio controls="controls" loop="loop">
		<?php
			$music_result = mysqli_query($dbc, "SELECT * FROM music");
			while ($music_row = mysqli_fetch_array($music_result))
			{
				/*echo '<img src="'.$music_row['img'].'" />';
				echo $music_row['title'];*/
				echo '<source src="'.$music_row['path'].'" type="audio/mpeg" >';
			}
		?>
		</audio>
	</div>


	<div id="menu">
		<a  class="menuli" id="article"><span title="Article"><img src="../img/page.ico" class="menu_list" /></span></a>
		<a class="menuli" id="picture"><span title="Picture"><img src="../img/photos.ico" class="menu_list" /></span></a>
		<a class="menuli" id="message"><span title="Leave a message"><img src="../img/message.ico" class="menu_list" /></span></a>
		<a class="menuli" id="about_me"><span title="About Me"><img src="../img/newspaper.ico" class="menu_list" /></span></a>
		<a class="menuli" id="music"><span title="Music Player"><img src="../img/eject.ico" class="menu_list" /></span></a>
	</div>
	<br /><br /><br /><br />
</div>

	<script language="javascript" type="text/javascript" src="../js/category.js"></script>
	<script language="javascript" type="text/javascript" src="../js/tmp_menu.js"></script>
</body>
</html>