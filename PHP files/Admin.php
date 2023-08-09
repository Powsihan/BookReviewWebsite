<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Add</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../StyleSheet/admin.css">
    <!-- SweetAlert CDN -->

</head>

<body style="background:url('../images/home-background.png');" class="text-light">
    <div class="container mt-5 text-light">
        <h1 class="text-center" style="font-weight: bold; font-size: 4rem;">Admin Panel</h1>
        <a href="./AdminLogin.html" class="btn btn-danger mt-3" style="width:10%; margin-left: 1000px;">LogOut</a>
        <hr>

        <!-- Search Book Form -->
        <h4 class="text-center" style="font-weight: bold;">Search Books</h4>
        <form action="search_books.php" method="post" class="mt-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control bg-dark text-light custom-placeholder" placeholder="Search book by title or Category or Author or ISBN">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        <br><br>
        <hr>
        <h4 class="text-center" style="font-weight: bold;">Book Add</h4>
        <!-- Book ADD Section -->
        <form action="InsertBooks.php" method="post">

            <table class="table table-bordered mt-4 ">
                <tr>
                    <td class="tabback">Enter ISBN :</td>
                    <td class="tabback"><input type="text" name="isbn" class="form-control bg-dark text-light custom-placeholder" placeholder="ISBN"></td>
                </tr>
                <tr>
                    <td class="tabback">Enter Title :</td>
                    <td class="tabback"><input type="text" name="title" class="form-control bg-dark text-light custom-placeholder" placeholder="Title"></td>
                </tr>
                <tr>
                    <td class="tabback">Import Image :</td>
                    <td class="tabback"><input type="file" name="image" class="form-control-file bg-dark text-light custom-placeholder" style="width: 100%;"></td>
                </tr>
                <tr>
                    <td class="tabback">Enter Publication_Date:</td>
                    <td class="tabback"><input type="date" name="publication" class="form-control bg-dark text-light custom-placeholder"></td>
                </tr>
                <tr>
                    <td class="tabback">Enter Author:</td>
                    <td class="tabback"><input type="text" name="author" class="form-control bg-dark text-light custom-placeholder" placeholder="Author"></td>
                </tr>
                <tr>
                    <td class="tabback">Enter Review:</td>
                    <td class="tabback"><textarea type="text" name="review" class="form-control bg-dark text-light custom-placeholder" placeholder="Review"></textarea></td>
                </tr>
                <tr>
                    <td class="tabback">Select Categories:</td>
                    <td class="tabback"><select name="categories" class="form-control bg-dark text-light custom-placeholder">
                            <option value="historical">Historical</option>
                            <option value="horror">Horror</option>
                            <option value="love">Love</option>
                            <option value="fiction" selected>Fiction</option>

                        </select></td>
                </tr>

            </table>
            <hr>
            <div style="margin-left: 960px;">
                <input type="submit" value="Submit" class="btn btn-primary" >
                <input type="reset" value="Reset" class="btn btn-secondary" style="margin-left: 5px;">

            </div>
            <hr>

        </form>
        <br><br>
    <hr>
    </div>
    

    <h4 class="text-center" style="font-weight: bold;">Update Books</h4>
    <div class="container mt-5 text-light">
        <!-- Book Update Section -->
    <form action="update_book.php" method="post" class="mt-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control bg-dark text-light custom-placeholder" placeholder="Search for the book by ISBN whose is going to update">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <br><br>
    <hr>
    </div>
    <!-- Book Display Section -->
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
                        <th class="tabhed">No</th>
                        <th class="tabhed" style="width: 130px;">ISBN</th>
                        <th class="tabhed">Title</th>
                        <th class="tabhed">Category</th>
                        <th class="tabhed">Publication_Date</th>
                        <th class="tabhed" style="width: 100px;">Author</th>
                        <th class="tabhed">Review</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rowNumber = 1;
                    // Use a while loop to iterate over the result and display each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td class="tabback"><?php echo $rowNumber++; ?></td>
                            <td class="tabback"><?php echo $row["ISBN"]; ?></td>
                            <td class="tabback"><?php echo $row["Title"]; ?></td>
                            <td class="tabback"><?php echo $row["Categories"]; ?></td>
                            <td class="tabback"><?php echo $row["Publication_Date"]; ?></td>
                            <td class="tabback"><?php echo $row["Author"]; ?></td>
                            <td class="tabback"><?php echo $row["Review"]; ?></td>
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