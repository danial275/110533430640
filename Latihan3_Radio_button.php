<!DOCTYPE html>
<html>
<!-- 
Algoritma
 1. Strat
 2. Pilih jenis kelamin anda
 3. Klik tombol OK untuk masuk ke form selanjutnya
 4. Akan muncul hasil jenis kelamin yang anda pilih tadi
 5. Finish
-->
	<head>
		<title>Data Radio Button</title>
	</head>
	<body>
    	<!-- pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Jenis Kelamin <input type="radio" name="sex" value="Pria" />Pria <input type="radio" name="sex" value="Wanita" />Wanita
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['sex'])){ //variable "sex" yang didapat dari method POST
				echo $_POST['sex'];
			}
		?>
	</body>
</html>