<?php
	$id   = $_POST["id"];
	$pass = $_POST["pass"];
	$name = $_POST["name"];
	$email1  = $_POST["email1"];
	$email2  = $_POST["email2"];
	$email = $email1."@".$email2;

	$con = mysqli_connect("localhost", "root", "", "sample");
	$sql = "update members Set pass='$pass', name='$name', email='$email' where id='$id'";
	mysqli_query($con, $sql);
	mysqli_close($con);

	session_start();
	$_SESSION["userid"] = $id;
	$_SESSION["username"] = $name;

	echo "
		<script>
		location.href = 'index.php';
		</script>
	 ";
?>

   
<!-- 테이블 코드 양식
create table members ( 
num int not null auto_increment, id char(15) not null, pass char(15) not null, name char(15) not null, email char(80), level int, point int,  primary key(num)); 

alter table members modify num int not null;
insert into members(num, id, pass, name, email, level, point) values(1, 'master', '0000', 'admin', 'admin@localhost', 0, 9999);
alter table members modify num int not null auto_increment;
-->

