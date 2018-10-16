<?php
$txt=$_POST["cari"];
$car=$_POST["text"];

$ex = explode(" ",$car);

      for($x=0;$x<count($ex);$x++){
        if($ex[$x] == $txt){
           echo $ex[$x] = "<b>$txt</b>"." ";
     }
     else
         {echo $ex [$x]." ";
    }
}

echo "</br></br>";
	echo "Hasil Replace:</br>";
	$gan = $_POST["ganti"];
 $ex = explode(" ",$car);
 	for($x=0;$x<count($ex);$x++){

	if($ex[$x] == $txt){
	echo $ex[$x] = "$gan	"." ";
		}
		else 
			{
				echo $ex[$x]." " ;
			}
}
?>