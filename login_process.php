<?php
use classes\Register;

require_once 'classes\Register.php';



if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['submit'])) {
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['pwd']);

    // Create a new Register object
    $register = new Register(null, null, null, null, null);

    // Check if the login is successful
    if ($register->login($email, $password)) {
       
         
            header("Location: Categories.php");
        } 
        exit();
    } else {
        // Invalid login credentials
        header("Location: login.php?error=5");
        exit();
    }
else {
    header("Location: login.php?error=1");
    exit();
}