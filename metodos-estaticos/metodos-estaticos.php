<?php
    class Mi_clase {
        public $nombre = 'Guillermo';
        public static function mostrar_nombre() {
            return 'Hola';
        }
    }
    echo Mi_clase :: mostrar_nombre();
?>