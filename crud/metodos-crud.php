<?php
    class Metodos {
        public function mostrar_datos($sql) {
            $c = new Conectar();
            $conexion = $c -> conexion();
            $result = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
    }
?>