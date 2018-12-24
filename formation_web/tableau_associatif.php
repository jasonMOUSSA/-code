<!DOCTYPE html>
<html>
<head>
	<title>ceci est un tableau associatif</title>
</head>
<body>
	<?php
       echo "ceci est un tableau associatif"."<br>";
       $tableau = array("jason" =>"10",
                        "dave" =>"45", 
                        "malys"=>"23");
      
        echo $tableau["jason"]."</br>";

       foreach ($tableau as $key => $value) {
       	 echo $key."=".$value."</br>";
       }

	  ?>
</body>
</html>