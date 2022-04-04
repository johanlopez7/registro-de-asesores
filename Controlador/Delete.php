<?php

    include("../Conexion/db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM adviser1 WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("No es posible eliminar");
        }
        $_SESSION['message'] = 'Asesor eliminado exitosamente';
        $_SESSION['message_type'] = 'danger';
        header('Location: ../Vista/asesores.php');
    }

?>