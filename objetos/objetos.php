<?php
    class MiClase {
        // Mis atributos
        public $resultado = 0;
        // Mis metodos
        public function mi_metodo($v_1, $v_2) {
            $this -> resultado = $v_1 + $v_2;
            return $this -> resultado;
        }
    }
    // Termina la clase
    // Crea una instancia
    $mi_objeto =  new MiClase();
    echo $mi_objeto -> mi_metodo(10, 10);
?>