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
                    <p class="card-text">  Agregue al formulario creado en el ejercicio 10 del práctico 2 un input file que les 
                        permita adjuntar la imagen de película que se está cargando. Cuando se envía el formulario se 
                        deberá guardar la imagen y luego mostrarla junto con la información cargada en el formulario.

                      <!-------  VIEJOOOO
                       <form  id="eje3" name="eje3" method="POST" action="accion.php" enctype="multipart/form-data">
                          <input id="btn_eje"  name="btn_eje" type="submit" value="Enviar" class="btn btn-dark">
                        </form>

                      ------>
                     
                      <form action="accion.php" method="POST" id="tp3ej3" name="tp3ej3" data-toggle="validator" enctype="multipart/form-data" >
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Titulo</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder=" Ingrese el titulo" required>
                                    <div class="invalid-feedback">
                                    Ingrese el titulo
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="actores">Actores</label>
                                    <input type="text" class="form-control" id="actores" name="actores" placeholder="Separe a los actores por una ','" required>
                                    <div class="invalid-feedback">
                                    Ingrese el nombre de los actores
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="director">Director</label>
                                    <input type="text" class="form-control" id="director" name="director" placeholder="Ingrese el nombre del director" required>
                                    <div class="invalid-feedback">
                                    Ingrese el nombre del director
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="guion">Guion</label>
                                    <input type="text" class="form-control" id="guion" name="guion" placeholder="Ingrese el guion" required>
                                    <div class="invalid-feedback">
                                    Ingrese el guion de la pelicula
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="produccion">Produccion</label>
                                    <input type="text" class="form-control" id="produccion" name="produccion" placeholder="Ingrese el nombre de la produccion" required>
                                    <div class="invalid-feedback">
                                    Ingrese el nombre de la produccion
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="year">A&ntilde;o</label>
                                    <input type="text" class="form-control" id="year" name="year" maxlength="4" placeholder="Ej: 2020" required>
                                    <div class="invalid-feedback">
                                    Ingrese el año de la pelicula
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="nacion">Nacionalidad</label>
                                    <input type="text" class="form-control" id="nacion" name="nacion" placeholder="Ej: Japonesa" required>
                                    <div class="invalid-feedback">
                                    Ingrese la nacionalidad
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="genero">Genero</label>
                                        <select class="custom-select d-block w-100" id="genero" name="genero" required>
                                            <option value="comedia">Comedia</option>
                                            <option value="terror">Terror</option>
                                            <option value="accion">Accion</option>
                                            <option value="romantica">Romantica</option>
                                            <option value="suspenso">Suspenso</option>
                                        </select>
                                    <div class="invalid-feedback">
                                        Seleccione un genero.
                                    </div>
                                </div>
                            
                                <div class="col-md-3 mb-3">
                                    <label for="minutos">Duracion</label>
                                    <input type="text" class="form-control" id="minutos" name="minutos" maxlength="3" placeholder="Ej: 120" required><label for="minutos">(Minutos)</label>
                                    <div class="invalid-feedback">
                                    Ingrese la duracion
                                    </div>
                                </div>

                                <div class= "col-md-6 mb-3">
                                    <label for="edad">Restricciones de edad </label>
                                    <div class="form-check form-check">
                                        <input class="form-check-input" type="radio" name="edad" id="edad" value="tp">
                                        <label class="form-check-label" for="edad">Todos los publicos </label>
                                    </div>
                                    <div class="form-check form-check">
                                        <input class="form-check-input" type="radio" name="edad" id="edad" value="ms">
                                        <label class="form-check-label" for="edad">Mayor de 7 años </label>
                                    </div>
                                    <div class="form-check form-check">
                                        <input class="form-check-input" type="radio" name="edad" id="edad" value="md">
                                        <label class="form-check-label" for="edad">Mayor de 18 años </label>
                                    </div>
                                </div>
                            
                                <div class="col-md-12 mb-3">
                                    <label for="sinopsis">Sinopsis</label>
                                    <textarea class="form-control" id="sinopsis" name="sinopsis" placeholder="Ingrese la sinopsis de la pelicula" required></textarea>
                                    <div class="invalid-feedback">
                                        Debe ingresarse la sinopsis de la pelicula
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="sinopsis">Ingrese una imagen para el poster</label>
                                    <input type="file" class="form-control" id="archivo" name="archivo" required>
                                    <div class="invalid-feedback">
                                        Debe ingresar una imagen
                                    </div>
                                </div>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-dark btn-sm">Enviar</button>
                            <button type="submit" class="btn btn-outline-dark btn-sm">Borrar</button>    
                    </form>


                    </div>
                    </div>
        </div>
    </div>



<?php 
include_once("../estructura/pie.php");
?>

