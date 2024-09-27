<?php
//capturamos la ruta
$array = explode("/", $_SERVER["REQUEST_URI"]);

/*================================
cuando no se hace ninguna peticion a la API
======================================= */
if (count(array_filter($array)) == 1) {
    $json = array(
        "Detalle" => "Sin Solicitudes",
    );
    echo json_encode($json, true);

} else {
    /*================================
cuando si se hace peticion a la API
======================================= */
    if (count(array_filter($array)) == 2) {
       //cursos
       if(array_filter($array)[2]=="cursos"){

        //ver lista de cursos
        if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]=="GET"){
            $cursos= new controladorCursos();
            $cursos->index();
        }
       }
    }
}
