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
                    <p class="card-text"> Crear un formulario HTML que permita subir un archivo. En el servidor se deberá 
                        controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño 
                        máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo 
                        cargado, en caso contrario mostrar un mensaje indicando el problema. </p>
                     
                     
                       <form  id="eje1" name="eje1" method="POST" action="accion.php" enctype="multipart/form-data">
                         <!------ICON PRUEBA--------->
                          
                         <label for="archivo" class="form-label">Archivo</label>
                            <input type="file" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf, image/" class="form-control input-group w-50" id="archivo" name="archivo" size="100" placeholder="Seleccionar archivo"required> 
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

