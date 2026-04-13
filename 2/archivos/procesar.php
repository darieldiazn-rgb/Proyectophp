<?php 
$nombre = $_POST['usuario']; 

$valorRecibido = $nombre;
$valor = ucfirst(strtolower($valorRecibido));

if(isset($valor)) {
    $queEs = match ($valor) {
    'Dariel'        => 'Dariel es central',
    'Nay'           => 'Nay no sabe que es', 
    'Daniel'        => 'Daniel es punta',
    'Josue'         => 'Josue es libero atacante por la 2',
    default => 'Ese nombre no esta en mi lista de amigos'
};
 echo $queEs;
}

?>