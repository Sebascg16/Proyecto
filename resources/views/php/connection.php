<?php
    $usuario_bd = "root";
    $password_bd = " "; 
    $servidor = "localhost";
    $basededatos = "gastronav";

    // Conexión a la base de datos
    $conexion = mysqli_connect($servidor, $usuario_bd, $password_bd, $basededatos) or die ("Error al conectar con la base de datos");

    // Variables del formulario
    $usuario_formulario = $_POST['usuario'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    // Consulta SQL para insertar datos en la tabla 'registro'
    $sql = "INSERT INTO registro (usuario, apellidos, correo, contraseña) VALUES ('$usuario_formulario', '$apellidos', '$correo', '$contraseña')";

    // Ejecutar la consulta
    $ejecutar = mysqli_query($conexion, $sql);

    // Verificar si la consulta se ejecutó correctamente
    if($ejecutar) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
?>
