<?php
    include 'connect.php';
    if(validForm()){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');";
        mysqli_query($db,$sql);

            header('Location: index.html');
    }else{
        header('location: invalidForm.html');
    }
    function validForm(){
        $allFieldsUsed = isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword']);
        $passwordsMatch = $_POST['password'] == $_POST['confirmPassword'];
        if($allFieldsUsed && $passwordsMatch){
            return true;
        }
        return false;
    }
?>