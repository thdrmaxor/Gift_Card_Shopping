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
													<!-- (6/16) 빈칸 알림 삭제(point_2.php로 이동) -->
      document.plus_point.submit();
   }
													<!-- (6/16) 기프트카드 입력란 비우는 기능 추가 -->
   function reset_form() {  
      document.plus_point.plus_point.value = "";
	  document.plus_point.use_giftcard1.value = "";
	  document.plus_point.use_giftcard2.value = "";
	  document.plus_point.use_giftcard3.value = "";
	  document.plus_point.use_giftcard4.value = "";
      document.plus_point.plus_point.focus();
      return;
   }

</script>
</head>
<body> 
	<header>
    	<?php include "header.php";?>
    </header>
	<br><br><center><img src="./img/point.jpg"></center>
	<section>

        <div id="main_content">
      		<div id="join_box">
			<!-- 폼이름, 전달은 point_2.php로 전달 -->
          	<form  name="plus_point" method="post" action="point_2.php">
			    <h2>포인트 충전</h2>
    		    	<div class="form id">
				        <div class="col1">아이디</div>   
						<div class="col2">
							<!-- 로그인된 아이디 적혀있게 만듬 -->
							<input type="text" name="id" value="<?php echo $userid ?>" READONLY>
			       		</div>
					</div>
			       	<div class="clear"></div>
					<!-- 포인트 충전 부분 -->
			       	<div class="form">
				        <div class="col1">포인트 충전금액</div>
				        <div class="col2">
							<input type="text" name="plus_point" placeholder="상품권 사용시 입력X">
				        </div>            
			       	</div>
			       	<div class="clear"></div>
																								<!-- (6/16) 기프트 상품권 입력란 추가 -->
					<div class="giftcon">
				        <div class="col1">상품권 사용</div>
				        <div class="col2">
							<input type="text" name="use_giftcard1" size=4> - 
							<input type="text" name="use_giftcard2" size=4> - 
							<input type="text" name="use_giftcard3" size=4> - 
							<input type="text" name="use_giftcard4" size=4>
				        </div>
						
			       	</div>
			       	<div class="clear"></div>
			       	<br><br>
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

