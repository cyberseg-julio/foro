<?php include('includes/header.php'); ?>

                        <form role="form" method="post" action="create.php">
                            <div class="form-group">
                                <label>Topic Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Post Title" />
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category_id">
                                    <?php foreach(getCategories() as $category) : ?>
                                        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Topic Title</label>
                                <textarea id="body" rows="10" cols="80" class="form-control" name="body"></textarea>
                                <script>CKEDITOR.replace('body');</script>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-5 pull-left"><label for="pwd">Introduce caracteres en rojo</label>
                                <img src="captcha.php" alt="captcha-image" class="captcha-image"></div>
                                <div class="col-sm-7 pull-right"><input type="text" name="captcha" size="3" maxlength="3" class="form-control"><a class="refresh-captcha" href="">Refrescar Captcha</a></div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="do_create">Submit</button>
                            <?php 
                                if(isset($_POST["captcha"]))  
                                if($_SESSION["captcha"]==$_POST["captcha"])  
                                {
                                    echo '<div class="alert alert-success">CAPTCHA OK!!</div>';  
                                }  
                                else  
                                {  
                                    echo '<div class="alert alert-danger">CAPTCHA KO!!</div>';  
                                }  
                            ?>
                        </form>
<script>
var refreshButton = document.querySelector(".refresh-captcha");
refreshButton.onclick = function() {
  document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
}</script>                   
<?php include('includes/footer.php'); ?>