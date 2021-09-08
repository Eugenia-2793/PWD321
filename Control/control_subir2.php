<?php

    class control_subir2{


        public function verInformacion ($datos){

            // Directorio establecido para enviar los archivos.
            $dir = '../archivos';

            if ($_FILES['archivo']["error"] <= 0) {
                $error = 0;

                // Verificando que los archivos sean txt
                if($_FILES['archivo']['type'] == "text/plain"){
                    $filename = $_FILES['archivo']['tmp_name'];
                    $file = fopen($filename,"r");
                    $content = fread($file, filesize($filename));
                    fclose($file);
                } else {
                    //echo "El archivo debe ser un *.txt";
                    $error = 1;
                }


                //Si no hay errores entonces subimos el archivo al servidor.
                if($error == 0){
                    // Intentamos copiar el archivo al servidor.
                    if (!copy($_FILES['archivo']['tmp_name'], $dir.$_FILES['archivo']['name'])) {
                      //  echo "ERROR: no se pudo cargar el archivo";
                        }
                    else{
                     //   echo "El archivo ".$_FILES["archivo"]["name"]." se ha copiado con Éxito <br />";
                        }
                } else {
                    /* $rta = "<p> El archivo no se puede subir por los siguientes motivos: <br> ".$sumatoria." </p>"; */
                    }

                return $content;
            }
            else{
                   // echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
                }

        }
    }


?>