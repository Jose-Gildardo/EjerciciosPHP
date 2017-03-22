<html>
<head>
	<title>Ejercicio 2</title>
	<meta charset="utf-8"/>
</head>
<body>

 <header>
    <div class="contenedor">
        
                <nav class="menu">
                    <a href="Ejercicio1.php">Ejercicio1</a>
                    <a href="Ejercicio2.php">Ejercicio2</a>
                    <a href="Ejercicio3.php">Ejercicio3</a>
                    <a href="Ejercicio4.php">Ejercicio4</a>
                    <a href="Ejercicio5.php">Ejercicio5</a>
                </nav>
            </div>
</header>
<h1>PROGRAMACION DE APLICACIONES WEB</h1>
<h4>Mostrar en pantalla una tabla de 10 por 10 con los numeros del 1 al 100</h4>
<?php

    echo "<table border=1 >";
    $n=1;
	
    for($n1=1; $n1<=10;$n1++)
    {
		
        echo "<tr>";
        for($n2=1;$n2<=10;$n2++)
        {
			
            echo "<td>","<font color=red>",$n,"</td></font>";
            $n=$n+1;
				
        }
        echo "</tr>";
	echo "</font>";
	
    }
    echo "</table>";

?>
<p>Jose Gildardo:</p>
<a href="Index.php">Regresar a menu</a>
</body>
</html>
