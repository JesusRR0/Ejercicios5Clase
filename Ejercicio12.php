<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio12</title>
</head>
<body>
    <?php
    
    //Asignacion de variables
    $traduccion =["coche" => "car", "manzana" =>"apple", "raton" => "mouse", "pantalla" => "screen", "galleta" =>"cookie",
        "llave" => "key", "cable" => "cable", "papel" => "paper", "pared" => "wall", "suelo" => "floor",
        "cielo" =>"sky", "atardecer"=> "sunset", "grados" => "degrees", "mesa" => "table", "silla" => "chair",
        "cuchillo" => "knife", "cancion" => "song", "pajaro" => "bird", "luz" => "light", "resfriado" => "cold"
        ]; 
    
    //bucle que se encarga de obtener 5 claves aleatorias de nuestro array previamente creado con su respectivo valor
    for($i=0; $i<5;$i++){
    
    $respuesta[$i] = array_rand($traduccion);
    }

    
   //formulario que envia tanto la clave, como el valor para su posterior confirmacion
        
    echo '<form action="Formulario12.php" method="post">
    Introduce una palabra en español: </br>' .
        $respuesta[0].'<input type="text" name="r0"></br>'.
        $respuesta[1].'<input type="text" name="r1"></br>'.
        $respuesta[2].'<input type="text" name="r2"></br>'.
        $respuesta[3].'<input type="text" name="r3"></br>'.
        $respuesta[4].'<input type="text" name="r4"></br>
        <input type="hidden" name"pregunta0" value="'.$respuesta[0].'">
        <input type="hidden" name"pregunta1" value="'.$respuesta[1].'">
        <input type="hidden" name"pregunta2" value="'.$respuesta[2].'">
        <input type="hidden" name"pregunta3" value="'.$respuesta[3].'">
        <input type="hidden" name"pregunta4" value="'.$respuesta[4].'">
        <input type="submit" value="OK">
    </form>';
        
    ?>
</body>
</html>