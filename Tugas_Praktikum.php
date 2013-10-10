<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Start
 2. Masukkan Username dan Password pada form login
 3. Klik tombol Login untuk masuk ke form selanjutnya
 4. Akan muncul Welcome UNIVERSITAS NEGERI MALANG
 5. Finish
-->
	<head>
		<title>Tugas Praktikum</title>
		<!-- desain halaman web -->
		<style>
			body{
				background-color: #c9e6f8;
			}
			.content{
				background-color: #eef7ff;
				margin: 100px auto;
				padding: 5px 20px 40px 20px;
				width: 350px;
				border: solid 3px #a4d7f5;
			}
			.min_content{
				margin: 0px auto;
				width: 250px;
			}
			.content h1{
				color: #86d5f2;
			}
			.content label{
				display:block;
			}
			.content input{
				display:block;
				margin: 5px 0 0 0;
				padding: 5px;
			}
		</style>
        <script>
		<!-- digunakan untuk validasi inputan dimana bila input masih kosong dan input harus berupa huruf -->
			function validateForm(){
				var x=document.forms["flogin"]["user"].value;
				if (x==null || x==""){
					alert("Username Masih Kosong");
					document.getElementById("user").focus();
				  	return false;
				}
				var y=document.forms["flogin"]["pass"].value;
				if (y==null || y==""){
					alert("Password Masih Kosong");
					document.getElementById("user").focus();
				  	return false;
				}
				var alphaExp = /^[a-zA-Z]+$/;
				if(x.match(alphaExp)){
					if(y.match(alphaExp)){
						return true;
					}else{
						alert("Password Harus Huruf");
						document.getElementById("user").focus();
						return false;
					}
				}else{
					alert("Username Harus Huruf");
					document.getElementById("user").focus();
					return false;
				}
			}
		</script>
	</head>
	<body>
    	<!-- Syntag validasi login -->
		<?php 
			if(isset($_POST['user'])&&isset($_POST['pass'])){
				if($_POST['user']=='danial275'&&$_POST['pass']=='danial275'){
					echo "
					<script>
						alert('WELCOME TO UNIVERSITAS NEGERI MALANG');
					</script>
					";
				}else{
					echo "
					<script>
						alert('Coba Lagi Mas Brooooooo');
					</script>
					";
				}
			}
		?>
		<form name="flogin" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">
			<div class="content">
				<div class="min_content">
					<h1>Login</h1>
				</div>
				<hr color="#a4d7f5" />
				<div class="min_content">
					<label>Username</label>
					<input type="text" name="user" id="user" autofocus />
					<label>Password</label>
					<input type="password" name="pass" />
					<input type="submit" value="Login" />
				</div>
			</div>
		</form>
        
		
	</body>
</html>