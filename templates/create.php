<?php include('includes/header.php'); ?>
                        <form role="form" method="post" action="create.php">
                            <div class="form-group">
                                <label>Título del Post</label>
                                <input type="text" class="form-control" name="title" placeholder="Introduce el título del Post" />
                            </div>
                            <div class="form-group">
                                <label>Categoría</label>
                                <select class="form-control" name="category_id">
                <?php foreach(getCategories() as $category) : ?>
                <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                <?php endforeach; ?>
                </select>
                            </div>
                            <div class="form-group">
                                <label>Cuerpo del Mensaje</label>
                                <textarea id="body" rows="10" cols="80" class="form-control" name="body"></textarea>
                                <script>CKEDITOR.replace('body');</script>
                            </div>
                            <div class="form-group">
                                <label for="pwd">¿Eres humano? Introduce caracteres en rojo</label><br/>
                                <img src="captcha.php" alt="captcha-image" class="captcha-image">
                                <input type="text" name="captcha" size="3" maxlength="3" class="form-control"><a class="refresh-captcha" href="">Refrescar Captcha</a>
                            </div>
                            <button type="submit" class="btn btn-primary" name="do_create">Publicar</button>
                        </form>
<script>
var refreshButton = document.querySelector(".refresh-captcha");
refreshButton.onclick = function() {
  document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
}</script>                   
<?php include('includes/footer.php'); ?>