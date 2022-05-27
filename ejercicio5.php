<?php
    if($_POST){
        //recibir informacion del formulario metodo post
        $txtNombre=$_POST['txtNombre'];
        $txtApellido=$_POST['txtApellido'];
        echo "Mi nombre es ".$txtNombre." ".$txtApellido;
    }   
?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    
<form action="ejercicio5.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>
        Apellido:
        <input type="text" name="txtApellido" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>