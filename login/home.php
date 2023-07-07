<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamro Grocery</title>

    <!-- font awesome cdn link -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <header class="header">
        <a href="#" class="logo"><i class="fas fa-shopping-basket"> Hamro Grocery</i></a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#features">Features</a>
            <a href="#products">Products</a>
            <a href="#categories">Categories</a>
            

        </nav>
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-users" id="login-btn"></div>
        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="Search here..." class="box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="cart-modal-overlay">
            <div class="cart-modal">
                <i id="close-btn" class="fas fa-times"></i>
                

                <div class="product-rows">
                </div>
                <div class="total">
                    <h1 class="cart-total">TOTAL</h1>
                    <span class="total-price">$0</span>
                    <input type="text" placeholder="Type Your Address" class="box" name="address" id="address" required>
                    <button class="purchase-btn">PURCHASE</button>    
                </div>
                <div class="total">
                    
                </div>
                

            </div>
        </div>
        <!--   end of cart modal -->
        <div class="cart-btn">
            <i id="cart" class="fas fa-shopping-cart"></i>
            <span class="cart-quantity">0</span>
        </div>
        <?php

        $id = $_SESSION['id'];
        $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");

        while ($result = mysqli_fetch_assoc($query)) {
            $res_Uname = $result['Username'];
            $res_Email = $result['Email'];
            $res_Age = $result['Age'];
            $res_id = $result['Id'];
        }

        ?>

        <div class="login-form">
            <h3>Hello <b>
                    <?php echo $res_Uname ?>
                </b>, Welcome</h3>
            <p>Your email is <b>
                    <?php echo $res_Email ?>
                </b>.</p>
            <p>And you are <b>
                    <?php echo $res_Age ?> years old
                </b>.</p>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
        </div>


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

    <!-- Products section starts -->
    <section class="products" id="products">
        <h1 class="heading">Our <span>Products</span></h1>
        <div id="fruits">
            <h1 class="heading">Fruits</h1>
            <div class="swiper product-slider">
                <div class="swiper-wrapper">
                    <!-- <div class="items-container"> -->
                    <div class="card-1 card swiper-slide">
                        <img class="product-image" src="./image/apple.jpg" alt="">
                        <p>Apple</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$20</span>
                    </div>
                    <div class="card-2 card swiper-slide">
                        <img class="product-image" src="./image/orange.jpg" alt="">
                        <p>Orange</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$15</span>
                    </div>
                    <div class="card-3 card swiper-slide">
                        <img class="product-image" src="./image/banana.jpg" alt="">
                        <p>Banana</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$18</span>
                    </div>
                    <div class="card-4 card swiper-slide">
                        <img class="product-image" src="./image/mango.jpg" alt="">
                        <p>Mango</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$30</span>
                    </div>
                    <div class="card-5 card swiper-slide">
                        <img class="product-image" src="./image/guava.jpg" alt="">
                        <p>Guava</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$12</span>
                    </div>
                    <div class="card-6 card swiper-slide">
                        <img class="product-image" src="./image/grape.jpg" alt="">
                        <p>Grapes</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$8</span>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>

        <div id="vegetables">
            <h1 class="heading">Vegetables</h1>
            <div class="swiper product-slider">
                <div class="swiper-wrapper">
                    <!-- <div class="items-container"> -->
                    <div class="card-1 card swiper-slide">
                        <img class="product-image" src="./image/potato.jpg" alt="">
                        <p>potato</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$10</span>
                    </div>
                    <div class="card-2 card swiper-slide">
                        <img class="product-image" src="./image/onion.jpg" alt="">
                        <p>Onion</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$6</span>
                    </div>
                    <div class="card-3 card swiper-slide">
                        <img class="product-image" src="./image/brinjal.jpg" alt="">
                        <p>Brinjal</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$17</span>
                    </div>
                    <div class="card-4 card swiper-slide">
                        <img class="product-image" src="./image/tomato.jpg" alt="">
                        <p>Tomato</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$8</span>
                    </div>
                    <div class="card-5 card swiper-slide">
                        <img class="product-image" src="./image/cauliflower.jpg" alt="">
                        <p>Cauliflower</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$12</span>
                    </div>
                    <div class="card-6 card swiper-slide">
                        <img class="product-image" src="./image/garlic.jpg" alt="">
                        <p>Garlic</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$9</span>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>

        <div id="dairy">
            <h1 class="heading">Dairy Products</h1>
            <div class="swiper product-slider">
                <div class="swiper-wrapper">
                    <!-- <div class="items-container"> -->
                    <div class="card-1 card swiper-slide">
                        <img class="product-image" src="./image/milk.jpg" alt="">
                        <p>Milk</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$5</span>
                    </div>
                    <div class="card-2 card swiper-slide">
                        <img class="product-image" src="./image/cheese.jpg" alt="">
                        <p>Cheese</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$8</span>
                    </div>
                    <div class="card-3 card swiper-slide">
                        <img class="product-image" src="./image/chicken.jpg" alt="">
                        <p>Chicken Meat</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$20</span>
                    </div>
                    <div class="card-4 card swiper-slide">
                        <img class="product-image" src="./image/buff.jpg" alt="">
                        <p>Buff Meat</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$8</span>
                    </div>
                    <div class="card-5 card swiper-slide">
                        <img class="product-image" src="./image/fish.jpg" alt="">
                        <p>Fish</p>
                        <button class="add-to-cart">Add to cart</button>
                        <span class="product-price">$12</span>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>

    </section>
    <!-- Products section ends -->

    <!-- Categories Section starts -->

    <section class="categories" id="categories">
        <h1 class="heading">Product <span>Categories</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="image/cat1.jpg" alt="">
                <h3>Fresh Fruits</h3>
                <p>Upto 45% off</p>
                <a href="#fruits" class="btn">Shop now</a>
            </div>
            <div class="box">
                <img src="image/cat2.jpg" alt="">
                <h3>Fresh Vegetables</h3>
                <p>Upto 25% off</p>
                <a href="#vegetables" class="btn">Shop now</a>
            </div>
            <div class="box">
                <img src="image/cat3.jpg" alt="">
                <h3>Dairy Products</h3>
                <p>Upto 45% off</p>
                <a href="#dairy" class="btn">Shop now</a>
            </div>
        </div>
    </section>

    <!-- Categories Section ends -->

    <!-- Review Section starts -->
    <!-- Making later -->
    <!-- Review Section starts -->

    <!-- Blog section Starts -->

    <!-- <section class="blog" id="blog">
        <h1 class="heading">Our <span>Blogs</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="image/blog1.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"><i class="fas fa-users"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- making more later along with backend -->

    <!-- Blog section ends -->

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
                <a href="#" class="links"><i class="fas fa-envelope"></i>hamrogrocery@gmail.com</a>
                <a href="#" class="links"><i class="fas fa-map-marker-alt"></i>Kamalpokhari, Kathmandu</a>
            </div>

            <div class="box">
                <h3>Quick Links</h3>
                <a href="#home" class="links"><i class="fas fa-arrow-right"></i>Home</a>
                <a href="#features" class="links"><i class="fas fa-arrow-right"></i>Features</a>
                <a href="#products" class="links"><i class="fas fa-arrow-right"></i>Products</a>
                <a href="#categories" class="links"><i class="fas fa-arrow-right"></i>Categories</a>
                <a href="#review" class="links"><i class="fas fa-arrow-right"></i>Review</a>
                <a href="#blogs" class="links"><i class="fas fa-arrow-right"></i>Blogs</a>
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




    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="./js/cart.js"></script>
    <script src="js/script.js"></script>

</body>

</html>