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
                        <?php
                        require_once "./Map.php";

                        session_start();
                        
                        if (isset($_SESSION["matrice"])) {
                            $matrice = $_SESSION["matrice"];
                        }
                        else{
                            $matrice = new Map(5);
                            $_SESSION["matrice"] = $matrice;
                        }
                        if (isset($_SESSION["x"]) && isset($_SESSION["y"])) {
                            $x = $_SESSION["x"];
                            $y = $_SESSION["y"];
                            $matrice->actualiser();
                        }
                        
                        
                        
                        $matrice->afficher();
                        
                        
                        ?>
                    </code> 
                </td>
            </tr>
        </table>
        <footer>
            Notre projet CIR 1 <!-- Insérer quelquechose ici -->
        </footer>
    </body>
</html>
