<html>
  <head>
        <!-- titulo -->
    <title><?PHP $Titulo?></title>


<!--Incluyo bootstrap y estilo personalizado--->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link href="../estilos/es.css" type="text/css" rel="stylesheet" />

 
         <!-- CSS & JS -->
        <link rel="stylesheet" type="text/css" href="../../../css//bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../../CSS/Boostrap v.4.5.2/bootstrap.min.css">


        <link rel="stylesheet" type="text/css" href="../../../CSS/Boostrap v.4.5.2/bootstrapValidator.min.css">
        <!-- icons -->
        <link rel="stylesheet" type="text/css" href="../../../CSS/Icons/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->
        <script src="https://kit.fontawesome.com/c3fbd0a6e3.js" crossorigin="anonymous"></script>




</head>
<body class="bg-light">


<!----
    
            include_once("../../../../configuracion.php");
            include_once("../../../Estructura/lateral.php");
 
---->







<!--------------------------------DISEÑO CABECERA----------------------------------------------->



<div class="container border rounded">
  <div class="row">
    <div class="col ">
      <nav class="navbar navbar-dark bg-dark rounded ">
         <!--estructura del menu--->
         <ul class="nav rounded ">
          <!----------link al home------------>  
             <li class="nav-item  ">
              <a class="nav-link text-center p-3 text-white " aria-current="page" href="#">PWD</a>
            </li>
         </ul>
        <!--estructura del menu--->
      </nav>
    </div>
  </div>



<!----------------------------------FOOTER--------------------------------------------->


<?php  
include_once("../../configuracion.php");
include_once("lateral.php");
?>

