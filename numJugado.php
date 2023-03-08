<?php
    if(empty($_POST['inferior']) || empty($_POST['superior'])){
        header("location:limitesJuego.php");
        die();
    }
    $inferior = $_POST['inferior'];
    $superior = $_POST['superior'];
    if($inferior > $superior){
        header("location:limitesJuego.php?msg='Límite superior debe ser mayor que límite inferior'");
        die();
    }
    if(!empty($_POST['numJugado'])){ //el nº está en el rango indicado en atributo min y max
        $numJugado = $_POST['numJugado'];
        $aleatorio = empty($_POST['aleatorio'])?mt_rand($inferior,$superior):$_POST['aleatorio'];                
        $intentos= ($_POST['intentos']>=0)?(++$_POST['intentos']):0;
        $resultado = $aleatorio <=> $numJugado;
        if(!$resultado){
            header("location:acierto.php?intentos=$intentos");
            die();
        }
    }    
?>
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
            <form class="form-font" action="" method="POST">

                <fieldset>
                    <label for="numJugado">Introduce un número:</Label> 
                    <input id="numJugado" type="number"  required name="numJugado" min="<?= $inferior ?>" 
                           max="<?= $superior ?>" value="<?= $numJugado??"" ?>"/> 
                    <input type="hidden" name="inferior" value="<?= $inferior ?>">
                    <input type="hidden" name="superior" value="<?= $superior ?>">
                    <input type="hidden" name="aleatorio" value="<?= $aleatorio??'' ?>">
                    <input type="hidden" name="intentos" value="<?= $intentos??'' ?>">
                </fieldset>
                <p><?= (!isset($resultado)) ? "<br/>" : (($resultado > 0) ? "Inténtalo de nuevo con un número mayor" : "Inténtalo de nuevo con un número menor") ?></p>
					
                <p> Llevas <?= $intentos?? 0 ?> intentos</p>
                <input class="submit" type="submit" 
                       value="Enviar" name="botonnumjugado" /> 
            </form>   
        </div>
    </body>
</html>
