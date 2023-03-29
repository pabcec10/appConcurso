<?php
session_start();
?>
<?// if ($_SESSION["usuario"]==""){ ?>
<!--<script type="text/javascript">
	window.location="https://siedunsj.com.ar/acceso.php";
</script>-->
<? //} ?>
<? mysqli_query ("SET NAMES 'utf8'");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Comunidad Estudiantil Virtual</title>
<!--<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
<link href="../css/Estilo-Web.css" rel="stylesheet" type="text/css">-->
<link rel="shortcut icon" type="image/x-icon" href="3982ate.ico">
</head>


<?
switch ($_SESSION["unidadAcademica"]) {

case faud:
	$nombreUnidad="Facultad de Arquitectura, Diseño y Urbanismo";
break;

case exactas:
	$nombreUnidad="Facultad de Ciencias Exactas, Fisicas y Naturales";
break;

case facso:
	$nombreUnidad="Facultad de Ciencias Sociales";
break;

case fi: 
	$nombreUnidad="Facultad de Ingeniería";
break;

case eucs:
	$nombreUnidad="Escuela Universitaria de Ciencias de la Salud";
break;

case ffha:
	$nombreUnidad="Facultad de Filosofía, Humanidades y Artes";
break;

case eidfs:
	$nombreUnidad="Escuela Industrial Domingo Faustino Sarmiento";
break;

case ccu:
	$nombreUnidad="Colegio Central Universitario Mariano Moreno";
break;

case eclgsm:
	$nombreUnidad="Escuela de Comercio Libertador General San Martín";
break;

} ?>




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
   <li><a href="cev.php">Comunidad Estudiantil</a></li>
    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Altas<span class="caret"></span></a>
       <ul class="dropdown-menu" role="menu">
	   <? if ($_SESSION["tipoAcceso"]<>'Super Usuario'){ ?>
		<li><a href="altaNoticias.php">Noticia</a></li>
		<li><a href="altaImagenBanner.php">Imagen Banner</a></li>
		<? } ?>
		<? if ($_SESSION["tipoAcceso"]=='Super Usuario'){ ?>
		<li><a href="altaNoticiasSU.php">Noticia</a></li>
		<li><a href="altaUsuario.php">Usuario</a></li>
		<li><a href="altaImagenBannerSU.php">Imagen Banner</a></li>
		<? } ?>
       </ul>
    </li>
    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Listados<span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">
		<? if ($_SESSION["tipoAcceso"]=='Super Usuario'){ ?>
		<li><a href="listadoNoticiasTodasSU.php">Listado Noticias</a></li>
		<? } ?>
		<? if ($_SESSION["tipoAcceso"]<>'Super Usuario'){ ?>
		<li><a href="listadoNoticiasTodas.php">Listado Noticias</a></li>
		<? } ?>
		<? if ($_SESSION["tipoAcceso"]=='Super Usuario'){ ?>
		<li><a href="listadoUsuariosCEV.php">Listado Usuarios</a></li>
		<? } ?>
    </ul>
    </li>
	<? if ($_SESSION["tipoAcceso"]=='Super Usuario'){ ?>
	<li><a href="listadoImagenesSU.php">Repositorio Imágenes</a></li>
	<? } ?>
	<? if ($_SESSION["tipoAcceso"]<>'Super Usuario'){ ?>
	<li><a href="listadoImagenes.php">Repositorio Imágenes</a></li>
	<? } ?>
	<? if ($_SESSION["tipoAcceso"]=='Super Usuario'){ ?>
	<li><a href="listadoImagenesBanner.php">Repositorio Imágenes Banner</a></li>
    <? } ?>
	<? if ($_SESSION["tipoAcceso"]<>'Super Usuario'){ ?>
	<li><a href="listadoImagenesBanner.php">Repositorio Imágenes Banner</a></li>
    <? } ?>
    
 </ul>
 <ul class="nav navbar-nav navbar-right">
    <li><a href=""><strong>Usuario:<font color="#2016FB"></strong><?php echo " ".$_SESSION["usuario"]; ?></font><? if ($_SESSION["tipoAcceso"]<>'Super Usuario'){ ?>&nbsp;&nbsp;&nbsp;<strong>Unidad Académica:<font color="#2016FB"></strong><?php echo " ".$nombreUnidad; ?></font> <? } ?>&nbsp;&nbsp;&nbsp;<strong>Tipo Acceso:</strong><font color="#2016FB"> <? echo $_SESSION["tipoAcceso"]; ?></font></a></li>
    <li><a href="/acceso.php">Cerrar Sesión </a></li>
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