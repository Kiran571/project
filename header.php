<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RK Restaurant</title>
    <link rel="stylesheet" href="main.css" type="text/css">
    <link  href="https://fonts.google.com/specimen/Playball?query=bal#standard-styles" rel="stylesheet">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="magnific/magnific-popup.css">

</head>
<body>



    <?php
                if (isset($_SESSION['userId'])) {
                        echo '<form action="logout.php" method="POST">
            <button type="submit" name="logout-submit">Logout</button>
        </form>';
                    }
                    else{
                        echo '<form action="login.php" method="POST">
                <input type="text" name="mailuid" placeholder="E-mail/Username">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
            </form>
        <a href="signup.php" class="header-signup">Signup</a>';
                    }

            ?>
    <!-- welcome sound======== -->
    <div  id="backgroundMusic">
	    <audio id="backgroundMusic" style="position:fixed; top:-100px;" autoplay="true" controls>
	    	<source src="audio/welcome (1).mp3" type="audio/wav">
		</audio>
	</div>
    <!-- End of welcome sound============ -->
    <!-- Navbar======= -->
    <div id="Menu" class="menu">
    <div id="menu-bar" onclick="onClickMenu()">
    <div id="bar1" class="bar"></div>
    <div id="bar2" class="bar"></div>
    <div id="bar3" class="bar"></div>
    <ul id="nav" class="nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="breakfast.html">Menu</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">About_Us</a></li>
        <li><a href="#">Contact_Us</a></li>
        <li><a href="#">Feedback</a></li>
    </ul>
    </div>
    </div>
    <!-- End of Nav Bar==============-->
    <!-- Header =================-->
      <header class="header">
          <div class="hero">
              <h1 class="title" align="top-center">RK Restaurant</h1>
              <a href="#" class="hero-button pulsate"  align="top-center">Order Online Foods & Book a Table</a>
          </div>
      </header>
<!-- End of Header================== -->
<!-- About us================== -->
<section id="about">
    <div>
        <h2 class="title-text">Varieties</h2>
    </div>
    <div class="about-center">
       <!-- Start of the article======= -->
        <article class="about">
            <div class="about-icon">
                <i class="fas fa-bread-slice"></i>
            </div>
            <div class="about-text">
                <h2 class="about-subtitle">Breakfast</h2>
                <p class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nulla harum placeat nam recusandae quia. Aliquid magnam odio numquam velit?</p>
            </div>
        </article>
       <!-- End of the article======== -->
       <!-- Start of the article======= -->
        <article class="about">
            <div class="about-icon">
                <i class="fas fa-utensils"></i>
            </div>
            <div class="about-text">
                <h2 class="about-subtitle">Lunch & Dinner</h2>
                <p class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nulla harum placeat nam recusandae quia. Aliquid magnam odio numquam velit?</p>
            </div>
        </article>
       <!-- End of the article======== -->
            <!-- Start of the article======= -->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-cheese"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Dessert</h2>
                    <p class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nulla harum placeat nam recusandae quia. Aliquid magnam odio numquam velit?</p>
                </div>
            </article>
           <!-- End of the article======== -->
                <!-- Start of the article======= -->
        <article class="about">
            <div class="about-icon">
                <i class="fas fa-hamburger"></i>
            </div>
            <div class="about-text">
                <h2 class="about-subtitle">Junk Foods</h2>
                <p class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nulla harum placeat nam recusandae quia. Aliquid magnam odio numquam velit?</p>
            </div>
        </article>
       <!-- End of the article======== -->
            <!-- Start of the article======= -->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-ice-cream"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Icecream</h2>
                    <p class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nulla harum placeat nam recusandae quia. Aliquid magnam odio numquam velit?</p>
                </div>
            </article>
           <!-- End of the article======== -->
                <!-- Start of the article======= -->
        <article class="about">
            <div class="about-icon">
                <i class="fas fa-mug-hot"></i>
            </div>
            <div class="about-text">
                <h2 class="about-subtitle">Drinks</h2>
                <p class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nulla harum placeat nam recusandae quia. Aliquid magnam odio numquam velit?</p>
            </div>
        </article>
       <!-- End of the article======== -->

    </div>

</section>

