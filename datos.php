<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>datos.php</title>
</head>
<body>
    <h3>Informacion Obtenida</h3>    
</body>
<?php

    $nombre=$_POST['Nombre'];
    $campo= $_POST['Campo'];
    $apellido= $_POST['last'];
    $direccion= $_POST['dir'];
    $cp=$_POST['codigo'];
    $telefono= $_POST['tel'];
    $msg= $_POST['mess'];
    $check= $_POST['chk'];
    echo $_POST["name"];
    echo   "Nombre:$nombre<br>
            Campo:$campo<br>
            Apellido:$apellido<br>
            Direccion:$direccion<br>
            Codigo postal:$cp<br>
            Telefono:$telefono<br>
            Mensage:$msg<br>
            Check:$check"       
?>
</html>

