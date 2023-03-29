<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Concursos Universidad Nacional de San Juan</title>

<!-- <link href="<?php echo base_url();?>/assets/css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css"> -->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<link rel="stylesheet" href="/assets/css/style.css">
<link href="<?php echo base_url();?>/assets/css/Estilo-Web.css" rel="stylesheet" type="text/css">

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<link rel="shortcut icon" type="image/x-icon" href="3982ate.ico">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons" />

</head>
<body>

<div class="container">
<div class="row fondoGrisMenu">
    <div class="col-lg-1">&nbsp;</div>
    <div class="col-lg-2 margenLogoMenu"><img src="<?php echo base_url();?>/assets/imagenes/unsj.png" alt="" class="margenLogoMenu"></div>
    <div class="col-lg-3 margenHome"><span class="material-icons">home</span>&nbsp;&nbsp;&nbsp;&nbsp;<div class="home"><?php //echo " ".$_SESSION['unidadAcademica']; ?></div><br><span class="material-icons">person</span>&nbsp;&nbsp;&nbsp;&nbsp;<div class="home"><? //echo $_SESSION["departamento"]; ?></div></div>
    <div class="col-lg-5 margenCalendar"><span class="material-icons">calendar_month</span>&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="home">
   <?php
      setlocale(LC_ALL, 'spanish');
      $fecha = date("d-m-Y");
      $fecha=strftime("%A %d de %B del %Y", strtotime($fecha));  //fecha tipo martes 17 de mayo del 2022 
      ?>
      <?php
      echo $fecha;
   ?>
    </div>
</div>

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
   <li><a href="concursoPpal.php">Inicio</a></li>
   <li><a href="indexConcursos.php">Sistema Web</a></li>
   <? //if($_SESSION["departamento"]=="Departamento Concurso") { ?>
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Altas<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
         <li><a href="altaConcurso.php">Concurso</a></li>
         <li><a href="altaJurado.php">Jurado</a></li>
      </ul>
   </li>
  <?// }?>
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Listados<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
          <li><a href="listadoConcursosTodos.php">Concursos</a></li>
          <li><a href="listadoJurado.php">Jurado</a></li>
      </ul>
   </li>
</ul>


<ul class="nav navbar-nav">
<!--	 <li><a href="#"><strong>Área:&nbsp;</strong><?php //echo $_SESSION["departamento"]; ?>&nbsp;-&nbsp;<?php //echo $_SESSION["unidadAcademica"]; ?></a></li>
	 <li><a href="/sistema.php">Cerrar Sesión</a></li>-->
</ul>
</div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</div>
