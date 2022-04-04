<?php

    include("../Conexion/db.php");
    
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $id_update = $id;
        $query = "SELECT * FROM adviser1 WHERE id = $id";
        $result = mysqli_query($conn, $query);
        
        $foundUser = mysqli_fetch_array($result);
            
        if (mysqli_num_rows($result) > 0) {
            header("Location: ../Vista/actualizar.php");
        }
    
    }
   
    
?>