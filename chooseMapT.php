<!DOCTYPE html>
<html>
    <head>
            <title>Tacoyaki</title>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                    <link rel="stylesheet" type="text/css" href="./style.css"/>
    </head>
    <body>

        <h1>Tacoyaki</h1>
        <br/>
        <br/>
        <p><h1>Mode édition</h1></p>
        <table>
            <tr>
                <td>
        <?php
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
                $matrice->Inverser($x,$y);
            }

            $matrice->chooseAfficher();
            $_SESSION["matrice"] = $matrice;
        }
        ?>
                </td>
            </tr>
    </table>
        <div class="container">
            <form action="index.php">
                <button>Valider</button>
            </form>
        </div>
        <?php include "footer.php" ?>
    </body>
</html>
