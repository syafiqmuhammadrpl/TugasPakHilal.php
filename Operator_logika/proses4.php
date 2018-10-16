	<?php
		$var1 = $_POST['syafiq1'];
		$var2 = $_POST['operator'];
		$var3 = $_POST['syafiq2'];

		if ($var2 == "and") {
					echo "$var1 and $var3 = ",$var1 and $var3;
				}

		else if ($var2 == "or") {
					echo "$var1 or $var3 = ",$var1 or $var3;
				}

		else if ($var2 == "xor") {
					echo "$var1 xor $var3 = ",$var1 xor $var3;
				}

		else if ($var2 == "not") {
					echo "$var1 = ", ! $var1;
				}
	?>