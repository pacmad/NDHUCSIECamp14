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
	<link href="http://<?php echo $host; ?>css/main.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script>
		$(function(){
			$("#announce").dialog({
				height: 300, 
				width: 400, 
				autoOpen: false, 
				show: {
					effect: "bounce", 
					duration: 1000
				}, 
				hide: {
					effect: "bounce", 
					duration: 1000
				}
			});
			$("#intro").dialog({
				height: 350, 
				width: 800, 
				autoOpen: false, 
				show: {
					effect: "fold", 
					duration: 1000
				}, 
				hide: {
					effect: "fold", 
					duration: 1000
				}
			});
			$("#rules").dialog({
				height: 350, 
				width: 800, 
				autoOpen: false, 
				show: {
					effect: "fold", 
					duration: 1000
				}, 
				hide: {
					effect: "fold", 
					duration: 1000
				}
			});
			$("#trans").dialog({
				height: 350, 
				width: 800, 
				autoOpen: false, 
				show: {
					effect: "fold", 
					duration: 1000
				}, 
				hide: {
					effect: "fold", 
					duration: 1000
				}
			});
			$("#2013").dialog({
				height: 350, 
				width: 800, 
				autoOpen: false, 
				show: {
					effect: "fold", 
					duration: 1000
				}, 
				hide: {
					effect: "fold", 
					duration: 1000
				}
			});
			$("#FAQ").dialog({
				height: 350, 
				width: 800, 
				autoOpen: false, 
				show: {
					effect: "fold", 
					duration: 1000
				}, 
				hide: {
					effect: "fold", 
					duration: 1000
				}
			});
			$("#ask").dialog({
				height: 350, 
				width: 800, 
				autoOpen: false, 
				show: {
					effect: "fold", 
					duration: 1000
				}, 
				hide: {
					effect: "fold", 
					duration: 1000
				}
			});
			$("#schedule").dialog({
				height: 350, 
				width: 800, 
				autoOpen: false, 
				show: {
					effect: "blind", 
					duration: 1000
				}, 
				hide: {
					effect: "blind", 
					duration: 1000
				}
			});
			$("#course").dialog({
				height: 350, 
				width: 800, 
				autoOpen: false, 
				show: {
					effect: "blind", 
					duration: 1000
				}, 
				hide: {
					effect: "blind", 
					duration: 1000
				}
			});
			$("#activity").dialog({
				height: 350, 
				width: 800, 
				autoOpen: false, 
				show: {
					effect: "blind", 
					duration: 1000
				}, 
				hide: {
					effect: "blind", 
					duration: 1000
				}
			});
			$("#trip").dialog({
				height: 350, 
				width: 800, 
				autoOpen: false, 
				show: {
					effect: "blind", 
					duration: 1000
				}, 
				hide: {
					effect: "blind", 
					duration: 1000
				}
			});
			$("#signup").dialog({
				height: 350, 
				width: 800, 
				autoOpen: false, 
				show: {
					effect: "drop", 
					duration: 1000
				}, 
				hide: {
					effect: "drop", 
					duration: 1000
				}
			});
			$("#staff").dialog({
				height: 350, 
				width: 800, 
				autoOpen: false, 
				show: {
					effect: "explode", 
					duration: 1000
				}, 
				hide: {
					effect: "explode", 
					duration: 1000
				}
			});
		});


		$(document).ready(function() {
			$(".toggle").click(function() {
			$(this).toggleClass("active");
			$(".nav").slideToggle();
			});
		});
</script>
<style>
ol{
	list-style-type: none; 
}
nav {
	display: block;
	float: left;
	width: 100%;
	margin-top: 25px; 
	margin-bottom: 30px;
	font-size: 25pt;
}
.nav ul{
	margin: 0;
	padding: 0;
}
.nav li{
	position: relative;
	float: left;
	list-style: none;
	width: 200px; 
}
.nav li a {
	display: block;        
	padding: 15px 30px;
	text-decoration: none;
}
.nav li ul {
	display:none;
	position: relative;
	margin-left: 15px; 
	top:30px;
	left:0;
	float:left;
	width: 100%;
	font-size: 15pt; 
}
.nav li:hover ul {
	display: block;
	right: 0;
	left: 0;
	top: 100%;
	max-width: 200px;
}
.toggle {
    display: none;
}
</style>
</head>
<body style="position: absolute; left: 50%; margin-left: -512px">
<nav class="nav">
<ul id="menu">
	<li><a href="#">營隊介紹</a>
		<ul id="menu_intro">
			<li><a href="#" onclick="$('#intro').dialog('open'); ">活動概要</a></li>
			<li><a href="#" onclick="$('#rules').dialog('open'); ">活動簡章</a></li>
			<li><a href="#" onclick="$('#trans').dialog('open'); ">交通資訊</a></li>
			<li><a href="#" onclick="$('#2013').dialog('open'); ">去年回顧</a></li>
			<li><a href="#" onclick="$('#FAQ').dialog('open'); ">問答時間</a></li>
			<li><a href="#" onclick="$('#ask').dialog('open'); ">聯絡我們</a></li>	
		</ul>
	</li>
	<li><a href="#">活動內容</a>
		<ul id="menu_info">
			<li><a href="#" onclick="$('#schedule').dialog('open'); ">行程表</a></li>
			<li><a href="#" onclick="$('#course').dialog('open'); ">課程介紹</a></li>
			<li><a href="#" onclick="$('#activity').dialog('open'); ">活動介紹</a></li>
			<li><a href="#" onclick="$('#trip').dialog('open'); ">出遊介紹</a></li>
		</ul>
	</li>
	<li style="margin-top: -50px; "><p align="center" style="color:#00184F;"><font style="font-size:15pt;">第五屆</font><br /><font style="font-size:30pt;">東華資工營</font></p></li>
	<li><a href="#" onclick="$('#signup').dialog('open'); ">我要報名</a></li>
	<li><a href="#">工作人員</a>
		<ul id="menu_staff">
			<?php
			$result = mysql_query("SELECT * FROM `team`; ");
			while($row = mysql_fetch_array($result))
				echo "<li><a href=\"#\" onclick=\"$('#staff').dialog('open'); \">{$row['name']}</a></li>";
			?>
		</ul>
	</li>
