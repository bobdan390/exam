
Estas en : <a href="<?php echo base_url(); ?>consultas">Inicio</a> > <a href="<?php echo base_url(); ?>consultas">Empresas</a>
<br>
<hr>
<h3>EMPRESAS</h3>
<div>
    <span class="glyphicon glyphicon-search" ></span> 
    <input id="buscar_" placeholder="Nombre Empresa"  onKeyPress="enter(event)"></input> Presione Enter</div>
<br><br>
<div class="table-responsive">
<table class="table table-hover">
    <tr>
        <th> <a href="<?php echo $mode ?>">Nombre Empresa <span class="glyphicon glyphicon<?php echo $gly; ?>" aria-hidden="true"></span></a> </th>
        <th>Tipologia</th>
        <th>Pais</th>
        <th>Email/Usuario</th>
        <th>Acciones</th>
    </tr>

    
        <?php
            foreach ($user_entrys as $fila) {
        ?><tr>
            <td><?=$fila->nombre?></td>
            <td><?=$fila->tipologia?></td>
            <td><?=$fila->pais?></td>
            <td><?=$fila->email?></td>
            <td><a href="<?php echo base_url(); ?>editar/edit/<?php  echo $fila->id ?>"> Editar </a></td>
            </tr>
        <?php
            }
        ?> 
    
</table>
</div>
<?php echo $this->pagination->create_links() ?>
<br>
<hr>

<script type="text/javascript">

function enter(e){
        var code = (e.keyCode ? e.keyCode : e.which);
        if(code == 13) { //Enter keycode
             window.location = "<?php echo base_url(); ?>consultas/search/" + $("#buscar_").val();
        }    
}


</script>