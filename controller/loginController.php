<?php
require('../model/usersModel.php');
if(isset($_POST['action']) && $_POST['action']=="login"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    // after some validations

    $model = new usersModel();
    $model->username = $username;
    $model->password = $password;
    $result = $model->auth();
    $rows = mysqli_num_rows($result);
    
    if($rows > 0){
        foreach($result as $r){
            if($r['type'] == 'admin'){
                echo "1";
            }
            else{
                echo "2";
            }   
        }
    }
    else{
        echo "0";
    }
}


?>
