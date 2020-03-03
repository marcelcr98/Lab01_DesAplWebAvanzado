<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$valor1= $_POST['T1'];
$valor2= $_POST['T2'];

$suma = $valor1 + $valor2;

echo "$valor1 + $valor2 = $suma"
?>
    
</body>
</html>






<?php
$numero = 54; 
if ($numero%2==0) 
{ echo "par"; }
else 
{ echo "impar"; } 
?>