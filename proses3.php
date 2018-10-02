	<?php
		$var1 = $_POST['syafiq1'];
		$var2 = $_POST['operator'];
		$var3 = $_POST['syafiq2'];
		if ($var2 == "==") {
			if ($var1==$var3) {
				echo "$var1==$var3 = True";
			}
			elseif ($var1!=$var3) {
				echo "$var1==$var3 = False";
			}
		}

		else if ($var2 == "<") {
			if ($var1<$var3) {
				echo "$var1<$var3 = True";
			}
			elseif ($var1>$var3) {
				echo "$var1<$var3 = False";
			}
		}

		else if ($var2 == ">") {
			if ($var1>$var3) {
				echo "$var1>$var3 = True";
			}
			elseif ($var1<$var3) {
				echo "$var1>$var3 = False";
			}
		}

		else if ($var2 == "<=") {
			if ($var1<=$var3) {
				echo "$var1<=$var3 = True";
			}
			elseif ($var1>=$var3) {
				echo "$var1<=$var3 = False";
			}
		}

		else if ($var2 == ">=") {
			if ($var1>=$var3) {
				echo "$var1>=$var3 = True";
			}
			elseif ($var1<=$var3) {
				echo "$var1>=$var3 = False";
			}
		}

		else if ($var2 == "!=") {
			if ($var1!=$var3) {
				echo "$var1!=$var3 = True";
			}
			elseif ($var1==$var3) {
				echo "$var1!=$var3 = False";
			}
		}
		?>