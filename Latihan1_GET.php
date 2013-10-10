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
		<title>Metode GET</title>
	</head>
	<body>
    	<!-- pengiriman data melalui method GET -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
			Nama <input type="text" name="nama" />
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_GET['nama'])){ // variable "nama" yang didapat dari method GET
				echo 'Hallo '. $_GET['nama'];
			}
		?>
	</body>
</html>