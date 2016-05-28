<!DOCTYPE html>
<html>
    <head>
            <title>Lightsout</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <link rel="stylesheet" type="text/css" href="./style.css"/>
    </head>
    <body>
        <?php
		session_start();
		if ($_SESSION["jeu"] == "Tacoyaki"){
			echo "<h1>Tacoyaki</h1>";
		} else {
			echo "<h1>Kappas Out</h1>";
		}
	?>
	<audio src="sound/victory.ogg" autoplay></audio>
        <div class="win">
            VICTOIRE !
        </div>
        <div class="container">
            <form action=new.php>
                <button>Rejouer</button>
            </form>
        </div>
        <?php include "footer.php" ?>
    </body>
</html>
