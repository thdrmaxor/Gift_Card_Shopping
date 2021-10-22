<br><br>
<hr></hr>
<h3 align="center">
<br>
<?php
	$cd = $_SESSION["card"];
	echo "구매가 완료되었습니다.";
?>
</h3>
<center>
<?php
	$filename = "./img/thank.jpg";
	echo "<img src = '$filename'>";
	echo "<br>";

																#(6/16) DB 계정정보 선언
	$con = mysqli_connect("localhost", "root", "", "sample");

																#(6/16) 구글 플레이 카드 일 시 발동
	if($cd == "googleplay"){
		
																#(6/16) DB에 있는 구글 플레이 카드의 수(구매갯수)를 센다.
	$querychhash01 = "select count(giftcon_num) from googleplay"; 
	$result = mysqli_query($con, $querychhash01);
	$rowhash01 = mysqli_fetch_array($result);
	$num10 = $rowhash01[0];

																#(6/16) DB에 20개 이상 카드가 생성 시 수량초과 알림창 출력
	if($num10>21){
		    echo "
	      <script>
		window.alert('상품권의 판매 개수가 초과되었습니다.<br>게시판에 알려주시면 수량을 추가하겠습니다.')
	          location.href = 'index.php';
	      </script>
	     ";
	}
																#(6/16) 구매한 상품권의 해시값을 DB에서 가져온 후 변수에 저장
	else {
	$queryhash1 = "select hash1 from googleplay where giftcon_num = $num10";
	$result = mysqli_query($con, $queryhash1);
	$rowhash1 = mysqli_fetch_array($result);
	$num1 = $rowhash1[0];
	
	$queryhash11 = "select hash2 from googleplay where giftcon_num = $num10";
	$result = mysqli_query($con, $queryhash11);
	$rowhash11 = mysqli_fetch_array($result);
	$num11 = $rowhash11[0];
	
	$queryhash111 = "select hash3 from googleplay where giftcon_num = $num10";
	$result = mysqli_query($con, $queryhash111);
	$rowhash111 = mysqli_fetch_array($result);
	$num111 = $rowhash111[0];
	
	$queryhash1111 = "select hash4 from googleplay where giftcon_num = $num10";
	$result = mysqli_query($con, $queryhash1111);
	$rowhash1111 = mysqli_fetch_array($result);
	$num1111 = $rowhash1111[0];

																#(6/16) 상품권의 해시값 출력
	echo "구매하신 상품권의 코드 : ".$num1." - ".$num11." - ".$num111." - ".$num1111." 입니다.<br><br>";
	echo "구매하신 상품권은 마이페이지에서 확인하실 수 있으며,<br><br>";
	echo "해당 상품권은 포인트충전 페이지에서 사용하실 수 있습니다.<br><br>";
	}
	}
																#(6/16) 아이튠즈 카드 일 시 발동
	else if($cd == "itunescard"){
		
																#(6/16) DB에 있는 구글 플레이 카드의 수(구매갯수)를 센다.
	$querychhash02 = "select count(giftcon_num) from itunescard"; 
	$result = mysqli_query($con, $querychhash02);
	$rowhash02 = mysqli_fetch_array($result);
	$num20 = $rowhash02[0]+20;

																#(6/16) DB에 20개 이상 카드가 생성 시 수량초과 알림창 출력
	if($num20>41){
		    echo "
	      <script>
		window.alert('상품권의 판매 개수가 초과되었습니다.<br>게시판에 알려주시면 수량을 추가하겠습니다.')
	          location.href = 'index.php';
	      </script>
	     ";
	}
																#(6/16) 구매한 상품권의 해시값을 DB에서 가져온 후 변수에 저장
	else{
	$queryhash2 = "select hash1 from itunescard where giftcon_num = $num20";
	$result = mysqli_query($con, $queryhash2);
	$rowhash2 = mysqli_fetch_array($result);
	$num2 = $rowhash2[0];
	
	$queryhash22 = "select hash2 from itunescard where giftcon_num = $num20";
	$result = mysqli_query($con, $queryhash22);
	$rowhash22 = mysqli_fetch_array($result);
	$num22 = $rowhash22[0];
	
	$queryhash222 = "select hash3 from itunescard where giftcon_num = $num20";
	$result = mysqli_query($con, $queryhash222);
	$rowhash222 = mysqli_fetch_array($result);
	$num222 = $rowhash222[0];
	
	$queryhash2222 = "select hash4 from itunescard where giftcon_num = $num20";
	$result = mysqli_query($con, $queryhash2222);
	$rowhash2222 = mysqli_fetch_array($result);
	$num2222 = $rowhash2222[0];

																#(6/16) 상품권의 해시값 출력
	echo "구매하신 상품권의 코드 : ".$num2." - ".$num22." - ".$num222." - ".$num2222." 입니다.<br><br>";
	echo "구매하신 상품권은 마이페이지에서 확인하실 수 있으며,<br><br>";
	echo "해당 상품권은 포인트충전 페이지에서 사용하실 수 있습니다.<br><br>";
	echo "<br>";
	}
	}
																#(6/16) PSN 카드 일 시 발동
	else if($cd == "psncard"){

																#(6/16) DB에 있는 구글 플레이 카드의 수(구매갯수)를 센다.
	$querychhash03 = "select count(giftcon_num) from psncard"; 
	$result = mysqli_query($con, $querychhash03);
	$rowhash03 = mysqli_fetch_array($result);
	$num30 = $rowhash03[0]+40;

																#(6/16) DB에 20개 이상 카드가 생성 시 수량초과 알림창 출력
	if($num30>61){
		    echo "
	      <script>
		window.alert('상품권의 판매 개수가 초과되었습니다.<br>게시판에 알려주시면 수량을 추가하겠습니다.')
	          location.href = 'index.php';
	      </script>
	     ";
	}
																#(6/16) 구매한 상품권의 해시값을 DB에서 가져온 후 변수에 저장
	else{
	$queryhash3 = "select hash1 from psncard where giftcon_num = $num30";
	$result = mysqli_query($con, $queryhash3);
	$rowhash3 = mysqli_fetch_array($result);
	$num3 = $rowhash3[0];

	$queryhash33 = "select hash2 from psncard where giftcon_num = $num30";
	$result = mysqli_query($con, $queryhash33);
	$rowhash33 = mysqli_fetch_array($result);
	$num33 = $rowhash33[0];

	$queryhash333 = "select hash3 from psncard where giftcon_num = $num30";
	$result = mysqli_query($con, $queryhash333);
	$rowhash333 = mysqli_fetch_array($result);
	$num333 = $rowhash333[0];
	
	$queryhash3333 = "select hash4 from psncard where giftcon_num = $num30";
	$result = mysqli_query($con, $queryhash3333);
	$rowhash3333 = mysqli_fetch_array($result);
	$num3333 = $rowhash3333[0];

																#(6/16) 상품권의 해시값 출력
	echo "구매하신 상품권의 코드 : ".$num3." - ".$num33." - ".$num333." - ".$num3333." 입니다.<br><br>";
	echo "구매하신 상품권은 마이페이지에서 확인하실 수 있으며,<br><br>";
	echo "해당 상품권은 포인트충전 페이지에서 사용하실 수 있습니다.<br><br>";
	}
	}
																#(6/16) PSN 카드 일 시 발동
	else if($cd == "bitcash"){

																#(6/16) DB에 있는 구글 플레이 카드의 수(구매갯수)를 센다.
	$querychhash04 = "select count(giftcon_num) from bitcash"; 
	$result = mysqli_query($con, $querychhash04);
	$rowhash04 = mysqli_fetch_array($result);
	$num40 = $rowhash04[0]+60;

																#(6/16) DB에 20개 이상 카드가 생성 시 수량초과 알림창 출력
	if($num40>81){
		    echo "
	      <script>
		window.alert('상품권의 판매 개수가 초과되었습니다.<br>게시판에 알려주시면 수량을 추가하겠습니다.')
	          location.href = 'index.php';
	      </script>
	     ";
	}
																#(6/16) 구매한 상품권의 해시값을 DB에서 가져온 후 변수에 저장
	else{
	$queryhash4 = "select hash1 from bitcash where giftcon_num = $num40";
	$result = mysqli_query($con, $queryhash4);
	$rowhash4 = mysqli_fetch_array($result);
	$num4 = $rowhash4[0];

	$queryhash44 = "select hash2 from bitcash where giftcon_num = $num40";
	$result = mysqli_query($con, $queryhash44);
	$rowhash44 = mysqli_fetch_array($result);
	$num44 = $rowhash44[0];

	$queryhash444 = "select hash3 from bitcash where giftcon_num = $num40";
	$result = mysqli_query($con, $queryhash444);
	$rowhash444 = mysqli_fetch_array($result);
	$num444 = $rowhash444[0];
	
	$queryhash4444 = "select hash4 from bitcash where giftcon_num = $num40";
	$result = mysqli_query($con, $queryhash4444);
	$rowhash4444 = mysqli_fetch_array($result);
	$num4444 = $rowhash4444[0];

																#(6/16) 상품권의 해시값 출력
	echo "구매하신 상품권의 코드 : ".$num4." - ".$num44." - ".$num444." - ".$num4444." 입니다.<br><br>";
	echo "구매하신 상품권은 마이페이지에서 확인하실 수 있으며,<br><br>";
	echo "해당 상품권은 포인트충전 페이지에서 사용하실 수 있습니다.<br><br>";
	}
	}
	
?>
</center>
<br>
<hr>
</hr>
<br><br>
<footer>
<?php include "footer.php";?>
</footer>