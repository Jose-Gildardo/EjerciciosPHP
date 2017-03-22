<html>
<head>
	<title>Ejercicio 5</title>
	<meta charset="utf-8"/>
</head>
<body>
<h1>PROGRAMACION DE APLICACIONES WEB</h1>
<h4>Mostrar en pantalla cual es el mayor de TRES numeros</h4>
<?php
    $n1=54;
    $n2=10;
    $n3=36;
     echo "1.-(".$n1.")<br>";
	 echo "2.-(".$n2.")<br>";
	 echo "3.-(".$n3.")<br>";
	
    if(($n1>$n2) and ($n1>$n3)) {
        echo "El primer numero (".$n1.") es mayor que el segundo (".$n2.") y el tercero (".$n3.")" ;
    }
    
        elseif(($n2>$n1) and ($n2>$n3)) {
        echo "El segundo numero (".$n2.") es mayor que el primero (".$n1.") y el tercero (".$n3.")" ;
    }
        elseif(($n3>$n1) and ($n3>$n2)) {
        echo "El tercer numero (".$n3.") es mayor que el segundo (".$n1.") y el primero (".$n2.")" ;
    }
    
  
    ?>
<p>Jose Gildardo:</p>
<a href="Index.php">Regresar a menu</a>
</body>
</html>
