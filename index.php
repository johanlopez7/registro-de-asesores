<?php include("conexion/db.php") ?>

<?php include("vista/header.php")?>

<div class="container p-4">

    <div class="row">
     
        <div class="col-md-4">

            <div class="card card-body">
                <form action="modelo/login.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="user" class="form-control"
                        placeholder="user" autofocus>               
                    </div>
                </form>
            </div>
        <div class="card card-body">
                <form.action="">
                    <div class="form-group">
                        <input type="password" name="password" class="form-control"
                        placeholder="password" autofocus>               
                    </div>     
                    <br>           
                    <input type="submit" class="btn btn-success btn-block"
                    name="login" value="login"> 
                    </br>                   
                </form>
            </div>


        </div>

        <div class="col-md-8">
        
        </div>
    </div>
    
</div>

<?php include("vista/footer.php")?>