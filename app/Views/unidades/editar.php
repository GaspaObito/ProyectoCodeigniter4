<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"> <?php echo $titulo; ?> </h4>
            <form method="POST" action="<?php echo base_url(); ?>/unidades/actualizar" autocomplete="off">
                <input type="hidden" value="<?php echo $datos['id']; ?>" name="id" />
                <div class="form-group">
                    <div class="row pb-2">
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text"
                                value="<?php echo $datos['nombre']; ?>" autofocus require />
                        </div>

                        <div class="col-12 col-sm-6">
                            <label>Nombre Corto</label>
                            <input class="form-control" id="nombre_corto" name="nombre_corto" type="text"
                                value="<?php echo $datos['nombre_corto']; ?>" require />
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url(); ?>unidades" class="btn btn-primary">Regresar</a>
                <button type="submit" class="btn btn-success">Editar</button>
            </form>
        </div>
    </main>