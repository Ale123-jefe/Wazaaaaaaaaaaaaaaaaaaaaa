<?php
try {//el try es cuando hay una excepcion
    $conexion = new PDO('mysql:host=localhost;dbname=prueba','root','');

    echo 'Conexion Exitosa';//es la primera cadena donde mostraremos el mensaje de exito
    
}catch(PDOException $error){//el catch es como el if pero con cadenas
    echo "Problemas en la conexion <br><br>" . $error->getMessage();//aqui es la segunda cadena pero con el mensaje de error
}

?>