<?php

    class control_subir3{


        public function verInformacion ($datos){

            // Directorio establecido para enviar los archivos.
            $dir = '../archivos';

            if ($_FILES['archivo']["error"] <= 0) {
                $error = 0;
                

                $titulo = $datos["titulo"];
                $actors = $datos["actores"];
                $director = $datos["director"];
                $guion = $datos["guion"];
                $produccion = $datos["produccion"];
                $year = $datos["year"];
                $nacion = $datos["nacion"];
                $genero = $datos["genero"];
                $minutos = $datos["minutos"];
                $edad = $datos["edad"];
                $sinopsis = $datos["sinopsis"];
                
                if($edad == "md"){
                    $rEdad = "Mayores de 18 A&ntilde;os";
                } elseif($edad == "ms"){
                    $rEdad = "Mayores de 7 A&ntilde;os";
                } else {
                    $rEdad = "Apta para todo publico";
                }
    
                // Verificando que los archivos sean img/jpeg
                if($_FILES['archivo']['type'] == "image/jpeg" || $_FILES['archivo']['type'] == "image/png" || $_FILES['archivo']['type'] == "image/gif" ){
                    $filename = $_FILES['archivo']['tmp_name'];
                    $file = fopen($filename,"r");
                    $content = fread($file, filesize($filename));
                    fclose($file);
                } else {
                   // $content = "El archivo debe ser una imagen";
                   // return $content;
                    $error = 1;
                }
               



                //Si no hay errores entonces subimos el archivo al servidor.
                if($error == 0){
                    // Intentamos copiar el archivo al servidor.
                    if (!copy($_FILES['archivo']['tmp_name'], $dir.$_FILES['archivo']['name'])) {
                        //echo "ERROR: no se pudo cargar el archivo";
                        }
                    else{
                        echo "El archivo ".$_FILES["archivo"]["name"]." se ha copiado con Éxito <br />";
                        }
                } else {
                    /* $rta = "<p> El archivo no se puede subir por los siguientes motivos: <br> ".$sumatoria." </p>"; */
                    }


                    $texto = "<p><h1> La pelicula introducida es </h1> <br>
                                  <b>Titulo:</b> $titulo <br>
                                  <b>Actores:</b> $actors <br>
                                  <b>Director:</b> $director <br>
                                  <b>Guion:</b> $guion <br>
                                  <b>Produccion:</b> $produccion <br>
                                  <b>A&ntilde;o:</b> $year <br>
                                  <b>Nacionalidad:</b> $nacion <br>
                                  <b>Genero:</b> $genero <br>
                                  <b>Duracion:</b> $minutos Minutos<br>
                                  <b>Restricciones de edad:</b> $rEdad <br>            
                                </p>
                                <img height='40' width='40' src=".$dir.$_FILES["archivo"]["name"]." >";

                    return $texto;
                }else{
                    $texto= "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
                    return $texto;
                }

        }
    }


?>  