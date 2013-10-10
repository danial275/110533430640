<html> 
<!-- 
Algoritma Program
 1. Start
 2. Pilih paket anda
 3. Klik tombol OK untuk masuk ke form selanjutnya
 4. Akan muncul hasil seperti pada awal inputan
 5. Finish
-->
<head> 
  <title>Study Kasus2</title> 
</head> 
 
<body>  
<!-- pengiriman data melalui method POST -->
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Menu  : 
    <!-- inputan checkbox  -->
    <input type="checkbox" name="pes[]" value="paket1"checked=" <?PHP
	  if ($_post['th']=="Paket1"){
		  echo 'selected="selected"';}
      ?>"
    />Nasi Goreng Teri Medan + Teh Tarik 
 
    <input type="checkbox" name="pes[]" value="paket2" 
    />Soto Babon + Es Teh 
 
    <input type="checkbox" name="pes[]" value="paket3" 
    />Nasi Pecel + Es Kopi <br /> 
 
    <input type="submit" value="OK" /> 
  </form> 
 
<?php 
// menampilkan menu
if (isset($_POST['pes'])) { 
  foreach ($_POST['pes'] as $key => $val) { 
    echo $val . '<br />'; 
  } 
} 
?> 
 
</body> 
</html> 