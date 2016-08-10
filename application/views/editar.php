<div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
<form action="<?=base_url()?>Administracion/edit_equipo/<?=$id?>" method="POST">
    <p>
    <h3>Nombre de equipo:</h3><BR>
    <input type="text" name="nombre_equipo" class="form-control" value="<?=$Equipo_contrincante?>"><br>
        <input type="submit" value="Editar" class="btn btn-primary">
    </p>
</form>
                </div>
            </div>
</div>
