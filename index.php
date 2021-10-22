<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>누리홈쇼핑</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/main.css">
	<!-- 비접속시 윈도우 알림창 스크립트 -->
	<script>
		function alertFunction() {
		alert("로그인 후 이용하여 주십시오.");
	}
	</script>
</head>
<body> 
	<header>
	<?php include "header.php";?>
	</header>

	<section>

	<br>

	<div id="main_img_bar">
	<img src="./img/main_img1.png">
	</div>

	<div id="main_content">
	<br><br>
	<hr>
	<br><br>
	<div id = "thing" align="center">
	<div class="row">
	
	<center><b>[ 구글플레이 ]</b></center><br><br>
	<?php if(!$userid){
	?>
	<a onclick="alertFunction()"><img class="picture1" src="./img/main_1.jpg" alt="1"><center>구글플레이<br>5000원</center></a>&nbsp;
	<a onclick="alertFunction()"><img class="picture2" src="./img/main_1.jpg" alt="2"><center>구글플레이<br>10000원</center></a><br><br>
	<a onclick="alertFunction()"><img class="picture3" src="./img/main_1.jpg" alt="3"><center>구글플레이<br>30000원</center></a>&nbsp;
	<a onclick="alertFunction()"><img class="picture4" src="./img/main_1.jpg" alt="4"><center>구글플레이<br>50000원</center></a><br><br>

	<?php } else { ?>
	<a href="index_1_1.php"><img class="picture1" src="./img/main_1.jpg" alt="1"><center>구글플레이<br>5000원</center></a>&nbsp;
	<a href="index_1_2.php"><img class="picture2" src="./img/main_1.jpg" alt="2"><center>구글플레이<br>10000원</center></a><br><br>
	<a href="index_1_3.php"><img class="picture3" src="./img/main_1.jpg" alt="3"><center>구글플레이<br>30000원</center></a>&nbsp;
	<a href="index_1_4.php"><img class="picture4" src="./img/main_1.jpg" alt="4"><center>구글플레이<br>50000원</center></a><br><br>
	<hr><br><br>
	<?php } ?>
	

	<center><b>[ 아이튠즈카드 ]</b></center><br><br>
	<?php if(!$userid){
	?>
	<a onclick="alertFunction()"><img class="picture1" src="./img/main_2.jpg" alt="1"><center>아이튠즈카드<br>5000원</center></a>&nbsp;
	<a onclick="alertFunction()"><img class="picture2" src="./img/main_2.jpg" alt="2"><center>아이튠즈카드<br>10000원</center></a><br><br>
	<a onclick="alertFunction()"><img class="picture3" src="./img/main_2.jpg" alt="3"><center>아이튠즈카드<br>30000원</center></a>&nbsp;
	<a onclick="alertFunction()"><img class="picture4" src="./img/main_2.jpg" alt="4"><center>아이튠즈카드<br>50000원</center></a><br><br>
	<hr><br><br>

	<?php } else { ?>
	<a href="index_2_1.php"><img class="picture1" src="./img/main_2.jpg" alt="1"><center>아이튠즈카드<br>5000원</center></a>&nbsp;
	<a href="index_2_2.php"><img class="picture2" src="./img/main_2.jpg" alt="2"><center>아이튠즈카드<br>10000원</center></a><br><br>
	<a href="index_2_3.php"><img class="picture3" src="./img/main_2.jpg" alt="3"><center>아이튠즈카드<br>30000원</center></a>&nbsp;
	<a href="index_2_4.php"><img class="picture4" src="./img/main_2.jpg" alt="4"><center>아이튠즈카드<br>50000원</center></a><br><br>
	<hr><br><br>
	<?php } ?>

	<center><b>[ PSN카드 ]</b></center><br><br>
	<?php if(!$userid){
	?>
	<a onclick="alertFunction()"><img class="picture1" src="./img/main_3.jpg" alt="1"><center>PSN카드<br>5000원</center></a>&nbsp;
	<a onclick="alertFunction()"><img class="picture2" src="./img/main_3.jpg" alt="2"><center>PSN카드<br>10000원</center></a><br><br>
	<a onclick="alertFunction()"><img class="picture3" src="./img/main_3.jpg" alt="3"><center>PSN카드<br>30000원</center></a>&nbsp;
	<a onclick="alertFunction()"><img class="picture4" src="./img/main_3.jpg" alt="4"><center>PSN카드<br>50000원</center></a><br><br>
	<hr><br><br>

	<?php } else { ?>
	<a href="index_3_1.php"><img class="picture1" src="./img/main_3.jpg" alt="1"><center>PSN카드<br>5000원</center></a>&nbsp;
	<a href="index_3_2.php"><img class="picture2" src="./img/main_3.jpg" alt="2"><center>PSN카드<br>10000원</center></a><br><br>
	<a href="index_3_3.php"><img class="picture3" src="./img/main_3.jpg" alt="3"><center>PSN카드<br>30000원</center></a>&nbsp;
	<a href="index_3_4.php"><img class="picture4" src="./img/main_3.jpg" alt="4"><center>PSN카드<br>50000원</center></a><br><br>
	<hr><br><br>
	<?php } ?>

	<center><b>[ 비트캐쉬 ]</b></center><br><br>
	<?php if(!$userid){
	?>
	<a onclick="alertFunction()"><img class="picture1" src="./img/main_4.jpg" alt="1"><center>비트캐쉬<br>5000원</center></a>&nbsp;
	<a onclick="alertFunction()"><img class="picture2" src="./img/main_4.jpg" alt="2"><center>비트캐쉬<br>10000원</center></a><br><br>
	<a onclick="alertFunction()"><img class="picture3" src="./img/main_4.jpg" alt="3"><center>비트캐쉬<br>30000원</center></a>&nbsp;
	<a onclick="alertFunction()"><img class="picture4" src="./img/main_4.jpg" alt="4"><center>비트캐쉬<br>50000원</center></a><br><br>
	<br><br>

	<?php } else { ?>
	<a href="index_4_1.php"><img class="picture1" src="./img/main_4.jpg" alt="1"><center>비트캐쉬<br>5000원</center></a>&nbsp;
	<a href="index_4_2.php"><img class="picture2" src="./img/main_4.jpg" alt="2"><center>비트캐쉬<br>10000원</center></a><br><br>
	<a href="index_4_3.php"><img class="picture3" src="./img/main_4.jpg" alt="3"><center>비트캐쉬<br>30000원</center></a>&nbsp;
	<a href="index_4_4.php"><img class="picture4" src="./img/main_4.jpg" alt="4"><center>비트캐쉬<br>50000원</center></a><br><br>
	<br><br>
	<?php } ?>

	</div>
	</div>
	<hr></hr>
	<br><br>

	<footer>
	<?php include "footer.php";?>
	</footer>

	</section> 

	<!-- 팝업창 -->
	<script langauge="javascript">
             window.open("pob.php"," ","width=658,height=658","scrollbars=no");
	</script>
</body>
</html>
