<?php
$Tiulo = "Ejercicio 2";
include_once("../estructura/cabecera.php");

$datos= data_submitted();
$obj2= new control_subir2();
$respuesta = $obj2->verInformacion($datos);
?>


<div class="row">
   <div class="col-md-12">
       <div class="card">
           <div class="card-header">       
           Trabajo Practico 3
             </div>
               <div class="card-body">
                      <!--volver------------------->
                        <a class="text-dark" href="index.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
                        <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
                        </svg>
                        </a>
                        <!--volver------------------->

                    
                     
                      <!---<div class="alert alert-info" role="alert">--->
                         <h4> Datos de archivo: </h4>  
                          <textarea rows="10" cols="100">
                          <?php echo " $respuesta "; ?>
                          </textarea>
                    <!--- </div> -->


                </div>
             </div>
        </div>
    </div>





<?php
include_once("../estructura/pie.php");
?>

