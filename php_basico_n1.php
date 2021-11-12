<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP_BASICO_N1</title>
</head>

<body>
    <style type="text/css">
        p {font-weight:bold;} 
    </style>
        
        <!----- Excercici 1 ----->
    <h1>Excercici 1</h1> 
    <p>Defineix una variable de cada tipus: integer,double,string i boolean. Després, imprimeix-les per pantalla.</p>
    <?php

    $int = 33;
    $dbl = 3.1416;
    $str = "cadena de text";
    $boo = true;
    
    echo "Variable Integer: " . $int . "<br>";
    echo "Variable Double: " . $dbl . "<br>";
    echo "Variable String: " . $str . "<br>";
    echo "Variable Boolean: " . $boo . "<br>";

    ?>
    
    
        <!----- Excercici 2 ----->
    <h1>Excercici 2</h1>
    <p>Imprimeix per pantalla 'Hello, World!' utilitzant una variable.</p>
    <?php
    $cadena = "Hello, World!";
    echo $cadena;
    ?>
    
    <p>Converteix tots els caràcters de el string a majúscules i imprimeix en pantalla.</p>
    <?php
    $cadena1 = strtoupper($cadena);
    echo $cadena1;
    ?>
    
    <p>Imprimeix per pantalla la mida (longitud) de la variable.</p>
    <?php
    $cadena2 = strlen($cadena);
    echo $cadena2;
    ?>
    
    <p>Imprimeix per pantalla el string en ordre invers de caràcters.</p>
    <?php
    $cadena3 = strrev($cadena);
    echo $cadena3;
    ?>
    
    <p>Crea una nova variable amb el contingut "Aquest és el curs de PHP" i imprimeix per pantalla la concatenació de tots dos strings.</p>
    <?php
    $newcadena = "Aquest és el curs de PHP";
    echo $cadena ." " .$newcadena;
    ?>
    

        <!----- Excercici 3 ----->
    <h1>Excercici 3</h1>
    <p>Crea una constant que contingui el teu nom i el imprimeixi per pantalla. Has imprimir-la amb format de títol i lletra en negreta en HTML.</p>
    <?php  
    define("Nom","Albert");
    ?>
    <h2><strong><?php echo Nom;?></strong></h2>
    

        <!----- Excercici 4 ----->
    <h1>Excercici 4</h1>
    <p>Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y</p>
    <?php
    $x = 5;
    $y = 10;
    
    $n = 5.5;
    $m = 10.1;
    
    echo "<strong>El valor de cada variable:</strong>  Variable X = ". $x . ", Variable Y = ".$y."<br>";
    
    echo "<strong>La suma:</strong> Suma de $x + $y = ".($x+$y)."<br>";
    
    echo "<strong>La resta:</strong> Resta de $x - $y = ".($x-$y)."<br>";
    
    echo "<strong>El producte:</strong> Producte de $x x $y = ".($x*$y)."<br>";

    echo "<strong>El mòdul:</strong> Mòdul de $x % $y = ".($x%$y)."<br>";
    echo "<br>";
    ?>
    
    <p>Per N i M realitzaràs el mateix.</p>
    <?php
    echo "<strong>El valor de cada variable:</strong> Variable N = ". $n . ", Variable M = ".$m."<br>";
    
    echo "<strong>La suma:</strong> Suma de $n + $m = ".($n+$m)."<br>";
    
    echo "<strong>La resta:</strong> Resta de $n - $m = ".($n-$m)."<br>";
    
    echo "<strong>El producte:</strong> Producte de $n x $m = ".($n*$m)."<br>";
    
    echo "<strong>El mòdul:</strong> Mòdul de $n % $m = ".($n%$m)."<br>";
    
    echo "<br>";
    ?>
    
    <p>Per a totes les variables (X, I, N, M)</p>
    <?php
    echo "<strong>El doble de cada variable</strong><br>";
    echo "El doble de X és ". ($x*2)."<br>";
    
    echo "El doble de Y és ". ($y*2)."<br>";
    
    echo "El doble de N és ". ($n*2)."<br>";
    
    echo "El doble de M és ". ($m*2)."<br>";
    
    echo "<strong>La suma de totes les variables</strong><br>";
    echo "La suma de $x + $y + $n + $m és igual a ".($x+$y+$n+$m)."<br>";
    
    echo "<strong>El producte de totes les variables</strong><br>";
    echo "El producte de $x x $y x $n x $m és igual a ".($x*$y*$n*$m)."<br>";
    ?>
    

        <!----- Excercici 5 ----->
    <h1>Excercici 5</h1>
    <p>Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers. Afegeix un valor més a l'array que conté 3 integers. Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla.</p>
    <?php
    
    $primer = array("1", "2", "3", "4", "5");
    $segon = array("6", "7", "8");
    
    // Afegeix un valor més a l'array que conté 3 integers.
    $segon[3] ="9";
    // var_dump ($segon);
    
    // Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla.
    $tercer = array_merge($primer, $segon);
    //var_dump ($tercer);
    
    $tamanytercer = count($tercer);
    echo $tamanytercer;
    //print_r ($tercer);
    ?>
    
    <p>Ara imprimeix per pantalla l'array resultant valor a valor.</p>
    <?php
    foreach($tercer as $valortercer){
    echo $valortercer;  
    }
    ?>


</body>
</html>