<!-- update_book.php -->
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../StyleSheet/admin.css">
</head>

<body style="background:url('../images/home-background.png');" class="text-light">
    <div class="container mt-5">
        <h1 class="text-center" style="font-size: 3rem; font-weight: bold;">Update Book</h1>
        <hr>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_POST["search"];
            $db = mysqli_connect("localhost", "root", "", "bookreview");

            // Check the connection 
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
                        <td class="tabback">Enter ISBN :</td>
                        <td class="tabback"><input type="text" name="isbn" class="form-control bg-dark text-light custom-placeholder" value="<?php echo $book['ISBN']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="tabback">Enter Title :</td>
                        <td class="tabback"><input type="text" name="title" class="form-control bg-dark text-light custom-placeholder" value="<?php echo $book['Title']; ?>"></td>
                    </tr>
                    <tr>
                        <td class="tabback">Import Image :</td>
                        <td class="tabback"><input type="file" name="image" class="form-control-file bg-dark text-light custom-placeholder" style="width: 100%;"></td>
                    </tr>
                    <tr>
                        <td class="tabback">Enter Publication_Date:</td>
                        <td class="tabback"><input type="date" name="publication" class="form-control bg-dark text-light custom-placeholder" value="<?php echo $book['Publication_Date']; ?>"></td>
                    </tr>
                    <tr>
                        <td class="tabback">Enter Author:</td>
                        <td class="tabback"><input type="text" name="author" class="form-control bg-dark text-light custom-placeholder" value="<?php echo $book['Author']; ?>"></td>
                    </tr>
                    <tr>
                        <td class="tabback">Enter Review:</td>
                        <td class="tabback"><textarea type="text" name="review" class="form-control bg-dark text-light custom-placeholder" value="<?php echo $book['Review']; ?>"></textarea></td>
                    </tr>
                    <tr>
                        <td class="tabback">Select Categories:</td>
                        <td class="tabback">
                            <select name="categories" class="form-control bg-dark text-light custom-placeholder">
                                <option value="historical" <?php if ($book['Categories'] === 'historical') echo 'selected'; ?>>Historical</option>
                                <option value="horror" <?php if ($book['Categories'] === 'horror') echo 'selected'; ?>>Horror</option>
                                <option value="love" <?php if ($book['Categories'] === 'love') echo 'selected'; ?>>Love</option>
                                <option value="fiction" <?php if ($book['Categories'] === 'fiction') echo 'selected'; ?>>Fiction</option>
                            </select>
                        </td>
                    </tr>

            </table>
            <hr>
            <div style="margin-left: 850px;">
                <input type="submit" value="Update" name="update" class="btn btn-primary">
                <input type="submit" value="Delete" name="delete" class="btn btn-danger" style="margin-left: 5px;">
                <a href="admin.php" class="btn btn-secondary" style="margin-left: 5px;">Cancel</a>
            </div>
            <hr>
        <?php } ?>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>