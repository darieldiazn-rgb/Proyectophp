<?php 
function diHola(){
    echo "Hola Bro";
}

diHola();
echo "<hr/>";


$num1 = 4;
$num2 = 3;

function suma($n1, $n2){
$result = $n1 + $n2;
return ($result);

}
echo suma($num1, $num2);

echo "<hr/>";

$nombre = 'Dariel';
$apellido = 'Diaz';

function concatenar($nom1, $ape1){
$result = "$nom1 $ape1";
return($result);
}
echo concatenar($nombre, $apellido);

echo "<hr/>";


if(suma(3,2) == 5 ){
    echo 'tu numero es 5 ';  
}
?>
