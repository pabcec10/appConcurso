<?php
session_set_cookie_params(1209600);
session_start();
?> 
<? mysqli_query ("SET NAMES 'utf8'");?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Concursos Universidad Nacional de San Juan</title>
<!--<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
<link href="../css/Estilo-Web.css" rel="stylesheet" type="text/css">-->
<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
<link href="../css/Estilo-Web.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="3982ate.ico">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons" />
</head>



<body>
<div class="row fondoGrisMenu">
<div class="col-lg-1">&nbsp;</div>
<div class="col-lg-2 margenLogoMenu"><img src="imagenes/unsj.png" class="img-responsive" alt=""></div>
<div class="col-lg-3 margenHome"><span class="material-icons">home</span>&nbsp;&nbsp;&nbsp;&nbsp;<div class="home"><?php echo " ".$_SESSION['unidadAcademica']; ?></div><br><span class="material-icons">person</span>&nbsp;&nbsp;&nbsp;&nbsp;<div class="home"><? echo $_SESSION["departamento"]; ?></div></div>
<div class="col-lg-5 margenCalendar"><span class="material-icons">calendar_month</span>&nbsp;&nbsp;&nbsp;&nbsp;
<div class="home">
		<?
		setlocale(LC_ALL,"es_ES.UTF-8");
		echo strftime("%A %d de %B del %Y");
		?>
</div>
</div>
<div class="col-lg-1 margenBusqueda"><a style="text-decoration:none" href="/sistema.php">Cerrar Sesión</a></div>
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
   <? if($_SESSION["departamento"]=="Departamento Concurso") { ?>
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Altas<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
         <li><a href="altaConcurso.php">Concurso</a></li>
         <li><a href="altaJurado.php">Jurado</a></li>
      </ul>
   </li>
  <? }?>
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Listados<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
          <li><a href="listadoConcursosTodos.php">Concursos</a></li>
          <li><a href="listadoJurado.php">Jurado</a></li>
      </ul>
   </li>
</ul>
<!--<a href="sms:+542646606690">Envíame un SMS..</a>-->
<?
if ($_SESSION["departamento"]==''){ ?>
<!--<script type="text/javascript">
	window.location="https://siedunsj.com.ar/sistema.php";
</script> -->
<? }?>
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