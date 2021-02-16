

<?php
    // Si mantengo alt y selecciono con el mouse varias lineas puedo modificarlas a la vez
    //Nombre Variable , = , Tipo variable (String) , Valor De La Variable 
    $Nombre = (string) "Thomás";
    $Edad = (int) 16;
    $Altura = (double) 1.83;
    $Profesor = false;
    $Direccion = (array) ["Colombia" , "Santander" , "Bucaramanga", "Diamante 2" , False];
    
    //Formas de imprimir por pantalla (Print_r se usa mas para las listas)
    echo $Nombre;
    echo "<br>";
    var_dump ($Direccion);
    echo "<br>";
    print_r ($Altura);
    echo "<br>";

    //Como hacer un parrafo
    $Parrafo = (string) <<<INICIO
    
    <h1>MI INFORMACION<h1>
    <h2>Thomás<h2>
    <h2>16<h2>
    <h2>1.83<h2>
    <h2>false<h2>
    <h2>Colombia, Santander, Bucaramanga, Diamante 2, False<h2>
INICIO;
    print_r ($Parrafo);
    echo "<br>";


?>