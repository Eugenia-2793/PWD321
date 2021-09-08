<?php
$Titulo= "Ejercicio 3";
include_once("../estructura/cabecera.php");
?>
<!---------BODY------------->

<div class="row">
   <div class="col-md-12">
       <div class="card">
           <div class="card-header">
             Trabajo Practico 2
             </div>
               <div class="card-body">
                  <h5 class="card-title">Enunciados </h5>
                    <ul> 
                      <li>  a) Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario 
                            y la password para loguearse. Los datos del formulario son enviados a un script 
                            verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El 
                            arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje 
                            de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo 
                            y en caso contrario un mensaje de error.  </li> 
                      <li> b) Realizar la validación de este formulario. Chequear no solo que se hayan cargado el 
                            usuario y la contraseña antes de ser enviados al servidor sino que también debe 
                            realizar un control de contraseña segura (La contraseña debe tener como mínimo 8 
                            caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener 
                            letras y números).  </li>
                      <li> c) Aplicar Bootstrap de manera que la pantalla tenga un aspecto similar al siguiente: </li>
                    </ul>  


                              <!-- Button trigger modal -->
                              <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                ingresar 
                              </button>

                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Member login</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                    <form class="registerForm" id="eje" name="eje" method="POST" action="accion.php" >
                                          <div class="form-group">
                                              <label>Username</label>
                                              <input type="text" class="form-control" name="username" id="username" />
                                          </div>

                                          <div class="form-group">
                                              <label>pass</label>
                                              <input type="text" class="form-control" name="email"  id="email"/>
                                          </div></div>
                                          <div class="modal-footer">
                                               <input id="btn_eje"  name="btn_eje" type="submit" value="Enviar" class="btn btn-dark">
                                        </form>
                                    </div>

                                    </div>
                                  </div>
                                </div>
                              </div>


                      <!---------------------------------------------------->

              </div>
          </div>
        </div>
    </div>


<!------FOOTER-------->
<?php 
include_once("../estructura/pie.php");
?>