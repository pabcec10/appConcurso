<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
?>
<? 
$idConcurso=$_GET["idConcurso"]; 
//echo $idConcurso;
?>

<?
$link10 = mysqli_connect("localhost", "siedunsj_BDSied", "Sied@unsj2");// se conecta con el servidor
mysqli_select_db($link10, "siedunsj_BDSied");// selecciona la base de datos
$tildes10 = $link10->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result10 = mysqli_query($link10, "SELECT * FROM concursos_tbl WHERE idConcurso='$idConcurso'");
//mysqli_data_seek ($result10, 0);
$extraido10= mysqli_fetch_array($result10); 
$totalRows_result10= mysqli_num_rows($result10);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Concursos Universidad Nacional de San Juan</title>
<link href="css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
<link href="css/Estilo-Web.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="3982ate.ico">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="https://use.edgefonts.net/dosis:n2:default.js" type="text/javascript"></script>

<!--Recaptcha invisible-->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!--Fin Recaptcha invisible--> 

<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" language="javascript" src="js/ajax.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



</head>
<body>
<?php include ("include/menu.php");?>
<div class="container">
<form id="form1" method="POST" name="form1" action="altaJurado_1.php">
<div class="row">
<div class="col-lg-12">
		<div class="form-group">
    <input type="hidden" name="idConcurso" value="<?php echo $idConcurso;?>">
				<button type="submit" class="btn-info btn"> Inscribirse </button>&nbsp;&nbsp;
				<button type="reset" class="btn-warning btn">Cancelar</button>
					<div id='recaptcha' class="g-recaptcha"
					data-sitekey="6LdyHKgaAAAAANQh-txnuGTRYatvKxqRi_Z7U_Fi"
					data-callback="onCompleted"
					data-size="invisible"></div>       
		</div>
</div>
</div>
<br>
<div class="panel panel-default">
  <div class="panel-body">
    <font size="4">ALTA JURADO</font>
  </div>
</div>
<br>
<br>
<div class="row">
 	<div class="col-lg-4"><label>Nombre y Apellido</label>
    	<input name="nombre" type="text" class="form-control" size="90" required>
  </div>
 	<div class="col-lg-3"><label>Nº Documento</label>
    	<input name="documento" type="number" class="form-control" size="90" required>
  </div>
</div>
<br>
<div class="row">

  <div class="col-lg-3"><label>Celular</label>
    	<input name="celular" type="text" class="form-control" size="90">
  </div>
  <div class="col-lg-6"><label>Email</label>
    	<input name="email" type="text" class="form-control" size="90">
  </div>
</div>
<hr>
<br>
</form>
</div>
<script>
    $('#form1').submit(function(event) {
        console.log('form submitted.');

        if (!grecaptcha.getResponse()) {
            console.log('captcha not yet completed.');

            event.preventDefault(); //prevent form submit
            grecaptcha.execute();
        } else {
            console.log('form really submitted.');
        }
    });

    onCompleted = function() {
        console.log('captcha completed.');
        $('#form1').submit();
      //  alert('wait to check for "captcha completed" in the console.');
    }
</script>
<script src="js/jquery-1.11.3.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
</body>
</html>