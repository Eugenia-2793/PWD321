<?php
$Titulo= "Ejercicio 1";
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
                    <p class="card-text"> – Crear un formulario que permita subir un archivo. En el servidor se deberá controlar 
                        que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su 
                        contenido en un textarea.
                        (OBS: Referencia a funciones para trabajar con archivos http://php.net/manual/en/ref.filesystem.php) 
                       <form  id="eje2" name="eje2" method="POST" action="accion.php" enctype="multipart/form-data">
                         <!------ICON PRUEBA--------->
                          
                         <label for="archivo" class="form-label">Subir archivo: txt (texto plano)</label>
                            <input type="file" accept="" class="form-control input-group w-50" id="archivo" name="archivo" size="100" placeholder="Seleccionar archivo"required> 
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

