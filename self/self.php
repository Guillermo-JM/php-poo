<?php
    class Metodos {
        public function mandar_color($valor) {
            if($valor == 1) {
                return "rojo";
            } else if($valor == 2) {
                return "negro";
            } else if($valor == 3) {
                return "azul";
            }
        }
        public function dar_de_alta_color($tipo_color) {
            return self :: mandar_color($tipo_color); // self manda a llamar metodos dentro de otros de la misma clase.
        }
    }
    $obj = new Metodos();
    echo $obj -> dar_de_alta_color(2);
?>