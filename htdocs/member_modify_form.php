<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>누리홈쇼핑</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/member.css">

<script>
function check_input()
{
	if (!document.information_change.pass.value) {
		alert("비밀번호를 입력하세요");    
		document.member_form.pass.focus();
		return;
	}
	if (!document.information_change.pass_confirm.value) {
		alert("비밀번호확인을 입력하세요");    
		document.information_change.pass_confirm.focus();
		return;
	}
	if (!document.information_change.name.value) {
		alert("이름을 입력하세요");    
		document.information_change.name.focus();
		return;
	}
	if (!document.information_change.email1.value) {
		alert("이메일 주소를 입력하세요");    
		document.information_change.email1.focus();
		return;
	}
	if (!document.information_change.email2.value) {
		alert("이메일 주소를 입력하세요");    
		document.information_change.email2.focus();
		return;
	}
	if (document.information_change.pass.value != 
		document.information_change.pass_confirm.value) {
		alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요.");
		document.information_change.pass.focus();
		document.information_change.pass.select();
		return;
	}
	document.information_change.submit();
}

function reset_form() {
	document.information_change.pass.value = "";
	document.information_change.pass_confirm.value = "";
	document.information_change.name.value = "";
	document.information_change.email1.value = "";
	document.information_change.email2.value = "";
	document.information_change.pass.focus();
	return;
}

</script>
</head>

<body> 
	<header>
	<?php include "header.php";?>
	</header>

	<section>

	<div id="main_content">
	<div id="join_box">
	<!-- 폼이름, 전달은 member_modify_insert.php로 전달 -->
          		<form  name="information_change" method="post" action="member_modify_insert.php">
		<h2>MY정보 수정하기</h2>
			<div class="form id">
				<div class="col1">아이디</div>
				<div class="col2">
				<!-- 로그인된 아이디 적혀있게 만듬 -->
					<input type="text" name="id" value="<?php echo $userid ?>" READONLY>
				</div>
			</div>

			<div class="clear"></div>

			<div class="form">
				<div class="col1">비밀번호</div>
				<div class="col2">
				<input type="password" name="pass">
				</div>                 
			</div>

			<div class="clear"></div>
			
			<div class="form">
				<div class="col1">비밀번호 확인</div>
				<div class="col2">
				<input type="password" name="pass_confirm">
				</div>                 
			</div>

			<div class="clear"></div>
			
			<div class="form">
				<div class="col1">이름</div>
				<div class="col2">
				<input type="text" name="name">
				</div>                 
			</div>

			<div class="clear"></div>

			<div class="form email">
				<div class="col1">이메일</div>
				<div class="col2">
				<input type="text" name="email1">@<input type="text" name="email2">
				</div>                 
			</div>

			<div class="clear"></div>
			<div class="bottom_line"> </div>
			<div class="buttons">

			<img style="cursor:pointer" src="./img/button_save.gif" onclick="check_input()">&nbsp;
			<img id="reset_button" style="cursor:pointer" src="./img/button_reset.gif"
			onclick="reset_form()">

			</div>
		</form>
	</div> 
	</div> 

	</section> 

	<footer>
	<?php include "footer.php";?>
	</footer>
</body>
</html>

