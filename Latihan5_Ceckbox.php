<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Pilih hobby anda
 3. Klik tombol OK untuk masuk ke form selanjutnya
 4. Akan muncul hasil seperti pada awal inputan
 5. Finish
-->
	<head>
		<title>Data Checkbox</title>
	</head>
	<body>
    	<!-- pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Hobby 
            <!-- pemberian array pada input checkbox  -->
			<input type="checkbox" name="hobby[]" value="Membaca" /> Membaca
			<input type="checkbox" name="hobby[]" value="Olahraga" /> Olahraga
			<input type="checkbox" name="hobby[]" value="Menyanyi" /> Menyanyi
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['hobby'])){ // variable "hobby" yang didapat dari method POST
				foreach($_POST['hobby'] as $key => $val) //perulangan menggunakan foreach
					echo $key . '->' . $val . '<br />';
				echo $_POST['job'];
			}
		?>
	</body>
</html>