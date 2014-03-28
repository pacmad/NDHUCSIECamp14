<?php
session_start();
require_once("../conf.php");
?>
<link href="../img/icon.gif" rel="icon" type="inage/gif">
<link href="../css/main.css" rel="stylesheet">
	<?php
$link = mysql_connect($db_host, $db_id, $db_pw)
	or die("DB connect failed: " . mysql_error());
mysql_select_db($db_sel, $link)                                         
	or die("DB select faild: " . mysql_error()) ;
	if(isset($_SESSION['ID'])){
		if(isset($_POST['subject'])){
			if($_POST['subject']=="")
				echo "<script>alert('公告無主旨，新增失敗！');</script>";
			else{
				$result = mysql_query("SELECT `UID` FROM `user` WHERE `username` = '{$_SESSION['ID']}';");
				$row = mysql_fetch_array($result);
				$UID = $row['UID'];
				$query = "INSERT INTO `announce` (`subject`, `content`, `author`) VALUES ('{$_POST['subject']}', '{$_POST['content']}', '{$UID}');";
				mysql_query($query);
				echo "<script>alert('新增成功'); </script>";
			}
		}
?>
<title>2014東華資工營－公告管理介面</title>
<h1>2014東華資工營－公告管理介面</h1>
<table border="1">
<tr><th width="170">公告時間</th><th width="310">公告主旨</th><th>公告內文</th><th width="60">發佈者</th><th width="40">修改</th><th width="40">刪除</th></tr>
<?php
	$result = mysql_query("SELECT * FROM `announce` AS a, `user` AS u WHERE a.author=u.UID ORDER BY `date` DESC;");
	while($row = mysql_fetch_array($result)){
		if($row['status']==false)
			continue;
		echo "<tr><td align=\"center\">{$row['date']}</td><td>{$row['subject']}</td><td>{$row['content']}</td><td align=\"center\">{$row['name']}</td><td align=\"center\">修改</td><td align=\"center\">刪除</td></tr>\n";
	}
	?>
</table>
<hr></hr>
<form method="post" >
<fieldset style="width: 900px;" align="center">
<legend>發佈公告</legend>
<label style="color: red; ">注意：我幾乎沒有任何防呆，按下Enter就會送出訊息，請小心！</label><br />
<label>公告主旨</label><input id="in_sub" name="subject" type="text" style="width: 800px; " /><br />
<label>公告內容</label><input id="in_con" name="content" type="text" style="width: 800px; " /><br />
<input type="submit" value="確定公告"><input type="reset" value="清除重填">
</fieldset>
</form>
<?php
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
