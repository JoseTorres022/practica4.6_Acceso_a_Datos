<?php
$configuracion = include '/Configuracion/configuracion.php';
try {
    $conexion = new PDO(
        'mysql:host=' . $configuracion['base_datos']['host'],
        $configuracion['base_datos']['user'],
        $configuracion['base_datos']['pass'],
        $configuracion['base_datos']['opciones']
    );

    $sql=file_get_contents("data/migracion.sql");
    $conexion->exec($sql);

    echo "La base de datos y la tabla de alumnos se han creando con exito";

} catch (PDOException $error) {
    echo $error->getMessage();
}
?>