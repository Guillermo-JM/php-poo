<?php
    class Clase_padre {
        public function funcion_padre() {
            return 'Yo soy la funcion padre!';
        }
        public function sumar() {
            return "Soy una suma, de la clase padre!";
        }
    }
    class Clase_hijo extends Clase_padre {
        public function funcion_hijo() {
            return 'Yo soy la funcion hijo!';
        }
        public function retornar_funcion_padre() {
            return parent::sumar(); // Accede a la funcion sumar pero que se encuentra en la clase padre y no la que esta en hijo.
        }
        public function sumar() {
            return "Soy una suma de la clase hijo!";
        }
    }
    echo Clase_padre::funcion_padre(); // Es una forma facil de aceder a la funcion si necesidad de crear un objeto.
    echo Clase_hijo::retornar_funcion_padre();
?>