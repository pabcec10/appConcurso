<?
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
 
require ('../lib/pdf/mpdf.php');

$idPostulante= $_GET['idPostulante'];


$link11 = mysqli_connect("localhost", "siedunsj_BDSied", "Sied@unsj2");// se conecta con el servidor
mysqli_select_db($link11, "siedunsj_BDSied");// selecciona la base de datos
$tildes11 = $link11->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result11 = mysqli_query($link11, "SELECT * FROM postulantes_tbl WHERE idPostulante='$idPostulante'");
//mysqli_data_seek ($result10, 0);
$extraido11= mysqli_fetch_array($result11); 
$totalRows_result11= mysqli_num_rows($result11);
 
list($anoA,$mesA,$diaA)=explode("-",$extraido10['fechaCierre']);
$fechaCierre="$diaA/$mesA/$anoA";

$html='  <header class="clearfix"> 
      <div id="logo">
      <img src="imagen/unsj.png">
      </div>
      <br>
      <h1> INFORME POSTULANTE<strong> ' .' </strong></h1>
      <div id="company" class="clearfix">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <div id="project">
	  
	  	<h2>DATOS PERSONALES:</h2>
	  
        <div><span>Nombre y Apellido '.' <strong> ' .$extraido11['apellidoNombre']. ' </strong> Fecha Nacimiento: '.' <strong> ' .$extraido11['fechaNacimiento']. ' </strong>Documento: '.' <strong> ' .$extraido11['documento']. ' </strong></span> </div><br>
		
	
		<h2>DOMICILIO REAL:</h2>
		
		<div><span>Domicilio: '.' <strong> ' .$extraido11['calle']. ' </strong>   <strong> ' .$extraido11['numero']. ' </strong>  <strong> ' .$extraido11['piso']. ' </strong>  <strong> ' .$extraido11['depto']. ' </strong></span> </div><br>
		
		
		<div><span>Teléfono Fijo: '.' <strong> ' .$extraido11['telefonoFijo']. ' </strong> Celular: '.'   <strong> ' .$extraido11['celular']. ' </strong> Email: '.'   <strong> ' .$extraido11['email']. ' </strong> </span> </div><br>
		
		
		<div><span>Código Postal: '.' <strong> ' .$extraido11['codigoPostal']. ' </strong> Barrio: '.'   <strong> ' .$extraido11['barrio']. ' </strong> Localidad: '.'   <strong> ' .$extraido11['localidad']. ' </strong>  Provincia: '.' <strong> ' .$extraido11['provincia']. ' </strong> </span> </div><br>
        
        <h2>DATOS ACADÉMICOS:</h2>
		
		<div><span>Carrera en la que esta inscripto : '.' <strong> ' .$extraido11['carrera']. ' </strong> Año de la carrera que esta inscripto actualmente : '.'   <strong> ' .$extraido11['anoEstudio']. ' </strong> Año Calendario de ingreso : '.'   <strong> ' .$extraido11['anoCalendario']. ' </strong>  Matrícula Universitaria: '.' <strong> ' .$extraido11['matricula']. ' </strong> </span> </div><br>
		
		<h2>ANTEDECENTES:</h2>  
		
		<div><span>Antecedentes de Caracter Docente : '.' <strong> ' .$extraido11['antecedentes']. ' </strong></span> </div><br>
		
        <div><span>Concursos Ganados : '.' <strong> ' .$extraido11['concursos']. ' </strong></span> </div><br>
		
		<div><span>Evaluación de la labor de cátedra : '.' <strong> ' .$extraido11['evaluacionLabor']. ' </strong></span> </div><br>
		
		<div><span>Otros Antecedentes : '.' <strong> ' .$extraido11['otrosAntecedentes']. ' </strong></span> </div><br>


    </header>
    <main>
 
</main>';

$mpdf = new mPDF('c','A4');
$css= file_get_contents('css/style.css');
$mpdf->writeHTML($css,1);
$mpdf->writeHTML($html);
$mpdf->Output('informe Postulante.pdf','D');

	
?>