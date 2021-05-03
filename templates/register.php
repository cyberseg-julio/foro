<?php include('includes/header.php'); ?>

<form role="form" enctype="multipart/form-data" method="post" action="register.php">
    <div class="form-group">
        <label>Name*</label><input type="text" class="form-control" name="name" autocomplete="off" placeholder="Enter your Name" />
    </div>
    <div class="form-group">
        <label>Email Address*</label><input type="email" class="form-control" name="email" autocomplete="off" placeholder="Enter your Email Address" />    
    </div>
    <div class="form-group">
        <label>Choose Username*</label><input type="text" class="form-control" name="username" autocomplete="off" placeholder="Create a Username" />
    </div>
    <div class="form-group">
        <label>Password*</label><input type="password" class="form-control" name="password" autocomplete="off" placeholder="Enter a Password" />
    </div>
    <div class="form-group">
        <label>Confirm Password*</label><input type="password" class="form-control" name="password2" autocomplete="off" placeholder="Confirm Password" />
    </div>
    <div class="form-group">
        <label>Upload Avatar</label><input type="file" name="avatar"/>
    </div>
    <div class="form-group">
        <label>About Myself</label><textarea id="about" rows="6" cols="80" class="form-control" name="about" autocomplete="off" placeholder="Tell us something about yourself (Optional)"></textarea>
    </div>   
    <input name="register" type="submit" class="btn btn-default" value="Register" />
</form>

<?php include('includes/footer.php'); ?>