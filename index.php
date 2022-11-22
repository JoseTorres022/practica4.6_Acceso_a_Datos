<?php include "../practica4.6_Acceso_a_Datos/templates/header.php" ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mt-4">Nuevo alumno</h2>
            <hr>
            <form action="" method="POST">

                <div class="form-group">
                    <label for="numControl">Num. Control</label>
                    <input type="text" name="numControl" id="numControl" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>

                <div class="form-group">
                    <label for="apellido_paterno">Ape. Paterno</label>
                    <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control">
                </div>

                <div class="form-group">
                    <label for="apellido_materno">Ape. Materno</label>
                    <input type="text" name="apellido_materno" id="apellido_materno" class="form-control">
                </div>

                <div class="form-group">
                    <label for="carrera">Carrera</label>
                    <input type="text" name="carrera" id="carrera" class="form-control">
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Registrar">
                    <a class="btn btn-primary" href="/index.php">Regresar al inicio</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "../practica4.6_Acceso_a_Datos/templates/footer.php" ?>