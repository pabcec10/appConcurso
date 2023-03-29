<?=$cabecera?>
<br/>
<a class="btn btn-success" href="<?=base_url('alta_concursoauxiliar') ?>">Alta Concurso Auxiliar</a>
<br/>

        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <!-- <th>IdConcurso</th> -->
                    <th>Resolución de Convocatoria</th>
                    <th>Cargo</th>
                    <th>Asignatura</th>
                    <th>Expediente</th>
                    <th>Fecha Inicio Inscripciones</th>
                    <th>Fecha Cierre Inscripciones</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($concursos as $concurso):?>

                <tr>
                    <th>#</th>
                    
                    <td><?=$concurso['resolucion'];?></td>
                    <td><?=$concurso['cargo'];?></td>
                    <td><?=$concurso['descripcionCargo'];?></td>
                    <td><?=$concurso['expediente'];?></td>
                    <?=list($ano,$mes,$dia)=explode("-",$concurso['fechaInicio']);
                    $fechaInicio="$dia/$mes/$ano";?>
                    <td><?=$fechaInicio?></td>
                    <?=list($ano,$mes,$dia)=explode("-",$concurso['fechaCierre']);
                    $fechaCierre="$dia/$mes/$ano";?>
                    <td><?=$fechaCierre?></td>
                    <td>
                        <a href="<?=base_url('editarConcurso/'.$concurso['idConcurso']);?>" class="btn btn-info" type="button">Editar</a>
                        <!-- Agregar confirmación popup -->
                        <a href="<?=base_url('borrarConcurso/'.$concurso['idConcurso']);?>" class="btn btn-danger" type="button">Borrar</a>

                        <a href="<?=base_url('juradoConcurso/'.$concurso['idConcurso']);?>" class="btn btn-success" type="button">Asignar Jurado</a>                    
                    </td>
                </tr>

            <?php endforeach; ?>

            </tbody>
        </table>
<?$pie?>