<?php
require_once('conf.php');
$link = mysql_connect($db_host, $db_id, $db_pw)	
	or die("DB connect failed: " . mysql_error());
mysql_select_db($db_sel, $link)
	or die("DB select failed: " . mysql_error());
	?>

	<head>
	<title>【矛盾迪士尼】2014東華資工營</title>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">           
	<link href="http://<?php echo $host; ?>img/icon.gif" rel="icon" type="inage/gif">
	<link href="http://<?php echo $host; ?>css/jquery-ui-light.css" rel="stylesheet">
	<link href="http://<?php echo $host; ?>css/main.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script>
		$(document).ready(function() {
		    $(".toggle").click(function() {
			$(this).toggleClass("active");
			$(".nav").slideToggle();
		    });
		    $(".nav > ul > li:has(ul) > a").append('<div class="arrow-bottom"></div>');
		});
</script>
<style>
nav {
	display: block;
	float: left;
	width: 100%;
	margin-top: 25px; 
	margin-bottom: 30px;
	font-size: 30pt;
}
.nav ul{
	margin: 0;
	padding: 0;
}
.nav li{
	position: relative;
	float: left;
	list-style: none;
	width: 250px; 
	color: #000000; 
}
.nav li a {
	display: block;        
	padding: 15px 30px;
	text-decoration: none;
}
.nav li ul {
	display:none;
	position: relative;
	margin-left: 20px; 
	top:30px;
	left:0;
	float:left;
	width: 100%;
	font-size: 20pt; 
}
.nav li:hover ul {
	display: block;
	right: 0;
	left: 0;
	top: 100%;
	max-width: 160px;
    color: #444444; 	
}
.toggle {
    display: none;
}
.arrow-bottom {
	position: absolute;
	top: 25px;
	right: 13px;
	margin-left: 5px;
	border-top: 4px solid #FFF;
	border-right: 4px solid transparent;    
	border-left: 4px solid transparent;        
	width: 1px;
	height: 1px;
}
</style>
</head>
<body>
<div style="position: absolute; top: 100px; left: 420px">
<img src="http://<?php echo $host; ?>img/castle_circle.png" width="450px">
</div>
<nav class="nav">
<ul id="menu">
	<li><a href="#">營隊介紹</a>
		<ul id="menu_intro">
			<li><a href="#">活動概要</a></li>
			<li><a href="#">交通資訊</a></li>
			<li><a href="#">去年回顧</a></li>
			<li><a href="#">問答時間</a></li>
		</ul>
	</li>
	<li><a href="#">活動內容</a>
		<ul id="menu_info">
			<li><a href="#">行程表</a></li>
			<li><a href="#">課程介紹</a></li>
			<li><a href="#">活動介紹</a></li>
			<li><a href="#">出遊介紹</a></li>
		</ul>
	</li>
	<li style="margin-top: -50px; "><p align="center" style="color:#00184F;"><font style="font-size:15pt;">第五屆</font><br /><font style="font-size:30pt;">東華資工營</font></p></li>
	<li><a href="#">我要報名</a></li>
	<li><a href="#">工作人員</a>
		<ul id="menu_staff">
			<?php
			$result = mysql_query("SELECT * FROM `team`; ");
			while($row = mysql_fetch_array($result))
				echo "<li><a href=\"#\">{$row['name']}</a></li>";
			?>
		</ul>
	</li>
</ul>
</nav>
</body>

