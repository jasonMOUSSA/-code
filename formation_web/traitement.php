<?php 
    if(isset($_POST['valider'])){
        if(!empty($_POST['nom'] && !empty($_POST['postnom']) && !empty($_POST['prenom']))){
            $nom = htmlspecialchars($_POST['nom']);
            $postnom = htmlspecialchars($_POST['postnom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $age = htmlspecialchars($_POST['age']);

            echo"<H1><U>VOS COORDONNEES</U></H1>";
            echo "nom : $nom <br>";
            echo "post-nom : $postnom <br>";
            echo "prenom : $prenom <br>";
            echo"age :  $age";
        }
    }
?>