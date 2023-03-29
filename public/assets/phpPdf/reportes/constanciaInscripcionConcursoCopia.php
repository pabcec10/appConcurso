<?
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
 
require ('../lib/pdf/mpdf.php');

$documento=$_GET['documento']; // DNI DEL POSTULANTE
$idConcurso=$_GET['idConcurso'];
?>

<?
$link10 = mysqli_connect("localhost", "siedunsj_BDSied", "Sied@unsj2");// se conecta con el servidor
mysqli_select_db($link10, "siedunsj_BDSied");// selecciona la base de datos
$tildes10 = $link10->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result10 = mysqli_query($link10, "SELECT * FROM postulantes_tbl WHERE documento = '$documento' AND idConcurso = '$idConcurso' ");
$extraido10= mysqli_fetch_array($result10); 
?>

<?
list($anoA,$mesA,$diaA)=explode("-",$extraido10['fechaAlta']);
$fechaAlta="$diaA/$mesA/$anoA";

$html='  <header class="clearfix"> 
      <div id="logo">
      <img src="imagen/unsj.png">
      </div>
      <br>
      <h1>CONSTANCIA DE INSCRPCIÓN<strong> ' .' </strong></h1>
      <div id="company" class="clearfix">
        <div></div>
        <div></div>
        <div></div>
      </div>
			<h2>DATOS CONCURSO</h2>
      <div id="project">
        <div><span>En Mesa de Entrada y Salidas de la '.' <strong> ' .$extraido10['facultad']. ' </strong> de la Universidad  </span></div>
        
        <div><span>Nacional de San Juan, siendo las 12 Horas del dia <strong>'.$fechaCierre. '</strong> se procede a labrar la presente Acta, para registrar  </span></div>
        
        <div><span> las inscipciones del llamada a Concurso convocado/a por Resolución: Nº <strong> '.$extraido10['numExpedienteConcurso	'].' </strong>, tramitado por Expediente '.' <strong> '.$extraido10['numExpedienteConcurso'].' </strong>  del depto <strong>'.$extraido10['institutos_deptos'].' </strong>, para cubrir <strong>' .'  '.$extraido10['cantidadCargos'].' </strong> cargos de <strong>'.$extraido10['descripcion'].' </strong> con dedicación   </span></div>
            
        <div><span><strong> simple </strong> caracter <strong> ' .'  '.$extraido10['caracter'].' </strong> para cumplir funciones en <strong>'.$extraido10['lugar'].' </strong> de la carrera <strong> '.$extraido10['carrera'].' </strong></span></div>
        
        <div><span></span></div>
      </div>
			<br><br>
			<h2>DATOS PERSONALES</h2>
    </header>
    <main>
		
		<div><span>Nombre y Apellido '.' <strong> ' .$extraido10['apellidoNombre']. ' </strong></span></div>
		<div><span>Documento de Identidad '.' <strong> ' .$extraido10['documento']. ' </strong></span></div>
		<div><span>Fecha de Nacimiento '.' <strong> ' .$extraido10['facultfechaNacimientoad']. ' </strong></span></div>
		<div><span>Teléfono Fijo '.' <strong> ' .$extraido10['telefonoFijo']. ' </strong></span></div>
		<div><span>Email'.' <strong> ' .$extraido10['email']. ' </strong></span></div>
		<div><span>Celular'.' <strong> ' .$extraido10['celular']. ' </strong></span></div>
		<div><span>Domicilio '.' <strong> ' .$extraido10['calle']. ' '.$extraido10['numero']. ' ' .$extraido10['piso'].' ' .$extraido10['depto']. '</strong> </span></div>
		<div><span>Piso '.' <strong> ' .$extraido10['piso']. ' </strong></span></div>
		<div><span>Departamento '.' <strong> ' .$extraido10['depto']. ' </strong></span></div>
		<div><span>Código Postal '.' <strong> ' .$extraido10['codigoPostal']. ' </strong></span></div>
		<div><span>Barrio'.' <strong> ' .$extraido10['barrio']. ' </strong></span></div>
		<div><span>Localidad '.' <strong> ' .$extraido10['localidad']. ' </strong></span></div>
		<div><span>Provincia '.' <strong> ' .$extraido10['provincia']. ' </strong> </span></div>
		
	  <h2>DATOS ACADÉMICOS</h2>
		<div><span>Carrera en la que esta inscripto '.' <strong> ' .$extraido10['carrera']. ' </strong></span></div>
		<div><span>Año de la carrera que esta inscripto actualmente '.' <strong> ' .$extraido10['anoEstudio']. ' </strong></span></div>
		<div><span>Año Calendario de ingreso '.' <strong> ' .$extraido10['anoCalendario']. ' </strong></span></div>
		<div><span>Matrícula Universitaria (Registro) '.' <strong> ' .$extraido10['matricula']. ' </strong></span></div>
		
		
		<h2>ANTEDECENTES</h2>
		<div><span>Antecedentes de Caracter Docente '.' <strong> ' .$extraido10['antecedentes']. ' </strong></span></div>
		<div><span>Concursos Ganados '.' <strong> ' .$extraido10['concursos']. ' </strong></span></div>
		<div><span>Evaluación de la labor de cátedra '.' <strong> ' .$extraido10['evaluacionLabor']. ' </strong></span></div>
		<div><span>Otros Antecedentes '.' <strong> ' .$extraido10['otrosAntecedentes']. ' </strong></span></div>
				
		<h2>DOCUMENTACION ENVIADA</h2>
		<div><span>Nombre archivo enviado '.' <strong> ' .$extraido10['archivo']. ' </strong></span></div>
			
		
      <table>
        <thead>
          <tr>
            <th class="service">Nombre y Apellido</th>
            <th class="desc">Nº Expediente</th>
            <th class="unit">Documento</th>
            <th class="unit" >Folio</th>
          </tr>
        </thead>
        <tbody>';
				

         		

					$html.=' 
					<tr><td></td></tr>
        </tbody>
      </table>
    <div id="project">
    <br><br><br><br><br><br><br><br><br><br><br><br>

    </div>   
    </main>';
	
$mpdf = new mPDF('c','A4');
$css= file_get_contents('css/style.css');
$mpdf->writeHTML($css,1);
$mpdf->writeHTML($html);
$mpdf->Output('Acta Cierre Concurso.pdf','D');

	
?>