<!-- End of About us====================== -->
<!-- Menu Section========= -->
<section class="menu" id="menu">
    <article class="menu-image"></article>
    <article class="menu-text">
        <div class="menu-text-conter">
        <h1>Our Menu</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, doloremque incidunt ab amet vitae culpa debitis consectetur. Mollitia velit laudantium reiciendis ea quas. Nemo, eius!</p>
        <a href="breakfast.html">View Menu</a>
    </div>
    </article>
</section>
<!-- End of Menu section============ -->

<!-- Numbers================ -->
<section id="number">
    <article class="number">
        <i class="fas fa-bread-slice"></i>
        <p>20</p>
        <h3>Breakfast</h3>
    </article>
    <article class="number">
        <i class="fas fa-pizza-slice"></i>
        <p>20</p>
        <h3>Pizza</h3>
    </article>
    <article class="number">
        <i class="fas fa-mortar-pestle"></i>
        <p>20</p>
        <h3>Chinese Dishes & Noodles</h3>
    </article>
    <article class="number">
        <i class="fas fa-utensils"></i>
        <p>20</p>
        <h3>Lunch & Dinner</h3>
    </article>
    <article class="number">
        <i class="fas fa-cheese"></i>
        <p>20</p>
        <h3>Dessert</h3>
    </article>
    <article class="number">
        <i class="fas fa-hamburger"></i>
        <p>20</p>
        <h3>Junk Foods</h3>
    </article>
    <article class="number">
        <i class="fas fa-ice-cream"></i>
        <p>20</p>
        <h3>Icecream</h3>
    </article>
    <article class="number">
        <i class="fas fa-mug-hot"></i>
        <p>20</p>
        <h3>Drinks</h3>
    </article>
</section>
<!-- End of Numbers======================= -->

<!-- Gallery=========== -->
<section  id="gallery">
    <div>
        <h2 class="title-text">Our Restaurant Staff</h2>
    </div>
    <div  id="gallery-center">
        <article  class="gallery-item">
            <a href="images/restaurant/1.jpg">
            <img border="1" height="200" src="images/restaurant/1.jpg" alt="">
        </a>
        </article>
        <article class="gallery-item">
            <a href="images/restaurant/3.jpg">
            <img border="1" height="200" src="images/restaurant/3.jpg" alt="">
        </a>
        </article>
        <article class="gallery-item">
            <a href="images/restaurant/2.jpg"></a>
            <img border="1" height="200" src="images/restaurant/2.jpg" alt="">
        </a>
        </article>
        <article class="gallery-item">
            <a href="images/restaurant/4.jpg">
            <img border="1" height="200" src="images/restaurant/4.jpg" alt="">
        </a>
        </article>
        <article class="gallery-item">
            <a href="images/restaurant/5.jpg">
            <img border="1" height="200" src="images/restaurant/5.jpg" alt="">
        </a>
        </article>
        <article class="gallery-item">
            <a href="images/restaurant/6.jpg">
            <img border="1" height="200" src="images/restaurant/6.jpg" alt="">
        </a>
        </article>
        <article class="gallery-item">
            <a href="images/restaurant/7.jpg">
            <img border="1" height="200" src="images/restaurant/7.jpg" alt="">
        </a>
        </article>
        <article class="gallery-item">
            <a href="images/restaurant/8.jpg">
            <img border="1" height="200" src="images/restaurant/8.jpg" alt="">
        </a>
        </article>
    </div>

</section>
<!-- End of Gallery===============  -->
<!-- social icon========== -->
<!-- <section id="social-icons">
    <a href="#"><i class="fab fa-facebook facebook"></i></a>
    <a href="#"><i class="fab fa-twitter twitter"></i></a>
    <a href="#"><i class="fab fa-instagram instagram"></i></a>
    <a href="#"><i class="fab fa-pinterest pinterest"></i></a>
</section> -->
<!-- End of social icon==========-->

<!-- Footer=========== -->
<footer class="footer">
    <div class="section-center"></div>
    <p class="text">
        &copy;<span>Rk Restaurant</span>
            <a href="#"><i class="fab fa-facebook facebook"></i></a>
    <a href="#"><i class="fab fa-twitter twitter"></i></a>
    <a href="#"><i class="fab fa-instagram instagram"></i></a>
    <a href="#"><i class="fab fa-pinterest pinterest"></i></a>
    </p>
</footer>
<!-- End of Footer============= -->

<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="magnific/jquery.magnific-popup.min.js"></script>
<script src="onClickMenu.js"></script>
<script src="magnific/magnific.js"></script>
</body>
</html>
