<?php
include '../practica4.6_Acceso_a_Datos/Configuracion/funciones.php';

if (isset($_POST['submit'])) {
    $resultado = [
        'error' => false,
        'mensaje' => 'El alumno ' . salir($_POST['nombre']) . " " . salir($_POST['apellido_paterno']) . " ha sido registrado"
    ];

    $configuracion = include '../practica4.6_Acceso_a_Datos/Configuracion/configuracion.php';
    try {
        $dsn = 'mysql:host' . $configuracion['base_datos']['host'] . ';dbname=' . $configuracion['base_datos']['name'];
        $conexion = new PDO($dsn, $configuracion['base_datos']['user'], $configuracion['base_datos']['pass'], $configuracion['base_datos']['opciones']);

        $alumno = array(
            "numControl" => $_POST['numControl'],
            "nombre" => $_POST['nombre'],
            "apellido1" => $_POST['apellido_paterno'],
            "apellido2" => $_POST['apellido_materno'],
            "carrera" => $_POST['carrera']
        );

        $consultaSQL = "INSERT INTO alumnos (numero_Control, nombre, apellido_paterno, apellido_materno, carrera, semestre) VALUES(:" . implode(", :", array_keys($alumno)) . ")";
        // $consultaSQL .= "VALUES (:" . implode(", :", array_keys($alumno)) . ")";

        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute($alumno);
    } catch (PDOException $error) {
        $resultado['error'] = true;
        $resultado['mensaje'] = $error->getMessage();
    }
}
?>

<?php include "../practica4.6_Acceso_a_Datos/templates/header.php"; ?>

<?php
if (isset($resultado)) {
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-<?= $resultado['error'] ? 'danger' : 'success' ?>" role="alert">
                <?= $resultado['mensaje'] ?>
            </div>
        </div>
    </div>
</div>
<?php
}
?>

<div class="container">
    <div class="row">
        <div class="col.md-12">
            <h2 class="mt-4">Registrar nuevo alumno</h2>
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

<?php include '../practica4.6_Acceso_a_Datos/templates/footer.php'; ?>