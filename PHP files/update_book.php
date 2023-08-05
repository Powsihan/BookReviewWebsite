<!-- update_book.php -->
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Update Book</h1>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_POST["search"];
            $db = mysqli_connect("localhost", "root", "", "bookreview");

            // Check if the connection was successful
            if (mysqli_connect_errno()) {
                die("Database connection failed: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM book WHERE ISBN = '$search'";
            $result = mysqli_query($db, $query);
            $book = mysqli_fetch_assoc($result);

            if (!$book) {
                echo '<div class="alert alert-danger" role="alert">Book not found.</div>';
            }
        }
        ?>

        <form action="updateBookProcess.php" method="post">

            <table class="table table-bordered mt-4">
                <?php if ($book) { ?>
                    <tr>
                        <td>Enter ISBN :</td>
                        <td><input type="text" name="isbn" class="form-control" value="<?php echo $book['ISBN']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Enter Title :</td>
                        <td><input type="text" name="title" class="form-control" value="<?php echo $book['Title']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Import Image :</td>
                        <td><input type="file" name="image" class="form-control-file"></td>
                    </tr>
                    <tr>
                        <td>Enter Publication_Date:</td>
                        <td><input type="date" name="publication" class="form-control" value="<?php echo $book['Publication_Date']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Enter Author:</td>
                        <td><input type="text" name="author" class="form-control" value="<?php echo $book['Author']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Enter Review:</td>
                        <td><textarea type="text" name="review" class="form-control" value="<?php echo $book['Review']; ?>"></textarea></td>
                    </tr>
                    <tr>
                        <td>Select Categories:</td>
                        <td>
                            <select name="categories" class="form-control">
                                <option value="historical" <?php if ($book['Categories'] === 'historical') echo 'selected'; ?>>Historical</option>
                                <option value="horror" <?php if ($book['Categories'] === 'horror') echo 'selected'; ?>>Horror</option>
                                <option value="love" <?php if ($book['Categories'] === 'love') echo 'selected'; ?>>Love</option>
                                <option value="fiction" <?php if ($book['Categories'] === 'fiction') echo 'selected'; ?>>Fiction</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                        <input type="submit" value="Update" name="update" class="btn btn-primary">
                            <input type="submit" value="Delete" name="delete" class="btn btn-danger">
                            <a href="admin.php" class="btn btn-secondary">Cancel</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
