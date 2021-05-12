<?php include('includes/header.php'); ?>

<form role="form" enctype="multipart/form-data" method="post" action="register.php">
    <div class="form-group">
        <label>Nombre*</label><input type="text" class="form-control" name="name" autocomplete="off" placeholder="Introduce Tu Nombre" />
    </div>
    <div class="form-group">
        <label>Email*</label><input type="email" class="form-control" name="email" autocomplete="off" placeholder="Introduce Tu Email" />    
    </div>
    <div class="form-group">
        <label>Usuario del foro*</label><input type="text" class="form-control" name="username" autocomplete="off" placeholder="Crea un usuario para el foro" />
    </div>
    <div class="form-group">
        <label>Contraseña*</label><input type="password" class="form-control" name="password" autocomplete="off" placeholder="Introduce Tu Contraseña" />
    </div>
    <div class="form-group">
        <label>Confirma Contraseña*</label><input type="password" class="form-control" name="password2" autocomplete="off" placeholder="Confirma Contraseña" />
    </div>
    <div class="form-group">
        <label>Foto perfil</label><input type="file" name="avatar"/>
    </div>
    <div class="form-group">
        <label>Sobre tí</label><textarea id="about" rows="6" cols="80" class="form-control" name="about" autocomplete="off" placeholder="Cuéntate algo (Opcional)"></textarea>
    </div>   
    <input name="register" type="submit" class="btn btn-primary" value="Register" />
</form>

<?php include('includes/footer.php'); ?>