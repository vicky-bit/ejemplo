<!DOCTYPE html>
<html>
    <head>
        <title>Adivina el número secreto</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h1>Adivina el número secreto</h1>
        <p></p>
        <div class="capaform">
            <form class="form-font" action="numJugado.php" method="POST">
                <fieldset>
                    <label for="limInferior">Límite Inferior:</Label> 
                    <input id="liminferior" type="number"  required name="inferior" min="0"/> 
                </fieldset>
                <fieldset>
                    <label for="limsuperior">Límite Superior:</Label> 
                    <input id="limsuperior" type="number"  required name="superior" min="1"/> 
                </fieldset>
                <p><?= $_GET['msg']?? "" ?></p>
                <input class="submit" type="submit" value="Enviar" name="botonlimites" /> 
            </form>   
        </div>
    </body>
</html>
