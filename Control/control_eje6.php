<?php

class control_eje6{

    public function deporte($datos){
    $texto = "";

    $deportes = $datos["deporte"];
     //verificacion de deporte
            // realizando una sumatoria
            $sumatoria = -1;
            for($i=0;$i < count($deportes);$i++){
                $sumatoria = $sumatoria + 1;
            }

    $texto = "<li>  Realiza $sumatoria deportes ..</li>";
    return $texto;

    }//function 


}//class

?>


