<?php

include ("../Conexion/db.php");

       
if (isset($_POST['actualizar'])){

    $id = $_POST['idf'];
    $nombre = $_POST['nombref'];
    $cedula = $_POST['cedulaf'];
    $telefono = $_POST['telefonof'];
    $fecha =  $_POST['fecha_nacimientof'];
    $cliente = $_POST['clientef'];
    $edad = $_POST['edadf'];
    $genero = $_POST['generof'];
    $sede = $_POST['sedef'];

    $query = "UPDATE adviser1 SET nombre = '$nombre', cedula = '$cedula', telefono = '$telefono', fecha_nacimiento = '$fecha', cliente = '$cliente', edad = '$edad', genero = '$genero',
    sede = '$sede' WHERE id = '$id'";
    
   //$result = mysqli_query($conn, $query);

   if ($conn->query($query) === TRUE) {
      echo "Actualizado exitosamente";
  } else {
    echo "Error en actualizacion " . $conn->error;
  }
  $_SESSION['message'] = 'Asesor editado exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: ../Vista/asesores.php');
}

?>