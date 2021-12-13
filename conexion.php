<?php
class connection
{
    static function connect()
    {

        $server = "localhost";
        $user = "root";
        $pass = "def1992";
        $bd = "kdoce_rbd";

        try {
            $conexion = mysqli_connect($server, $user, $pass, $bd);
            return $conexion;
        } catch (mysqli_sql_exception $error) {
            print $error->getMessage();
            exit();
        }
    }
}
