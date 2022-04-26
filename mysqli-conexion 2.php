<?php
$conexion = new mysqli('localhost','root','','prueba');//Establecemos la conexion, poniendo el nombre de la base de datos

if($conexion->connect_errno){//en esta parte el IF es por si hay un problema de conexion
    die('Problemas en la conexion');//en esta parte asignamos el mensaje por si fallaste
}else{//si la conexion tuvo exito el ELSE nos mostrara un mensaje , por si lo hicimos bien
    echo "Conexion Exitosa <br>";//aqui mostramos lo que dira si tuvimos exito
    $sql = "SELECT * FROM usuario";

    $resultado = $conexion->query($sql);

    if($resultado->num_rows){

        echo $fila['id'] . ' ' . $fila['nombre'];
        echo '<br>';
    }
}

}

?>