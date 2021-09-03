<?php

class control_subir1{

   
      public function verInformacion ($datos){

         // Directorio establecido para enviar los archivos.
         $dir = '../archivos/';

         if ($_FILES['archivo']["error"] <= 0) {
             $error = 0;
           
             
             // Verificando que los archivos pesen menos de 2 MB
             if($_FILES['archivo']["size"] > 2000000){
                 /* $errores[1] = " <p> El archivo debe pesar menos de 2 MB </p>";
                 $error = 1; */
                 echo "El archivo debe pesar menos de 2 MB";
                 $error = 1;
             }
             

             //Si no hay errores entonces subimos el archivo al servidor.
             if($error == 0){
                 // Intentamos copiar el archivo al servidor.
                 if (!copy($_FILES['archivo']['tmp_name'], $dir.$_FILES['archivo']['name'])) {
                     echo "ERROR: no se pudo cargar el archivo";
                     }
                 else{
                     $rta = "El archivo ".$_FILES["archivo"]["name"]." se ha copiado con Éxito <br/>
                         DESCARGUE EL ARCHIVO: <a href='../archivos/".$_FILES['archivo']['name']."'>Click aca</a> ";                       }
             } else {
                     $rta = "El archivo no se puede subir";
             }

             return $rta;
         }
         else{
                 echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
             }

     }
 }


?>