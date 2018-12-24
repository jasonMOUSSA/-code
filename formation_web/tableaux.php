<!DOCTYPE html>
<html>
<head>
	<title>tableau</title>
</head>
<body>
	<?php
		$tableau = array("jason", "malys","dave");
		echo "parcours du tableau avec la boucle for";
		    for ($i=0; $i < 3; $i++){
			    echo ("<ul>");
			 	echo ("<li>$tableau[$i]");
			    echo ("</ul><br>");
	            
		 }
		   echo "parcours du tableau avec la boucle foreach";
	           foreach ($tableau as $element) {
            	echo("<ul>");
                echo ("<li>$tableau[$i]");
                echo("</ul>");
            }
    ?>
</body>
</html>