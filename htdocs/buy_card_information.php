<?
#세션 ID 가져오기 	
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
?>

<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>누리홈쇼핑</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/member.css">
</head>
<body> 
	<header>
    	<?php include "header.php";?>
    </header>
	<br><br><center><img src="./img/buy.jpg"></center>
	<section>

        <div id="main_content">
      		<div id="join_box">

<h2>구매한 목록</h2>

<?php	

	#반복변수 a 및 DB계정 선언
	$a=0;
	$con = mysqli_connect("localhost", "root", "", "sample");

	#googleplay 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$query1 = "select hash1 from googleplay where customer = '$userid'";
	$result=mysqli_query($con,$query1);
	while($Grow1=mysqli_fetch_array($result)) {
	$Ghash1[$a]=$Grow1[0];
	$a=$a+1;
	}

	#googleplay 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query2 = "select hash2 from googleplay where customer = '$userid'";
	$result=mysqli_query($con,$query2);
	while($Grow2=mysqli_fetch_array($result)) {
	$Ghash2[$a]=$Grow2[0];
	$a=$a+1;
	}

	#googleplay 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query3 = "select hash3 from googleplay where customer = '$userid'";
	$result=mysqli_query($con,$query3);
	while($Grow3=mysqli_fetch_array($result)) {
	$Ghash3[$a]=$Grow3[0];
	$a=$a+1;
	}

	#googleplay 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query4 = "select hash4 from googleplay where customer = '$userid'";
	$result=mysqli_query($con,$query4);
	while($Grow4=mysqli_fetch_array($result)) {
	$Ghash4[$a]=$Grow4[0];
	$a=$a+1;
	}

	#googleplay 상품권 사용여부를 확인하기 위해 상품권을 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query5 = "select use_check from googleplay where customer = '$userid'";
	$result=mysqli_query($con,$query5);
	while($Grow5=mysqli_fetch_array($result)) {
	$Guse[$a]=$Grow5[0];
	$a=$a+1;
	}

	#googleplay 상품권 코드 및 사용여부 출력
	for ($b=0; $a > $b; $b++){
	echo"<br>";
	echo "구글플레이 기프트카드 보유 코드 : ".$Ghash1[$b]."-".$Ghash2[$b]."-".$Ghash3[$b]."-".$Ghash4[$b]."    | 보유 여부 : ".$Guse[$b]."<br>";
	}

	#itunescard 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query11 = "select hash1 from itunescard where customer = '$userid'";
	$result=mysqli_query($con,$query11);
	while($Irow11=mysqli_fetch_array($result)) {
	$Ihash11[$a]=$Irow11[0];
	$a=$a+1;
	}

	#itunescard 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query22 = "select hash2 from itunescard where customer = '$userid'";
	$result=mysqli_query($con,$query22);
	while($Irow22=mysqli_fetch_array($result)) {
	$Ihash22[$a]=$Irow22[0];
	$a=$a+1;
	}

	#itunescard 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query33 = "select hash3 from itunescard where customer = '$userid'";
	$result=mysqli_query($con,$query33);
	while($Irow33=mysqli_fetch_array($result)) {
	$Ihash33[$a]=$Irow33[0];
	$a=$a+1;
	}

	#itunescard 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query44 = "select hash4 from itunescard where customer = '$userid'";
	$result=mysqli_query($con,$query44);
	while($Irow44=mysqli_fetch_array($result)) {
	$Ihash44[$a]=$Irow44[0];
	$a=$a+1;
	}

	#itunescard 상품권 사용여부를 확인하기 위해 상품권을 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query55 = "select use_check from itunescard where customer = '$userid'";
	$result=mysqli_query($con,$query55);
	while($Irow55=mysqli_fetch_array($result)) {
	$Iuse[$a]=$Irow55[0];
	$a=$a+1;
	}

	#itunescard 상품권 코드 및 사용여부 출력
	for ($b=0; $a > $b; $b++){
	echo"<br>";
	echo "아이튠즈 기프트카드 보유 코드 : ".$Ihash11[$b]."-".$Ihash22[$b]."-".$Ihash33[$b]."-".$Ihash44[$b]."    | 보유 여부 : ".$Iuse[$b]."<br>";
	}

	#psncard 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query111 = "select hash1 from psncard where customer = '$userid'";
	$result=mysqli_query($con,$query111);
	while($Prow111=mysqli_fetch_array($result)) {
	$Phash111[$a]=$Prow111[0];
	$a=$a+1;
	}

	#psncard 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query222 = "select hash2 from psncard where customer = '$userid'";
	$result=mysqli_query($con,$query222);
	while($Prow222=mysqli_fetch_array($result)) {
	$Phash222[$a]=$Prow222[0];
	$a=$a+1;
	}

	#psncard 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query333 = "select hash3 from psncard where customer = '$userid'";
	$result=mysqli_query($con,$query333);
	while($Prow333=mysqli_fetch_array($result)) {
	$Phash333[$a]=$Prow333[0];
	$a=$a+1;
	}

	#psncard 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query444 = "select hash4 from psncard where customer = '$userid'";
	$result=mysqli_query($con,$query444);
	while($Prow444=mysqli_fetch_array($result)) {
	$Phash444[$a]=$Prow444[0];
	$a=$a+1;
	}

	#psncard 상품권 사용여부를 확인하기 위해 상품권을 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query555 = "select use_check from psncard where customer = '$userid'";
	$result=mysqli_query($con,$query555);
	while($Prow555=mysqli_fetch_array($result)) {
	$Puse[$a]=$Prow555[0];
	$a=$a+1;
	}

	#psncard 상품권 코드 및 사용여부 출력
	for ($b=0; $a > $b; $b++){
	echo"<br>";
	echo "PSN 기프트카드 보유 코드 : ".$Phash111[$b]."-".$Phash222[$b]."-".$Phash333[$b]."-".$Phash444[$b]."    | 보유 여부 : ".$Puse[$b]."<br>";
	}

	#bitcash 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query1111 = "select hash1 from bitcash where customer = '$userid'";
	$result=mysqli_query($con,$query1111);
	while($Brow1111=mysqli_fetch_array($result)) {
	$Bhash1111[$a]=$Brow1111[0];
	$a=$a+1;
	}

	#bitcash 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query2222 = "select hash2 from bitcash where customer = '$userid'";
	$result=mysqli_query($con,$query2222);
	while($Brow2222=mysqli_fetch_array($result)) {
	$Bhash2222[$a]=$Brow2222[0];
	$a=$a+1;
	}

	#bitcash 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query3333 = "select hash3 from bitcash where customer = '$userid'";
	$result=mysqli_query($con,$query3333);
	while($Brow3333=mysqli_fetch_array($result)) {
	$Bhash3333[$a]=$Brow3333[0];
	$a=$a+1;
	}

	#bitcash 상품권 코드를 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query4444 = "select hash4 from bitcash where customer = '$userid'";
	$result=mysqli_query($con,$query4444);
	while($Brow4444=mysqli_fetch_array($result)) {
	$Bhash4444[$a]=$Brow4444[0];
	$a=$a+1;
	}

	#bitcash 상품권 사용여부를 확인하기 위해 상품권을 갖고있는 접속유저의 정보를 변수에 저장
	$a=0;
	$query5555 = "select use_check from bitcash where customer = '$userid'";
	$result=mysqli_query($con,$query5555);
	while($Brow5555=mysqli_fetch_array($result)) {
	$Buse[$a]=$Brow5555[0];
	$a=$a+1;
	}

	#bitcash 상품권 코드 및 사용여부 출력
	for ($b=0; $a > $b; $b++){
	echo"<br>";
	echo "비트캐시 기프트카드 보유 코드 : ".$Bhash1111[$b]."-".$Bhash2222[$b]."-".$Bhash3333[$b]."-".$Bhash4444[$b]."    | 보유 여부 : ".$Buse[$b]."<br>";
	}

?>
			       	<div class="bottom_line"> </div>

        	</div> 
        </div> 
	</section> 
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>