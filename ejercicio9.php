<?php
if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    if($valorA > $valorB){
        echo "el valor de A es mayor que el valor de B";
    }else{
        echo "el valor de B es mayor que el valor de A";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Operadores relacionales</title>
</head>
<body>
    <form action="ejercicio9.php" method="post">
    Valor A:
    <input type="text" name="valorA" id="">
    <br>
    Valor B:
    <input type="text" name="valorB" id="">
    <br>
    <input type="submit" value="Calcular">

    </form>
</body>
</html>