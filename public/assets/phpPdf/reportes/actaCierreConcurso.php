<?
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
 
require ('../lib/pdf/mpdf.php');

$idConcurso= $_GET['idConcurso'];
 
$link10 = mysqli_connect("localhost", "siedunsj_BDSied", "Sied@unsj2");// se conecta con el servidor
mysqli_select_db($link10, "siedunsj_BDSied");// selecciona la base de datos
$tildes10 = $link10->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result10 = mysqli_query($link10, "SELECT * FROM actaCierreConcurso_tbl WHERE idConcurso='$idConcurso'");
//mysqli_data_seek ($result10, 0);
$extraido10= mysqli_fetch_array($result10); 
$totalRows_result10= mysqli_num_rows($result10);

$link11 = mysqli_connect("localhost", "siedunsj_BDSied", "Sied@unsj2");// se conecta con el servidor
mysqli_select_db($link11, "siedunsj_BDSied");// selecciona la base de datos
$tildes11 = $link11->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result11 = mysqli_query($link11, "SELECT * FROM postulantes_tbl WHERE idConcurso='$idConcurso' AND datos ='si'");
//mysqli_data_seek ($result10, 0);
$extraido11= mysqli_fetch_array($result11); 
$totalRows_result11= mysqli_num_rows($result11);

list($anoA,$mesA,$diaA)=explode("-",$extraido10['fechaCierre']);
$fechaCierre="$diaA/$mesA/$anoA";

switch ($mesA) {

	case '1':
		$mesLetra="Enero";
	break;

	case '2':
		$mesLetra="Febrero";
	break;

	case '3':
		$mesLetra="Marzo";
	break;

	case '4': 
		$mesLetra="Abril";
	break;

	case '5':
		$mesLetra="Mayo";
	break;

	case '6':
		$mesLetra="Junio";
	break;

	case '7':
		$mesLetra="Julio";
	break;

	case '8':
		$mesLetra="Agosto";
	break;

	case '9':
		$mesLetra="Septiembre";
	break;

	case '10':
		$mesLetra="Octubre";
	break;
	
	case '11':
		$mesLetra="Noviembre";
	break;
	
	case '12':
		$mesLetra="Diciembre";
	break;
	} 



$html='  <header class="clearfix"> 
      <div id="logo">
      <img src="imagen/unsj.png">
      </div>
      <br>
      <h1> ACTA CIERRE DE INSCRIPCIONES<strong> ' .' </strong></h1>
      <div id="company" class="clearfix">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <div id="project">
        <div><span>En Mesa de Entrada y Salidas de la '.' <strong> ' .$extraido10['unidadAcademica']. ' </strong> de la Universidad Nacional de San Juan, </span></div>
				     
        <div><span>siendo las 12 Horas del dia <strong>'.$diaA. '</strong>  del mes de <strong>'.$mesLetra. '</strong> del año <strong>'.$anoA. '</strong> se procede a labrar el acta de cierre de inscripción del concurso: <strong>Auxiliar de la Docencia 2da Categoría (Alumno) </strong> convocado/a por Resolución: Nº</span></div>
        
        <div><span> <strong> '.$extraido10['resolucion'].' </strong> para cumplir funciones en <strong>' .'  '.$extraido10['descripcionCargo'].' </strong> </span></div>
        <br><br>
        <div><span>Hasta la hora indicada se presentan los siguientes aspirantes</span></div>
        
        <div><span></span></div>
      </div>
			<br><br>
			<h2>INSCRIPTOS</h2>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">Nombre y Apellido</th>
            <th class="desc">Cant Páginas Presentadas</th>
            <th class="unit">Documento</th>
          </tr>
        </thead>
        <tbody>';
				
				//$transferencia=0;
				do { 

				
				$html.='<tr>
								<td class="service">'.$extraido11['apellidoNombre'].'</td>
								<td class="desc">'.$extraido11['expedienteAlumno'].'</td>
								<td class="unit">'.$extraido11['documento'].'</td>
								<td class="unit">'.$extraido11['folioAlumno'].'</td>
          			</tr>';
								
				 
		} while ($extraido11 = mysqli_fetch_assoc($result11));
         		

					$html.=' 
					<tr><td></td></tr>
        </tbody>
      </table>
     <div id="project">
    <div><span>No habiendo mas inscriptos que registrar, se firma la presente acta para constancia</span></div>
		<br><br><br><br><br><br><br><br><br><br><br><br>
		
		<div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesa Entrada &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Autoridad Universitaria</span></div>
    </div>   
    </main>';
	
$mpdf = new mPDF('c','A4');
$css= file_get_contents('css/style.css');
$mpdf->writeHTML($css,1);
$mpdf->writeHTML($html);
$mpdf->Output('Acta Cierre Concurso.pdf','D');

	
?>