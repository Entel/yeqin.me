<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/article.css" />
	<script language="javascript" type="text/javascript" src="../js/ram_color.js"></script>
	<script language="javascript" type="text/javascript" src="../js/jquery.js"></script>
	<link type="text/css" rel="stylesheet" href="../js/syntaxhighlighter/styles/shCore.css"/>
	<link type="text/css" rel="stylesheet" href="../js/syntaxhighlighter/styles/shCore.css"/>
	<link type="text/css" rel="stylesheet" href="../js/syntaxhighlighter/styles/shThemeDefault.css" id="shTheme"/>
	<script type="text/javascript" src="../js/syntaxhighlighter/scripts/shCore.js"></script>
	<script type="text/javascript" src="../js/syntaxhighlighter/scripts/shBrushBash.js"></script>
	<script type="text/javascript" src="../js/syntaxhighlighter/scripts/shBrushPython.js"></script>
	<script type='text/javascript'>
		SyntaxHighlighter.config.bloggerMode = true;
		SyntaxHighlighter.all();
	</script>
	<style>
	a:link {text-decoration: none;}
	a:visited {text-decoration: none;}
	a:active {text-decoration: none;}
	a:hover {text-decoration: none;}
	</style> 
	<?php
		
		include '../model/database_connect.php';
		
		$a_id = $_GET['a_id'];
		
		setcookie('a_id', $a_id, time() + (86400),"/");
		
		$result = mysqli_query($dbc, 'SELECT * FROM article WHERE a_id = "' . $a_id . '"');
		$row = mysqli_fetch_array($result) or die ( "error".mysql_error);
		$commit_result = mysqli_query($dbc, 'SELECT * FROM article_commit WHERE a_id = "' . $a_id . '"');
	?>
	<title><?=$row["title"]?></title>
</head>
<body>
	<div id="main">

		<div id="show">	
			<h2><a href="ini.php">This is me !!!</a>
				<font color="#778899" size="33"><strong>>></strong></font>
				<a href="#"><?=$row["type"]?></a>
			</h2>
			<h3><?=$row["title"]?></h3>
			<div id="date"><?=$row["date"]?></div>
			<div id="text"><?=$row["article"]?></div>
		</div>
		
		</br></br></br>
		
		<h3>Commit</h3>
		<div id="commits">
			<?php
				while (	$row = mysqli_fetch_array($commit_result))
				{
					echo '
					<div class="commit">
						<div class="un">'
							.$row['username'].'('.$row['email'].') :
							<span class="date"> '.$row['date'].'</span>
						</div>
						<div class="com" style="text-indent: 2em">'
							.$row['commit'].
						'</div></br>
					</div>';
				}
			?>
		</div>
		
		<form id="lac" method="post" action="../controller/tmp_commit.php">
			<fieldset >
				<legend>Leave a commit</legend>
				<span class="lc">Username:</span><input type="text" name="username" /></br>
				<span class="lc">E-mail:</span><input type="text" name="email" /></br>
				<span class="lc">Commit:</span><textarea name="commit" rows="4" cols="70" ></textarea></br></br>
				<button id="submit">Submit</button>
			</fieldset>
		</div>
		
		<br /><br /><br />

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
				echo '<div>The lastest post: <a href="article.php?a_id='.$article_row['a_id'].'">'.$article_row['title'].'</a></div>';
				echo '<div><a href="#">All artitles ...</a></div>';
			?>
		</div>
	
		<div id="player">
		<br />
			<audio controls="controls" loop="loop">
			<?php
				$music_result = mysqli_query($dbc, "SELECT * FROM music");
				while ($music_row = mysqli_fetch_array($music_result))
				{
					echo '<img src="'.$music_row['img'].'" />';
					echo $music_row['title'];
					echo '<source src="'.$music_row['path'].'" type="audio/mpeg" >';
				}
			?>
			</audio>
		</div>


		<div id="menu">
			<a class="menuli" id="article"><span title="Article"><img src="../img/page.ico" class="menu_list" /></span></a>
			<a class="menuli" id="picture"><span title="Picture"><img src="../img/photos.ico" class="menu_list" /></span></a>
			<a href="#" class="menuli" id="message"><span title="Leave a message"><img src="../img/message.ico" class="menu_list" /></span></a>
			<a href="profile.php" class="menuli" id="about_me"><span title="About Me"><img src="../img/newspaper.ico" class="menu_list" /></span></a>
			<a  class="menuli" id="music"><span title="Music Player"><img src="../img/eject.ico" class="menu_list" /></span></a>
		</div>
	
	</div>
	<br /><br /><br /><br />
</body>
	<script language="javascript" type="text/javascript" src="../js/tmp_menu.js"></script>
</html>
