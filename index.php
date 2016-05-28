<!DOCTYPE html>
<html>
    <head>
            <title>Projet CIR1</title>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                    <link rel="stylesheet" type="text/css" href="./style.css"/>
    </head>
    <body>
        <?php
        require_once "./Map.php";
        require_once "./MapT.php";
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
	    echo '<h1>'.$_SESSION["jeu"].'</h1>';
        ?><table>
            <tr>
                <td>
        <?php    $matrice->afficher();
            $_SESSION["matrice"] = $matrice;
        }
        ?>
                </td>
            </tr>
    </table>
        <div class="container">
            <form action="new.php">
                <button>Reset</button>
            </form>
        </div>
        <?php include "footer.php" ?>
    </body>
</html>
