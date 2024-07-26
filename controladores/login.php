<?php
session_start();
if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['clave'];

    $conexion = mysqli_connect("localhost", "root", "", "sipsg");

    // Evita la inyección SQL usando consultas preparadas
    $consulta = "SELECT * FROM usuarios WHERE correo_usuarios=? AND contraseña_usuarios=?";
    $stmt = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $contraseña);
    mysqli_stmt_execute($stmt);

    $resultado = mysqli_stmt_get_result($stmt);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $filas = mysqli_fetch_array($resultado);
        switch ($filas['usuario_rol']) {
            case 1:
                header("location: ../index");
                break;
            case 2:
                header("location: ../index");
                break;
            case 3:
                header("location: ../indexl");
                break;
        
                case 4:
                    echo "<script>
            alert('No tienes un rol asignado');
            location.href='../login.php';
            </script>
        " ;  ;
                    break;
            default:
                echo "ERROR de autenticación";
        }
    } else 
        {
            echo "<script>
            alert('No estas registrado ');
            location.href='../login.php';
            </script>
        " ;   };

    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
};
?>
