<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/category.css" />
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
	<title> This is me !!!</title>
</head>

<body>
<div id="main">
	<h2><a href="ini.php">This is me!!!</a></h2>
	
	<div id="categories">
	<?php
		$category_result = mysqli_query($dbc, "SELECT DISTINCT(A.type) FROM article A");
		while ($category_row = mysqli_fetch_array($category_result))
		{
			echo '<div class="index">
			<div class="c1">'.$category_row['type'].'</div>';
			$category_result2 = mysqli_query($dbc, "SELECT * FROM article A WHERE type='".$category_row['type']."'");
			while ($category_row2 = mysqli_fetch_array($category_result2))
			{
				echo '
					<div class="category" style="text-indent: 2em">
					<a href="article.php?a_id='.$category_row2['a_id'].'" target="_blank">'
						.$category_row2['title'].'
					</a>
						<div class="date">'.$category_row2['date'].'</div>
					</div>';
			}
			echo '</div>';
		}
	?>
	</div>
	
<!--	<div id="tmp_menu">
		<br />
		Yah, sorry, there is some problems occur to this function.<br />
		呀，实在不好意思。。。这个功能出了点问题。。。我正在努力调试中。。。<br />
	</div>-->
	
	<div id="article_sho">
		<br />
		<?php
			$article_result = mysqli_query($dbc, "
			SELECT *
			FROM article A
			WHERE A.a_id=(SELECT MAX(A2.a_id)
							FROM article A2)");
			$article_row = mysqli_fetch_array($article_result);
			echo '<div>The lastest post: <a href="article.php?a_id='.$article_row['a_id'].'" target="_blank">'.$article_row['title'].'</a></div>';
			echo '<div><a href="category.php">All artitles ...</a></div>';
		?>
	</div>
	
<!--	<div id="lam">
		<br /><br /><br />
		<div id="lm">
		<?php
			$message_result = mysqli_query($dbc, "
			SELECT *
			FROM message A
			WHERE A.m_id=(SELECT MAX(A2.m_id)
							FROM message A2)");
			$message_row = mysqli_fetch_array($message_result);
			echo '<div id="mun">'.$message_row['username'];
			if ($message_row['email']!=null)
			{
				echo '('.$message_row['email'].')';
			}
			echo ':<br /></div>
			<div id="mm">'.$message_row['message'].'</div>';
			echo '<div><a href="message.php">All messages ...</a></div>';
		?>
		</div>
		<br />
		<form id="lam_box" method="post" action="../controller/tmp_message.php">
			<fieldset >
				<legend>Leave a message</legend>
				<span class="lc">Username:</span><input type="text" name="username" /></br>
				<span class="lc">E-mail:</span><input type="text" name="email" /></br>
				<span class="lc">Message:</span><textarea name="message" rows="4" cols="70" ></textarea></br></br>
				<button id="submit">Submit</button>
			</fieldset>
		</div>-->
	</div>
	
	<div id="player">
		<br />
		<audio controls="controls"  loop="loop">
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
		<a class="menuli" id="article"><span title="Article"><img src="../img/page.ico" class="menu_list" /></span></a>
		<a href="album.php" class="menuli" id="album"><span title="Album"><img src="../img/photos.ico" class="menu_list" /></span></a>
		<a href="message.php" class="menuli" id="message"><span title="Leave a message"><img src="../img/message.ico" class="menu_list" /></span></a>
		<a href="profile.php" class="menuli" id="about_me"><span title="About Me"><img src="../img/newspaper.ico" class="menu_list" /></span></a>
		<a class="menuli" id="music"><span title="Music Player"><img src="../img/eject.ico" class="menu_list" /></span></a>
	</div>
	<br /><br /><br /><br />
</div>

	<script language="javascript" type="text/javascript" src="../js/tmp_menu.js"></script>
	
</body>
</html>