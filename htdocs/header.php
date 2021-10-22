<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["userpass"])) $userpass = $_SESSION["userpass"];
    else $userpass = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>
	<!-- 비접속시 윈도우 알림창 스크립트 -->
	<script>
		function alertFunction() {
		alert("로그인 후 이용하여 주십시오.");
	}
	</script>
		
	<div></div><br>
	<div id="top" style="background:white">
	<h3>
	<a href="index.php" ><center><img src="./img/title.jpg"></center></a>
	</h3>
		</div><br><br><br>
		<a> </a>
		</div>
		<a> </a>
		</div>
		<div id="top_menu">
	<ul>  
	<?php
	if(!$userid) {
	?>                
		<li><a href="member_form.php">회원 가입</a></li>
		<li> | </li>
		<li><a href="login_form.php">로그인</a></li>
	<?php
	} else {
	
	if($userlevel == "8"){
		$user="우수고객";
	}

	else if($userlevel == "9"){
		$user="일반고객";
	}


	else if($userlevel == "0"){
		$user="관리자";	
	}

	else{
		$user="등급없음";
	}

	$logged = $username."(".$userid.")님[Level:".$user.", Point:".$userpoint."]";
	?>
		<li><?=$logged?> </li>

	<?php
	# 유저가 일반유저일 시
	if($userid != "master") {
	?>   
		<li> | </li>
		<li><a href="point_1.php">포인트 충전</a> </li>
																										<!-- (6/16) 마이페이지 버튼 및 페이지(a.php) 추가-->
		<li> | </li>
		<li><a href="buy_card_information.php">마이 페이지</a> </li>
		<li> | </li>
		<li><a href="member_modify_form.php">정보수정</a> </li>
	<?php
	# 유저가 관리자(master) 일 시
	} else { 
	?>
		<li> | </li>
		<li><a href="master_modify_1.php">회원관리</a> </li>

	<?php
	} 
	?>
		<li> | </li>
		<li><a href="logout.php">로그아웃</a> </li>
	<?php
	}
	?>

            </ul>
</div>
<br><br>

	<?php if(!$userid){
	?>
	<div id="menu_bar">
	<ul>  
		<li><a onclick="alertFunction()">구글플레이</a></li>
		<li><a onclick="alertFunction()">아이튠즈카드</a></li>
		<li><a onclick="alertFunction()">PSN카드</a></li>
		<li><a onclick="alertFunction()">비트캐쉬</a></li>
		<li><a onclick="alertFunction()">| 고객소통 |</a></li>
	</ul>
	</div>

	<?php } else { ?>
	<div id="menu_bar">
	<ul>  
		<li><a href="index_1.php">구글플레이</a></li>
		<li><a href="index_2.php">아이튠즈카드</a></li>                                
		<li><a href="index_3.php">PSN카드</a></li>
		<li><a href="index_4.php">비트캐쉬</a></li>
		<li><a href="question_index.php">| 고객소통 |</a></li>
	</ul>
	</div>
	<?php } ?>