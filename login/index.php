<?php 
   session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

    <title>Hamro Grocery</title>
</head>

<body>

    <header class="header">
        <a href="#" class="logo"><i class="fas fa-shopping-basket"> Hamro Grocery</i></a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#features">Features</a>
            <a href="#login">Login</a>
        </nav>

    </header>
    <!-- header section ends -->

    <!-- home section starts -->
    <section class="home" id="home">
        <div class="content">
            <h3>Fresh and <span>Organic</span> Products</h3>
            <p>The fruits and vegetables are directly transferred from our own farm</p>
            <a href="#products" class="btn">Shop now</a>
        </div>
    </section>
    <!-- home section end -->

    <!-- Features section starts -->
    <section class="features" id="features">
        <h1 class="heading">Our <span>Features</span></h1>

        <div class="box-container">
            <div class="box">
                <img src="image/feature-img-1.png" alt="">
                <h3>Fresh and Organic</h3>
                <p>Fresh and healthy fruits and vegetables are available with us which are only harvested before few
                    hours of delivery!</p>
                <a href="#" class="btn">Read more...</a>
            </div>

            <div class="box">
                <img src="image/feature-img-2.jpg" alt="">
                <h3>Free Delivery</h3>
                <p>Free delivery within our Kathmandu valley. Charges may apply outside the valley.</p>
                <a href="#" class="btn">Read more...</a>
            </div>

            <div class="box">
                <img src="image/feature-img-3.jpg" alt="">
                <h3>Easy payments</h3>
                <p>Online payments like Esewa as well Cash on Delivery can be performed!</p>
                <a href="#" class="btn">Read more...</a>
            </div>
        </div>
    </section>
    <!-- Features section ends -->
    <!-- login section starts -->
    <section class="features" id="login">
        <h1 class="heading">Account <span>Sign-In</span></h1>

        <div class="box-container">
            <div class="box">
                <?php

                include("php/config.php");
                if (isset($_POST['submit'])) {
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);

                    $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                    $row = mysqli_fetch_assoc($result);

                    if (is_array($row) && !empty($row)) {
                        $_SESSION['valid'] = $row['Email'];
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['age'] = $row['Age'];
                        $_SESSION['id'] = $row['Id'];
                    } else {
                        echo "<script>alert('Invalid Username or Password');</script>";
                        echo "<div class='login-form'>
                     <p>You entered Wrong Username or Password</p>
                      </div> <br>";
                        echo "<a href='index.php'><button class='btn'>Go Back</button>";

                    }
                    if (isset($_SESSION['valid'])) {
                        header("Location: home.php");
                    }
                } else {


                    ?>

                    <form action="" method="post" class="login-form">
                        <h3>Login Now</h3>
                        <input type="text" placeholder="Type Your Email" class="box" name="email" id="email">
                        <input type="password" placeholder="Type Your Password" class="box" name="password" id="password">
                        <p>Don't have an account, <a href="createacc.php">Create Account</a></p>
                        <input type="submit" name="submit" value="Login Now" class="btn">
                    </form>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- footer section starts -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Hamro Grocery <i class="fas fa-shopping-basket"></i></h3>
                <p>Order fresh fruits, vegetables and dairy products from us!</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#" class="links"><i class="fas fa-arrow-phone"></i>+977 981231231</a>
                <a href="#" class="links"><i class="fas fa-arrow-phone"></i>+977 01-6621312</a>
                <a href="mailto:hamrogrocery@gmail.com" class="links"><i
                        class="fas fa-envelope"></i>hamrogrocery@gmail.com</a>
                <a href="#" class="links"><i class="fas fa-map-marker-alt"></i>Kamalpokhari, Kathmandu</a>
            </div>

            <div class="box">
                <h3>Quick Links</h3>
                <a href="#home" class="links"><i class="fas fa-arrow-right"></i>Home</a>
                <a href="#features" class="links"><i class="fas fa-arrow-right"></i>Features</a>

            </div>

            <div class="box">
                <h3>News Letter </h3>
                <p> Subscribe for our latest updates</p>
                <input type="email" placeholder="Your email" class="email">
                <input type="submit" value="subscribe" class="btn">
            </div>
        </div>

    </section>

    <!-- footer section ends -->



</body>

</html>