<!DOCTYPE html>
<html>
<!-- 
Algoritma
 1. Strat
 2. Masukkan nama
 3. Klik tombol OK untuk masuk ke form selanjutnya
 4. Akan muncul hasil seperti pada awal inputan
 5. Finish
-->
	<head>
		<title>Metode POST</title>
	</head>
	<body>
    	<!-- pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Nama <input type="text" name="nama" />
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['nama'])){ //variable "nama" yang didapat dari method POST
				echo 'Hallo '. $_POST['nama'];
			}
		?>
	</body>
</html>