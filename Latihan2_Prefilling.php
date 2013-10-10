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
		<title>Prefilling Text Field</title>
	</head>
	<body>
    	<!-- pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        	<!-- terdapat validasi php pada value input text  -->
			Nama <input type="text" name="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '' ?>"/>
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['nama'])){ // variable "nama" yang didapat dari method POST
				echo $_POST['nama'];
			}
		?>
	</body>
</html>