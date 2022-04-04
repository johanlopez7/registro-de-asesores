<?php include("Vista/header.php")?>

<div class="d-flex justify-content-center align-content-center w-100 h-100">

    
            <form action="Controlador/login.php" method="POST">
                <div class="card card-body">

                    <div class="form-group">
                        <input type="text" name="user" class="form-control"
                        placeholder="Ingresa tu usuario" autofocus autocomplete="off">              
                    </div>
                
                    <br>
                    
                    <div class="form-group">
                        <input type="password" name="password" class="form-control"
                        placeholder="Ingresa tu contraseña" autofocus autocomplete="off">               
                    </div>     

                    <br>  
                                
                    <button type="submit" class="btn btn-success" name="login"> Ingresar </button>
                    
                </div>
            </form>
        
    
</div>

<?php include("Vista/footer.php")?>