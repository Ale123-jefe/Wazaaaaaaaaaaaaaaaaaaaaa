

<h3>Clase 13-04-22</h3>
Saldo: <?php echo $saldo; ?><br>
<form method="POST" action="P 4.php">
<label>Tipo: </label>  
  <select name="tipo"> 
    <option value="D">Deposito</option>
  	<option value="R">Sacar Dinero</option>
  </select>
  
  <br>


   <label>Importe: </label><input type="text" name="importe" >
   
   <br>


  <input type="hidden" name="saldo" value="<?php echo $saldo;?>" >

  <b >      
      
  
  <input type="submit" name="enviar" value="Enviar">
  <input type="reset" value="Limpiar">
</form>
<hr size="2">




<?php
if ( isset($_POST["saldo"])){



       $saldo = $_POST["saldo"];$tipo = $_POST["tipo"];$importe = $_POST["importe"];
    if ($tipo == "D"){
        $saldo += $importe;
        echo "Nuevo saldo: $saldo <br>";
    }
   


}
else { $saldo = 5000;}
?>

