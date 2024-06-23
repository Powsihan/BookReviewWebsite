<?php

use classes\Register;

require_once 'classes\Register.php';    

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['submit'])) {
        if (empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['password']) || empty($_POST['conformPassword']) || empty($_POST['email'])) {
            header("Location: index.php?error=3");
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            header("Location: index.php?error=4");
        } else {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];

            $email = $_POST['email'];
            $password = $_POST['password'];
            $conformPassword = $_POST['conformPassword'];



            $register = new Register($firstName, $lastName,$email, $password,$conformPassword );
            $register->register();
        }
    } else {
        header("Location: index.php?error=2");
    }
} else {
    header("Location: index.php?error=1");
}




