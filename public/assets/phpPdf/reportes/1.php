<?
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

require ('../lib/pdf/mpdf.php');


 
$link10 = mysqli_connect("localhost", "siedunsj_BDSied", "Sied@unsj2");// se conecta con el servidor
mysqli_select_db($link10, "siedunsj_BDSied");// selecciona la base de datos
$tildes10 = $link10->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result10 = mysqli_query($link10, "SELECT * FROM ctaCierreConcurso_tbl WHERE idConcurso='$idConcurso'");
//mysqli_data_seek ($result10, 0);
$extraido10= mysqli_fetch_array($result10); 
$totalRows_result10= mysqli_num_rows($result10);


$html='  <header class="clearfix">
      <div id="logo">
        <img src="imagenes/unsj.png">
      </div>
      <h1> ACTA CIERRE CONCURSO:<strong> ' .' '.$extraido10['idConcurso'].'</strong></h1>
      <div id="company" class="clearfix">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <div id="project">
        <div><span>En Mesa de entrada de la' .'  '.$extraido10['idConcurso'].'</span></div>
        <div><span>de la Universidad Nacional de San Juan, siendo las' .'  '.$extraido10['hora'].'</span></div>
        <div><span>resolucion:' .'  '.$extraido10['idConcurso'].'</span></div>
        <div><span>convocado:' .'  '.$extraido10['idConcurso'].'</span></div>
      </div>
      <div id="project">
        <div><span>Facultad:' .'  '.$extraido10['idConcurso'].'</span></div>
        <div><span>Fecha Cierre:' .'  '.$extraido10['idConcurso'].'</span></div>
        <div><span>resolucion:' .'  '.$extraido10['idConcurso'].'</span></div>
        <div><span>convocado:' .'  '.$extraido10['idConcurso'].'</span></div>
      </div>
			<br><br>
			<div id="concepto">
        <div><span>numero:' .'  '.$extraido10['idConcurso'].'</span></div>
        <div><span>departamento:' .'  '.$extraido10['idConcurso'].'</span></div>
        <div><span>cantidadCargos:' .'  '.$extraido10['idConcurso'].'</span></div>
      </div>
			<br><br><br>
			<h2>VALORES</h2>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">Forma de Pago</th>
            <th class="desc">Nº de Cheque</th>
            <th>Fecha</th>
            <th>Importe</th>
          </tr>
        </thead>
        <tbody>';
				
				//$transferencia=0;
				//do { 
				list($ano,$mes,$dia)=explode("-",$extraido['fecha']);
				$fechaCheque="$dia/$mes/$ano";
				
				//$transferencia=$transferencia+$extraido['importeValores'];
				$montoimporte=money_format('%.2n', $extraido['importe']);
				$montoRetenciones=money_format('%.2n', $extraido['retenciones']);
				//$montoTransferencia=money_format('%.2n', $transferencia);
				$total=$extraido['importe']-$extraido['retenciones'];
				$montoTotalOrden=money_format('%.2n', $total);
				
				$html.='<tr>
								<td class="service">'.$extraido['formaPago'].'</td>
								<td class="desc">'.$extraido['numCheque'].'</td>
								<td class="unit">'.$fechaCheque.'</td>
								<td class="unit">'.$montoimporte.'</td>
          			</tr>';
								
				 
				 //} while ($extraido = mysqli_fetch_assoc($result));
         		
			 
			 $html.=' 
          <tr><td></td></tr>
					<tr>
            <td colspan="4">TOTAL TRANSFERENCIA</td>
            <td class="total">'.$montoimporte.'</td>
          </tr>
          <tr>
            <td colspan="4">RETENCIÓN GANANCIA</td>
            <td class="total">'.$montoRetenciones.'</td>
          </tr>';
					

					$html.=' 
          <tr>
            <td colspan="4" class="grand total">TOTAL</td>
            <td class="grand total">'.$montoTotalOrden.'</td>
          </tr>
					<tr><td></td></tr>
        </tbody>
      </table>
			<div id="firmas" class="clearfix">
			  <div>.................................................................................</div>
        <div>FIRMA RESPONSABLE ADMINISTRATIVO</div>
        <div>ACLARACION / SELLO</div>
      </div>
			<br><br><br><br>
			<div id="firmas" class="clearfix">
				<div>.................................................................................</div>
        <div>FIRMA COORDINADOR</div>
        <div>ACLARACION / SELLO</div>
      </div>
    </main>';
	
$mpdf = new mPDF('c','A4');
$css= file_get_contents('css/style.css');
$mpdf->writeHTML($css,1);
$mpdf->writeHTML($html);
$mpdf->Output('Acta Cierre Concurso.pdf','D');

	
?>