<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Add</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <!-- SweetAlert CDN -->


</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center" style="font-weight: bold;">Admin Panel</h1>
        <br>
        <hr>
        <!-- Search Book Form -->
        <h4 class="text-center" style="font-weight: bold;">Search Books</h4>
        <form action="search_books.php" method="post" class="mt-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search book by title or Category or Author">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        <br><br>
        <hr>
        <h4 class="text-center" style="font-weight: bold;">Book Add</h4>
        <!-- Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
        <form action="InsertBooks.php" method="post">

            <table class="table table-bordered mt-4">
                <tr>
                    <td>Enter ISBN :</td>
                    <td><input type="text" name="isbn" class="form-control" placeholder="ISBN"></td>
                </tr>
                <tr>
                    <td>Enter Title :</td>
                    <td><input type="text" name="title" class="form-control" placeholder="Title"></td>
                </tr>
                <tr>
                    <td>Import Image :</td>
                    <td><input type="file" name="image" class="form-control-file"></td>
                </tr>
                <tr>
                    <td>Enter Publication_Date:</td>
                    <td><input type="date" name="publication" class="form-control"></td>
                </tr>
                <tr>
                    <td>Enter Author:</td>
                    <td><input type="text" name="author" class="form-control" placeholder="Author"></td>
                </tr>
                <tr>
                    <td>Enter Review:</td>
                    <td><textarea type="text" name="review" class="form-control" placeholder="Review"></textarea></td>
                </tr>
                <tr>
                    <td>Select Categories:</td>
                    <td><select name="categories">
                            <option value="historical">Historical</option>
                            <option value="horror">Horror</option>
                            <option value="love">Love</option>
                            <option value="fiction" selected>Fiction</option>

                        </select></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit" class="btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-secondary">
                    </td>
                </tr>
            </table>

        </form>
    </div>
    <br><br>
    <hr>
    <h4 class="text-center" style="font-weight: bold;">Update Books</h4>
        <form action="update_book.php" method="post" class="mt-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search for the book by ISBN whose is going to update">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        <br><br>
        <hr>

    <h4 class="text-center" style="font-weight: bold;"> All Book Details</h4>

    <div class="container mt-5">
        <?php
        $db = mysqli_connect("localhost", "root", "", "bookreview");

        // Check if the connection was successful
        if (mysqli_connect_errno()) {
            die("Database connection failed: " . mysqli_connect_error());
        }
        $query = "select * from book"; //search with a book name in the table book_info
        $result = mysqli_query($db, $query);
        ?>
        <!-- Search Results Table with Fixed Header and Scrolling Content -->
        <div style="max-height: 700px; overflow-y: scroll;">
            <table class="table table-bordered mt-4">
                <thead style=" position: sticky; top: -1px; z-index: 1;">
                    <tr>
                        <th>No</th>
                        <th>ISBN</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Publication_Date</th>
                        <th>Author</th>
                        <th>Review</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rowNumber = 1;
                    // Use a while loop to iterate over the result and display each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $rowNumber++; ?></td>
                            <td><?php echo $row["ISBN"]; ?></td>
                            <td><?php echo $row["Title"]; ?></td>
                            <td><?php echo $row["Categories"]; ?></td>
                            <td><?php echo $row["Publication_Date"]; ?></td>
                            <td><?php echo $row["Author"]; ?></td>
                            <td><?php echo $row["Review"]; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>

</body>

</html>