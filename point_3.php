<!-- 구매시 포인트 감소				(6/16) 구매시 각 카드별 해시코드 및 정보가 DB에 추가 -->

<?php
	session_start();
	if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
	if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
																#(6/16) 세션ID 가져오기 추가
	if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";	

	$userid = $_POST["id"];
	$bp = $_POST["buy_point"];
	$cd = $_POST["card"];
	$originbp = $bp;
	if($userlevel == "8"){
		$bp = $bp * 0.90;
	}
	
	if($userpoint >= $bp) {

	$con = mysqli_connect("localhost", "root", "", "sample");
	$query = "update members Set point = point - $bp where id='$userid'";

	mysqli_query($con, $query);

	$query7 = "select point from members where id='$userid'";
	$result7 = mysqli_query($con, $query7);

	$row7 = mysqli_fetch_array($result7);
	$point7 = $row7[0];

	
	$_SESSION["userpoint"] = $point7;
																#(6/16) 구글플레이 카드 일 시 작동, 카드정보를 전 페이지에서 받아온다
	if($cd == "googleplay"){
	$_SESSION["card"] = $cd;

																#(6/16) 산 기프트카드 갯수(DB 저장갯수) 세기
	$querychhash = "select count(giftcon_num) from $cd"; 
	$resulthash = mysqli_query($con, $querychhash);
	$rowhash = mysqli_fetch_array($resulthash);
	$num = $rowhash[0];
	
	if($num>20){
																#(6/16) 만약 20개 초과시 아무것도 안함(알림창은 main_sell.php에서 발동)
	}
																#(6/16) 구매 카드의 해시값 및 각종 필요한 정보들을 저장
	else{
	$a = $num+1;
	$a_hash = hash("sha256", $a);
	$b= substr($a_hash,1,4);
	$c= substr($a_hash,5,4);
	$d= substr($a_hash,9,4);
	$e= substr($a_hash,13,4);
	$queryinhash = "insert into $cd(giftcon_num, hash1, hash2, hash3, hash4, use_check, price, customer) values($a,'$b','$c','$d','$e','O',$originbp,'$userid')";
	mysqli_query($con, $queryinhash);
	}
																#(6/16) 아이튠즈 카드일 시 작동, 카드 정보를 전 페이지에서 받아온다					
	}else if($cd == "itunescard"){
	$_SESSION["card"] = $cd;

																#(6/16) 산 기프트카드 갯수(DB 저장갯수) 세기
	$querychhash2 = "select count(giftcon_num) from $cd"; 
	$resulthash2 = mysqli_query($con, $querychhash2);
	$rowhash2 = mysqli_fetch_array($resulthash2);
	$num2 = $rowhash2[0];
																#(6/16) 만약 20개 초과시 아무것도 안함(알림창은 main_sell.php에서 발동)
	
	if($num2>40){
		
	}
																#(6/16) 구매 카드의 해시값 및 각종 필요한 정보들을 저장
	else{
	$f = $num2+21;
	$f_hash = hash("sha256", $f);
	$g= substr($f_hash,1,4);
	$h= substr($f_hash,5,4);
	$i= substr($f_hash,9,4);
	$j= substr($f_hash,13,4);
	$queryinhash2 = "insert into $cd(giftcon_num, hash1, hash2, hash3, hash4, use_check, price, customer) values($f,'$g','$h','$i','$j','O',$originbp,'$userid')";
	mysqli_query($con, $queryinhash2);
	}

																#(6/16) PSN 카드일 시 작동, 카드 정보를 전 페이지에서 받아온다	
	}else if($cd == "psncard"){
	$_SESSION["card"] = $cd;

																#(6/16) 산 기프트카드 갯수(DB 저장갯수) 세기
	$querychhash3 = "select count(giftcon_num) from $cd"; 
	$resulthash3 = mysqli_query($con, $querychhash3);
	$rowhash3 = mysqli_fetch_array($resulthash3);
	$num3 = $rowhash3[0];
	
																#(6/16) 만약 20개 초과시 아무것도 안함(알림창은 main_sell.php에서 발동)
	if($num3>40){
		
	}
																#(6/16) 구매 카드의 해시값 및 각종 필요한 정보들을 저장
	else{
	$a3 = $num3+41;
	$a_hash3 = hash("sha256", $a3);
	$b3= substr($a_hash3,1,4);
	$c3= substr($a_hash3,5,4);
	$d3= substr($a_hash3,9,4);
	$e3= substr($a_hash3,13,4);
	$queryinhash3 = "insert into $cd(giftcon_num, hash1, hash2, hash3, hash4, use_check, price, customer) values($a3,'$b3','$c3','$d3','$e3','O',$originbp,'$userid')";
	mysqli_query($con, $queryinhash3);
	}

																#(6/16) 비트 카드일 시 작동, 카드 정보를 전 페이지에서 받아온다	
	}else if($cd == "bitcash"){
	$_SESSION["card"] = $cd;

																#(6/16) 산 기프트카드 갯수(DB 저장갯수) 세기
	$querychhash4 = "select count(giftcon_num) from $cd"; 
	$resulthash4 = mysqli_query($con, $querychhash4);
	$rowhash4 = mysqli_fetch_array($resulthash4);
	$num4 = $rowhash4[0];
	
																#(6/16) 만약 20개 초과시 아무것도 안함(알림창은 main_sell.php에서 발동)
	if($num4>60){
		
	}
																#(6/16) 구매 카드의 해시값 및 각종 필요한 정보들을 저장
	else{
	$a4 = $num4+61;
	$a_hash4 = hash("sha256", $a4);
	$b4= substr($a_hash4,1,4);
	$c4= substr($a_hash4,5,4);
	$d4= substr($a_hash4,9,4);
	$e4= substr($a_hash4,13,4);
	$queryinhash4 = "insert into $cd(giftcon_num, hash1, hash2, hash3, hash4, use_check, price, customer) values($a4,'$b4','$c4','$d4','$e4','O',$originbp,'$userid')";
	mysqli_query($con, $queryinhash4);
	}

	}
	

	mysqli_close($con); 
	
																#(6/16) index_sell.php 파일로 이동(수정은 main_sell.php 파일에서 했음)
    echo "
	      <script>
	          location.href = 'index_sell.php';
	      </script>
	     ";

	}
	else{
	print"
		<script>
		window.alert('잔액이 부족합니다.')
		history.go(-1)
		</script>
	";
	}

?>