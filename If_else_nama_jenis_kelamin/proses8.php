<?PHP
	$var1= $_POST['syafiq1'];
	$var2= $_POST['syafiq2'];
	$var3= $_POST['syafiq3'];
	$var4= $_POST['syafiq4'];
	$var5= $_POST['syafiq5'];
	$var6= $_POST['syafiq6'];
	$var7= $_POST['syafiq7'];
	$var8= $_POST['syafiq8'];

	if ($var1 && $var5 == "Pria") {
		echo "$var1 Jenis Kelamin Pria<br>";
	}else{
		echo "$var1 Jenis Kelamin Wanita<br>";
	}

	if ($var2 && $var6 == "Pria") {
		echo "$var2 Jenis Kelamin Pria<br>";
	}else{
		echo "$var2 Jenis Kelamin Wanita<br>";
	}

	if ($var3 && $var7 == "Pria") {
		echo "$var3 Jenis Kelamin Pria<br>";
	}else{
		echo "$var3 Jenis Kelamin Wanita<br>";
	}

	if ($var4 && $var8 == "Pria") {
		echo "$var4 Jenis Kelamin Pria<br>";
	}else{
		echo "$var4 Jenis Kelamin Wanita<br>";
	}		
?>
