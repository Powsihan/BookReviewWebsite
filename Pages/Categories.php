<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'> -->
    <!-- CSS stylesheet -->
    <link rel="stylesheet" href="../StyleSheet/Categories.css">
    <!-- ----------------------------------------------------------------- -->
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <!-- <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script> -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <!-- Title -->
    <title>Categories|ReadO</title>
    <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


</head>

<body style=" background: url('../images/home-background.png') center center / cover no-repeat fixed !important;"> oncontextmenu='return false' class='snippet-body'>
    <!-- bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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

<!-- Categories part -->

<!-- Historical Category -->
    <section style="margin-top: 150px;">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto ">
                    <h3 class="me-2 hed">HISTORICAL</h3>
                </div>
                <div class="col-auto text-right ">
                    <a class="btn btn-primary me-2" href="#carouselExampleIndicators1" role="button" data-bs-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary  " href="#carouselExampleIndicators1" role="button" data-bs-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                        <div class="slide">
                            <div class="carousel-inner">
                                <?php
                                //  established a database connection
                                $connection = mysqli_connect("localhost", "root", "", "bookreview");

                                // Function to get all book details from the database
                                function getAllBooksDetails($connection)
                                {
                                    $query = "SELECT * FROM book WHERE Categories='historical'";
                                    $result = mysqli_query($connection, $query);
                                    $books = array();
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $books[] = $row;
                                    }
                                    return $books;
                                }

                                // Get all book details
                                $allBooks = getAllBooksDetails($connection);

                                // Check if any data is returned
                                if (!empty($allBooks)) {
                                    $counter = 0;
                                    foreach ($allBooks as $book) {
                                        // If the counter is a multiple of 4, start a new carousel item
                                        if ($counter % 4 === 0) {
                                            $activeClass = ($counter === 0) ? 'active' : '';
                                            echo '<div class="carousel-item ' . $activeClass . '"><div class="row">';
                                        }
                                ?>

                                        <!-- card -->
                                        <div class="col-md-3"> 
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($book['Image']); ?>" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4><?php echo $book['Title']; ?></h4>
                                                    <p class="card-text">Author: <?php echo $book['Author']; ?></p>
                                                    <p class="card-text">ISBN: <?php echo $book['ISBN']; ?></p>
                                                    <p class="card-text">Publication Date: <?php echo $book['Publication_Date']; ?></p>
                                                    <div class="revbtn">
                                                        <a href="../Pages/Review.php?isbn=<?php echo urlencode($book['Title']); ?>" class="btn btn-primary">Review</a>
                                                        <a href="#" class="btn btn-primary">Buy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card end -->

                                <?php
                                        // If the counter is a multiple of 4, close the carousel item
                                        if ($counter % 4 === 3 || $counter === count($allBooks) - 1) {
                                            echo '</div></div>'; 
                                        }

                                        $counter++;
                                    }
                                } else {
                                    // No books found
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<!-- Horror Category -->
    <section style="margin-top: 150px;">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto ">
                    <h3 class="me-2 hed">HORROR</h3>
                </div>
                <div class="col-auto text-right ">
                    <a class="btn btn-primary me-2" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary  " href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                        <div class="slide">
                            <div class="carousel-inner">
                                <?php
                                //  established a database connection
                                $connection = mysqli_connect("localhost", "root", "", "bookreview");

                                // Function to get all book details from the database
                                function getAllBooksDetails1($connection)
                                {
                                    $query = "SELECT * FROM book WHERE Categories='horror'";
                                    $result = mysqli_query($connection, $query);
                                    $books = array();
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $books[] = $row;
                                    }
                                    return $books;
                                }

                                // Get all book details
                                $allBooks = getAllBooksDetails1($connection);

                                // Check if any data is returned
                                if (!empty($allBooks)) {
                                    $counter = 0;
                                    foreach ($allBooks as $book) {
                                        // If the counter is a multiple of 4, start a new carousel item
                                        if ($counter % 4 === 0) {
                                            $activeClass = ($counter === 0) ? 'active' : '';
                                            echo '<div class="carousel-item ' . $activeClass . '"><div class="row">';
                                        }
                                ?>

                                        <!-- card -->
                                        <div class="col-md-3"> 
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($book['Image']); ?>" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4><?php echo $book['Title']; ?></h4>
                                                    <p class="card-text">Author: <?php echo $book['Author']; ?></p>
                                                    <p class="card-text">ISBN: <?php echo $book['ISBN']; ?></p>
                                                    <p class="card-text">Publication Date: <?php echo $book['Publication_Date']; ?></p>
                                                    <div class="revbtn">
                                                        <a href="../Pages/Review.php?isbn=<?php echo urlencode($book['Title']); ?>" class="btn btn-primary">Review</a>
                                                        <a href="#" class="btn btn-primary">Buy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card end -->

                                <?php
                                        // If the counter is a multiple of 4, close the carousel item
                                        if ($counter % 4 === 3 || $counter === count($allBooks) - 1) {
                                            echo '</div></div>'; 
                                        }

                                        $counter++;
                                    }
                                } else {
                                    // No books found
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

  <!-- Love Category --> 
    <section style="margin-top: 150px;">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto ">
                    <h3 class="me-2 hed">LOVE</h3>
                </div>
                <div class="col-auto text-right ">
                    <a class="btn btn-primary me-2" href="#carouselExampleIndicators3" role="button" data-bs-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary  " href="#carouselExampleIndicators3" role="button" data-bs-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
                        <div class="slide">
                            <div class="carousel-inner">
                                <?php
                                // established a database connection
                                $connection = mysqli_connect("localhost", "root", "", "bookreview");

                                // Function to get all book details from the database
                                function getAllBooksDetails2($connection)
                                {
                                    $query = "SELECT * FROM book WHERE Categories='love'";
                                    $result = mysqli_query($connection, $query);
                                    $books = array();
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $books[] = $row;
                                    }
                                    return $books;
                                }

                                // Get all book details
                                $allBooks = getAllBooksDetails2($connection);

                                // Check if any data is returned
                                if (!empty($allBooks)) {
                                    $counter = 0;
                                    foreach ($allBooks as $book) {
                                        // If the counter is a multiple of 4, start a new carousel item
                                        if ($counter % 4 === 0) {
                                            $activeClass = ($counter === 0) ? 'active' : '';
                                            echo '<div class="carousel-item ' . $activeClass . '"><div class="row">';
                                        }
                                ?>

                                        <!-- card -->
                                        <div class="col-md-3"> 
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($book['Image']); ?>" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4><?php echo $book['Title']; ?></h4>
                                                    <p class="card-text">Author: <?php echo $book['Author']; ?></p>
                                                    <p class="card-text">ISBN: <?php echo $book['ISBN']; ?></p>
                                                    <p class="card-text">Publication Date: <?php echo $book['Publication_Date']; ?></p>
                                                    <div class="revbtn">
                                                        <a href="../Pages/Review.php?isbn=<?php echo urlencode($book['Title']); ?>" class="btn btn-primary">Review</a>
                                                        <a href="#" class="btn btn-primary">Buy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card end -->

                                <?php
                                        // If the counter is a multiple of 4, close the carousel item
                                        if ($counter % 4 === 3 || $counter === count($allBooks) - 1) {
                                            echo '</div></div>';
                                        }

                                        $counter++;
                                    }
                                } else {
                                    // No books found 
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<!-- Fiction Category --> 
    <section style="margin-top: 150px;">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto ">
                    <h3 class="me-2 hed">FICTION</h3>
                </div>
                <div class="col-auto text-right ">
                    <a class="btn btn-primary me-2" href="#carouselExampleIndicators4" role="button" data-bs-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary  " href="#carouselExampleIndicators4" role="button" data-bs-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="carousel">
                        <div class="slide">
                            <div class="carousel-inner">
                                <?php
                                //established a database connection
                                $connection = mysqli_connect("localhost", "root", "", "bookreview");

                                // Function to get all book details from the database
                                function getAllBooksDetails3($connection)
                                {
                                    $query = "SELECT * FROM book WHERE Categories='fiction'";
                                    $result = mysqli_query($connection, $query);
                                    $books = array();
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $books[] = $row;
                                    }
                                    return $books;
                                }

                                // Get all book details
                                $allBooks = getAllBooksDetails3($connection);

                                // Check if any data is returned
                                if (!empty($allBooks)) {
                                    $counter = 0;
                                    foreach ($allBooks as $book) {
                                        // If the counter is a multiple of 4, start a new carousel item
                                        if ($counter % 4 === 0) {
                                            $activeClass = ($counter === 0) ? 'active' : '';
                                            echo '<div class="carousel-item ' . $activeClass . '"><div class="row">';
                                        }
                                ?>

                                        <!-- card -->
                                        <div class="col-md-3"> 
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($book['Image']); ?>" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4><?php echo $book['Title']; ?></h4>
                                                    <p class="card-text">Author: <?php echo $book['Author']; ?></p>
                                                    <p class="card-text">ISBN: <?php echo $book['ISBN']; ?></p>
                                                    <p class="card-text">Publication Date: <?php echo $book['Publication_Date']; ?></p>
                                                    <div class="revbtn">
                                                        <a href="../Pages/Review.php?isbn=<?php echo urlencode($book['Title']); ?>" class="btn btn-primary">Review</a>
                                                        <a href="#" class="btn btn-primary">Buy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card end -->

                                <?php
                                        // If the counter is a multiple of 4, close the carousel item
                                        if ($counter % 4 === 3 || $counter === count($allBooks) - 1) {
                                            echo '</div></div>'; 
                                        }

                                        $counter++;
                                    }
                                } else {
                                    // No books found
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

    



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




    <script type='text/javascript'></script>
    <script src="../JS File/Categories.js"></script>
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