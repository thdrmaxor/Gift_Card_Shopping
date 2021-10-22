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

<?php
	#DB 접속 계정 변수에 저장 및 쿼리문으로 일반회원 db값 가져오기 
	$con = mysqli_connect("localhost", "root", "", "sample");
	$query="select * from members where level=9";
	$result=mysqli_query($con,$query);
	
	$a=0;
	
	#while문으로 한줄한줄 변수에 저장하기
	while($row=mysqli_fetch_array($result)) {
	$id[$a]=$row[1];
	$pass[$a]=$row[2];
	$name[$a]=$row[3];
	$email[$a]=$row[4];
	$level[$a]=$row[5];
	$point[$a]=$row[6];
	$a=$a+1;
	}

	#DB에서 읽은 행이 존재할 시 출력
	if ($a > 0 ) {
	echo "<b>[일반회원]</b><br><br>";
	}
	
	#검색된 행(변수 a) 만큼 반복
	for($d=0;$d<$a;$d++){
	
		
	#이름과 등급(일반회원9) 출력 
	echo "아이디 : ".$id[$d]."&nbsp&nbsp&nbsp비번 : ".$pass[$d]."&nbsp&nbsp&nbsp이름 : ".$name[$d]."&nbsp&nbsp&nbsp이메일 : ".$email[$d]."&nbsp&nbsp&nbsp등급 : 일반회원&nbsp&nbsp&nbsp포인트 : ".$point[$d]."<br>";
	}
	
echo"<br><br>";
?>		
	


<?php
	#DB 접속 계정 변수에 저장 및 쿼리문으로 우수회원 db값 가져오기 
	$con8 = mysqli_connect("localhost", "root", "", "sample");
	$query8="select * from members where level=8";
	$result8=mysqli_query($con8,$query8);
	
	$b=0;
	
	#while문으로 한줄한줄 변수에 저장하기
	while($row=mysqli_fetch_array($result8)) {
	$id[$b]=$row[1];
	$pass[$b]=$row[2];
	$name[$b]=$row[3];
	$email[$b]=$row[4];
	$level[$b]=$row[5];
	$point[$b]=$row[6];
	$b=$b+1;
	}

	#DB에서 읽은 행이 존재할 시 출력
	if ($b > 0 ) {
	echo "<hr><br><br><b>[우수회원]</b><br><br>";
	}
	
	#검색된 행(변수 b) 만큼 반복
	for($e=0;$e<$b;$e++){
		
		
	#이름과 등급(우수회원8) 출력
	echo "아이디 : ".$id[$e]."&nbsp&nbsp&nbsp비번 : ".$pass[$e]."&nbsp&nbsp&nbsp이름 : ".$name[$e]."&nbsp&nbsp&nbsp이메일 : ".$email[$e]."&nbsp&nbsp&nbsp등급 : 우수회원&nbsp&nbsp&nbsp포인트 : ".$point[$e]."<br>";
	}

echo"<br><br>";
?>	


<br><a href='master_modify_2.php'><input type='button' value='회원등급 수정'><br><br><br></a>


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
