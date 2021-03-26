<?php
    class Mi_clase {
        // Los metodos privados permiten la encapsulacion, esto quiere decir que hay mas seguridad y solo se pueden
        // acceder desde la propia clase, no se pueden crear objetos para poder hacer uso de metodos privados.
        private function optener_nombre($nombre) {
            return 'Hola que tal ' . $nombre . ', ¿Cómo estas?';
        }
        public function mostrar_nombre($nombre) {
            return self :: optener_nombre($nombre);
        }
    }
    echo Mi_clase :: mostrar_nombre('Guillermo');
?>