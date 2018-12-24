<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>la fonction sscanf</title>
</head>
<body>
    <?php
        $uneDate = "06/03/1996";
        sscanf($uneDate, "%d,%d,%d", $jour, $mois, $annee);
        echo "jour :".$jour.", mois :".$mois.", annee :".$annee;
    ?>
</body>
</html>