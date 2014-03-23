<?php
require_once('conf.php');
$link = mysql_connect($db_host, $db_id, $db_pw)	
	or die("DB connect failed: " . mysql_error());
mysql_select_db($db_sel, $link)
	or die("DB select failed: " . mysql_error());
?>

<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<title>【矛盾迪士尼】2014東華資工營</title>
<link href="img/icon.gif" rel="icon" type="inage/gif">
<link href="css/jquery-ui-light.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
</head>
<body>

<p align="center" style="color:#00184F;"><font style="font-size:15pt;">第五屆</font><br /><font style="font-size:30pt;">東華資工營</font></p>

</body>
