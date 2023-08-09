<!-- updateBookProcess.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = mysqli_connect("localhost", "root", "", "bookreview");

    // Check the connection 
    if (mysqli_connect_errno()) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST["update"])) {        //update
        //get details from book update form
        $isbn = $_POST["isbn"];
        $title = $_POST["title"];
        $publication = $_POST["publication"];
        $author = $_POST["author"];
        $review = $_POST["review"];
        $categories = $_POST["categories"];

        $update_query = "UPDATE book SET Title='$title', Publication_Date='$publication', Author='$author', Review='$review', Categories='$categories' WHERE ISBN='$isbn'";

        if (mysqli_query($db, $update_query)) {
            echo "<script>
            alert('Book Updated Successfully!');
            window.location = 'Admin.php'; // Redirect to the desired page after successful insertion
          </script>";
            exit();
        } else {
            echo "Error updating book details: " . mysqli_error($db);
        }
    } elseif (isset($_POST["delete"])) {         //delete
        
        $isbn = $_POST["isbn"];

        $delete_query = "DELETE FROM book WHERE ISBN='$isbn'";

        if (mysqli_query($db, $delete_query)) {
            echo "<script>
            alert('Book Deleted Successfully!');
            window.location = 'Admin.php'; // Redirect to the desired page after successful insertion
          </script>";
            exit();
        } else {
            echo "Error deleting book: " . mysqli_error($db);
        }
    }

    mysqli_close($db);
}
?>
