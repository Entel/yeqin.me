<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/message.css" />
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

		<h3>Message</h3>
		<div id="lm">
		<?php
			$message_result = mysqli_query($dbc, "SELECT *	FROM message A");
			while ($message_row = mysqli_fetch_array($message_result))
			{
				echo '<br/>
				<div id="message">
					<div class="mun">'
						.$message_row['username'].'('.$message_row['email'].') :
						<span class="date"> '.$message_row['date'].'</span>
					</div>
					<div class="mm" style="text-indent: 2em">'
						.$message_row['message'].
					'</div>
				</div><br /><hr/>';
			}
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
		</form>
	
<!--		<div id="tmp_menu">
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
			<a class="menuli" id="article"><span title="Article"><img src="../img/page.ico" class="menu_list" /></span></a>
			<a href="#" class="menuli" id="picture"><span title="Picture"><img src="../img/photos.ico" class="menu_list" /></span></a>
			<a href="message.php" class="menuli"><span title="Leave a message"><img src="../img/message.ico" class="menu_list" /></span></a>
			<a href="profile.php" class="menuli" id="about_me"><span title="About Me"><img src="../img/newspaper.ico" class="menu_list" /></span></a>
			<a class="menuli" id="music"><span title="Music Player"><img src="../img/eject.ico" class="menu_list" /></span></a>
		</div>
		<br /><br /><br /><br />
	</div>

	<script language="javascript" type="text/javascript" src="../js/tmp_menu.js"></script>
	
</body>
</html>