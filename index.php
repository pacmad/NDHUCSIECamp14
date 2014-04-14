<?php require_once('header.php');?>
<script>
$(function(){
		<?php
		$result = mysql_query("SELECT * FROM `announce`;");
		while($row = mysql_fetch_array($result)){
		?>
		$("#<?php echo $row['AID'];?>").dialog({
height: 300, 
width: 400, 
autoOpen: false, 
show: {
effect: "bounce", 
duration: 1000
}, 
});
		<?php } ?>

		});

function openAnnounce(id){
	<?php
		$result = mysql_query("SELECT * FROM `announce`");
	while($row = mysql_fetch_array($result))
		echo "$('#{$row['AID']}').dialog(\"close\");\n";            
	?>  
		var tmp = "#" + id;
	$(tmp).dialog("open");
}

</script>
<div style="position: absolute; top: 450px; left: 300px; ">
<p align="center" style="font-size: 20pt; ">最新消息</p>
<hr width="420px"></hr>
<table border="0">
<?php
	$result = mysql_query("SELECT * FROM `announce` ORDER BY `date` DESC; ");
	$counter = 0;
	while($row = mysql_fetch_array($result)){
		$date = date_create($row['date']); 
		echo "<tr style=\"font-size: 15pt; \"><td width=\"110px\"><a onclick=\"openAnnounce({$row['AID']})\">" . date_format($date, 'Y-m-d') . "</td><td width=\"310px\"><a onclick=\"openAnnounce({$row['AID']})\">{$row['subject']}</td></tr>\n";
		$counter++;
		if($counter==4)
			break;
	}
?>
</table>
<hr></hr>
</div>

<?php
	$result = mysql_query("SELECT * FROM `announce` ORDER BY `date` DESC;");
	while($row = mysql_fetch_array($result)){
		$date = date_create($row['date']);
		echo "<div id=\"{$row['AID']}\" title=\"{$row['subject']}\">\n";
		echo "<p>" . $row['content'] . "</p>\n";
		echo "</div>\n";
	}

require_once('bottom.php');?>
