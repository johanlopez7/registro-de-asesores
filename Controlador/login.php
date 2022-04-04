<?php

include("../Conexion/db.php");


if(isset($_POST['login'])) {
    
    $user = $_POST['user'];
    $password = $_POST['password'];

    $query1 = "SELECT * FROM usuarios WHERE user = '$user' AND password = '$password' AND status = 'A'";
    $result1 = mysqli_query($conn, $query1);

    /* determinar el número de filas del resultado */
    $usuariosEncontrados = $result1 -> num_rows;

    if ($usuariosEncontrados > 0) {

        header('Location: ../Vista/asesores.php');

    } else {
        header('Location: ../Vista/errorLogin.php');
    }


}

include("../Controlador/footer.php")

?>
