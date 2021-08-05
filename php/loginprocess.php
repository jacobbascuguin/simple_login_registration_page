<?php
require 'config.php';

$errors = array();


if (isset($_POST['emaillogin'])){
        
    $email = stripslashes($_REQUEST['emaillogin']); // removes backslashes
    $email = mysqli_real_escape_string($con,$email); //escapes special characters in a string


    $password = stripslashes($_REQUEST['passwordlogin']);
    $password = mysqli_real_escape_string($con,$password);
    
   $password = md5($password);
//Checking is user existing in the database or not
    $query = "SELECT * FROM `register_accounts` WHERE email='$email' and password='$password'";

    $result = mysqli_query($con,$query) or die(mysqli_error($con));


    $rows = mysqli_num_rows($result);
    if($rows==1){
        $_SESSION['email'] = $email;
        $_SESSION['firstname'] = $firstname;
        // $_SESSION['logedin'] = true;
        echo "
        <script>
            window.location.replace('../home.php')
        </script>";
    } else {
        echo "
        <script>
            alert('Wrong email or password');
            window.location.replace('../index.php')
        </script>";
    }
}


?>