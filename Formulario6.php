<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 6</title>
</head>
<body>
    <?php 
    
    $numero=$_POST['numero'];
    $contador =$_POST['contador'];
    $arrayNumero = [];
    $arrayNumero[$contador]=$numero;
    
    
    $numeros = implode(",",$arrayNumero);
    
    echo "String: ".$numeros;
    if(!isset($numero)){
        $numero =0;
    }

    if(!isset($contador)){
        $contador =0;
        
    }

    if($contador <8){
        $contador ++;
        
        
        
        ?>
        <form action="Ejercicio6.php" method="post">
            <input type="hidden" name="contador" value="<?php echo $contador;?>">
             <input type="hidden" name="numero" value="<?php echo $numeros;?>">
            <input type="submit" value="OK">

            <?php echo "contador:" .$contador ."numero: ".$numero; ?>
            
        </form>
        <?php
    }
    ?>
    
</body>
</html>