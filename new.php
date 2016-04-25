<?php include "maplist.php" ?>
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
        <div class="listeDeMap">
            <?php 
                $i = 0;
                foreach ($listeMap as $NOTUSED){
                    $i++;
                    echo '<div class="mapProposee"><img src="img/map'.$i.'.png" alt="Map '.$i.'" /> <hr /><form action="chooseMap.php"><input type="hidden" name="nombreMap" value="'.$i.'"><button type="submit">Choisir cette map</button></form></div>'; 
                }
            ?>
        </div>
        <div> Ou sinon générez une matrice aléatoire avec les dimensions que vous souhaitez. (À vos propres risques !) <br />
            <div class="generation"> 
                <form method="post" action="create.php">
                    Largeur : <input type="number" name="largeur" min="5" max="9" > <br />
                    Hauteur : <input type="number" name="hauteur" min="5" max="9" >
                    <div class="validation"><button type="submit">Valider</button></div>
                </form>
            </div>
        </div>
        <?php include "footer.php" ?>
    </body>
</html>
