<!DOCTYPE html>
<html>
    <head>
        <title>Adivina número</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h1>Adivina el número secreto</h1>
        <div class="capaform">
            <form class="form-font" action="limitesJuego.php" method="POST">
                <p>Has acertado</p>
                <p> Lo has conseguido en <?= $_GET['intentos']??"" ?> intentos</p>
                <input class="submit" type="submit" 
                       value="Jugar de Nuevo" name="botonvolverajugar" /> 
            </form>   
        </div>
    </body>
</html>
