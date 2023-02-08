<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/10a7d7039c.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <title>Paryatanam</title>
<!--
    


-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    <?php
    session_start();
    ?>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <h1>Welcome...</h1>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        
                        <a href="index.php" class="logo">
                            <img src="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" class="menu">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Destinations</a></li>
                            <li class="submenu">
                                
                                <a href="javascript:;">Our Recommendations</a>
                                <ul>
                                    <li><a href="#">Manali</a></li>
                                    <li><a href="#">New York</a></li>
                                    <li><a href="paris/paris.html">Paris</a></li>
                                    <li><a href="#">Greece</a></li>
                                </ul>
                           
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            <li class="scroll-to-section"><button2 onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
                                <button2 onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
                                <?php
                                    // Start the session
                                     session_start();

                                         // Check if the user's name is stored in the session
                                        if (isset($_SESSION['username'])) {
                                                // Retrieve the user's name from the session
                                                $username = $_SESSION['username'];
                                                // Display the user's name
                                                echo "Welcome, $username";
                                                echo "<button class='logout-button' onclick=\"window.location.href='login/logoutaction.php'\">Logout</button>";
                                        } else {
                                                 // The user's name is not stored in the session, show an error
                                                echo "<a href='login/login.php'>Login/Signup</a></button2></li>";
                                        }
                                            ?>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Paryatanam</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Plan A Trip!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/pksssss.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/Pryatanam 22.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/Pryatanam  33.jpg" alt="">
                            </div>
                            
                          </div>
                           <!-- Item -->
                           <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/Pryatanam 44.jpg" alt="">
                            </div>
                          </div>

                           <!-- Item -->
                           <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/Pryatanam 55.jpg" alt="">
                            </div>
                          </div>
                           <!-- Item -->
                           <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/pryatnam 66.jpg" alt="">
                            </div>
                          </div>

                           <!-- Item -->
                           <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/pryatanam 77.jpg" alt="">
                            </div>
                          </div>
                           <!-- Item -->
                           <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/pryatnam 88.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>Travel ...........</h2>
                        </div>
                       <p>Adding Joy to your Journey</p>
                           <div class="row">
                            <div class="col-4">
                                <img src="assets/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                     <iframe width="600" height="400" src="https://www.youtube.com/embed/n-DbqB4iNrU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen  class="image fit"><img src="assets/images/about-video-bg.jpg"
						alt=""  ></iframe> 
                                 </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <div>

        <section id="features">
          <div class="row">
      
          <div class="feature-box col-lg-4">
            <i class="icon fas fa-check-circle fa-5x"></i>
            <h3><bold>Easy to use</bold></h3>
            <p>So easy to use, even your son could visit Goa alone</p>
          </div>
          
          <div class="feature-box col-lg-4">
            <i class="icon fas fa-money-bill-wave fa-5x"></i>
            <h3><bold>Best Deals</bold></h3>
            <p>No need to wait for your salary</p>
          </div>
          
          <div class="feature-box col-lg-4">
            <i class="icon far fa-calendar-check fa-5x"></i>
            <h3><bold>Book your Trip and Enjoy</bold></h3>
            <p>Just book your trip and say "Happy Travelling"</p>
          </div>
      
        </div>
      </section>
      </div>
      

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Favourite Places</h6>
                        <h2>Place to be must visit</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1' onclick="location.href='paris/paris.html';" style="cursor: pointer;">

                            <!-- <div class="price"><h6>$14</h6></div> -->
                            <div class='info'>
                              <h1 class='title'>Paris</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2' onclick="location.href='switzerland/switzerland.html';" style="cursor: pointer;">
                            <!-- <div class="price"><h6>$22</h6></div> -->
                            <div class='info'>
                              <h1 class='title'>Switzerland</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3' onclick="location.href='new-york/new-york.html';" style="cursor: pointer;">
                            <!-- <div class="price"><h6>$18</h6></div> -->
                            <div class='info'>
                              <h1 class='title'>New York City</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4' onclick="location.href='agra/agra.html';" style="cursor: pointer;">
                            <!-- <div class="price"><h6>$10</h6></div> -->
                            <div class='info'>
                              <h1 class='title'>Agra</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5' onclick="location.href='dubai/dubai.html';" style="cursor: pointer;">
                            <!-- <div class="price"><h6>$7.25</h6></div> -->
                            <div class='info'>
                              <h1 class='title'>Dubai</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <!-- ***** Menu Area Ends ***** -->

    
    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Plan A Trip Or Just walkin to us</h2>
                        </div>
                        <p>VIT Bhopal University<br>
                            Bhopal Indore Highway KothriKalan, MadhyaPradesh-466114<br>
                             India <br><br>
                            </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="mailto:pratik1971sinha@gmail.com">hello@Paryatanam.com</a><br><a href="mailto:pratik1971sinha@gmail.com">info@Paryatanam.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                     <!-- Contact -->
	
				<div class="col-lg-8"></div>
                <form action="https://formspree.io/f/meqdgykl"method="POST">
                  <form method="post" role="form" class="php-email-form">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>
    </div><!-- End Contact Form -->

  </div>

</div>
</section><!-- End Contact Section -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    
    <!-- ***** Chefs Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-play"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.php"><h2>Paryatanam</h2></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                 <p>&copy; Copyright <strong><span>Paryatanam</span></strong>. All Rights Reserved 2023
                        
                        <!-- <br>Design: TemplateMo</p> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>