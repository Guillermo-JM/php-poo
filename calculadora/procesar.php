<?php
    require_once "calcular.php"; // se manda a llamar el archivo
    $calcular = new Calculadora();
    $valor_1 = $_POST["valor_1"];
    $valor_2 = $_POST["valor_2"];
    $opcion = $_POST["opcion"];
    echo $calcular -> calcular_datos($valor_1, $valor_2, $opcion);
?>