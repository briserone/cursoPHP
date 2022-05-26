<?php
    if($_POST){
        //recibir informacion del formulario metodo post
        $nombre=$_POST['txtNombre'];
        echo "Mi nombre es ".$nombre;
    }else{
        echo "Ingresa tu nombre";
    }   
?>



<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>