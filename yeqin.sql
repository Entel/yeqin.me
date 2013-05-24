-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2013 at 05:43 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yeqin`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `a_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `article` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`a_id`, `title`, `type`, `date`, `article`) VALUES
(5, 'Hello, world !', 'Diary', '2012-08-25', '<p>This is my first article ! </p>'),
(6, 'å…³äºŽåœ¨linuxä¸‹å®‰è£…iNodeçš„ä¸€ä¸ªé—®é¢˜ï¼ˆåŒå‡»iNodeClientæ— ååº”ï¼‰', 'Note', '2013-02-25', '<p style="text-indent: 2em">å¯’å‡æ¢äº†ä¸ªç‰ˆæœ¬çš„LinuxåŽï¼ˆä»¥å‰ç”¨çš„æ˜¯Fedoraï¼ŒçŽ°åœ¨æ¢äº†Ubuntuï¼‰ï¼Œæ²¡è£…iNodeï¼Œå›žåˆ°å­¦æ ¡åŽä¸ºäº†ä¸Šç½‘è£…äº†iNodeï¼Œä½†æ˜¯å‡ºçŽ°äº†ä¸ªé—®é¢˜ï¼Œ./install.shå®‰è£…æˆåŠŸåŽåŒå‡»æ²¡æœ‰ååº”ï¼ï¼ï¼å„ç§ä¸Šç½‘æŸ¥å•Šï¼Œåœ¨windowsè·Ÿlinuxä¹‹é—´å„ç§åˆ‡æ¢å•Šã€‚ã€‚ã€‚æŠ˜è…¾æ¥æŠ˜è…¾åŽ»çš„ï¼Œå¥½ä¸å®¹æ˜“è§£å†³äº†ã€‚ã€‚ã€‚æ€»ç»“ä¸€ä¸‹å§ã€‚ã€‚ã€‚</p>\r\n<p style="text-indent: 2em">1.è¿è¡Œ$:./iNodeClientï¼ŒæŸ¥çœ‹æ˜¯å¦ç¼ºå°‘ä»€ä¹ˆæ–‡ä»¶ï¼ˆå¿˜äº†æˆªå›¾äº†ï¼Œå¥½åƒè¯´æ˜¯ä»€ä¹ˆcannot foundï¼‰\r\n<p style="text-indent: 2em">é¦–å…ˆæ˜¯ç¼ºå°‘libjpeg.so.62,è¾“å…¥å‘½ä»¤è¡Œ(åœ¨æœ¬åœ°æœç´¢è¿™äº›åº“):\r\n	$:locate libjpeg\r\n<p style="text-indent: 2em">å‘çŽ°å­˜åœ¨äºŽ/usr/lib/i386-linux-gun/è¿™ä¸ªç›®å½•é‡Œå­˜åœ¨libjpegåº“çš„å…¶ä»–ç‰ˆæœ¬libjpeg.so.8,å¯èƒ½å­˜åœ¨å…¶ä»–çš„ç‰ˆæœ¬ï¼Œæ ¹æ®æ¯ä¸ªäººç”µè„‘çš„ä¸åŒç‰ˆæœ¬ä¸åŒï¼Œä½†å…³é”®å­—åº”è¯¥æ˜¯ä¸€æ ·çš„ã€‚</p>\r\n<p style="text-indent: 2em">2.å»ºç«‹è½¯é“¾æŽ¥ï¼Œè¾“å…¥å‘½ä»¤è¡Œ:</p>\r\n	$:ln -s /usr/lib/i386-linux-gun/libjpeg.so.8 /usr/lib/i386-linux-gun/libjpeg.so.62\r\n<p style="text-indent: 2em">3.å†æ¬¡è¿è¡Œ$:./iNodeClientåŽå‘çŽ°ç¼ºå°‘å¦ä¸€ä¸ªæ–‡ä»¶libtiff.so.3ï¼ŒåŒæ ·ç”¨ä¸Šé¢çš„æ–¹æ³•ï¼Œå…ˆæ˜¯è¿è¡Œå‘½ä»¤è¡Œ:</p>\r\n	$:locate libtiff\r\n<p style="text-indent: 2em">å‘çŽ°ç±»ä¼¼çš„ç‰ˆæœ¬/usr/lib/i386-linux-gun/libtiff.so.5</p>\r\n<p style="text-indent: 2em">å»ºç«‹è½¯é“¾æŽ¥:</p>\r\n	$:ln -s /usr/lib/i386-linux-gnu/libtiff.so.5 /usr/lib/i386-linux-gnu/libtiff.so.3\r\n<p style="text-indent: 2em">4.ç„¶åŽå†æ¬¡ä½¿ç”¨å‘½ä»¤è¡Œ$:./iNodeClientï¼Œå°±ä¼šå¼¹å‡ºiNodeClientçš„çª—å£äº†ï¼Œå¦‚æžœä½ çš„ç”µè„‘ä»æ˜¾ç¤ºç¼ºå°‘ä»€ä¹ˆçš„è¯å¯ä»¥ç»§ç»­ç”¨ä¸Šé¢çš„æ–¹æ³•å–”ã€‚^_^</p>'),
(8, 'ä½¿ç”¨GAEå…è´¹ç¿»å¢™çš„æ–¹æ³•ï¼ˆWindowsç‰ˆï¼‰', 'Note', '2013-03-18', '<p style="text-indent: 2em">GAEæ¢æ–°ç‰ˆä¹‹åŽä¸€ç›´æ²¡æœ‰æ›´æ–°æ‰€ä»¥ä¸€ç›´æ²¡æ³•ç¿»å¢™ï¼Œä»Šå¤©åŽ»<a href="https://code.google.com/p/goagent/">goagent</a>çœ‹äº†ä¸€ä¸‹ï¼Œå‘çŽ°ç«Ÿç„¶å·²ç»æ›´æ–°åˆ°<a href="https://nodeload.github.com/goagent/goagent/legacy.zip/2.0">2.1.13</a>ç‰ˆæœ¬äº†ï¼Œè¯•äº†ä¸€ä¸‹ï¼Œå¯ä»¥ä¸Šç¿»å¢™äº†ã€‚ã€‚ã€‚ä¹…è¿çš„YouTube,æˆ‘å›žæ¥äº†ã€‚ã€‚ã€‚å›žåˆ°åŽŸé¢˜ï¼Œè¯è¯´ï¼Œå¥½ä¸œè¥¿å°±è¦å¤§å®¶ä¸€èµ·åˆ†äº«ï¼Œæ‰€ä»¥å§ç¿»å¢™çš„æ•™ç¨‹æ”¾å‡ºæ¥å§ã€‚ã€‚ã€‚ç”±äºŽæˆ‘æ˜¯Linuxç”¨æˆ·ï¼Œæ‰€ä»¥è¿™æ¬¡windowsçš„å›¾ç‰‡åªèƒ½ä»Žåˆ«äººé‚£é‡Œæ‹¿æ¥å’¯ï¼Œè¯·å¤šè§è°…å•Šã€‚ã€‚ã€‚Linuxçš„ç¿»å¢™æ–¹æ³•ä¹Ÿå·®ä¸å¤šï¼Œä¸‹æ¬¡æˆ‘æˆªä¸€ä¸‹å›¾ï¼Œé‡æ–°å‘ä¸€ç¯‡ã€‚ã€‚ã€‚</p>\r\n<p style="text-indent: 2em">ç¿»å¢™å‰çš„å‡†å¤‡ï¼Œæµè§ˆå™¨æ˜¯<a href="https://www.google.com/intl/en/chrome/browser"/>google chrome</a>(å…¶ä»–æµè§ˆå™¨æ²¡è¯•è¿‡ï¼Œæ®è¯´firefoxä¹Ÿå¯ä»¥)ï¼Œè¿˜æœ‰chromeçš„æ’ä»¶<a href="http://switchy.samabox.com/">Proxy Switchy</a></p>\r\n<p style="text-indent: 2em">é¦–å…ˆç»™chromeå®‰è£…å¥½æ’ä»¶åŽï¼Œå¯¼å…¥é…ç½®ä¿¡æ¯ï¼ˆç‚¹<a href="http://vdisk.weibo.com/s/h0TnQ/1351754826">è¿™é‡Œ</a>ä¸‹è½½ï¼‰ï¼Œç„¶åŽä¿å­˜ã€‚æŠŠChromeçš„SwitchySharpè®¾ç½®ä¸ºè‡ªåŠ¨åˆ‡æ¢æ¨¡å¼ã€‚</p>\r\n<img src="../img/peizhi.jpg" />\r\n<img src="../img/888888.jpg" />\r\n<p style="text-indent: 2em">æŽ¥ä¸‹æ¥ï¼Œéœ€è¦ç”¨åˆ°gmailçš„é‚®ç®±ï¼Œæ²¡æœ‰çš„è¯å°±ç”³è¯·ä¸€ä¸ªå§ï¼ŒæŒºæœ‰ç”¨çš„å…¶å®žã€‚</p>\r\n<p style="text-indent: 2em">æ³¨å†Œäº†é‚®ç®±åŽï¼Œç™»é™†Google App Engineï¼Œè¿™ä¸ªè¿‡ç¨‹éœ€è¦ç”¨åˆ°ä½ çš„æ‰‹æœºå·ç æŽ¥æ”¶éªŒè¯ä»£ç ã€‚</p>\r\n<img src="../img/appangine.jpg" />\r\n<img src="../img/yanzheng.jpg" />\r\n<p style="text-indent: 2em">ç”³è¯·â€œappidâ€,å› ä¸ºå«Œéº»çƒ¦ï¼Œæˆ‘å…¨éƒ¨éƒ½å¡«å†™äº†åŒæ ·çš„åå­—ã€‚</p>\r\n<img src="../img/creat.jpg" />\r\n<img src="../img/appid.jpg" />\r\n<p style="text-indent: 2em">è¿™å›¾çš„ä¸»äººæ¯”è¾ƒå¼ºï¼Œç”³è¯·äº†è¿™ä¹ˆå¤šappidã€‚ã€‚ã€‚æˆ‘å°±ä¸€ä¸ªï¼Œä»Žä¸€å¹´å‰ç”¨åˆ°çŽ°åœ¨ã€‚ã€‚ã€‚</p>\r\n<img src="../img/10ge.jpg" />\r\n<p style="text-indent: 2em">æŽ¥ä¸‹æ¥æ‰“å¼€GoAgentç›®å½•ï¼Œæ‰¾åˆ°localproxy.iniæ–‡ä»¶ï¼Œå°†[gae]ä¸‹çš„appidåŽé¢çš„åå­—æ›¿æ¢æˆä½ æ‰€ç”³è¯·åˆ°çš„â€œappidâ€ã€‚å¦‚æžœä½ ç”³è¯·äº†å¤šä¸ªï¼Œè¯·ç”¨â€œ|â€åˆ†å¼€ï¼Œå¦‚å›¾æ‰€ç¤ºã€‚</p>\r\n<img src="../img/xiugaiidhou.jpg" />\r\n<p style="text-indent: 2em">æ‰“å¼€ç›®å½•ä¸‹serverupload.batæ–‡ä»¶ï¼Œåˆ†åˆ«æŒ‰ç…§æç¤ºè¾“å…¥â€œappidâ€ã€Gmailé‚®ç®±å’Œå¯†ç ã€‚å¦‚æžœæœ‰å¤šä¸ªâ€œappidâ€å¯ä»¥â€œ|â€åˆ†å¼€ã€‚</p>\r\n<img src="../img/upload3.jpg" />\r\n<img src="../img/sucess.jpg" />\r\n<p style="text-indent: 2em">æœ€åŽä¸€æ­¥ï¼Œæ‰¾åˆ°serverpythonapp.yamlï¼ŒæŠŠæ‰€æœ‰â€œappidâ€å¡«å†™åˆ°applicationæ ç›®ä¸‹ï¼Œç”¨â€œ|â€é—´éš”å¼€ã€‚</p>\r\n<img src="../img/last.jpg" />\r\n<p style="text-indent: 2em">å®Œæˆä»¥ä¸Šæ­¥éª¤åŽï¼ŒåŒå‡»localæ–‡ä»¶å¤¹é‡Œçš„gogent.exeï¼Œ(*^__^*) å˜»å˜»â€¦â€¦æ¬¢è¿Žæ¥åˆ°çœŸå®žçš„ä¸–ç•Œã€‚ã€‚ã€‚facebookã€youtubeç¥žé©¬çš„éƒ½å¯ä»¥ä¸Šå•¦ã€‚ã€‚ã€‚</p>\r\n<p style="text-indent: 2em">å¯¹äº†ï¼Œè¿˜æœ‰ä¸€ä¸ªï¼Œå¼€æœºè‡ªåŠ¨å¯åŠ¨ï¼Œlocalæ–‡ä»¶å¤¹é‡Œé¢æœ‰ä¸¤ä¸ªå«addto-startupçš„æ–‡ä»¶ï¼Œä¸€ä¸ªæ˜¯.pyçš„ï¼Œåº”è¯¥æ˜¯åœ¨Linuxç”¨çš„ï¼Œè¿˜æœ‰ä¸€ä¸ªæ˜¯.vbsï¼Œå¦‚æžœæˆ‘æ²¡è®°é”™çš„è¯ï¼Œåº”è¯¥æ˜¯windowsä¸‹çš„è„šæœ¬æ–‡ä»¶æ¥çš„ï¼ŒåŒå‡»ä¹‹åº”è¯¥å¯ä»¥æŠŠå®ƒæ·»åŠ åˆ°å¼€æœºè‡ªåŠ¨å¯åŠ¨é‡Œé¢ï¼Œè¿™æ ·å°±ä¸ç”¨æ¯æ¬¡å¼€æœºéƒ½åŽ»åŒå‡»gogent.exeäº†ã€‚ã€‚ã€‚\r\n</p>');

