<?php require('core/init.php'); ?>
<?php 
//Create Topic Object
$topic = new Topic;
//Create User Object
$user = new User;
//Create validate object
$validate = new Validator;

if(isset($_POST['register'])){
    $data = array();
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['username'] = $_POST['username'];
    $data['password'] = $_POST['password'];
    $data['password2'] = $_POST['password2'];
    $data['about'] = $_POST['about'];
    $data['last_activity'] = date("Y-m-d H:i:s");
    
    //Required fields
    $field_array = array('name','email','username','password','password2');
    
    if ($validate->isRequired($field_array)){
        if($validate->isValidEmail($data['email'])){
            if($validate->passwordsMatch($data['password'],$data['password2'])){
                //Upload Avatar image
                if ($user->uploadAvatar()){
                    $data['avatar'] = $_FILES["avatar"]["name"];
                } else {
                    $data['avatar'] = 'indice.png';
                }

                //Register User
                if($user->register($data)){
                    redirect('index.php', 'Registro Completado','success');
                } else {
                    redirect('register.php', 'Fallo en el Registro','error');
                }
            } else {
                redirect('register.php',"Las Contraseñas no coinciden.",'error');
            }
        } else {
            redirect('register.php',"Usa un email válido.",'error');
        }
    } else {
        redirect('register.php',"Complete todos los campos necesarios",'error');
    }
    

}

//Get Template and Assign Vars
$template = new Template('templates/register.php');

//Assign Vars

//Display template
echo $template;

?>