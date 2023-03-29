<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
?> 
<? mysqli_query ("SET NAMES 'utf8'");?>
<!--CONTROLAMOS EL TIEMPO DE ACCESO-->


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Concursos Universidad Nacional de San Juan</title>
<!--<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
<link href="../css/Estilo-Web.css" rel="stylesheet" type="text/css">-->
<link rel="shortcut icon" type="image/x-icon" href="3982ate.ico">


</head>

<body>
<div class="container-fluid">

<nav class="navbar navbar-default">
   <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
     <a class="navbar-brand" href="#"></a>
   </div>
      <!-- Collect the nav links, forms, and other content for toggling --> 
<div class="collapse navbar-collapse" id="defaultNavbar1">
 <ul class="nav navbar-nav">
   <li><a href="principal.php">Inicio</a></li>
   <li><a href="index.php">Sistema Web</a></li>
      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Altas<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
         <li><a href="altaConcurso.php">Alta Concurso</a></li>
         <li><a href="altaJurado.php">Alta Jurado</a></li>
      </ul>
   		</li>
   		<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Consultas<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
          <li><a href="#">Consulta</a></li>
      </ul>
   </li>
   		<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Listados<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
          <li><a href="listadoConcursosTodos.php">Listado Concursos</a></li>
          <li><a href="listadoJurado.php">Listado Jurado</a></li>
      </ul>
   </li>
</ul>
       <ul class="nav navbar-nav">
           <li><a href="#"><strong>Área:&nbsp;</strong><?php echo $_SESSION["departamento"]; ?>&nbsp;-&nbsp;<?php echo $_SESSION["unidadAcademica"]; ?></a></li>
           <li><a href="/sistema.php">Cerrar Sesión<? echo " " ;echo $tiempo_transcurrido; //echo "__________________Ahora:".$ahora; echo "__________________:Guardada:". $fechaGuardada; ?></a></li>
       </ul>
</div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</div>
<script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

</body>
</html>