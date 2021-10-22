<br><br>
<div id="main_content">
	<div class="row">
	<hr></hr>
	<br><br>
	<ul>
	<div class="row">
	<div class="card h">
	<img class="picture1" src="./img/main_1.jpg" alt="1">
	</div>
	</div>
	</div>

	<div id="point_rank">
	<div class="row">
	<h4>상세정보</h4>

	<ul>
	<div class="col4" align="center">

	<div class="card-body">

	<h4 class="card-title"><p style="font-size:20px">구글플레이 카드</p><br></h4><br>

	<h5 style="color:orange">5,000원</h5><br>

	<h5 style="color:orange">(우수회원 10% 할인!!)<br>4,500원</h5><br>

	<p class="card-text">하나의 선물, 다양한 즐거움</p><br>

	</div>

	<div class="card-footer">
	<small class="text-muted" style="color:red">판매자 추천도 : ★ ★ ☆ ☆ ☆</small> <br><br>
	</div>

	<form name="form1" method="post" action="point_3.php" align="center">

	<?php $buy_point = 5000;?>

	<!-- form 구문으로 값 전달하기 위한 안보이는 text 전송용 -->
	<input type="text" style="display:none" name="id" value="<?php echo $userid ?>" READONLY>
																										<!-- (6/16)form 구문으로 값 전달하기 위한 안보이는 text 전송용 -->
	<input type="text" style="display:none" name="card" value="googleplay" READONLY>
	<INPUT type="text" style="display:none" name="buy_point" value="<?php echo $buy_point;?>">	

	<input type="submit" value="구매하기" style="font-size:20px">
	</form>

	</div>
	</ul>

	</div>
	</div>


<br><br>
<hr></hr>
<br><br>
<footer>
<?php include "footer.php";?>
</footer>