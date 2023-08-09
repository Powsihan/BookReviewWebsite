<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="error-message">Invalid email format</div>';
        exit();
    }

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookreview";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into database
    $sql = "INSERT INTO contactus (Email, Name, Subject, Message) VALUES ('$email', '$name', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Your message has been sent and saved. Thank you!');
        window.location = 'Contact_us.php'; // Redirect to the desired page after successful insertion
      </script>";
    } else {
        echo '<div class="error-message">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    }

    $conn->close();
}
?>
