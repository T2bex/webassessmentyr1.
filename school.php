<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our School</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"/>
    <!-- <link rel="stylesheet" href="css/mobile.css"> -->
    <link rel="icon" type="icon.png" href="images/logo.png">
    <link rel="stylesheet" href="css/desktop.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- media="only screen and (min-width : 700px)" -->
</head>
<body>
    <header>
        <!-- Navbar start-->
        <nav>
            <div class="nav-bar">
                <i class='bx bx-menu sidebarOpen'></i>
                <span class="logo navLogo"><a href="index.php"><img src="images/logo.png" alt="Logo"></a></span>
                <div class="menu">
                    <div class="logo-toggle">
                        <span class="logo"><a href="index.php"><img src="images/logo.png" alt="Logo"></a></span>
                        <i class='bx bx-x sidebarClose'></i>
                    </div>
                    <ul class="nav-links">
                        <li ><a href="index.php">Home</a></li>
                        <li class="dropdown active"><a href="#">About Us <i class='bx bxs-down-arrow'></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li class="active"><a href="#">Our School</a></li>
                                    <!-- <li><a href="#">How To Find Us</a></li> -->
                                    <li><a href="computing.php">Computing Courses</a></li>
                                    <li><a href="design.php">Design Courses</a></li>
                                    <!-- <li><a href="#">How To Find Us</a></li> -->
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown"><a href="#">Facilities <i class='bx bxs-down-arrow'></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="facilities.php">Our Facilities</a></li>
                                    <li><a href="learning.php">Learning Resources</a></li>
                                    <li><a href="staff-info.php">Staff Information</a></li>
                                    <li><a href="student-info.php">Student Information</a></li>
                                    <!-- <li><a href="#">How To Find Us</a></li> -->
                                </ul>
                            </div>
                        </li>
                        <li><a href="business.php">Working With Business</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="darkLight-searchBox">
                    <div class="dark-light">
                        <i class='bx bx-moon moon'></i>
                        <i class='bx bx-sun sun'></i>
                    </div>

                    <div class="searchBox">
                        <div class="searchToggle">
                            <i class='bx bx-x cancel'></i>
                            <i class='bx bx-search search'></i>
                        </div>

                        <div class="search-field">
                            <input type="text" placeholder="Search...">
                            <i class='bx bx-search'></i>
                        </div>

                    </div>
                </div>
                
            </div>
        </nav>
        <!-- navbar end-->
        <!-- company breadcrumb start -->
        <section>
            <div class="b-breadcrumb">
                <div class="container2">
                    <h1>About Us</h1>
                </div>
            </div>
        </section>
        <section>
            <div class="c-text">
                <div class="container">
                    <ul class="breadcrumb-texts">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><i class='bx bx-fast-forward'></i>Our School</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- company breadcrumb end -->
    </header>

    <main>
        <section class="a-us">
            <div class="o-school">
                <div class="container2">
                    <h5>OUR SCHOOL</h5>
                    <h1>CANTOUR COLLEGE</h1>
                    <p>Cantor College was established in 1989 to specialize in Computing and Design.   At Cantor College, we want to give students the education they need to achieve their career aims, leaving them equipped with the knowledge, skills and experience to succeed. Cantor College gives you the opportunities that can give you the edge when you enter the world of work, through our teaching and our links to some of the world's leading researchers and employers. Our students have gone on to successful careers in a wide range of industries across the globe.  Whatever your ambitions, our learning and support can help to get the most out of your time with Cantor College, both as a student and in your future career.</p>
                    <img class="b-img" src="images/cantor-gallery.jpg" alt="about-us">
                </div>
            </div>
        </section>
    </main>
     <!-- move-top -->
     <section>
        <button onclick="topFunction()" id="movetop" class="move-top" title="Go to top">
            <span><i class='bx bx-chevrons-up up'></i></span>
          </button>
    </section>
    <!-- move-top end -->

    <footer>
        <p>&copy; 2022 Tobe's Project</p>
    </footer>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</body>
</body>
</html>