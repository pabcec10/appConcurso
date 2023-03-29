<?=$cabecera?>

<div class="container">
<form method="post" action="<?=site_url('/actualizarJurado') ?>" >

<input type="hidden" name="idJurado" value="<?= $jurado['idJurado']?>">

<div class="row">
  <div class="col-lg-12">
    <div class="form-group">
      <button type="submit" class="btn-info btn"> Guardar </button>&nbsp;&nbsp;      
    </div>
  </div>
</div>
<br>
  <div class="panel panel-default">
    <div class="panel-body">
      <font size="4">EDITAR JURADO</font>
    </div>
  </div>
<br>

<br>
<div class="row">
 	<div class="col-lg-4"><label>Nombre y Apellido</label>
    	<input id="nombre" value="<?= $jurado['nombre']?>" name="nombre" type="text" class="form-control" size="90" required>
  </div>
 	<div class="col-lg-3"><label>Nº Documento</label>
    	<input id="documento" value="<?= $jurado['documento']?>" name="documento" type="number" class="form-control" size="90" required>
  </div>
</div>
<br>
<div class="row">

  <div class="col-lg-3"><label>Celular</label>
    	<input id="celular" value="<?= $jurado['celular']?>" name="celular" type="text" class="form-control" size="90">
  </div>
  <div class="col-lg-6"><label>Email</label>
    	<input id="email" value="<?= $jurado['email']?>" name="email" type="text" class="form-control" size="90">
  </div>
</div>
<hr>
<br>
</form>
</div>

<?=$pie?>