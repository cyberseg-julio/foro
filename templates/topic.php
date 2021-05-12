<?php include('includes/header.php'); ?>

<ul id="topics">
    <li id="main-topic" class="topic topic">
        <div class="row">
            <div class="col-md-2">
                <div class="user-info">
                    <img class="avatar pull-left" src="images/avatars/<?php echo $topic['avatar']; ?>" />
                    <ul>
                        <li><strong><?php echo $topic['username']; ?></strong></li>
                        <li><?php echo userPostCount($topic['user_id']); ?> Posts</li>
                        <li><a href="<?php echo BASE_URI; ?>topics.php?user=<?php echo $topic['user_id']; ?>">Perfil</a>  </li>
                    </ul>
                </div>
            </div>
        <div class="col-md-10">
            <div class="topic-content pull-right">
                <?php echo $topic['body']; ?>
            </div>
        </div>
    </li>
    <?php foreach($replies as $reply) : ?>
    <li class="topic topic">
        <div class="row">
            <div class="col-md-2">
                <div class="user-info">
                    <img class="avatar pull-left" src="images/avatars/<?php echo $reply['avatar']; ?>" />
                    <ul>
                        <li><strong><?php echo $reply['username']; ?></strong></li>
                        <li><?php echo userPostCount($reply['user_id']); ?> Posts</li>
                        <li><a href="<?php echo BASE_URI; ?>topics.php?user=<?php echo $reply['user_id']; ?>">Perfil</a>  </li>
                    </ul>
                </div>
            </div>
        <div class="col-md-10">
            <div class="topic-content pull-right">
                <?php echo $reply['body']; ?>
            </div>
        </div>
    </li>
    <?php endforeach; ?>
</ul>
<h3>Publicar Respuesta</h3>
<?php if(isLoggedIn()) : ?>
    <form role="form" method="post" action="topic.php?id=<?php echo $topic['id']?>">
        <div class="form-group">
            <textarea id="reply" rows="10" cols="80" class="form-control" name="body"></textarea>
            <script>CKEDITOR.replace('reply');</script>
        </div>
        <div class="form-group">
            <label for="pwd">¿Eres humano? Introduce caracteres en rojo</label><br/>
            <img src="captcha.php" alt="captcha-image" class="captcha-image">
            <input type="text" name="captcha" size="3" maxlength="3" class="form-control"><a class="refresh-captcha" href="">Refrescar Captcha</a>
        </div>
        <button name="do_reply" type="submit" class="btn btn-primary">Responder</button>
    </form>
<?php else : ?>
    <p>Debes logarte para Responder</p>
<?php endif; ?>
<script>
var refreshButton = document.querySelector(".refresh-captcha");
refreshButton.onclick = function() {
  document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
}</script>
<?php include('includes/footer.php'); ?>
