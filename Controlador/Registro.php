<?php 

include("../Conexion/db.php");

if (isset($_POST['guardar'])){
    
    
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];
    $cliente = $_POST['cliente'];
    $sede = $_POST['sede'];
    $user = $_POST['id_user'];
    
       $tiempo = strtotime($fecha); 
       $ahora = time(); 
       $edad = ($ahora-$tiempo)/(60*60*24*365.25); 
       $edad = floor($edad); 

    $query = "INSERT INTO adviser1 (nombre, cedula, telefono, fecha_nacimiento, genero, cliente, sede, id_user, edad)
    VALUES ('$nombre', '$cedula', '$telefono', '$fecha', '$genero', '$cliente', '$sede', '$user', '$edad')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("no guardado");
    }
    
    $_SESSION['message'] = 'Asesor registrado exitosamente';
    $_SESSION['message_type'] = 'success';

    header("Location: ../Vista/asesores.php");
    


}

?>