</ul>
</nav>
<div style="position:absolute; top: 100px; left: 50%; margin-left: -200px; ">
<img src="http://<?php echo $host; ?>img/castle_circle.png" width="400px" style="opacity: 0.3">
</div>

<div id="announce" title="公告">
	測試公告
</div>

<div id="intro" title="活動概要">
	活動概要
</div>

<div id="rules" title="活動簡章">
<ol>
<li><h3>主辦單位</h3></li>
<ol><li>國立東華大學資訊工程學系</li></ol>
<li><h3>協辦單位</h3></li>
<ol><li>國立東華大學課外活動組、國立東華大學資訊工程學系系學會</li></ol>
<li><h3>活動日期</h3></li>
<ol><li>2014年7月5日（六）～7月9日（三），共計五天四夜</li></ol>
<li><h3>活動地點</h3></li>
<ol><li>國立東華大學（花蓮縣壽豐鄉志學村大學路二段一號）、秀姑巒溪</li></ol>
<li><h3>活動對象</h3></li>
<ol><li>各高級中學之學生（含應屆畢業生）</li></ol>
<li><h3>招收人數</h3></li>
<ol><li>25人</li></ol>
<li><h3>報名費用</h3></li>
<ol><li>一人旅行：每人＄4000元整（含住宿、餐飲、保險等費用）</li>
<li>二人同行：每人＄3800元整（含住宿、餐飲、保險等費用）</li>
<li>四人齊行：每人＄3500元整（含住宿、餐飲、保險等費用）</li></ol>
<li><h3>報名期限</h3></li>
<ol><li>自即日起至2014年6月16日（一）止</li></ol>
<li><h3>繳費期限</h3></li>
<ol><li>自即日起至2014年6月23日（一）止</li></ol>
<li><h3>報名方式</h3></li>
<ol><li>請至活動網頁點選「我要報名」之「報名表下載」，將報名表填妥後，Email至營隊官方信箱（ndhu.csie.camp@gmail.com）。當我們收到報名表後會以Email通知，請於收到回信後再進行繳費動作。</li></ol>
<li><h3>繳費方式</h3></li>
<ol><li>採轉帳、匯款方式。</li>
<ol><li>銀行代碼：中華郵政 700</li>
<li>帳號：0091390 0000932</li>
<li>戶名：國立東華大學資訊工程學系系學會</li></ol>
<li>繳費完成後，請以Email回報：
<ol><li>轉帳：轉帳帳戶末五碼、戶名以及繳費完成時間（可由明細表查看）</li>
<li>匯款：匯款人姓名、匯款日期，且請於備註欄填寫報名者姓名</li></ol>
<li>，以利雙方查證。</li>
<li>※ 確認收到款項後，我們將以Email及簡訊告知完成報名及繳費手續。</li>
<li>ATM轉帳教學：<a href="http://ebill.must.edu.tw/files/atm1/atm1.jsp" target="_blank">http://ebill.must.edu.tw/files/atm1/atm1.jsp</a></li></ol>
<li><h3>注意事項</h3></li>
<ul><li>報名完成後，本營隊將於活動前，統一寄發行前通知書、營隊規定等相關文件。</li>
<li>因事故無法參與活動者：
<ul>
<li>請寄Email至官方信箱，信中請附上以下資訊：
<ul><li>報名者姓名</li><li>聯絡電話</li><li>匯款帳號</li><li>匯款戶名</li><li>匯款方式</li></ul>
<li>2014年6月12日前告知本營隊者，退已繳金額，並酌收50元手續費</li>
<li>2014年6月12日至2014年6月21日期間告知本營隊者，退已繳金額之1/2</li>
<li>2014年6月21日後，恕不退費</li>
</ul>
</ul>
<li><h3>聯絡方式</h3></li>
<ol><li>營隊信箱：<a href="mailto:ndhucsiecamp@gmail.com" target="_blank">ndhu.csie.camp@gmail.com</a></li>
<li>營隊負責人：</li>
<ol><li>總召 王楷明 0923-279633</li>
<li>副召 陳智育 0933-060202</li>
<li>執秘 林育慈 0953-381533</li>
</ol>
</ol>
</div>

