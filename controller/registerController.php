<?php
//user wants to register
// request from the client
//POST = name, username,password
// if the action = 'register'
require('../model/usersModel.php');
if(isset($_POST['action']) && $_POST['action'] =='register'){
    $name = $_POST['txtname'];
    $type = $_POST['txttype'];
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];
    $conpass = $_POST['txtconfirmpassword'];

    if(empty($name) || empty($type) || empty($username) || empty($password) || empty($conpass)){
        echo "Input all the fields!";
    }
    elseif ($password != $conpass) {
        echo "Password and confirm pass didn't match";
    }
    //validations here
    //if data passed the validation
    else{
    $model = new UsersModel();
    $model->name = $name;
    $model->type = $type;
    $model->username=$username;
    $model->password=$password;
    $result = $model->addUser();
    if($result){
        echo "Registration Successful!";
    }
    }
    

}

?>