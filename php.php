<html>
<head>
    <title>ESTACIONAMIENTO TRES DE FEBRERO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">




<?php
$ID=$_REQUEST['ID'];
$Con=$_REQUEST['Con'];
if ($_REQUEST['ID']== "3DEFEBRERO" && $_REQUEST['Con']== "EstacionoAQUI")

{
echo "INGRESASTE";

echo "<div>
<form action='horas.php' method='post' > 
    <h3>Coloque la cantidad de horas  :<input type='text' name='horas'></h3>

    <input class='envio' type='submit' value='enviar'>
</form>
</div>";

} else 
    echo "Ingresaste mal el usuario o contraseña
    <br>
    <a href='index.html'> VOLVER </a>";

?>

   

</body>
</html>