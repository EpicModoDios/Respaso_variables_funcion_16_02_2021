

<?php

    $num1 = (int) 5;
    $num2 = (string) 5;

    //Operador de comparacion Igualdad (Solo tiene en cuenta el valor)
    var_dump($num1 == $num2);
    echo "<br>";

    //Operador de comparacion Identico (Tiene en cuenta el tipo de variable)
    var_dump($num1 === $num2);
    echo "<br>";

    //Operador de comparacion Diferente (Solo tiene en cuenta el valor)
    var_dump($num1 != $num2);
    var_dump($num1 <> $num2);
    echo "<br>";

    //Operador de comparacion No Identico (Tiene en cuenta el tipo de variable)
    var_dump($num1 !== $num2);
    echo "<br>";

    //Operador de comparacion Menor que
    var_dump($num1 < $num2);
    echo "<br>";

    //Operador de comparacion Menor o igual que
    var_dump($num1 <= $num2);
    echo "<br>";

    //Operador de comparacion Mayor que
    var_dump($num1 > $num2);
    echo "<br>";

    //Operador de comparacion Mayor o igual que
    var_dump($num1 >= $num2);

?>