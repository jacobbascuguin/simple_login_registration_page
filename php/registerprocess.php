<?php
    require 'config.php';
    if (isset($_POST['reg_user'])) {// save records into the database
        $fname = $_POST['fnamereg'];
        $lname = $_POST['lnamereg'];
        $email = $_POST['emaillogin'];
        $phone = $_POST['phonenumbreg'];
        $password = $_POST['passwordlogin'];
        $password = md5($password);

        // insert into table
        $sql = "INSERT INTO register_accounts (firstname, lastname, email, number, password) VALUES ('$fname', '$lname', '$email', '$phone', '$password') ";
        //$result = $con->query($sql);
        $result=mysqli_query($con,$sql);
        
        // header("Location: ../registersuccess.php");
        if($result) {
            echo "
            <script>
                alert('You successfuly created your account');
                window.location.replace('../index.php')
            </script>";
        } else {
            echo "Error: " . mysqli_error($con);

        }
    }

?>