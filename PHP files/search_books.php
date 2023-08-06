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


    <?php
    $db = mysqli_connect("localhost", "root", "", "bookreview");

    // Check if the connection was successful
    if (mysqli_connect_errno()) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['search'])) {
        $searchValue = $_POST['search'];

        // Prepare the query to search for books by title or author
        $query = "SELECT * FROM book WHERE Title LIKE '%$searchValue%' OR Categories LIKE '%$searchValue%' OR Author LIKE '%$searchValue%' OR ISBN LIKE '%$searchValue%'";
        $result = mysqli_query($db, $query);

        // Check if any results are found
        if (mysqli_num_rows($result) > 0) {

    ?>
            <hr>
            <h4 class="text-center">Book Details</h4>
            <table class="table table-bordered mt-4">
                <tr>
                    <th>No</th>
                    <th style="width: 130px;">ISBN</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Publication_Date</th>
                    <th style="width: 100px;">Author</th>
                    <th>Review</th>
                </tr>
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
            </table>
            <!-- Back Button -->
            <a href="./Admin.php" class="btn btn-primary mt-3" style="width:100%">Back To Admin Panel</a>
    <?php
        } else {
            // No results found
            echo "<script>
            alert('No Books Found !');
            window.location = 'Admin.php'; // Redirect to the desired page after successful insertion
          </script>";
        }
    }
    ?>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>

</body>

</html>