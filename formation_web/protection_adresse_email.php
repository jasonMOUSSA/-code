<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>protection adresse email</title>
</head>
<body>
    <?php 
        function proteger($adr){
            $adresseCodee = "";
            for ($i=0; $i < strlen($adr); $i++){
                $adresseCodee .= "#&" . ord(substr($adr, $i, 1)) . ";";
                return $adresseCodee;
            }
        }
        echo"<a  href='" . proteger("jason:jasonmoussa00@gmail.com") . "'>pour nous joindrem cliquez ici</a>";
    ?>
</body>
</html>