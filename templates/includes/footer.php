        </div></div></div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="block">
                        <h3>Registro</h3>
                        <?php if(isLoggedIn()) : ?>
                            <div class="userdata">Logado como <?php echo getUser()['name']; ?></div>
                            <br />
    <form role="form" method="post" action="logout.php">
                                <input type="submit" name="do_logout" class="btn btn-primary" value="Log Out" />
                            </form>
                        <?php else : ?>
    <form role="form" method="post" action="login.php">
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input name="username" type="text" class="form-control" autocomplete="off" placeholder="Introduce Usuario" />
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input name="password" type="password" class="form-control" autocomplete="off" placeholder="Introduce Contraseña" />
                                </div>
                                <button name="do_login" type="submit" class="btn btn-primary">Login</button> <a class="btn btn-primary" href="register.php">Crear Cuenta</a>
                            </form>
                        <?php endif; ?>
</div>
                    <div class="block">
                        <h3>Categorias</h3>
                        <div class="list-group">
                            <a href="topics.php" class="list-group-item <?php echo is_active(null); ?>">Todas Categorías <span class="badge pull-right"><?php echo totalPostCount() ;?></span></a>
            <?php foreach(getCategories() as $category) : ?>
                <a href="topics.php?category=<?php echo $category['id']; ?>" class="list-group-item <?php echo is_active($category['id']); ?>"><?php echo $category['name']; ?><span class="badge pull-right"><?php echo postCountByCategory($category['id']) ;?></span></a>
            <?php endforeach; ?>
            </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>
  </body>
</html>