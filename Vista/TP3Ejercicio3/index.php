<?php
$Titulo= "Ejercicio 3";
include_once("../estructura/cabecera.php");
?>


<div class="row">
   <div class="col-md-12">
       <div class="card">
           <div class="card-header">
             Trabajo Practico 3
             </div>
               <div class="card-body">
                  <h5 class="card-title">Enunciado </h5>
                    <p class="card-text"> Ejercicio 3 – Agregue al formulario creado en el ejercicio 10 del práctico 2 un input file que les 
                        permita adjuntar la imagen de película que se está cargando. Cuando se envía el formulario se 
                        deberá guardar la imagen y luego mostrarla junto con la información cargada en el formulario.
                        OBS: Recuerde chequear los permisos sobre el directorio donde se almacenarán los archivos  </p>
                     
                     
                       <form  id="eje3" name="eje3" method="POST" action="accion.php" enctype="multipart/form-data">
                         <!------ICON PRUEBA--------->
                          
                         <label for="archivo" class="form-label"> <b> Adjuntar la imagen de película que se está cargando </b> </label>
                            <input type="file" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf, image/" class="form-control input-group w-50" id="archivo" name="archivo" size="100" placeholder="Seleccionar img"required> 
                                <div class="invalid-feedback"> Ingresa tu archivo reina </div> <br/>
                        
 
                          <!-------------boton------------>
                          <input id="btn_eje"  name="btn_eje" type="submit" value="Enviar" class="btn btn-dark">
                        </form>
                     
                    </div>
                    </div>
        </div>
    </div>



<?php 
include_once("../estructura/pie.php");
?>

