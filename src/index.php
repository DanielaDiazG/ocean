<?php
    include("BD/db.php")
?>

<?php
    include("includes/header.php")
?>
    
<div class="container p-4">
    <div class="roow">
        <div class="col-mod-4">

            <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']  ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>

            <div class="card card-body">
                <form action="save_alumno.php" method="POST">
                    <div class="form-group">
                        <input 
                            type="number" 
                            name="identificacion" 
                            class="form-control" 
                            placeholder="Número de Identificación" 
                            style = "resize:none;" 
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            type="text"
                            name="nombres" 
                            class="form-control" 
                            placeholder="Nombre completo" 
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            type="text"
                            name="apellidos" 
                            class="form-control" 
                            placeholder="Apellidos" 
                            style = "resize:none;"
                            required>
                    </div>
                    <div class="form-group">
                        <input 
                            type="number" 
                            name="edad" 
                            class="form-control" 
                            placeholder="Edad" 
                            style = "resize:none;" 
                            required>
                    </div>
                    
                    <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar"></input>
                </form>
            </div>
        </div>
        <div class="col-mod-4">
        
        </div>
    </div>
</div>

<?php
    include("includes/footer.php");
?>
   