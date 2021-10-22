<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>누리홈쇼핑</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body> 

	<header>
	<?php include "header.php";?>
	</header>

	<section>

	<div id="main_content">
	<br><br>
	<hr>
	<br><br>
	<div id = "thing" align="center">
	<div class="row">

  <!-- master_modify_3.php로 데이터 전송 -->
  <form action="master_modify_3.php" method="post">

<?php
	#DB 접속 계정 변수에 저장 및 쿼리문으로 일반회원 db값 가져오기 
	$con = mysqli_connect("localhost", "root", "", "sample");
	$query="select name, level from members where level=9";
	$result=mysqli_query($con,$query);
	
	$a=0;
	
	#while문으로 한줄한줄 변수에 저장하기
	while($row=mysqli_fetch_array($result)) {
	$name[$a]=$row[0];
	$level[$a]=$row[1];
	$a=$a+1;
	}

	#DB에서 읽은 행이 존재할 시 출력
	if ($a > 0 ) {
	echo "&nbsp&nbsp&nbsp&nbsp<b>일반회원 -> 우수회원</b><br><br>";
	}
	
	#검색된 행(변수 a) 만큼 반복
	for($d=0;$d<$a;$d++){
	?> 	
	<!-- 체크박스 -->
	<INPUT type="checkbox" name="chbox<?php echo $d;?>">
		
	<!-- 이름과 등급(구매자) 출력 -->
	<?php echo "이름 : ".$name[$d]."&nbsp&nbsp등급 : 일반회원".'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
	?>  
	
	<!-- form 구문으로 이름값 전달하기 위한 안보이는 text 전송용 -->
	<INPUT type="text" style="display:none" name="post<?php echo $d;?>" value="<?php echo $name[$d];?>"><br> <?php
	}   
?>		
	
	<!-- form 구문으로 반복횟수 값 전달하기 위한 안보이는 text 전송용 -->
	<INPUT type="text" style="display:none" name="post_num" value="<?php echo $a;?>">

<?php

	#DB 접속 계정 변수에 저장 및 쿼리문으로 우수회원 db값 가져오기 
	$query8="select name, level from members where level=8";
	$result8=mysqli_query($con,$query8);
	
	$z=0;
	
	#while문으로 한줄한줄 변수에 저장하기
	while($row8=mysqli_fetch_array($result8)) {
	$name[$z]=$row8[0];
	$level[$z]=$row8[1];
	$z=$z+1;
	}

	##DB에서 읽은 행이 존재할 시 출력
	if ($z > 0) {
	echo "<br><br>&nbsp&nbsp&nbsp&nbsp<b>우수회원 -> 일반회원</b><br><br>";
	}

	#검색된 행(변수 z) 만큼 반복
	for($y=0;$y<$z;$y++){
	?> 	
	<!-- 체크박스 -->
	<INPUT type="checkbox" name="chbox8<?php echo $y;?>">
		
	<!-- 이름과 등급(판매자) 출력 -->
	<?php echo "이름 : ".$name[$y]."&nbsp&nbsp등급 : 우수회원".'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
	?>  
	
	<!-- form 구문으로 이름값 전달하기 위한 안보이는 text 전송용 -->
	<INPUT type="text" style="display:none" name="post8<?php echo $y;?>" value="<?php echo $name[$y];?>"><br> <?php
	}   
?>		
	
	<!-- form 구문으로 반복횟수 값 전달하기 위한 안보이는 text 전송용 -->
	<INPUT type="text" style="display:none" name="post_num8" value="<?php echo $y;?>">


<br><br><INPUT type="submit" value="변경하기">
</form>
<br><br>

	</div>
	</div>
	<hr></hr>
	<br><br>
	<footer>
	<?php include "footer.php";?>
	</footer>
</div>
	</section> 

</body>
</html>
