<?php
$Titulo= "Ejercicio 8";
include_once("../estructura/cabecera.php");
?>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">  Trabajo Practico 1 </div>
           <div class="card-body">
            <h5 class="card-title">Enunciado </h5>
              <p class="card-text"> Ejercicio 8
                La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en 
                función de la edad y de la condición de estudiante del cliente. Desea que sean los propios 
                clientes los que puedan calcular el valor de sus entradas a través de una página web. Si 
                es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual 
                de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un 
                formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con 
                un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. 
                Agregar un botón para limpiar el formulario y volver a consultar. </p>
                     
                <!--------formulario---------------->
                <form class="needs-validation" id="eje8" name="eje8" method="POST" action="accion.php" novalidate>
                    
                     <label for="edad" class="form-label">Edad</label>
                         <input type="number" name="edad" min="1" placeholder="Escriba su edad, debe ser mayor a 1" class="form-control input-group w-50"  required > 
                            <div class="invalid-feedback"> </div> <br/> 
                   
                    <label for="est" class="form-label">Estudia?</label>
                    
                    Si <input type="radio" name="estudia" value="si" required >
                    No <input type="radio" name="estudia" value="no">
                    <div class="invalid-feedback"> seleccionar una opcion </div> <br/> 
                    <br/>

                    <!----BOTONES------->
                    <input id="btn_eje"  name="btn_eje" type="submit" value="Enviar" class="btn btn-dark">
                    <input type="reset" class="btn btn-dark">
                   
                </form>


          </div>
        </div>
     </div>
 </div>






<!------FOOTER------>
<?php 
include_once("../estructura/pie.php");
?>
