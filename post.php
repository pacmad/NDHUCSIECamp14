<?php
session_start();
require_once("conf.php");
$link = mysql_connect($db_host, $db_id, $db_pw)
	or die("DB connect failed: " . mysql_error());
mysql_select_db($db_sel, $link)                                         
	or die("DB select faild: " . mysql_error()) ;

if(isset($_SESSION['ID'])){
	
}
else{
?>
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL /camp/2014/post.php was not found on this server.</p>
<hr>
<address>Apache/2.2.16 (Debian) Server at csiesa.csie.ndhu.edu.tw Port 80</address>
</body></html>
<?php	
}
?>
