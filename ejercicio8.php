<?php
if($_POST){

$valorA=$_POST['valorA'];
$valorB=$_POST['valorB'];

$suma=$valorA+$valorB;
$resta=$valorA-$valorB;
$divicion=$valorA/$valorB;
$multiplicacion=$valorA*$valorB;

echo "<br/> La suma es ".$suma;
echo "<br/>La resta es ".$resta;
echo "<br/>La divicion es ".$divicion;
echo "<br/>La multiplicacion es ".$multiplicacion;


}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Operadores aritmeticos</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
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