-- --------------------------------------------------------

--
-- Table structure for table `article_comment`
--

CREATE TABLE IF NOT EXISTS `article_comment` (
  `ac_id` int(4) NOT NULL AUTO_INCREMENT,
  `a_id` int(4) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `commit` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `ip` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ac_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `m_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `ip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `m_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`m_id`, `title`, `img`, `path`, `type`) VALUES
(1, 'Platonic Prison', '../img/pp.jpg', 'https://dl-web.dropbox.com/get/song/%E5%8A%A8%E6%BC%AB%E5%8E%9F%E5%A3%B0-Platonic%20Prison.mp3?w=AAAT8lCIksJaBwjUkP1VQNJe3W1JnwTrkZsBEo7Cxs1UMw', 'mpeg'),
(2, '僕にできること', '', 'https://dl-web.dropbox.com/get/song/HOW%20MERRY%20MARRY%20-%20%E5%83%95%E3%81%AB%E3%81%A7%E3%81%8D%E3%82%8B%E3%81%93%E3%81%A8%20-%2001%20-%20%E5%83%95%E3%81%AB%E3%81%A7%E3%81%8D%E3%82%8B%E3%81%93%E3%81%A8.mp3?w=AAAu860jskcJbmX5go3MHDascNi_9j5hhG2TRTpnqhqbMw', 'mpeg'),
(3, 'お后がよろしくってよ!', '', 'https://dl-web.dropbox.com/get/song/%E3%81%8A%E5%90%8E%E3%81%8C%E3%82%88%E3%82%8D%E3%81%97%E3%81%8F%E3%81%A3%E3%81%A6%E3%82%88!%20.mp3?w=AAAfcta1rVSJJDJgMukrbBfSi-ruRyOGJ0e5Vv5F5JgJMA', 'mpeg'),
(4, 'もうそう★こうかんにっき', '', 'https://dl-web.dropbox.com/get/song/%E3%82%82%E3%81%86%E3%81%9D%E3%81%86%E2%98%85%E3%81%93%E3%81%86%E3%81%8B%E3%82%93%E3%81%AB%E3%81%A3%E3%81%8D.mp3?w=AADAjUV_k3CXQaVx0hyGJBExSPypDepRJjy-8Xzbgzy2wA', 'mpeg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
