<?php
     class Calculadora {
         public function calcular_datos($valor_1, $valor_2, $opcion) {
             switch($opcion) {
                case "suma":
                    return $valor_1 + $valor_2;
                    break;
                case "resta":
                    return $valor_1 - $valor_2;
                    break;
                case "multiplicacion":
                    return $valor_1 * $valor_2;
                    break;
                case "division":
                    return $valor_1 / $valor_2;
                    break;
                default:
                    break;
             }
         }
     }
?>