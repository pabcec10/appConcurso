<?=$cabecera?>
<br/>
<a class="btn btn-success" href="<?=base_url('alta_Jurado') ?>">Alta Jurado</a>
<br/>
<br/>

        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>IdUsuario</th>
                    <th>Nombre</th>
                    <th>Documento</th>
                    <th>Celular</th>
                    <th>EMail</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($jurados as $jurados):?>

                <tr>
                    <th>#</th>
                    <td><?=$jurados['idJurado'];?></td>
                    <td><?=$jurados['nombre'];?></td>
                    <td><?=$jurados['documento'];?></td>
                    <td><?=$jurados['celular'];?></td>
                    <td><?=$jurados['email'];?></td>
                    <td>
                        <a href="<?=base_url('editarJurado/'.$jurados['idJurado']);?>" class="btn btn-info" type="button">Editar</a>
                        <!-- Agregar confirmación popup -->
                        <a href="<?=base_url('borrarJurado/'.$jurados['idJurado']);?>" class="btn btn-danger" type="button">Borrar</a>                    
                    </td>
                </tr>

            <?php endforeach; ?>

            </tbody>
        </table>
<?$pie?>