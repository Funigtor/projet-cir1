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
        <div> Composez vous-même votre grille de départ <br />
            <div class="generation">
                <form method="post" action="chooseCreate.php">
                    Largeur :
                    <select name="largeur">
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected="selected">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                    Hauteur :
                    <select name="hauteur">
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected="selected">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                    <div class="validation"><button type="submit">Valider</button></div>
                </form>
            </div>
        </div>
        <div> Ou sinon générez une grille aléatoire aux dimensions souhaitées. <br />
            <div class="generation">
                <form method="post" action="create.php">
                    Largeur :
                    <select name="largeur">
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected="selected">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                    Hauteur :
                    <select name="hauteur">
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected="selected">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                    <div class="validation"><button type="submit">Valider</button></div>
                </form>
            </div>
        </div>
        <?php include "footer.php" ?>
    </body>
</html>