<div id="trans" title="交通資訊">
	交通資訊
</div>

<div id="2013" title="去年回顧">
<p>《方塊大進擊》<br />
官方網站：<a href="http://csiesa.csie.ndhu.edu.tw/camp/2013" target="_blank">http://csiesa.csie.ndhu.edu.tw/camp/2013</a><br >
粉絲專頁：<a href="http://fb.com/NDHUCSIECamp13" target="_blank">http://facebook.com/NDHUCSIECamp13</a><br />
活動影片：<a href="https://www.youtube.com/channel/UCEUmpqeBGaCDIuPKyJhg6TQ" target="_blank">https://www.youtube.com/channel/UCEUmpqeBGaCDIuPKyJhg6TQ</a></p>
</div>

<div id="FAQ" title="問答時間">
問答時間
</div>

<div id="ask" title="聯絡我們">
<p>官方網站：<a href="http://csiesa.csie.ndhu.edu.tw/camp/2014" target="_blank">http://csiesa.csie.ndhu.edu.tw/camp/2014</a><br />
粉絲專頁：<a href="http://fb.com/NDHUCSIECamp14" target="_blank">http://facebook.com/NDHUCSIECamp14</a><br />
官方信箱：<a href="mailto:ndhucsiecamp@gmail.com" target="_blank">ndhu.csie.camp@gmail.com</a></p>
<p>總召 王楷明 0923-279633<br />
副召 陳智育 0933-060202<br />
執秘 林育慈 0953-381533</p>
</div>

<div id="schedule" title="行程表">
<table border="1" align="center">
	<tr><th width="100"></th><th width="200">早上</th><th width="200">下午</th><th width="200">晚上</th></tr>
	<tr align="center" height="50"><td>7/5（六）</td><td></td><td>從前從前……</td><td>For The First Time In Forever</td></tr>
	<tr align="center" height="50"><td>7/6（日）</td><td>跳跳虎的歡樂早晨<br />料理鼠王的機動任務</td><td>王子公主養成計畫I</td><td>野獸的古堡探險</td></tr>
	<tr align="center" height="50"><td>7/7（一）</td><td colspan="3">綠野仙蹤</td>
	<tr align="center" height="50"><td>7/8（二）</td><td>跳跳虎的歡樂早晨<br />人魚公主的愛與冒險</td><td>王子公主養成計畫II</td><td>迪士尼歡樂慶典</td></tr>
	<tr align="center" height="50"><td>7/9（三）</td><td>跳跳虎的歡樂早晨<br />王子公主養成計畫III</td><td colspan="2">夢想長存、歡樂永遠</td></tr>

</table>
</div>

<div id="course" title="課程介紹">
<!--<ol>
<li><h3>課程一</h3></li>
<ol><li>課程一簡介</li></ol>
<li><h3>課程二</h3></li>
<ol><li>課程二簡介</li></ol>
<li><h3>課程三</h3></li>
<ol><li>課程三簡介</li></ol>
</ol>-->
To Be Announced. 
</div>

<div id="activity" title="活動介紹">
<ol>
<li><h3>從前從前……</h3></li>
<ol><li>（始業式）</li></ol>
<li><h3>For The First Time In Forever</h3></li>
<ol><li>（相見歡）</li></ol>
<li><h3>守護天使</h3></li>
<ol><li>（小天使與小主人）</li></ol>
<li><h3>跳跳虎的歡樂早晨</h3></li>
<ol><li>（早操）</li></ol>
<li><h3>料理鼠王的機動任務</h3></li>
<ol><li>（大地、遊校）</li></ol>
<li><h3>野獸的古堡探險</h3></li>
<ol><li>（夜教）</li></ol>
<li><h3>人魚公主的愛與冒險</h3></li>
<ol><li>（水關）</li></ol>
<li><h3>迪士尼歡樂慶典</h3></li>
<ol><li>（晚會）</li></ol>
<li><h3>夢想長存、歡樂永遠</h3></li>
<ol><li>（結業式）</li></ol>
</ol>
</div>

<div id="trip" title="出遊介紹">
	To be announced. 
</div>

<div id="signup" title="我要報名">
	<a href="doc/5_signup.docx">報名表下載</a>
</div>

<div id="staff" title="工作人員">
	To be announced. 
</div>
