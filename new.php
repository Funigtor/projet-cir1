<!DOCTYPE html>
<html>
    <head>
            <title>Lightsout</title>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                    <link rel="stylesheet" type="text/css" href="./style.css"/>
    </head>
    <body>
        <?php include "header.php" ?>
        Choisissez une matrice dans la liste
        <!-- TODO : Mettre le choix des cartes
            Idée : Utiliser une boucle for pour n'écrire qu'une fois la déclaration.-->
        <div> Ou sinon générez une matrice aléatoire avec les dimensions que vous souhaitez. <br />
            <form method="post" action="create.php">
                Largeur : <input type="number" name="largeur" min="5" max="9" pattern="d+">
                Hauteur : <input type="number" name="hauteur" min="5" max="9" pattern="d+">
                <button type="submit">valider</button>
            </form>
        </div>
        <?php include "footer.php" ?>
    </body>
</html>
