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

        <?php
        require_once "./Map.php";

        session_start();

        if (!isset($_SESSION["matrice"])){
            header("Location: new.php");
        }
        else{
            $matrice = $_SESSION["matrice"];
            if (filter_input_array(INPUT_GET)) {
                $x = filter_input(INPUT_GET, "x");
                $y = filter_input(INPUT_GET, "y");
                $matrice->actualiser($x,$y);
            }
            echo ' <div id = "tableau"> ';
            $matrice->afficher();
            echo '</div>';
            $_SESSION["matrice"] = $matrice;
        }
        ?>
        <div class="container">
            <form action="new.php">
                <button>Reset</button>
            </form>
        </div>
        <?php include "footer.php" ?>
    </body>
</html>
