<!DOCTYPE html>
<html>
    <head>
            <title>Lightsout</title>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                    <link rel="stylesheet" type="text/css" href="./css/style.css"/>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <code>
                        <?php
                        require_once "./Map.php";

                        session_start();
                        
                        if (isset($_SESSION["L_O"])) {
                            $matrice = $_SESSION["L_O"];
                        }
                        else{
                            $matrice = new Map(5);
                        }
                        
                        $matrice->afficher();
                        ?>
                    </code>
                </td>
            </tr>
        </table>
    </body>
</html>
