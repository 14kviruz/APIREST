<?php
//capturamos la ruta
$array = explode("/",$_SERVER["REQUEST_URI"]);

if(count(array_filter($array))==1){
$json=array(
    $json = array(
        "Detalle" => "Sin Solicitudes",
    )
)
}else{
    if(count(array_filter($array))==2){
        $json=array(
                "Detalle" => "Con Solicitudes",
)}
}
?>