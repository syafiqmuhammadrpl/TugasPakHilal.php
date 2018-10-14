	<?php
		$var1 = $_POST['syafiq1'];
		$var2 = $_POST['operator'];
		$var3 = $_POST['syafiq2'];
		if ($var2 == "+") {
			echo "$var1+$var3 = ",$var1+$var3;
		}
		else if ($var2 == "-") {
			echo "$var1-$var3 = ",$var1-$var3;
		}
		else if ($var2 == "*") {
			echo "$var1*$var3 = ",$var1*$var3;
		}
		else if ($var2 == "/") {
			echo "$var1/$var3 = ",$var1/$var3;
		}
		else if ($var2 == "%") {
			
			echo "$var1%$var3 = ",$var1%$var3;
		}
	?>

