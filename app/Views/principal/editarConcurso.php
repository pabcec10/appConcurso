 <?=$cabecera;?>

 <div class="container">
<form method="post" action="<?=site_url('/actalizarConcursoAuxiliar') ?>" > 

<div class="panel panel-default">
  <div class="panel-body">
    <font size="4">EDITAR CONCURSO AUXILIAR DOCENTE, DE INVESTIGACION O CREACION</font>
  </div>
</div>
<input type="hidden" name="idConcurso" value="<?= $concurso['idConcurso']?>">
<br>
<div class="container-fluid">
<div class="row">
  <div class="col-lg-6"></div>
  <div class="col-lg-6 text-right">
   
  </div>
  <div class="col-lg-1"></div>
</div>
<br>
</div>
<div class="row">
 	<div class="col-lg-1"><label>Cargo</label>
    	<input id="cargo" value="<?= $concurso['cargo']?>" name="cargo" type="number" class="form-control" size="90" require> 
    </div>
    <div class="col-lg-4">
		<label>Resolución Convocatoria</label>
        <input id="resolucion" value="<?= $concurso['resolucion']?>" class="form-control" type="text" name="resolucion" require>
    </div>
	<div class="col-lg-3" value="<?= $concurso['destino']?>"><label>Destino</label>
		<select id="destino" name="destino" class="form-control">
					<option value="No Aplica"><?= $concurso['destino']?></option>
					<option value="Asignatura">Asignatura</option>
					<option value="Programa">Programa</option>
					<option value="Area de Conocimiento">Área de Conocimiento</option>
		</select>	
   </div>
   <div class="col-lg-3"><label>Departamento</label>
		<select id="institutos_deptos" name="institutos_deptos" class="form-control">
					
					<?php foreach($Dptos as $v) 
					{
					?>
					
						<option value=""><?= $v['departamento']; ?></option>

					<?php } ?>
		</select>	
   </div>
</div>
<br>
<div class="row">
<div class="col-lg-5" id="resolucionA"></div>
</div>
<br>
<div class="row">
    <div class="col-lg-4"><label>Denominado</label>
        <input id="denominado" value="<?= $concurso['denominado']?>" name="denominado" type="text" class="form-control"  size="90" require>
    </div>
</div>
<br>
<div class="row">
	<div class="col-lg-10"><label>Descripción del Cargo</label>
        <input id="descripcionCargo" value="<?= $concurso['descripcionCargo']?>" name="descripcionCargo" type="text" class="form-control" require>
    </div>
</div>
<br>
<div class="row">
	<div class="col-lg-4"><label>Otras Funciones</label>
		<input id="otrasFunciones" value="<?= $concurso['otrasFunciones']?>" name="otrasFunciones" type="text" class="form-control"  size="90" require>
	</div>
	<div class="col-lg-3"><label>Código</label>
		<input id="codigo" value="<?= $concurso['codigo']?>" name="codigo" type="text" class="form-control"  size="90" >
	</div>
	<div class="col-lg-3"><label>Número Expediente</label>
		<input id="expediente" value="<?= $concurso['expediente']?>" name="expediente" type="text" class="form-control"  size="90" >
	</div>
</div>
<br>

<div class="row">
	<div class="col-lg-3"><label>Caracter</label>
		<input id="caracter" value="<?= $concurso['caracter']?>" name="caracter" type="text" class="form-control" >
	</div>
	<div class="col-lg-2"><label>Fecha Inicio</label>
		<input id="fechaInicio" value="<?= $concurso['fechaInicio']?>" name="fechaInicio" type="date" class="form-control"  size="90" >
	</div>
	<div class="col-lg-2"><label>Fecha Cierre</label>
		<input id="fechaCierre" value="<?= $concurso['fechaCierre']?>" name="fechaCierre" type="date" class="form-control"  size="90" >
	</div>

</div>
<br><br><br>
<div class="row">
	<div class="col-lg-12">
			<div class="form-group">
				<button type="submit" class="btn btn-success"> Guardar </button>&nbsp;&nbsp;    
			</div>
	</div>
</div>
<br>
</div>
</form>
</div>


 <?=$pie;?>