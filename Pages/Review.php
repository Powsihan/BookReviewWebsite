<?php
// established a database connection
$connection = mysqli_connect("localhost", "root", "", "bookreview");

// Function to get book details from the database by Title
function getBookDetailsByISBN($connection, $isbn) {
    $query = "SELECT * FROM book WHERE Title = ?";
    
    // Create a prepared statement
    $stmt = mysqli_prepare($connection, $query);
    
    // Bind the Title value to the prepared statement
    mysqli_stmt_bind_param($stmt, "s", $isbn);
    
    // Execute the prepared statement
    mysqli_stmt_execute($stmt);

    // Get the result of the query
    $result = mysqli_stmt_get_result($stmt);

    // Check if any data is returned
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Close the prepared statement
        mysqli_stmt_close($stmt);
        return $row;
    } else {
        // No data found for the given Title
        // Close the prepared statement
        mysqli_stmt_close($stmt);
        echo "<script>
            alert('Book Not Found!');
            window.location = 'Home.php'; // Redirect to the desired page after successful insertion
          </script>";
        return false;
    }
}

// Check if ISBN parameter is provided in the URL
if (isset($_GET['isbn'])) {
    // Get the ISBN value from the URL
    $isbn = $_GET['isbn'];

    // Get book details by Title
    $bookDetails = getBookDetailsByISBN($connection, $isbn);
} else {
    // Redirect to a page or display an error message if no ISBN is provided in the URL
    header("Location: ./Home.php"); // Replace "/error_page.php" with the desired error page URL
    exit;
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-- CSS stylesheet -->
    <link rel="stylesheet" href="../StyleSheet/Review.css">
    <!-- ------------------------------------------------------------------->
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <title>Review | ReadO</title>
</head>

<body style=" background: url('../images/home-background.png') center center / cover no-repeat fixed !important;">>
    <script src="/JS File/About_us.js"></script>
    <!-- bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-- bootstrap link  end -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-color navvr fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand logog" href="../Pages/Home.php"><img src="../images/logo.png" alt="logo" style="height:50px; width: 80px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../Pages/Home.php"><i class="fa-solid fa-house  icoon"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../Pages/About_us.php"><i class="fa-solid fa-hands-bound icoon"></i>About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../Pages/Categories.php"><i class="fa-solid fa-book icoon"></i>Categories</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active " href="../Pages/Contact_us.php"><i class="fa-solid fa-headset icoon"></i>Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex ms-auto" role="search" action="../Pages/Review.php">
                    <input name="isbn" class="form-control me-2 bg-dark text-light glowing-border w-200 siz" type="search" placeholder="Search..." required aria-label="Search">
                    <button class="btn btn-block btn-lg glow-button btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass fa-beat fa-lg"></i></button>
                </form>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-but">
                        <a class="btn btn-outline-dark glow-button button-87 " href="../Pages/login.php"><i class="fa-solid fa-user icoon"></i>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


    <section id="counts" class="counts">
        <div class="container text-light" data-aos="fade-up">
            <div class="section-title">
                <h2><?php echo $bookDetails['Categories']; ?></h2>
                <p><?php echo $bookDetails['Title']; ?></p>
            </div>

            <div class="row no-gutters ">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start " data-aos="fade-right" data-aos-delay="100"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($bookDetails['Image']) ; ?>" alt=""></div>
                <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
                    <div class="content d-flex flex-column justify-content-center review">
                        <h3 style="text-transform: uppercase;">Title :&nbsp <?php echo $bookDetails['Title']; ?></h3>
                        <h5 style="font-size: 26px;">Details : </h5>
                        <p class="card-text">ISBN :&nbsp <?php echo $bookDetails['ISBN']; ?></p>
                        <p class="card-text">Publication Date :&nbsp <?php echo $bookDetails['Publication_Date']; ?></p>
                        <p class="card-text">Author :&nbsp <?php echo $bookDetails['Author']; ?></p>
                        <div class="star-rating">
                            <h5>Rating : </h5>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                        <h5>Standard Review :</h5>
                        <p><?php echo $bookDetails['Review']; ?></p>
                        <div class="revbtn">
                            <a href="#" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



    <!----------- Footer ------------>
    <footer class="footer-bs ">
        <div class="row ">
            <div class="col-md-3 footer-brand animated fadeInLeft ">
                <img src="../images/logo.png " alt="logo " style="height:70px; width: 110px; ">
                <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                <p>© 2007 ReadO, All rights reserved</p>
            </div>
            <div class="col-md-4 footer-nav animated fadeInUp ">
                <h4>Menu —</h4>

                <div class="col-md-6 ">
                    <ul class="list ">
                        <li><a href="../Pages/Home.php"><i class="fa-solid fa-house icoon "></i>Home</a></li>
                        <li><a href="../Pages/About_us.php"><i class="fa-solid fa-hands-bound icoon "></i>About Us</a></li>
                        <li><a href="../Pages/Categories.php"><i class="fa-solid fa-book icoon "></i>Categories</a></li>
                        <li><a href="../Pages/Contact_us.php"><i class="fa-solid fa-headset icoon "></i>Contact Us</a></li>
                        <li><a href="# "><i class="fa-solid fa-chalkboard-user icoon "></i>Terms & Condition</a></li>
                        <li><a href="# "><i class="fa-solid fa-lock icoon "></i>Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 footer-social ">
                <h4>Follow Us</h4>
                <ul>
                    <li><a href="# "><i class="fa-brands fa-facebook fa-2xl socialicon "></i></a></li>
                    <li><a href="# "><i class="fa-brands fa-twitter fa-2xl socialicon "></i></a></li>
                    <li><a href="# "><i class="fa-brands fa-instagram fa-2xl socialicon "></i></a></li>
                    <li><a href="# "><i class="fa-brands fa-pinterest fa-2xl socialicon "></i></a></li>
                    <li><a href="# "><i class="fa-brands fa-youtube fa-2xl socialicon "></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-ns animated fadeInRight ">
                <h4>Newsletter</h4>
                <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
                <p>
                <div class="input-group ">
                    <input class="form-control me-2 bg-dark text-light glowing-border w-200 siz " type="search " placeholder="Type here..." required aria-label="Search ">
                    <span class="input-group-btn ">
                        <button class="btn btn-block btn-lg glow-button btn-dark " type="submit "><i class="fa-solid fa-envelope fa-beat fa-xl "></i></button>
                    </span>
                </div>
                <!-- /input-group -->
                </p>
            </div>
        </div>
        <hr>
        <span class="align-items-center justify-content-center d-flex ">© 2007 ReadO, All rights reserved</span>
    </footer>
    <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

    <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

    <script>
        document.querySelector('form[role="search"]').addEventListener('submit', function(event) {
            event.preventDefault();
            const isbnInput = document.querySelector('input[name="isbn"]');
            if (isbnInput.value.trim() === '<?php echo $isbn; ?>') {
                window.location.href = '../Pages/Review.php?isbn=' + encodeURIComponent(isbnInput.value.trim());
            } else {
                this.submit();
            }
        });
    </script>



</body>

</html>