<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Header section starts -->
    <section class="header">
        <a href="home.php" class="logo">Karnataka Tourism Management</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">Experience</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- Header section ends -->

    <!-- Home section starts -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(home-slide1.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Karnataka Tourism</h3>
                        <a href="package.php" class="btn">Explore Further</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Visit the Temple City</h3>
                        <a href="package.php" class="btn">Explore Further</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span></span>
                        <h3>Coastal Bliss</h3>
                        <a href="package.php" class="btn">Explore Further</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- Home section ends -->

    <!-- Services section starts -->
    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="icon-1.png" alt="">
                <h3>Adventure</h3>
            </div>
            <div class="box">
                <img src="icon-2.png" alt="">
                <h3>Tour Guide</h3>
            </div>
            <div class="box">
                <img src="icon-3.png" alt="">
                <h3>Trekking</h3>
            </div>
            <div class="box">
                <img src="icon-4.png" alt="">
                <h3>Camp Fire</h3>
            </div>
            <div class="box">
                <img src="icon-5.png" alt="">
                <h3>Off Road</h3>
            </div>
            <div class="box">
                <img src="icon-6.png" alt="">
                <h3>Camping</h3>
            </div>
        </div>
    </section>
    <!-- Services section ends -->

    <!-- Home About section starts -->
    <section class="home-about">
        <div class="image">
            <img src="about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3>About Us</h3>
            <p>Embark on a journey through our story, passion, and wanderlust</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>
    <!-- Home About section ends -->

    <!-- Home Packages section starts -->
    <section class="home-packages">
        <h1 class="heading-title">Our Packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="image1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Hampi</h3>
                    <p>Where ancient ruins meet modern wanderers</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="image2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Mysore Zoo</h3>
                    <p>A wild sanctuary in the heart of heritage</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="image3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Golgumbaz</h3>
                    <p>Architectural marvel echoing the tales of history</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>
        <div class="load-more">
            <a href="package.php" class="btn">Load More</a>
        </div>
    </section>
    <!-- Home Packages section ends -->

    <!-- Home Offer section starts -->
    <section class="home-offer">
        <div class="content">
            <h3>Up to 50% Off</h3>
            <p>Hurry up!! Book now for best offers</p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </section>
    <!-- Home Offer section ends -->

    <!-- Footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> Packages</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Terms of Use</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> anu@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> Mangaluru, Karnataka - 575019</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> LinkedIn </a>
            </div>
        </div>
        <div class="credit">
            <span>All rights reserved</span>
        </div>
    </section>
    <!-- Footer section ends -->

    <!-- Swiper JS link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom JS file link -->
    <script src="script.js"></script>
</body>

</html>
