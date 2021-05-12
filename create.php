<?php require('core/init.php'); ?>
<?php 
//Create Topic object
$topic = new Topic;

if (isset($_POST['do_create'])){
    //Create Validator object
    $validate = new Validator;
    
    //Create data array
    $data = array();
    $data['title'] = $_POST['title'];
    $data['body'] = $_POST['body'];
    $data['category_id'] = $_POST['category_id'];
    $data['captcha'] = $_POST['captcha'];
    $data['user_id'] = getUser()['user_id'];

    //Required Fields
    $field_array = array('title','body','category_id', 'captcha');
    if($validate->isRequired($field_array)){
        if($validate->captchaOK()){
            if($topic->create($data)){
                //Create Topic
                redirect('index.php', 'Post Publicado', 'success');
            } else {
                redirect('topic.php?id='.$topic_id, 'La publicación ha fallado.', 'error');
            }
        }else {
            redirect('create.php', 'Error de Captcha', 'error');
        }
    } else {
        redirect('create.php', 'Completa todos los campos necesarios', 'error');
    }
    
}

//Get Template and Assign Vars
$template = new Template('templates/create.php');

//Assign Vars

//Display template
echo $template;

?>