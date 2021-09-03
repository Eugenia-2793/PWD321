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
                                   
                                      <form class="needs-validation" id="eje" name="eje" method="POST" action="verificaPass.php" novalidate>
                      
                                        <label for="user" class="form-label">User</label>
                                          <input type="text"  name="user" id="user"  class="form-control input-group w-50" placeholder="ingrese usuario"    aria-label="ingrese usuario"    aria-describedby="basic-addon1" required>  
                                            <div class="invalid-feedback"> Ingresa tu usuario reina, ya te lo dije antes. </div> 

                                        <label for="pass" class="form-label">Pass</label>
                                          <input type="text"  name="pass" id="pass"  class="form-control input-group w-50" placeholder="ingrese pass"       aria-label="ingrese pass"       aria-describedby="basic-addon1" required>  
                                              <div class="invalid-feedback"> las contraseñaaaa </div> 

                                        </div>
                                            <div class="modal-footer">
                                               <input id="btn_eje"  name="btn_eje" type="submit" value="Enviar" class="btn btn-dark">
                                    </form>
                                    
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
