<?php
    class MiClase {
        // Declaramos atributos
        public $atributo_1 = "Hola mundo!";

        // Declaramos metodos
        public function mi_metodo() {
            // Como podemos mandar a llamar un atributo.
            // Utilizando la pseudo variable this
            return $this -> atributo;
            // Todo el tiempo se estara retornando informacion al momento de mandar a llamar el metodo.

        }
    }
?>