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
$result11 = mysqli_query($link11, "SELECT * FROM postulantes_tbl WHERE idConcurso='$idConcurso'");
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
      <h1> ACTA CIERRE DE INSCRIPCIONES<strong> ' .' </strong></h1>
      <div id="company" class="clearfix">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <div id="project">
        <div><span>En Mesa de Entrada y Salidas de la '.' <strong> ' .$extraido10['facultad']. ' </strong> de la Universidad Nacional  </span></div>
        
        <div><span>de San Juan, siendo las 12 Horas del dia <strong>'.$fechaCierre. '</strong> se procede a labrar la presente Acta, para registrar  </span></div>
        
        <div><span> las inscipciones del llamada a '.' <strong> '.$extraido10['llamado'].' </strong> convocado/a por:' .' <strong> '.$extraido10['convocado'].' </strong> Nº <strong> '.$extraido10['numero'].' </strong>, tramitado por Expediente '.' <strong> '.$extraido10['numExpedienteConcurso'].' </strong>  del depto <strong>'.$extraido10['departamento'].' </strong>, para cubrir <strong>' .'  '.$extraido10['cantidadCargos'].' </strong> cargos de <strong>'.$extraido10['descripcion'].' </strong> con dedicación <strong> simple </strong>  </span></div>
            
        <div><span>caracter <strong> ' .'  '.$extraido10['caracter'].' </strong> para cumplir funciones en <strong>'.$extraido10['lugar'].' </strong> de la carrera <strong> '.$extraido10['carrera'].' </strong></span></div>
        
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
            <th class="desc">Nº Expediente</th>
            <th class="unit">Documento</th>
            <th class="unit" >Folio</th>
          </tr>
        </thead>
        <tbody>';
				
				//$transferencia=0;
				do { 

				
				$html.='<tr>
								<td class="service">'.$extraido11['nombre'].' '.$extraido11['apellido'].'</td>
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
    </div>   
    </main>';
	
$mpdf = new mPDF('c','A4');
$css= file_get_contents('css/style.css');
$mpdf->writeHTML($css,1);
$mpdf->writeHTML($html);
$mpdf->Output('Acta Cierre Concurso.pdf','D');

	
?>