<!-- 구매자 캐시충전											(6/16) 각 기프트 카드 사용 시 사용체크에 X로 바뀌는 구문 및 상품권으로 포인트 충전 구문 추가-->
<?php
	$G=0;
	$I=0;
	$P=0;
	$B=0;
	$id = $_POST["id"];
	$pp = $_POST["plus_point"];
														# (6/16) 기프트카드 전달값 변수에 저장
	$gift1 = $_POST["use_giftcard1"];
	$gift2 = $_POST["use_giftcard2"];
	$gift3 = $_POST["use_giftcard3"];
	$gift4 = $_POST["use_giftcard4"];
	$con = mysqli_connect("localhost", "root", "", "sample");


														# (6/16) 무슨 기프트 카드인지 찾으면서 사용확인 여부를 DB에서 가져온 후 변수에 저장.
	if($pp=="" && $gift1 !=""){
	$queryG = "select count(giftcon_num), use_check from googleplay where hash1='$gift1' and hash2='$gift2' and hash3='$gift3' and hash4='$gift4'";
	$queryI = "select count(giftcon_num), use_check from itunescard where hash1='$gift1' and hash2='$gift2' and hash3='$gift3' and hash4='$gift4'";
	$queryP = "select count(giftcon_num), use_check from psncard where hash1='$gift1' and hash2='$gift2' and hash3='$gift3' and hash4='$gift4'";
	$queryB = "select count(giftcon_num), use_check from bitcash where hash1='$gift1' and hash2='$gift2' and hash3='$gift3' and hash4='$gift4'";

	$result = mysqli_query($con, $queryG);
	$rowG = mysqli_fetch_array($result);
	$G = $rowG[0];
	$UCG = $rowG[1];
	$result = mysqli_query($con, $queryI);
	$rowI = mysqli_fetch_array($result);
	$I = $rowI[0];
	$UCI = $rowI[1];
	$result = mysqli_query($con, $queryP);
	$rowP = mysqli_fetch_array($result);
	$P = $rowP[0];
	$UCP = $rowP[1];
	$result = mysqli_query($con, $queryB);
	$rowB = mysqli_fetch_array($result);
	$B = $rowB[0];
	$UCB = $rowB[1];





														# (6/16) googleplay 카드이면서 사용 가능상태 일 시 포인트 충전 및 사용확인 컬럼에 X로 변경
	if($G=="1" && $UCG == "O"){
		$querygoogleplay = "update googleplay set use_check = 'X' where hash1='$gift1' and hash2='$gift2' and hash3='$gift3' and hash4='$gift4'";
		mysqli_query($con, $querygoogleplay);

		$querygp = "select price from googleplay where hash1='$gift1' and hash2='$gift2' and hash3='$gift3' and hash4='$gift4'";
		$result = mysqli_query($con, $querygp);
		$rowgp = mysqli_fetch_array($result);
		$giftprice1 = $rowgp[0];

		$queryplusG = "update members Set point = point + $giftprice1 where id='$id'";
		mysqli_query($con, $queryplusG);

		$queryplusGP = "select point from members where id='$id'";
		$result = mysqli_query($con, $queryplusGP);

		$rowplusGP = mysqli_fetch_array($result);
		$pointplusGP = $rowplusGP[0];
		session_start();
		$_SESSION["userpoint"] = $pointplusGP;

		    echo "
	      <script>
		window.alert('충전이 완료되었습니다.')
	          location.href = 'index.php';
	      </script>
	     ";
	}
														# (6/16) itunes 카드 이면서 사용가능상태 일 시 포인트 충전 및 사용확인 컬럼에 X로 변경
	else if($I=="1" && $UCI == "O"){
		$queryitunescard = "update itunescard set use_check = 'X' where hash1='$gift1' and hash2='$gift2' and hash3='$gift3' and hash4='$gift4'";
		mysqli_query($con, $queryitunescard);

		$queryic = "select price from itunescard where hash1='$gift1' and hash2='$gift2' and hash3='$gift3' and hash4='$gift4'";
		$result = mysqli_query($con, $queryic);
		$rowic = mysqli_fetch_array($result);
		$giftprice2 = $rowic[0];

		$queryplusI = "update members Set point = point + $giftprice2 where id='$id'";
		mysqli_query($con, $queryplusI);

		$queryplusIC = "select point from members where id='$id'";
		$result = mysqli_query($con, $queryplusIC);

		$rowplusIC = mysqli_fetch_array($result);
		$pointplusIC = $rowplusIC[0];
		session_start();
		$_SESSION["userpoint"] = $pointplusIC;

		    echo "
	      <script>
		window.alert('충전이 완료되었습니다.')
	          location.href = 'index.php';
	      </script>
	     ";
	}
														# (6/16) PSN 카드 이면서 사용가능상태 일 시 포인트 충전 및 사용확인 컬럼에 X로 변경
	else if($P=="1" && $UCP == "O"){
		$querypsncard = "update psncard set use_check = 'X' where hash1='$gift1' and hash2='$gift2' and hash3='$gift3' and hash4='$gift4'";
		mysqli_query($con, $querypsncard);

		$querypc = "select price from psncard where hash1='$gift1' and hash2='$gift2' and hash3='$gift3' and hash4='$gift4'";
		$result = mysqli_query($con, $querypc);
		$rowpc = mysqli_fetch_array($result);
		$giftprice3 = $rowpc[0];

		$queryplusPC = "update members Set point = point + $giftprice3 where id='$id'";
		mysqli_query($con, $queryplusPC);

		$queryplusPC = "select point from members where id='$id'";
		$result = mysqli_query($con, $queryplusPC);

		$rowplusPC = mysqli_fetch_array($result);
		$pointplusPC = $rowplusPC[0];
		session_start();
		$_SESSION["userpoint"] = $pointplusPC;

		    echo "
	      <script>
		window.alert('충전이 완료되었습니다.')
	          location.href = 'index.php';
	      </script>
	     ";
	}
														# (6/16) bitcash 카드 이면서 사용가능상태 일 시 포인트 충전 및 사용확인 컬럼에 X로 변경
	else if($B=="1" && $UCB == "O"){
		$querybitcash = "update bitcash set use_check = 'X' where hash1='$gift1' and hash2='$gift2' and hash3='$gift3' and hash4='$gift4'";
		mysqli_query($con, $querybitcash);

		$querybc = "select price from bitcash where hash1='$gift1' and hash2='$gift2' and hash3='$gift3' and hash4='$gift4'";
		$result = mysqli_query($con, $querybc);
		$rowbc = mysqli_fetch_array($result);
		$giftprice4 = $rowbc[0];

		$queryplusB = "update members Set point = point + $giftprice4 where id='$id'";
		mysqli_query($con, $queryplusB);

		$queryplusBC = "select point from members where id='$id'";
		$result = mysqli_query($con, $queryplusBC);

		$rowplusBC = mysqli_fetch_array($result);
		$pointplusBC = $rowplusBC[0];
		session_start();
		$_SESSION["userpoint"] = $pointplusBC;

		    echo "
	      <script>
		window.alert('충전이 완료되었습니다.')
	          location.href = 'index.php';
	      </script>
	     ";
	}
														# (6/16) 일치하는 정보가 없거나 잘못된 번호 입력 시 출력
	else {
	print"
		<script>
		window.alert('등록되지 않은 상품권이거나 이미 사용한 상품권입니다.')
		history.go(-1)
		</script>
	";
	}
	
	}
	else if($pp>=1 && $gift1 == "") {

	$query = "update members Set point = point + $pp where id='$id'";

	mysqli_query($con, $query);
	
	$query8 = "select point from members where id='$id'";
	$result = mysqli_query($con, $query8);

	$row = mysqli_fetch_array($result);
	$point = $row[0];

	session_start();
	$_SESSION["userpoint"] = $point;

	mysqli_close($con); 

    echo "
	      <script>
		window.alert('충전이 완료되었습니다.')
	          location.href = 'index.php';
	      </script>
	     ";
	}
														# (6/16) 문구 수정
	else {	
	print"
		<script>
		window.alert('1 이상의 충전량 혹은 상품권 번호를 정확히 입력하세요')
		history.go(-1)
		</script>
	";
	}

?>


