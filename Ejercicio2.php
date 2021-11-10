<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <?php 
    
    $n =$_POST['n'];
    $contadorNumeros = $_POST['contador'];
    $nTexto = $_POST['nTexto'];

    if(!isset($n)){
        $contadorNumeros = 0;
        $nTexto = "";

    }

        if($contadorNumeros == 6){
            $nTexto = $nTexto." ".$n;
            $nTexto = substr($nTexto,2);
    
            $numero = explode (" ", $nTexto);
            echo "Los números introducidos son: ";
            
            foreach($numero as $n){
                echo $n, " ";
            }
            
            
        }
    

    if(($contadorNumeros < 6) || (!isset($n))){
        ?>

        <form action="#" method="post">
            Introduzca un numero:
            <input type="number" name="n" autofocus/>
            <input type="hidden" name="contadorNumeros" value="<?php echo ++$contadorNumeros;?>"/>
            <input type="hidden" name="nTexto" value="<?php echo $nTexto." ".$n;?>"/>
            <input type="submit" value="OK"/>
        </form>
        <?php



        




        
    }

    
    
    

    
    
    
    ?>
</body>
</html>