<?=$cabecera?>

<div class="container">
<br><br>
  <div class="row alert-info">
   		<div class="col-lg-12 text-center">
    		<h4>JURADOS DEL CONCURSO. Cantidad Jurados S:  <?= $CantRegS; ?> T:<?= $CantRegT?> </h4>
    	</div>
  </div>
<br><br>

<div class="row">
  <div class="col-lg-12">
    <strong>RESOLUCIÓN DE CONVOCATORIA: <?= $concurso['resolucion']?> </strong>
  </div>
</div>
<br>
<div class="row">
  <div class="col-lg-12">
    <strong>CARGO:&nbsp;</strong><?= $concurso['cargo']?>
  </div>
</div>
<br>
<div class="row">
  <div class="col-lg-12">
    <strong>ASIGNATURA:&nbsp;</strong><?= $concurso['denominado']?>
  </div>
</div>
<br>
<div class="row">
  <div class="col-lg-12">
    <strong>EXPEDIENTE:&nbsp;</strong><?= $concurso['expediente']?>
  </div>
</div>
<hr>

<div class="row alert-info">
  <div class="col-lg-12">
    <strong>JURADOS&nbsp;</strong>
  </div>
</div>
<br>


<div class="row fondoGris">
<br>
  <?php foreach($concursoJurados as $concursoJurado):?>
      <div class="col-lg-3"><strong>Nombre: </strong><?= $concursoJurado['nombre'];?></div>
      <div class="col-lg-2"><strong>Documento: </strong><?= $concursoJurado['documento'];?></div>
      <div class="col-lg-2"><strong>Caracter: </strong><?= $concursoJurado['caracter'];?></div>
      <br>
      <? //if (($_SESSION["departamento"]=="Departamento Concurso") ) { ?>
      <div class="col-lg-2">
        <a onclick="mostrarMotivo('motivo<?php //echo $extraido12['idJurado']; ?>');" class="btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
      </div>
      <br>
   <?php endforeach; ?>
<br>
<br>

<hr>
</div>

<div class="row" style="display:none;" id="motivo<?php //echo $extraido12['idJurado']; ?>">
<div class="col-lg-5">

<form action="insertarMotivoEliminar.php" id="form1" name="form1" method="POST">
		<div class="row">
				<div class="col-lg-6">
					<textarea name="motivoEliminar" cols="50%" rows="5" maxlength="500" required placeholder="Ingrese motivo por lo que se elimina al jurado"></textarea>
				</div>
				<div class="col-lg-12">
					<div class="form-group">
						&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="form-group">
						<button type="submit" class="btn-danger btn-sm">Eliminar Jurado</button>&nbsp;&nbsp;
						<input type="hidden" name="idJurado" value="<?php //echo $extraido12['idJurado']; ?>">
						<input type="hidden" name="idConcurso" value="<?php //echo $idConcurso; ?>">

						</div>
					</div>
				</div>
			</div>
	</form>

</div>
	<div class="col-lg-1">
		<a href="#" onclick="cerrarMotivo('motivo<?php //echo $extraido12['idJurado']; ?>');">
			<span class="glyphicon glyphicon-remove"></span>
		</a>
	</div>
</div>

<br><br>


<br><br>
 <div class="row alert-danger">
   		<div class="col-lg-12 text-center">
        <?php if (((int)$CantRegT+(int)$CantRegS)==0) { ?>
    		  <h4>No hay Jurado asignado a este concurso </h4>
        <?php }  else { ?>
          <h4>Si hay Jurado asignado a este concurso </h4>
          <?php } ?>
    	</div>
 </div> 
 
<br>

<label>Designar Jurados</label>
<!-- <form action="asignarJurado.php" method="post" id="form2" name="form2"> -->
<form method="post" action="<?=site_url('/altaJuradoConcurso') ?>" >
<input type="hidden" name="idConcurso" value="<?= $concurso['idConcurso']?>"> 
	<div class="row">
		<div class="col-lg-3">
       		<input id="country"  type="text" name="country" size="10" id="country" class="form-control" placeholder="Ingrese DNI Jurado"/>  
       		<div id="countryList"></div>
   		</div>
   		<div class="col-lg-3">
    		<label>Caracter: </label>
      
			<?php if ((int)$CantRegT < 3){ ?>
      			<input id="caracter" name="caracter" type="radio" value="Titular" required>&nbsp;Titular&nbsp;&nbsp;&nbsp;&nbsp;
			<?php }  ?>        
			<?php if ((int)$CantRegS < 2){ ?>       
      			<input id="caracter" name="caracter" type="radio" value="Suplente" required>&nbsp;Suplente
			<?php }  ?>     
 	  	</div>
   		<div class="col-lg-2">
        	<!-- <input type="hidden" name="idConcurso" value="<?php //echo $extraido10['idConcurso'];?>"> -->
        	<button type="submit" class="btn-info">Asignar</button>
    	</div>
	</div>
	<div class="row" id="juradoDatos">
		<div class="col-lg-3"></div>
	</div>
</form>


  <!--****************JURADOS DADOS DE BAJA DEL CONCURSO********************-->
<br><hr>




<div class="row alert-warning">
  <div class="col-lg-12">
    <strong>JURADOS DADOS DE BAJA DEL CONCURSO&nbsp;</strong>
  </div>
</div>
<br>


<div class="row">
<br>
   <div class="col-lg-3"><strong>Nombre: </strong><?php //echo $extraido17['nombre']; ?></div>
   <div class="col-lg-2"><strong>Documento: </strong><?php //echo $extraido17['documento']; ?></div>
	 <div class="col-lg-5"><strong>Email: </strong><?php //echo $extraido17['email']; ?></div>
	 <div class="col-lg-2">
		<?php echo "&nbsp&nbsp&nbsp&nbsp;"; ?>
		<a onclick="return confirm('¿Esta seguro(a) de activar a<//?php echo $extraido10['nombre']; ?>&nbsp;<?php //echo $extraido17['nombre']; ?> ? ');"href="activarJurado.php?idJuradoConcurso=<?php //echo $idJuradoConcurso; ?>&idConcurso=<?php //echo $idConcurso; ?>" class="btn-sm btn-danger"><span class="glyphicon glyphicon-retweet"></span>&nbsp;&nbsp;Activar</a>
  </div>
<hr>
</div>

<div class="row">
<div class="col-lg-12"><strong>Motivo de la eliminación: </strong><?php echo $extraido16['motivoBaja']; ?></div>
</div>

<br><br>

<!--***************FIN JURADOS DADOS DE BAJA DEL CONCURSO********************-->

<br><br><br><br><br><br>


<?=$piepagina?>