<?php require_once('header.php');?>
<body>
<div style="position: absolute; top: 500px; left: 420px; ">
<p align="center" style="font-size: 20pt; ">最新消息</p>
<hr width="480px"></hr>
<table border="0">
<?php
	$result = mysql_query("SELECT * FROM `announce` ORDER BY `date` DESC; ");
	$counter = 0;
	while($row = mysql_fetch_array($result)){
		$date = date_create($row['date']); 
		echo "<tr style=\"font-size: 15pt; \"><td width=\"110px\">" . date_format($date, 'Y-m-d') . "</td><td width=\"310px\">{$row['subject']}</td></tr>";
		$counter++;
		if($counter==4)
			break;
	}
?>
</table>
<hr></hr>
</div>
</body>
<?php require_once('bottom.php');?>
