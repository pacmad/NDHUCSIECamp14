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
	or die("DB select faild: " . mysql_error())	;

if(isset($_POST['account'])&&isset($_POST['pswd'])){
	$userID = mysql_escape_string($_POST['account']);
	$userPW = $_POST['pswd'];
	if($userID=="" || $userPW=="")
		echo "<script>alert('請輸入帳號密碼')</script>";
	else{
		$result = mysql_query("SELECT * FROM `user` WHERE `username` = \"{$userID}\";");
		$row = mysql_fetch_array($result);
		if($row==NULL)
			echo "<script>alert('帳號不存在')</script>";
		else{
			$pw = $row['password'];
			if($pw==$userPW){
				$_SESSION['ID'] = $userID;
				header("location:post.php");
			}
			else
				echo "<script>alert('密碼錯誤')</script>";
		}
	}	
}
?>
<body>
<form method="post"> 
<fieldset style="width: 250px;" align="center">
<legend>公告管理介面登入</legend>
<label>帳號：</label><input type="text" name="account"><br/>
<label>密碼：</label><input type="password" name="pswd"><br/>
<input type="submit" value="登入"><input type="reset" value="清除重填">
</fieldset>
</form>
</body>
