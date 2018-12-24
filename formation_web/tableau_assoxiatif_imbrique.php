<?php
	function affiche($variable){
		echo "<bloquote>";
		foreach ($variable as $key => $value) {
			echo $key." : ";
			if(is_array($value))
				affiche($value); 
			   else
			   	  echo $value."<br>";
		}
		echo "</bloquote>";
	}
     
     $chiffres = array("romain" => array("un"=>"I", "deux"=>"II", "trois"=>"III"), 
     	               "arabe" => array("un"=>"1","deux"=>"2","trois"=>"3"));
     affiche($chiffres);
?>