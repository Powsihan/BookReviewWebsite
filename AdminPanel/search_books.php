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
</head>

<body style="background:url('../images/home-background.png');" class="text-light">
    <?php
    $db = mysqli_connect("localhost", "root", "", "bookreview");

    // Check the connection
    if (mysqli_connect_errno()) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['search'])) {
        $searchValue = $_POST['search'];

        $query = "SELECT * FROM book WHERE Title LIKE '%$searchValue%' OR Categories LIKE '%$searchValue%' OR Author LIKE '%$searchValue%' OR ISBN LIKE '%$searchValue%'";
        $result = mysqli_query($db, $query);

        // Check if any results are found
        if (mysqli_num_rows($result) > 0) {

    ?>
            <div class="container mt-5">
                <h1 class="text-center" style="font-size: 3rem; font-weight: bold;">Book Details</h1>
                <hr>
                <br>
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
                    </table>
                </div>
                <!-- Back Button -->
                <a href="./Admin.php" class="btn btn-primary mt-3" style="width:100%; margin-bottom: 20px;">Back To Admin Panel</a>
            </div>
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