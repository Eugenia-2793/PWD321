<?php
$Titulo= "Ejercicio 1";
include_once("../estructura/cabecera.php");
?>



<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">  Trabajo Practico 1 </div>
           <div class="card-body">
            <h5 class="card-title">Enunciado </h5>
              <p class="card-text">
                Ejercicio 7
                Crear una página con un formulario que contenga dos input de tipo text y un select. En 
                los inputs se ingresarán números y el select debe dar la opción de una operación 
                matemática que podrá resolverse usando los números ingresados. En la página que 
                procesa la información se debe 

                mostrar por pantalla la operación seleccionada, cada 
                uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del 
                formulario:

                </p>
                     
                <form  class="needs-validation" id="eje7" name="eje7" method="POST" action="accion.php" novalidate>

                <label for="num1" class="form-label">Numero 1</label>
                        <input type="number" id="1" name="1" min="1" placeholder="ingrese un numero" class="form-control input-group w-50"  required > 
                          <div class="invalid-feedback"> tenes que ingresar algo</div> <br/>    

                 <label for="num2" class="form-label">Numero 2</label>
                        <input type="number" id="2" name="2" min="1" placeholder="ingrese un numero" class="form-control input-group w-50"  required > 
                          <div class="invalid-feedback"> tenes que ingresar algo x2</div> <br/>             
                <br/>

                <!-----operacion----->
                Operacion 
                <select id="selector" name="selector">
                    <option value="suma">  suma</option>
                    <option value="resta"> resta</option>
                    <option value="multiplicacion">multiplicacion</option>
                    <option value="division">division</option>
                </select>
                <!----botones------>
                <input id="btn_eje"  name="btn_eje" type="submit" value="Enviar" class="btn btn-dark">
                <input type="reset" class="btn btn-dark">
                </form>

                     
          </div>
        </div>
     </div>
 </div>


<?php 
include_once("../estructura/pie.php");
?>

