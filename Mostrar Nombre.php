<<html lang="en">
<head>
</head>
<body>
    <form method="post"> <!--el form es pa los cuadrados donde mustran los resultados-->
        <table><!--relacionado con el php-->
            <tr><!--es para hacer filas-->
                <td><input type="text" name="Nombre"></td> <!--es para saltar las filas hacia abajo-->
            </tr>
            <tr>
                <td><input type="text" name="Apellido"></td>
            </tr>
            <tr>
                <td><input type="text" name="Edad"></td>
            </tr>
            <tr>
                <td><input type="submit" value="mostrar"></td>
            </tr>

            <?php
            if($_POST)
            {
                $Nombre = $_POST ['Nombre'];
                $Apellido = $_POST ['Apellido'];
                $Edad = $_POST ['Edad'];
            
                echo " el nombre es esto" .$Nombre." y " .$Apellido. " es " .$Edad;
            }//el $POST hace que se asigne el numero 1 y 2//
            //la $suma hace que se este sumando//
            //el echo es el que muestra muestra el resultado//
            ?><!--es para que funcione el php-->
            
        </table>

    </form>
</body>
</html> 