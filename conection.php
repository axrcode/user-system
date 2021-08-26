<?php 

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'user_system';

    $conection = mysqli_connect(
        $server, 
        $user, 
        $password, 
        $database
    ) or die(mysqli_error($mysqli));

    /* if ( isset($conection) ) 
    {
        echo 'CONECTADO';
    } */

?>