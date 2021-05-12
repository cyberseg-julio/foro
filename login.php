<?php include('core/init.php'); ?>
<?php
    if(isset($_POST['do_login'])){
        //get username and password
        $username = $_POST['username'];
        $username = trim($username);
        $username = stripslashes($username);
        $username = htmlspecialchars($username);
        $password = $_POST['password'];
        $password = trim($password);
        $password = stripslashes($password);
        $password = htmlspecialchars($password);
        //Create user object
        $user = new User;
        
        if($user->login($username, $password)){
            redirect('index.php','Bienvenido.', 'success');
        } else {
            redirect('index.php','Login Incorrecto', 'error');
        }
    } else {
        redirect('index.php');
    }

?>