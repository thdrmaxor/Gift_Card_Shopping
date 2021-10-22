<?php

	#반복횟수 master_modify_2.php에서 POST로 받아서 저장
	$a= $_POST["post_num"];

#반복 횟수($a) 만큼 반복
for($d=0; $d<$a;$d++){

	#체크된 항목 및 모든 이름값 가져오기
	$chbox[$d] = $_POST["chbox$d"];
	$post[$d] = $_POST["post$d"];
	
	$chbox = $chbox[$d];

	if ($chbox != "") {
	$con = mysqli_connect("localhost", "root", "", "sample");
	$query = 'update members Set level=8 where name=\''.$post[$d].'\''; // 여기수정
	$result=mysqli_query($con,$query);
	echo $query;
	$chbox = "";
	print "<HTML><head><META http-equiv='refresh' content='0; url=./master_modify_1.php'></head></HTML>";
	}
}

	#반복횟수 master_modify_2.php에서 POST로 받아서 저장
	$z= $_POST["post_num8"];

#반복 횟수($z) 만큼 반복
for($x=0; $x<$z;$x++){

	#체크된 항목 및 모든 이름값 가져오기
	$chbox8[$x] = $_POST["chbox8$x"];
	$post8[$x] = $_POST["post8$x"];

	$chbox8 = $chbox8[$x];

	if ($chbox8 != "") {
	$con = mysqli_connect("localhost", "root", "", "sample");
	$query = 'update members Set level=9 where name=\''.$post8[$x].'\''; 
	$result=mysqli_query($con,$query);
	echo $query;
	$chbox8= "";
	print "<HTML><head><META http-equiv='refresh' content='0; url=./master_modify_1.php'></head></HTML>";
	}
}

?>