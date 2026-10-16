<?php

function consultaMensajes()
{
    require_once __DIR__ . "/miportafolio/conexion.php";
    $selectMsj = "Select * from mensaje";
    try{
        $rsMsj = mysqli_query($conexion, $selectMsj);
        mysqli_close($conexion);
        return $rsMsj;
    }catch(Exception $e){
        die("Algo paso al consultar: ".$e->getMessage());
    }
}