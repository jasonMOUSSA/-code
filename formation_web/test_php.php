<!DOCTYPE html>
<html>
<head>
	<title>test PHP</title>
</head>
<body>
    <table border="1">
    	<tr><th>Nombre</th><th>Double</th><th>Racine</th></tr>
    	<?php
    		for ($i=1; $i <= 10 ; $i++) {  			
               	echo '<tr><td>'.$i.'</td><td>'.$i*$i.'</td><td>'.sqrt($i).'</td></tr>';

               	}
    	  ?>
    </table>
</body>
</html>