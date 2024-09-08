<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>
            <div>
                <p>
                    <a href="<?php echo base_url(); ?>categorias" class="btn btn-warning"> Categorias</a </p>

            </div>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    DataTables is a third party plugin that is used to generate the demo table below. For more
                    information about DataTables, please visit the
                    <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                    .
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
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($datos as $dato) { ?>

                                <tr>
                                    <td> <?php echo $dato['id']; ?> </td>
                                    <td> <?php echo $dato['nombre']; ?> </td>                                    
                                    <td> <a href="#"
                                            data-href="<?php echo base_url() . '/categorias/reingresar/' . $dato['id']; ?>"
                                            data-bs-toggle="modal" data-bs-target="#modal-confirma"
                                            title="Reingresar registro" class="btn btn-primary">
                                            <i class="fas fa-arrow-alt-circle-up"></i>
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
                    <h5 class="modal-title" id="exampleModalLabel">Reingresar registros</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Desea reingresar este registro?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">No</button>
                    <a class="btn btn-primary btn-ok">Sí</a>
                </div>
            </div>
        </div>
    </div>