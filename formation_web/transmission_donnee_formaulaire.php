<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="traitement.php" method="POST">
        <table>
            <tr><td>Nom</td><td><input type="text" name="nom" placeholder="veuillez saisir votre nom"></td></tr>
            <tr><td>Post-Nom</td><td><input type="text" name="postnom" placeholder="veuillez saisir votre post-nom"></td></tr>
            <tr><td>Prenom</td><td><input type="text" name="prenom" placeholder="veuillez saisir votre prenom"></td></tr>
            <tr><td>Age</td><td><select name="age">
                                <option> > 20</option>
                                <option>20 à 50</option>
                                <option> < 50 </option>
                                <select>
        </td></tr>
        <tr><td><input type="submit" name="valider" value="ENVOI"></td><td><input type="reset" value="ANNULER"></td></tr>
        </table>
    </form>
</body>
</html>