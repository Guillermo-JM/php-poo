<?php
    class RetornoDatos {
        // Tipo String.
        // Tipo entero.
        // Tipo arreglo.
        // Tipo JSON.
        public function retorna_string($edad) {
            if($edad > 18) {
                return "Es mayor de edad!";
            } else {
                return "No es mayor de edad!";
            }
        }
        public function retorna_entero($valor) {
            if($valor > 0) {
                return 1;
            } else {
                return 0;
            }
        }
        public function retorna_arreglo($ciclos) {
            $datos = array();
            for($i = 0; $i < $ciclos; $i++) {
                $datos[$i] =  $i;
            }
            return $datos;
        }
        public function retorna_json() {
            $arreglo = array(
                "HDD" => 500,
                "Pantalla" => 21,
                "RAM" => 8
            );
            return json_encode($arreglo);
        }
    }
    $retorno_datos = new RetornoDatos();
    var_dump($retorno_datos -> retorna_string(18));
    echo "<br>";
    var_dump($retorno_datos -> retorna_entero(1));
    echo "<br>";
    var_dump($retorno_datos -> retorna_arreglo(10));
    echo "<br>";
    var_dump($retorno_datos -> retorna_json());
?>