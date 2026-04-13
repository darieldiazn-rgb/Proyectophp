<?php 
function suma($n1, $n2){
    $resultado = $n1 + $n2; 
    return($resultado);
}

function sumaArrays($n1, $n2, $n3){
    $resultado = $n1 + $n2 + $n3;
    return($resultado);
}

function concatenar($valor1, $valor2){
    $resultado = "$valor1 $valor2";
    return($resultado); 
}

function multi($n1, $n2) {
    $resultado = $n1 * $n2;
    return($resultado);    
}
function div($n1, $n2) {
    $resultado = $n1 / $n2;
    return($resultado);
}

function potencia($n1, $n2){
$resultado = $n1 ** $n2;
return($resultado);
}

function resta($n1, $n2){
    $resultado = $n1 - $n2;
    return ($resultado);
}

function resto($n1, $n2) {
    $resultado = $n1%$n2;
    return ($resultado);
}
 
function hacer($tipoOperacion, $valor1, $valor2){
    $resultado = $tipoOperacion($valor1, $valor2);
    return ($resultado);
}

function sumaDoble($v1, $v2 , $v3, $v4){
    $res1 = $v1 + $v2;
    $res2 = $v3 + $v4;
    $resultado = ("$res1, $res2 son tus numeros :)");
    return $resultado;
}

define('UNO', 1);
function producto($uno=UNO, $dos=2){
    return $uno*$dos;
}

function mostrarNumeros($v1, $v2){
    echo $v1, "<br/>";
    echo $v2, "<br/>";
}

function showArray($v1, $v2, $v3, $v4, $v5){
        $miArray = [$v1, $v2, $v3, $v4, $v5];
           foreach($miArray as $numeros){ echo 'El ',  $numeros, ' es un numero de tu array <br/>'; }
}
///////////////////////////////////////////////////////////////////++

?>