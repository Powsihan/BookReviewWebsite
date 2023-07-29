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
    <link rel="stylesheet" href="../StyleSheet/login.css">
    <!-- ------------------------------------------------------------------->
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <title>Login | ReadO</title>
</head>

<body>
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
            <a class="navbar-brand logog" href="../Pages/Home.php"><img src="/images/logo.png" alt="logo" style="height:50px; width: 80px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../Pages/Home.php"><i
                                class="fa-solid fa-house  icoon"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../Pages/About_us.php"><i class="fa-solid fa-hands-bound icoon"></i>About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../Pages/Categories.php"><i class="fa-solid fa-book icoon"></i>Categories</a>
                    </li>
                    <!-- <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-rectangle-history-circle-plus"></i>
                  Categories
                </a>
                        <ul class="dropdown-menu bg-color ">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
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
                        <a class="btn btn-outline-dark glow-button button-87 " href="../Pages/login.php"><i
                                class="fa-solid fa-user icoon"></i>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->



    <!-- login  -->
    <div class="container d-flex flex-column flex-lg-row justify-content-evenly mt-5 pt-5">
        <!-- heading -->
        <div class="text-center text-lg-center mt-lg-5 pt-lg-5">
            <img src="../images/logo.png" width="400 px" height="216px" alt="" />
            <!-- check it-->
            <p class="w-75 mx-auto ma-lg-0 fs-4">

            </p>
        </div>
        <!-- form  -->
        <div class="formm" style="max-width: 28rem; width: 100%">
            <div class="shadow rounded p-3 input-group-lg">
                <h1 class="text-center">Log In</h1>
                <div class="form-floating my-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" style="background-color: #F4F4F4">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating my-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" style="background-color: #F4F4F4">
                    <label for="floatingPassword">Password</label>
                </div>
                <a href="./index.php">
                    <button class="btn btn-primary my-3 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        login
                    </button>
                </a>
                <a href="#" class="text-decoration-none text-center">
                    <p>Forgotten password?</p>
                </a>
                <!-- create from modal -->
                <!-- Modal -->
                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content poppp text-light">
                            <div class="modal-header">
                                <div class="">
                                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                                        Sign Up
                                    </h1>
                                    <span class="text-muted fs-7 heddd">Join with us to discover something</span>
                                </div>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="" id="" class="form-control" placeholder="first name" />
                                    </div>
                                    <div class="col">
                                        <input type="text" name="" id="" class="form-control" placeholder="last name" />
                                    </div>
                                </div>
                                <input type="email" name="" class="form-control my-3" placeholder="Email" id="" />
                                <input type="password" name="" class="form-control my-3" placeholder="password" id="" />

                                <div class="row my-3">
                                    <span class="text-muted fs-7 heddd">
                                        Date of Birth
                                        <i type="button" class="fa-solid fa-circle-question" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover"></i>
                                    </span>
                                    <div class="col">
                                        <select name="" id="" class="form-select">
                                            <?php
                                            $startYear = 1950;
                                            $endYear = 2022;

                                            for ($i = 1; $i <= 72; $i++) {
                                                $year = $startYear + $i - 1;
                                                echo '<option value="' . $i . '">' . $year . '</option><br>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="" id="" class="form-select">
                                            <option value="1">January</option><br>
                                            <option value="2">February</option><br>
                                            <option value="3">March</option><br>
                                            <option value="4">April</option><br>
                                            <option value="5">May</option><br>
                                            <option value="6">June</option><br>
                                            <option value="7">July</option><br>
                                            <option value="8">August</option><br>
                                            <option value="9">September</option><br>
                                            <option value="10">October</option><br>
                                            <option value="11">Novermber</option><br>
                                            <option value="12">December</option><br>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="" id="" class="form-select">
                                            <?php
                                            for ($i = 1; $i <= 31; $i++) {
                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row my-3 jus">
                                    <span class="text-muted fs-7 heddd">
                                        Gender
                                        <i type="button" class="fa-solid fa-circle-question" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover"></i>
                                    </span>
                                    <div class="col">
                                        <div class="">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Male
                                            </label>
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Female
                                            </label>
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="">
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                Coustom
                                            </label>
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" />
                                        </div>
                                    </div>
                                </div>

                                <div class="d-none" id="selectGender">
                                    <select name="" id="" class="form-select">
                                        <option value="1">one</option>
                                        <option value="2">two</option>
                                        <option value="3">three</option>
                                    </select>
                                    <div class="my-3">
                                        <span class="text-muted">Your pronoun is visible to everyone.</span>
                                        <input type="text" name="" id="" class="form-control" placeholder="Gender (optional)" />
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="button" class="btn btn-outline-primary my-3" data-bs-dismiss="modal">
                                        Sign Up
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <hr />
                <div class="text-center my-4">
                    <button class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Create new Account
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!----------- Footer ------------>
    <footer class="footer-bs ">
        <div class="row ">
            <div class="col-md-3 footer-brand animated fadeInLeft ">
                <img src="/images/logo.png " alt="logo " style="height:70px; width: 110px; ">
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
                        <button class="btn btn-block btn-lg glow-button btn-dark " type="submit "><i
                                class="fa-solid fa-envelope fa-beat fa-xl "></i></button>
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


    <script src="/JS File/About_us.js"></script>
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