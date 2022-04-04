<?php include("header.php")?>
<?php include("../Conexion/db.php")?>
<body>

<?php
$id_asesor = $_GET['id'];
?>

</body>

<div class="container">

    <div class="row pt-3">

        <div class="col-5">


                                         
            <h4>Formulario ACTUALIZACION</h4>
            <form action="../Controlador/Update.php" method="POST"> 
                <input type="hidden" name="idf" value="<?php echo $id_asesor; ?>">

                <?php
                    $query = "SELECT * FROM adviser1 WHERE id = $id_asesor";
                    $result_adviser = mysqli_query($conn, $query);
                    $genero = "0";
                    
                    while ( $row = mysqli_fetch_array($result_adviser)){
                        if ($row ['genero'] == "f" || $row['genero'] == "F")
                            $genero = "femenino";
                            
                        else
                            $genero = "masculino";
                ?>

                <div class="form-group">
                    <input type="text" name="nombref" class="form-control"
                    placeholder="nombre completo" autofocus autocomplete="off" value=<?php echo $row['nombre'];?>>
                </div>  

                <br>

                <div class="form-group">
                    <input type="text" name="cedulaf" class="form-control"
                    placeholder="documento de identidad" autofocus autocomplete="off" value=<?php echo $row['cedula'];?>>
                </div>

                <br>

                <div class="form-group">
                    <input type="text" name="telefonof" class="form-control"
                    placeholder="numero de contacto" autofocus autocomplete="off" value=<?php echo $row['telefono'];?>>
                </div>

                <br>

                <div class="form-group">
                    <label>Fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimientof" class="form-control"
                    placeholder="fecha de naciminento" autofocus autocomplete="off" value=<?php echo $row['fecha_nacimiento'];?>>
                </div>

                <br>

                <div class="form-group">
                    <input type="text" name="clientef" class="form-control"
                    placeholder="cliente" autofocus autocomplete="off" value=<?php echo $row['cliente'];?>>
                </div>

                <br>

                <div class="form-group">
                    <input type="text" name="edadf" class="form-control"
                    placeholder="edad" autofocus autocomplete="off" value=<?php echo $row['edad'];?>>
                </div>

                <br>
                
                <div class="form-group">
                <input type="text" name="generof" class="form-control"
                    placeholder="edad" autofocus autocomplete="off" value=<?php echo $genero;?>>
                </div>

                <br>
                
                <div class="form-group">
                <input type="text" name="sedef" class="form-control"
                    placeholder="edad" autofocus autocomplete="off" value=<?php echo $row['sede'];}?>>
                </div>

                    <br>

                <button type="submit" class="btn btn-success btn-block" name="actualizar" value="actualizar">Actualizar</button>

                  <br>
                  
            </form>
        </div>
    </div>
</div>