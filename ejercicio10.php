<?php
if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    if( ($valorA != $valorB) && ($valorA > $valorB)){
        echo "el valor de A es diferente de B y tambien es mayor";
    }
    if( ($valorA != $valorB) || ($valorA > $valorB)){
        echo "el valor de A es diferente de B y tambien es mayor";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Operadores logico</title>
</head>
<body>
    <form action="ejercicio10.php" method="post">
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