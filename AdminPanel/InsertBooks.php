<?php

$db = mysqli_connect("localhost", "root", "", "bookreview");

// Check connection
if (mysqli_connect_errno()) {
  die("Database connection failed: " . mysqli_connect_error());
}
//get details from book add form
$isbn = $_POST["isbn"];
$title = $_POST["title"];
$image = $_POST["image"];
$publication = $_POST["publication"];
$author = $_POST["author"];
$review = $_POST["review"];
$category = $_POST["categories"];

$query = "insert into book(ISBN,Title,Image,Publication_Date,Author,Review,Categories) values('$isbn','$title','$author','$publication','$author','$review','$category')"; 
$result = mysqli_query($db, $query);


if ($result) {
  echo "<script>
            alert('Data Added Successfully!');
            window.location = 'Admin.php'; // Redirect to the desired page after successful insertion
          </script>";
} else {
  echo "<script>
            alert('Failed to add data.');
            window.location = 'Admin.php'; // Redirect to the desired page after an error
          </script>";
}

?>

</body>

</html>