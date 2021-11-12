<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP_BASICO_N3</title>
</head>

<body>
    <style type="text/css">
        p {font-weight:bold;} 
    </style>
    
        <!----- Excercici 1 ----->
    <h1>Excercici 1</h1>
    <p>Escriu un programa en PHP per convertir una cadena en un array (retallant cada caràcter i eliminant les línies buides).</p>
    <?php
      
    function convertcadena($cadena){
        $cadenaconv = str_replace(" ","",$cadena);
        $cadenaconv = str_split($cadenaconv);
            
        return $cadenaconv;
    }    
        
    var_dump(convertcadena("Hola que tal"));
    
    ?>
    
    
        <!----- Excercici 2 ----->
    
    <h1>Excercici 2</h1>
    <p>Escriu un programa en PHP que compta el nombre total de vegades que un valor existeix en l'array.</p>
    <?php
    
    $entrada = array(1,2,3,2,4,5,3,4,2,5,6);    
        echo ('<pre>');
        print_r (array_count_values($entrada));
        echo ('</pre>');

    ?>
    
    
        <!----- Excercici 3 ----->
    
    <h1>Excercici 3</h1>
    <p>Elimina un element de l’array anterior. Després d'eliminar l'element, les claus senceres han de ser normalitzades.</p>
    <?php

    $X = array(10, 20, 30, 40, 50);
 
    var_dump($X); echo "<br>";    
    unset($X[0]);
   
    var_dump(array_values($X));
    
    ?>
    
    
    
</body>
</html>