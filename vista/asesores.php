<?php include("header.php")?>

<?php include("../Conexion/db.php")?>


<div class="container pb-3">

    <div class="row pt-3"> 

        <div class="col-8 ">
            <h4>Lista asesores</h4>
            <br>
            <div class="contenedor-tabla-users overflow-auto">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th>nombre</th>
                        <th>cedula</th>
                        <th>telefono</th>
                        <th>fecha nacimiento</th>
                        <th>genero</th>
                        <th>cliente</th>
                        <th>sede</th>
                        <th>usuario que registra</th>
                        <th>edad</th>
                        <th>actions</th>
                        <tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM adviser1";
                        $result_adviser = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_adviser)){ ?>
                        <tr>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['cedula'] ?></td>
                            <td><?php echo $row['telefono'] ?></td>
                            <td><?php echo $row['fecha_nacimiento'] ?></td>
                            <td><?php echo $row['genero'] ?></td>
                            <td><?php echo $row['cliente'] ?></td>
                            <td><?php echo $row['sede'] ?></td>
                            <td><?php echo $row['id_user'] ?></td>
                            <td><?php echo $row['edad'] ?></td>
                            <td>
                                <a href="../Vista/actualizar.php?id=<?php echo $row['id']?>" class="btn btn-warning">Editar</a>
                                <a href="../Controlador/Delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-4">

            <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            <?php session_unset(); }?>
                                         
            <h4>Crear asesores</h4>
            <form action="../Controlador/Registro.php" method="POST"> 

                <div class="form-group">
                    <input type="text" name="nombre" class="form-control"
                    placeholder="nombre completo" autofocus autocomplete="off" autocomplete="off">
                </div>  

                <br>
                
                <div class="form-group">
                    <input type="text" name="cedula" class="form-control"
                    placeholder="documento de identidad" autofocus autocomplete="off">
                </div>

                <br>

                <div class="form-group">
                    <input type="text" name="telefono" class="form-control"
                    placeholder="numero de contacto" autofocus autocomplete="off">
                </div>

                <br>

                <div class="form-group">
                    <label>Fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control"
                    placeholder="fecha de naciminento" autofocus autocomplete="off">
                </div>

                <br>

                <div class="form-group">
                    <input type="text" name="cliente" class="form-control"
                    placeholder="cliente" autofocus autocomplete="off">
                </div>

                <br>

                <div class="form-group">
                    <input type="text" name="id_user" class="form-control"
                    placeholder="usuario que registra" autofocus autocomplete="off">
                </div>

                <br>

                <div class="form-group">
                    <fieldset>
                        <legend>sede donde trabaja</legend><br>
                        <input type="radio" name="sede" value="Puerto-seco"><label> Puerto seco</label>
                        <input type="radio" name="sede" value="Ruta-N"><label> Ruta N</label>
                        <input type="radio" name="sede" value="Buro"> <label>Buro</label>
                    </fieldset>
                </div>
                
                <br>

                <div class="form-group">
                    <fieldset>
                    <legend>genero</legend>
                    <input type="radio" name="genero" value="M"> <label>masculino</label>
                    <input type="radio" name="genero" value="F"> <label>femenino</label>
                    </fieldset>
                </div>

                <br>
                
                <button type="submit" class="btn btn-success btn-block" name="guardar">Crear</button>
            </form>
        </div>
        
    </div>
</div>

<?php include("footer.php")?>
