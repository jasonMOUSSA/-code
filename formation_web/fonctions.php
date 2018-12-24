<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>les fonctions en php</title>
</head>
<body>
	<?php 
	   function ajouterRef($a){
	   	$a = $a."texte  à la fin";
	   }
		function ajouter($a){
			$a = $a."texte à la fin";
		}
		$chaine = "texte au debut,";
		ajouter($chaine);
		echo $chaine."<br>";

		ajouterRef($chaine);
		echo $chaine."<br>";
	?>
</body>
</html>