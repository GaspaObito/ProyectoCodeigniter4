<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>
            <div>
                <p>
                    <a href="<?php echo base_url(); ?>categorias/nuevo" class="btn btn-info"> Agregar</a>
                    <a href="<?php echo base_url(); ?>categorias/eliminados" class="btn btn-warning"> Eliminados</a>
                </p>
            </div>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    Tabla de Categorias con Nombre
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>                                
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos as $dato) { ?>
                                <tr>
                                    <td> <?php echo $dato['id']; ?> </td>
                                    <td> <?php echo $dato['nombre']; ?> </td>                                    
                                    <td> <a href="<?php echo base_url() . '/categorias/editar/' . $dato['id']; ?> "
                                            class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                    </td>
                                    <td> <a href="#"
                                            data-href="<?php echo base_url() . '/categorias/eliminar/' . $dato['id']; ?>"
                                            data-bs-toggle="modal" data-bs-target="#modal-confirma"
                                            title="Eliminar registro" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="modal-confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar registros</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Desea eliminar este registro?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">No</button>
                    <a class="btn btn-danger btn-ok">Sí</a>
                </div>
            </div>
        </div>
    </div>