<!DOCTYPE html>
<html>
<!-- 
Algoritma
 1. Strat
 2. Pilih Pekerjaan
 3. Klik tombol OK untuk masuk ke form selanjutnya
 4. Akan muncul hasil seperti pada awal inputan
 5. Finish
-->
	<head>
		<title>Data Seleksi</title>
	</head>
	<body>
    	<!-- pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Pekerjaan 
			<select name="job">
				<option value="Mahasiswa">Mahasiswa</option>
				<option value="ABRI">ABRI</option>
				<option value="PNS">PNS</option>
				<option value="Swasta">Swasta</option>
			</select>
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['job'])){ // variable "job" yang didapat dari method POST
				echo $_POST['job'];
			}
		?>
	</body>
</html>