<?php
//Creamos la conexion a la base de datos con los siguientes datos.
//Usaremos el PDO(PHP Data Objects). PAra todo esto necesitamos un construnctor
//Se necesita pasar el host, usuario y contraseña y opciones de conexion.
return [
    //creamos un array donde se definen los parametros y opciones que se usan para conectarnros a la base de adtos.
    'base_datos' => [
        'host' => 'localhost',
        'user' => 'josetorresxampp',
        'pass' => '123456789',
        'name' => 'universidad',
        'opciones' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
?>