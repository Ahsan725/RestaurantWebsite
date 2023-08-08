<?php 
    if(isset($_POST("submit"))){
        $fullName = $_POST["fullName"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["repeat_password"];
        
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $errors = array();
        
        
        if(empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)){
          array_push($errors, "All fields are required");
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            array_push($errors, "Invalid email");
        }

        if(strlen($password)<8){
            array_push($errors, "Password must be at least 8 characters");
        }

        if($password != $passwordRepeat){
            array_push($errors, "Passwords do not match");
        }

        if(count($errors)> 0){
            foreach($errors as $error){
                echo $error;
            }
        }else{
            
        }
    }
?>