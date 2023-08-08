<?php

use classes\Register;

require_once 'classes\Register.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['submit'])) {
        if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['pwd']) || empty($_POST['cpwd']) || empty($_POST['email'])) {
            header("Location: index.php?error=3");
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            header("Location: index.php?error=4");
        } else {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];

            $email = $_POST['email'];
            $password = $_POST['pwd'];
            $cpassword = $_POST['cpwd'];



            $register = new Register($fname, $lname, $email, $password, $cpassword);
            $register->register();
        }
    } else {
        header("Location: index.php?error=2");
    }
} else {
    header("Location: index.php?error=1");
}

