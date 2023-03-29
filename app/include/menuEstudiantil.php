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
<link href="../css/Estilo-Web.css" rel="stylesheet" type="text/css">

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
   <li><a href="principal.php" class="separacionItemMenu">Inicio</a></li>
   <li><a href="index.php" class="separacionItemMenu">Noticias</a></li>
   <li><a href="index.php" class="separacionItemMenu">Videos</a></li>
   <li><a href="index.php" class="separacionItemMenu">Carreras</a></li>
   <li><a href="index.php" class="separacionItemMenu">Preguntas Frecuentes</a></li>
   <li><a href="index.php" class="separacionItemMenu">Autoridades</a></li>
   <li><a href="index.php" class="separacionItemMenu">Contacto</a></li>
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