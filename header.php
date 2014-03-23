<?php
require_once('conf.php');
$link = mysql_connect($db_host, $db_id, $db_pw)	
	or die("DB connect failed: " . mysql_error());
mysql_select_db($db_sel, $link)
	or die("DB select failed: " . mysql_error());
?>

<head>
<meta charset="utf-8">
<title>【矛盾迪士尼】2014東華資工營</title>
<link href="css/jquery-ui-light.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
</head>
<body>

</body>
