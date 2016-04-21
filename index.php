<!DOCTYPE html>
<html>
    <head>
            <title>Lightsout</title>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                    <link rel="stylesheet" type="text/css" href="./style.css"/>
    </head>
    <body>
        <h1>Lights Out</h1>
        <table>
            <tr>
                <td>
                    <code>
                        <form method="post">
                            <input type="number" name="largeur" min="5" max="9" pattern="d+">
                            <input type="number" name="hauteur" min="5" max="9" pattern="d+">
                            <button type="submit">valider</button>
                            <br>
                            <?php
                            require_once "./Map.php";

                            session_start();

                            
                            if (isset($_POST["largeur"]) && isset($_POST["hauteur"])) {
                                $largeur = $_POST["largeur"];
                                $hauteur = $_POST["hauteur"];
                                $matrice = new Map($largeur,$hauteur);
                            }
                            else{
                                if (isset($_SESSION["matrice"])) {
                                    $matrice = $_SESSION["matrice"];
                                }
                                else {
                                    $matrice = new Map(5,5);
                               }
                            }

                            if (filter_input_array(INPUT_GET)) {
                                $x = filter_input(INPUT_GET, "x");
                                $y = filter_input(INPUT_GET, "y");
                                $matrice->actualiser($x,$y);
                            }



                            $matrice->afficher();
                            $_SESSION["matrice"] = $matrice;

                            ?>
                        </form>
                    </code> 
                </td>
            </tr>
        </table>
        <footer>
            Notre projet CIR 1 <!-- Insérer quelquechose ici -->
        </footer>
    </body>
</html>
