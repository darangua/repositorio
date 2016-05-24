<?php include('valida_acceso.php')?>
<?php include ('./clases/Transacciones.php')?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/styles.css">
   <script src="js/jquery-latest.min.js" type="text/javascript"></script>
   <title>Agregar</title>
   

</head>
<body>
<?php 
include('menu.php');

?>
AGREGAR
<br>
</br>

   <p>Ingrese el ID del producto
   <input type="text" name="idproducto" id="idproducto">
   </p>
   

   <p>Nombre producto
   <input type="text" name="nombreproducto" id="nombreproducto">
   </p>
  

    <p>Total USD
   <input type="text" name="totalusd" id="totalusd">
   </p>
   
   <p>Año 
   <input type="text" name="anio" id="anio">
   </p>

   <input type="button" name="enviar" value ="Enviar" onclick="AgregarP($id)">
   
</body>
</html>

