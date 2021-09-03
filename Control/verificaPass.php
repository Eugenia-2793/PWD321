<?php

class verificaPass{


    public function existe($datos, $arregloUs){

        //Array ( [1] => Array ( [user] => Eugenia [pass] => Hola1234 )
        //        [2] => Array ( [user] => Garcia  [pass] => Chau4321 ) 
       
        $text= "Sin registro";
         /*$usuario = $datos['username'];
        $pass =    $datos['email'];

        foreach ( $arregloUs as $clave => $valor ) {

            if($clave == $usuario){
                if($pass == $valor){
                    $text = "bienvenido";
                }//if
            }//if
         }//foreach*/
         return $text;
    }//function


}//class