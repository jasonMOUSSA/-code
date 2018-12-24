<?php 
    if(isset($_POST['connect'])){
        if(!empty($_POST['mdp'])){
            if($_POST['mdp'] == "jason"){
                echo"vous avez acces a cette page";
                echo"je reponnd qu nom de jason developpeurs web qui a fait ses <br> preuves dans le monde de genie logiciel";
            }else{
                echo"vous n'avez pas accès à cette page veuillez reessayer SVP";
            }
        }
    }
?>