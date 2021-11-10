<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <?php 
    
    //Asignacion de variables
    $p[0] = $_POST['pregunta0'];
    $p[1]= $_POST['pregunta1'];
    $p[2]= $_POST['pregunta2'];
    $p[3] = $_POST['pregunta3'];
    $p[4] = $_POST['pregunta4'];

    $r[0] = $_POST['r0'];
    $r[1] = $_POST['r1'];
    $r[2] = $_POST['r2'];
    $r[3] = $_POST['r3'];
    $r[4] = $_POST['r4'];

    $acierto=0;
    $fallo=0;

    $traduccion =["coche" => "car", "manzana" =>"apple", "raton" => "mouse", "pantalla" => "screen", "galleta" =>"cookie",
    "llave" => "key", "cable" => "cable", "papel" => "paper", "pared" => "wall", "suelo" => "floor",
    "cielo" =>"sky", "atardecer"=> "sunset", "grados" => "degrees", "mesa" => "table", "silla" => "chair",
    "cuchillo" => "knife", "cancion" => "song", "pajaro" => "bird", "luz" => "light", "resfriado" => "cold"
    ]; 
    
    //bucle que compara si la clave y el valor introducido son correctos

    for($i=0;$i<5;$i++){
        
        if ($r[$i] == $traduccion[$p[$i]]){
            $fallo++;
            

        }else{
            $acierto++;
            
            
        }

    }
    //Muestra por pantalla el computo de aciertos y fallos 

    echo "Aciertos = ". $acierto."<br>". "Fallos = ".$fallo;
    
    ?>
</body>
</html>