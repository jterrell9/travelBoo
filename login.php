<?php
include 'connect.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myemail = $_POST['email'];
    $mypassword = $_POST['password'];

    $sql = "SELECT userId FROM users WHERE email = '$myemail' and password = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myemail and $mypassword, table row must be 1 row

    if ($count == 1) {
        header("location: index.html");
    }else {
        header('Location: loginFail.html');
    }
}
?>