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
        <audio src="sound/victory.ogg" autoplay></audio>
        <div class="faker"></div>
        <div class="win">
            VICTOIRE !
        </div>
        <div class="faker"></div>
        <div class="container">
            <form action=new.php>
                <button>Reset</button>
            </form>
        </div>
        <?php include "footer.php" ?>
    </body>
</html>
