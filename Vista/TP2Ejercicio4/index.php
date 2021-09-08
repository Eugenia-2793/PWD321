<?php
$Titulo= "Ejercicio 4";
include_once("../../estructura/cabecera.php");
?>


<div class="row">
   <div class="col-lg-12">
       <div class="card">
           <div class="card-header">
             Trabajo Practico 2
             </div>
               <div class="card-body">
                  <h5 class="card-title"> CINEMAS</h5>
                    <p class="card-text">   </p>
                               
                 <form class="needs-validation row g-3" id="eje5" name="eje5" method="POST" action="accion.php" novalidate>

                      <!--------------titulo y actor------------------->
            
                        <div class="col-md-6">
                        <label for="titulo" class="form-label">Titulo</label>
                          <input type="text" class="form-control " id="titulo" name="titulo"  placeholder="Titulo "required> 
                            <div class="invalid-feedback"> Ingresa titulo. </div> 
                        </div>
                          
                        <div class="col-md-6">
                        <label for="actor" class="form-label">Actor</label>
                          <input type="text" class="form-control" id="actor" name="actor"  placeholder="actor "required> 
                            <div class="invalid-feedback"> Ingresa Actor. </div> 
                        </div>

                        <!--------------director y guion-------------------->

                        <div class="col-md-6">
                         <label for="director" class="form-label">Director</label>
                          <input type="text" class="form-control" id="director" name="director"  placeholder="director "required> 
                            <div class="invalid-feedback"> Ingresa Director. </div> 
                        </div>
                   
                        <div class="col-md-6">
                         <label for="guion" class="form-label">Guion</label>
                          <input type="text" class="form-control" id="guion" name="guion"  placeholder="guion "required> 
                            <div class="invalid-feedback"> Ingresa Guion. </div> 
                        </div>
                         
                        <!--------------produccion y anio-------------------->

                        <div class="col-md-6">
                        <label for="produccion" class="form-label">Produccion</label>
                          <input type="text" class="form-control" id="produccion" name="produccion"  placeholder="produccion "required> 
                            <div class="invalid-feedback"> Ingresa Produccion. </div> 
                        </div>

                        <div class="col-md-6">
                        <label for="anio" class="form-label">Anio</label>
                          <input type="number" class="form-control" id="anio" name="anio"  placeholder="anio "required> 
                            <div class="invalid-feedback"> Ingresa Anio. </div> 
                        </div>

                         <!--------------nacionalidad y duracion-------------------->     

                         <div class="col-md-6">
                        <label for="nacionalidad" class="form-label">Nacionalidad</label>
                          <input type="text" class="form-control" id="nacionalidad" name="nacionalidad"  placeholder="nacionalidad "required> 
                            <div class="invalid-feedback"> Ingresa Nacionalidad. </div> 
                        </div>

                        <div class="col-md-6">
                        <label for="duracion" class="form-label">Duracion (en minutos)</label>
                          <input type="number" class="form-control" id="duracion" name="duracion"  placeholder="duracion "required> 
                            <div class="invalid-feedback"> Ingresa Duracion. </div> 
                        </div>

                       
                        <!--------------genero y edad--------------------> 
                        
                             <div class="col-md-6">
                               <label for="duracion" class="form-label">Genero</label>
                                 <select id="selector" name="selector" class="form-control">
                                    <option value="1">      Drama      </option>
                                    <option value="2">    Comedia      </option>
                                    <option value="3">     Terror      </option>
                                    <option value="4">   Suspenso      </option>
                                    <option value="5"> Románticas      </option>
                                    <option value="6">      Otras      </option>
                                    <!------ Comedia, Drama, Terror, Románticas, Suspenso, Otras. -------->
                                 </select>
                              </div>
   
                              <div class="col-md-6">
                               <label for="edad" class="form-label">Restriccion de edad</label> <br/>
                  
                                    <input type="radio" name="edad" id="radio1" value="ATP" required> 
                                          <label for="1" class="form-label">ATP</label>

                                    <input type="radio" name="edad" id="radio2" value="+ 7">
                                          <label for="2" class="form-label">+ 7</label>

                                    <input type="radio" name="edad" id="radio3" value="+ 18">
                                       <label for="3" class="form-label">+ 18</label>
                                       
                                       <div class="invalid-feedback"> Seleccionar una opcion </div>

                              </div>

                            <!---------------------------------------------->

                             <!----BOTONES------->
                             <div class="col-md-6">
                                <input id="btn_eje"  name="btn_eje" type="submit" value="Enviar" class="btn btn-dark col-md-3 m-1 ">
                                <input type="reset" class="btn btn-dark col-md-3  m-1">
                              </div>
                             <!------------------>
                        </form>
                     
                    </div>
                </div>
             </div>
        </div>



<?php 
include_once("../../estructura/pie.php");
?>

