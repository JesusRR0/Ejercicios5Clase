<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php 
    
    $numero =$_POST['numero'];
    $contador=$_POST['contador'];
    

    if(!isset($numero)){
        $numero =0;
    }

    if(!isset($contador)){
        $contador =0;
    }

    if($contador <8){
            ?>
        <form action="Formulario6.php" method="post">
        <input type="text" name="numero" value="<?php echo $numero;?>">
        <input type="hidden" name="contador" value="<?php echo $contador;?>">
        <input type="submit" value="Ok">

    </form>
    <?php
    }else{
        echo "Se agotaron los intentos";
    }
    ?>

    
</body>
</html>