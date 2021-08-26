<?php include('conection.php') ?>

<?php include('includes/header.php') ?>

<main class="container p-5">
    <div class="row">

        <div class="col-4">
            <div class="card card-body">
                <form action="" method="POST">

                    <div class="form-group">
                        <input 
                            type="text" 
                            name="title" 
                            class="form-control" 
                            placeholder="Nombre" 
                            autofocus
                        >
                    </div>

                    <div class="form-group">
                        <input 
                            type="text" 
                            name="title" 
                            class="form-control" 
                            placeholder="Apellido" 
                            autofocus
                        >
                    </div>

                    <div class="form-group">
                        <input 
                            type="text" 
                            name="title" 
                            class="form-control" 
                            placeholder="Puesta" 
                            autofocus
                        >
                    </div>

                    <div class="form-group">
                        <input
                            type="text" 
                            name="title"
                            class="form-control"
                            placeholder="Área" 
                            autofocus
                        >
                    </div>
                    
                    <input 
                        type="submit" 
                        name="save_task" 
                        class="btn btn-success btn-block" 
                        value="Guardar"
                    >
                </form>
            </div>
        </div>

        <div class="col-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Puesto</th>
                        <th>Área</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Axel</td>
                        <td>Castillo</td>
                        <td>Desarrollador</td>
                        <td>Tecnología</td>
                        <td>
                            <button class="btn btn-success">Editar</button>
                            <button class="btn btn-danger">Borrar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>María</td>
                        <td>Sosa</td>
                        <td>Secretaria</td>
                        <td>Recepción</td>
                        <td>
                            <button class="btn btn-success">Editar</button>
                            <button class="btn btn-danger">Borrar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</main>

<?php include('includes/header.php') ?>