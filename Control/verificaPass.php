<?php

class verificaPass{


    public function existe($datos){

        $info = $datos["login"];
        
         print_r($info);

        $user = $info["username"];
        $pass = $info["password"];
        
        
        // datos guardados
        $array_1 = ["usuario" => "eugeniaG", "clave" => "Hola1234"];
        $array_2 = ["usuario" => "GarciaE", "clave" => "Chau4321"];
        $array_3 = ["usuario" => "homero", "clave" => "1lum1nado5"];
        $array = [$array_1,$array_2,$array_3];

        for($i = 0; $i <(count($array));$i++){
            if($array[$i]["usuario"] == $user && $array[$i]["clave"] == $pass){
                $texto = "<p>Sesion iniciada.</p>";
            }
        }

        $texto = "<p>Tus datos no son los correctos.</p>";

        return $texto;



    }//function


}//class