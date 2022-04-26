<?php
$conexion = mysql_connect('localhost','root','');

if(!$conexion){ //en esta parte el IF es por si hay un problema de conexion
    echo "Problemas en la conexion";//en esta parte asignamos el mensaje por si fallaste
}else{//si la conexion tuvo exito el ELSE nos mostrara un mensaje , por si lo hicimos bien
    echo "Conexion exitosa <br>";//aqui mostramos lo que dira si tuvimos exito
    mysql_select_db('prueba',$conexion);//
    $resultado = mysql_query('SELECT * FROM usuario');

    while($fila = mysql_fetch_array($resultado)){

        echo $fila['id'] . ' ' . $fila['nombre'];//mostramos las columnas que se mostraran al ingresar
        echo 'br';
    }
}
?>