<?php
    // Los metodos protegidos, solo se pueden acceder desde herencia.
    class Clase_padre {
        protected function sumar($x, $y) {
            return $x + $y;
        }
    }
    class Clase_hija extends Clase_padre {
        public function mostrar_suma($valor_1, $valor_2) {
            return self ::  sumar($valor_1, $valor_2);
        }
    }
    //$clase_padre = new Clase_padre();
    //echo $clase_padre -> sumar(5, 10);
    echo Clase_hija :: mostrar_suma(5, 10);
?>