<?php

class control_cinemas {

    public function cine($datos){
      
    $texto="";

        $titulo = $datos['titulo'];
        $actor = $datos['actor'];
        $guion = $datos['guion'];
        $produccion = $datos['produccion'];
        $anio = $datos['anio'];
        $nacionalidad = $datos['nacionalidad'];
        $duracion = $datos['duracion'];
       // $edad = $datos['edad'];
      // $genero = $datos['genero'];


        /*
           $es="";
            if($selecctor == 1){ $es.= " Drama";}
            elseif($selecctor == 2){ $es.= "Comedia"  ;}
            elseif($selecctor == 3){ $es.= "Terror"   ;}
            elseif($selecctor == 4){ $es.= "Suspenso" ;}
            elseif($selecctor == 5){ $es.= "Románticas";} 
            else{  $es.= " Otros"; }    

        */


        $texto=" <li><b> Titulo:       </b> $titulo       </li>
                 <li><b> Actor:        </b> $actor        </li>   
                 <li><b> Guion:        </b> $guion        </li>
                 <li><b> Produccion:   </b> $produccion   </li>
                 <li><b> Año:         </b> $anio         </li>     
                 <li><b> Nacionalidad: </b> $nacionalidad </li>
                 <li><b> Duracion:     </b> $duracion     </li>
                 <li><b> Genero:       </b>  </li>
                 <li><b> Edad:         </b>  </li>
                ";

     return $texto;
    }

   

}
?>