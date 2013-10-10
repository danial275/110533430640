<!DOCTYPE html>
<html>
<!-- 
Algoritma
 1. Start
 2. Masukkan angka yang akan dihitung
 3. Pilihlah operasi matematika
 4. Klik tombol OK untuk masuk ke form selanjutnya
 5. Hasil perhitungan
 6. Selesai
-->
	<head>
		<title>Studi Kasus 1</title>
	</head>
	<body>
		<h1>&nbsp;</h1>
		<!-- pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<input type="text" name="v1" placeholder="Angka" value="<?php echo $_POST['v1']; ?>" required />
			<!-- untuk menentukan operasi perhitungan dan validasi php pada masing-masing option  -->
			<select name="ops">
				<option value="+" <?php if($_POST['ops']=='+') echo"selected"; ?>>+</option>
				<option value="-" <?php if($_POST['ops']=='-') echo"selected"; ?>>-</option>
				<option value="x" <?php if($_POST['ops']=='x') echo"selected"; ?>>x</option>
				<option value="/" <?php if($_POST['ops']=='/') echo"selected"; ?>>/</option>
			</select>
			<input type="text" name="v2" placeholder="Angka" value="<?php echo $_POST['v2']; ?>" required />
			<input type="submit" value="=" />
		<?php
			// selection "if" digunakan untuk menentukan proses yang akan dieksekusi
			if(isset($_POST['v1']) && isset($_POST['v2'])){
				if($_POST['ops']=='+') $hasil=$_POST['v1'] + $_POST['v2'];
				else if($_POST['ops']=='-') $hasil=$_POST['v1'] - $_POST['v2'];
				else if($_POST['ops']=='x') $hasil=$_POST['v1'] * $_POST['v2'];
				else if($_POST['ops']=='/') $hasil=$_POST['v1'] / $_POST['v2'];
				
			}
		?>
			<input type='text' name='hasil' value='<?php echo $hasil;?>' readonly />
		</form>
	</body>
</html>