<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("remotemysql.com", "KOHXxJXNaD", "KOHXxJXNaD", "jycdjnkMyE");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
