<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP_BASICO_N2</title>
</head>
    
<body>
    <style type="text/css">
        p {font-weight:bold;} 
    </style>

    
        <!----- Excercici 1 ----->
    <h1>Excercici 1</h1>
    <p>Escriure un programa PHP per calcular la suma dels dos valors enters donats. Si els dos valors són iguals, torna el doble de la seva suma.</p>
    
    <form action="php_basico_n2.php" method="post">
        <label>Valor 1</label><input type="text" name="val1">
        <label>Valor 2</label><input type="text" name="val2">
        <button><input type="submit" name=""></button>
    </form>
    <br>
    
    <?php 
    
    function sumavalors($valor1, $valor2){
            
            if ($valor1 != $valor2){
                echo "La suma dels valors és: " . ($valor1+$valor2);
            }
            else{
                echo "Els valors són iguals. El doble de la seva suma és " . ($valor1+$valor2)*2;
            }
    }
    
    if(isset($_POST['val1'],$_POST['val2'])){
        $val1 =$_POST['val1'];
        $val2 =$_POST['val2'];
        sumavalors($val1,$val2);
    }



    
    ?>


        <!----- Excercici 2----->
    
    <h1>Excercici 2</h1>
    <p>Escriu un programa PHP per intercanviar el primer i últim caràcter d'una cadena donat i imprimeix la nova cadena.</p>
    
    <form action="php_basico_n2.php" method="post">
        <label>Introdueix una cadena de Text </label><input type="text" name="cadena">
        <button><input type="submit" name=""></button>
    </form>

    <?php
    
    if(isset($_POST['cadena'])){
        $entrada = $_POST['cadena'];
        echo $entrada . "<br>";

        $first = $entrada[0];
        $last = $entrada[strlen($entrada)-1];
    
        $entrada[0]=$last;
        $entrada[strlen($entrada)-1]= $first;
   
        echo $entrada;
    }
    
    ?>
</body>
</html>