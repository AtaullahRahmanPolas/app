<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRTA</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!--custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo">BRTA</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="login.php">login</a>
            <a href="form.php">form</a> 
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends here-->



    <div class="heading" style="background:url(image/54321.jpg) no-repeat">
        <h1>Application Form</h1>
    </div>

    <!--booking section starts here-->
    <section class="order">
        <h1 class="heading-title">Appliction Form</h1>
        <form action="application_db.php" method="post" class="order-form">
            <div class="flex">

                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" placeholder="Enter your name" name="name">
                </div>

                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="Enter your email" name="email">
                </div>

                <div class="inputBox">
                    <span>Number :</span>
                    <input type="number" placeholder="Enter your number" name="phone">
                </div>

                <div class="inputBox">
                    <span>Present Address :</span>
                    <input type="text" placeholder="Enter your address" name="present_address">
                </div>

                <div class="inputBox">
                    <span>Permanant address :</span>
                    <input type="text" placeholder="Enter your address" name="permanant_address">
                </div>

                <div class="inputBox">
                    <span>NID :</span>
                    <input type="number" placeholder="Enter your id" name="nid">
                </div>

                <div class="inputBox">
                    <span>Vehicle No :</span>
                    <input type="number" placeholder="vehicle no" name="vehicle_number">
                </div>

                <div class="inputBox">
                    <span>Chess No :</span>
                    <input type="text" placeholder="Enter Chess No" name="chess_no">
                </div>

                <div class="inputBox">
                    <span>Date of Birth :</span>
                    <input type="date" placeholder="Enter DOB" name="birth">
                </div>

            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>
    <!--booking section ends here-->




    



    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.html"><i class="fas fa-angle-right"></i>Home</a>
                <a href="login.html"><i class="fas fa-angle-right"></i>about</a>
                <a href="form.html"><i class="fas fa-angle-right"></i>form </form></form></form></a>
            </div>
        
            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +8801-311071454 </a>
                <a href="#"><i class="fas fa-phone"></i> +8801-400379780 </a>
                <a href="#"><i class="fas fa-envelope"></i> polas35-707@diu.edu.bd </a>
                <a href="#"><i class="fas fa-map"></i>Section 1, Dhaka,Bangladesh </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"> facebook</i></a>
                <a href="#"> <i class="fab fa-twitter"> twitter</i></a>
                <a href="#"> <i class="fab fa-instagram"> instagram</i></a>
                <a href="#"> <i class="fab fa-linkedin"> linkedin</i></a>
            </div>
        </div>
        
        <div class="credit">create by <span>Ataullah Rahman Polas</span> all rights reserved! </div>
    </section>
    <!-- footer section ends -->


    <!-- swiper js link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--custom js file link-->
    <script src="/script.js"></script>
</body>
</html>