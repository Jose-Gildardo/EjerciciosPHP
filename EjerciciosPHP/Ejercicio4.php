<html>
<head>
	<title>Ejercicio 4</title>
	<meta charset="utf-8"/>
</head>
<body>
<h1>PROGRAMACION DE APLICACIONES WEB</h1>
<h4>Mostrar en pantalla cual es el mayor de dos numeros</h4>
<?php
    $n1=54;
    $n2=10;
	 echo "1.-(".$n1.")<br>";
	 echo "2.-(".$n2.")<br><br>";
	 
    
    if($n1>$n2){
        echo "El primer numero (".$n1.") es mayor que el segundo (".$n2.")";
    }
    else if ($n1==$n2){
        echo "El primer numero (".$n1.") es igual al segundo (".$n2.")";
    }
    else {
        echo "El primer numero (".$n1.") es menor que el segundo (".$n2.")";
    }
?>
<p>Jose Gildardo:</p>
<a href="Index.php">Regresar a menu</a>
</body>
</html>
 