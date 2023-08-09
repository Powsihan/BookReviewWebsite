<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookreview";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check if the user exists
$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $_SESSION['username'] = $username;
    header("Location: Admin.php"); // Redirect to a Admin Panel
} else {
    echo "<script>
    alert('Invalid username or password.');
    window.location='AdminLogin.html';
    </script>";
}

$conn->close();
?>
