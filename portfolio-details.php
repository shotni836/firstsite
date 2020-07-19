<?php

    $connection = mysqli_connect("localhost", "root", "","register");
    
    
    
    if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Buy Software</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.1.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    
    <style>
        .dropbtn,.all {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
    
    
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Website Name</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html">Home</a></li>
          
          
          
          
          
          <li><a href="#footer">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <h2>Low Price. Less Time</h2>

      </div>
    </section><!-- End Breadcrumbs -->
      
      
      <section id="team" class="team section-bg">
      <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Filter by!</h2>
          
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
         
         <form action="portfolio-details.php" name="form1" method="post">
             <button class="all" name="all">All</button>
         <div class="dropdown">
  <button class="dropbtn" name="price">Price</button>
  <div class="dropdown-content">
    <button name="price1">0-5000</button>
    <button name="price2">5000-10000</button>
    <button name="price3">>10000</button>
  </div>
</div>
             
              <div class="dropdown">
  <button class="dropbtn" name="delivery">Delivery time</button>
  <div class="dropdown-content">
    <button name="time1">1 day</button>
    <button name="time2">2-3 days</button>
    <button name="time3">within 7 days</button>
  </div>
</div>
             
            </form>
          
            
          </ul>
            
           <?php
            
            if(isset($_POST['delivery'])){
            $searching = mysqli_real_escape_string($connection,$_POST['delivery']);
            $cols = "SELECT * from projects ";
            $results = mysqli_query($connection,$cols);
            $queryResults = mysqli_num_rows($results);
            
            if($queryResults > 0){
                while($rows = mysqli_fetch_assoc($results)){
                    ?>
            <br>
            <br><br><br>
             
      <div class="container" data-aos="fade-up">
                   <div class="row">
           
          <div class="col-lg-10 mt-4 ">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                  <h4>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["name"]; ?></h4>
                 <span>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                  echo $rows["price"]; ?></span>
                  <p>Delivery time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
                  
                  echo $rows["deliverytime"]; ?></p>
                   <p>Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["description"]; ?></p>
                
              </div>
            </div>
          </div>

            

          

        </div>
                      </div>
                     
            
            <?php
                }
                }
            }
            ?>
          
          
          <?php
            
            if(isset($_POST['price'])){
            $searching = mysqli_real_escape_string($connection,$_POST['price']);
            $cols = "SELECT * from projects ";
            $results = mysqli_query($connection,$cols);
            $queryResults = mysqli_num_rows($results);
            
            if($queryResults > 0){
                while($rows = mysqli_fetch_assoc($results)){
                    ?>
            <br>
            <br><br><br>
             
      <div class="container" data-aos="fade-up">
                   <div class="row">
           
          <div class="col-lg-10 mt-4 ">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                  <h4>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["name"]; ?></h4>
                 <span>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                  echo $rows["price"]; ?></span>
                  <p>Delivery time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
                  
                  echo $rows["deliverytime"]; ?></p>
                   <p>Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["description"]; ?></p>
                
              </div>
            </div>
          </div>

            

          

        </div>
                      </div>
                     
            
            <?php
                }
                }
            }
            ?>
          
           <?php
            
            if(isset($_POST['all'])){
            $searching = mysqli_real_escape_string($connection,$_POST['all']);
            $cols = "SELECT * from projects ";
            $results = mysqli_query($connection,$cols);
            $queryResults = mysqli_num_rows($results);
            
            if($queryResults > 0){
                while($rows = mysqli_fetch_assoc($results)){
                    ?>
            <br>
            <br><br><br>
             
      <div class="container" data-aos="fade-up">
                   <div class="row">
           
          <div class="col-lg-10 mt-4 ">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                  <h4>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["name"]; ?></h4>
                 <span>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                  echo $rows["price"]; ?></span>
                  <p>Delivery time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
                  
                  echo $rows["deliverytime"]; ?></p>
                   <p>Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["description"]; ?></p>
                
              </div>
            </div>
          </div>

            

          

        </div>
                      </div>
                     
            
            <?php
                }
                }
            }
            ?>
          
          
          <?php
            
            if(isset($_POST['time1'])){
            $searching = mysqli_real_escape_string($connection,$_POST['time1']);
            $cols = "SELECT * from projects WHERE deliverytime=1";
            $results = mysqli_query($connection,$cols);
            $queryResults = mysqli_num_rows($results);
            
            if($queryResults > 0){
                while($rows = mysqli_fetch_assoc($results)){
                    ?>
            <br>
            <br><br><br>
             
      <div class="container" data-aos="fade-up">
                   <div class="row">
           
          <div class="col-lg-10 mt-4 ">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                  <h4>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["name"]; ?></h4>
                 <span>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                  echo $rows["price"]; ?></span>
                  <p>Delivery time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
                  
                  echo $rows["deliverytime"]; ?></p>
                   <p>Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["description"]; ?></p>
                
              </div>
            </div>
          </div>

            

          

        </div>
                      </div>
                     
            
            <?php
                }
                }
            }
            ?>
          
            <?php
            
            if(isset($_POST['time2'])){
            $searching = mysqli_real_escape_string($connection,$_POST['time2']);
            $cols = "SELECT * from projects WHERE deliverytime>1 AND deliverytime<=3";
            $results = mysqli_query($connection,$cols);
            $queryResults = mysqli_num_rows($results);
            
            if($queryResults > 0){
                while($rows = mysqli_fetch_assoc($results)){
                    ?>
            <br>
            <br><br><br>
             
      <div class="container" data-aos="fade-up">
                   <div class="row">
           
          <div class="col-lg-10 mt-4 ">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                  <h4>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["name"]; ?></h4>
                 <span>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                  echo $rows["price"]; ?></span>
                  <p>Delivery time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
                  
                  echo $rows["deliverytime"]; ?></p>
                   <p>Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["description"]; ?></p>
                
              </div>
            </div>
          </div>

            

          

        </div>
                      </div>
                     
            
            <?php
                }
                }
            }
            ?>
          
            <?php
            
            if(isset($_POST['time3'])){
            $searching = mysqli_real_escape_string($connection,$_POST['time3']);
            $cols = "SELECT * from projects WHERE deliverytime>3";
            $results = mysqli_query($connection,$cols);
            $queryResults = mysqli_num_rows($results);
            
            if($queryResults > 0){
                while($rows = mysqli_fetch_assoc($results)){
                    ?>
            <br>
            <br><br><br>
             
      <div class="container" data-aos="fade-up">
                   <div class="row">
           
          <div class="col-lg-10 mt-4 ">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                  <h4>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["name"]; ?></h4>
                 <span>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                  echo $rows["price"]; ?></span>
                  <p>Delivery time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
                  
                  echo $rows["deliverytime"]; ?></p>
                   <p>Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["description"]; ?></p>
                
              </div>
            </div>
          </div>

            

          

        </div>
                      </div>
                     
            
            <?php
                }
                }
            }
            ?>
          
          
          
          
            <?php
            
            if(isset($_POST['price1'])){
            $searching = mysqli_real_escape_string($connection,$_POST['price1']);
            $cols = "SELECT * from projects WHERE price<5000";
            $results = mysqli_query($connection,$cols);
            $queryResults = mysqli_num_rows($results);
            
            if($queryResults > 0){
                while($rows = mysqli_fetch_assoc($results)){
                    ?>
            <br>
            <br><br><br>
             
      <div class="container" data-aos="fade-up">
                   <div class="row">
           
          <div class="col-lg-10 mt-4 ">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                  <h4>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["name"]; ?></h4>
                 <span>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                  echo $rows["price"]; ?></span>
                  <p>Delivery time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
                  
                  echo $rows["deliverytime"]; ?></p>
                   <p>Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["description"]; ?></p>
                
              </div>
            </div>
          </div>

            

          

        </div>
                      </div>
                     
            
            <?php
                }
                }
            }
            ?>
          
          <?php
            
            if(isset($_POST['price2'])){
            $searching = mysqli_real_escape_string($connection,$_POST['price2']);
            $cols = "SELECT * from projects WHERE price>5000 AND price<=10000";
            $results = mysqli_query($connection,$cols);
            $queryResults = mysqli_num_rows($results);
            
            if($queryResults > 0){
                while($rows = mysqli_fetch_assoc($results)){
                    ?>
            <br>
            <br><br><br>
             
      <div class="container" data-aos="fade-up">
                   <div class="row">
           
          <div class="col-lg-10 mt-4 ">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                  <h4>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["name"]; ?></h4>
                 <span>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                  echo $rows["price"]; ?></span>
                  <p>Delivery time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
                  
                  echo $rows["deliverytime"]; ?></p>
                   <p>Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["description"]; ?></p>
                
              </div>
            </div>
          </div>

            

          

        </div>
                      </div>
                     
            
            <?php
                }
                }
            }
            ?>
          
            <?php
            
            if(isset($_POST['price3'])){
            $searching = mysqli_real_escape_string($connection,$_POST['price3']);
            $cols = "SELECT * from projects WHERE price>10000";
            $results = mysqli_query($connection,$cols);
            $queryResults = mysqli_num_rows($results);
            
            if($queryResults > 0){
                while($rows = mysqli_fetch_assoc($results)){
                    ?>
            <br>
            <br><br><br>
             
      <div class="container" data-aos="fade-up">
                   <div class="row">
           
          <div class="col-lg-10 mt-4 ">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                  <h4>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["name"]; ?></h4>
                 <span>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                  echo $rows["price"]; ?></span>
                  <p>Delivery time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
                  
                  echo $rows["deliverytime"]; ?></p>
                   <p>Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows["description"]; ?></p>
                
              </div>
            </div>
          </div>

            

          

        </div>
                      </div>
                     
            
            <?php
                }
                }
            }
            ?>
          
          </div></section></section>
      
      
      
        <?php      
          
          
          
          if(isset($_POST['submit-search'])){
              $search = mysqli_real_escape_string($connection,$_POST['search']);
              $sql = "SELECT * from projects WHERE name LIKE '%$search%' OR description LIKE '%$search%' OR price LIKE '%$search%' OR deliverytime LIKE '%$search%'";
              $result = mysqli_query($connection,$sql);
              $queryResult= mysqli_num_rows($result);
              
              if($queryResult > 0){
              while($row = mysqli_fetch_assoc($result)){
           
                  ?>
                  
                  <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
                   <div class="row">
           
          <div class="col-lg-10 mt-4 ">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                  <h4><a href="inner-page.php?name=<?php echo $row["name"]; ?>&price=<?php echo $row["price"]; ?>&description=<?php echo $row["description"];?>&deliverytime=<?php echo $row["deliverytime"]; ?>">Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["name"]; ?></a></h4>
                 <span><a href="inner-page.php?name=<?php echo $row["name"]; ?>&price=<?php echo $row["price"]; ?>&description=<?php echo $row["description"];?>&deliverytime=<?php echo $row["deliverytime"]; ?>">Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                  echo $row["price"]; ?></a></span>
                  <p><a href="inner-page.php?name=<?php echo $row["name"]; ?>&price=<?php echo $row["price"]; ?>&description=<?php echo $row["description"];?>&deliverytime=<?php echo $row["deliverytime"]; ?>">Delivery time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
                  
                  echo $row["deliverytime"]; ?></a></p>
                  <p><a href="inner-page.php?name=<?php echo $row["name"]; ?>&price=<?php echo $row["price"]; ?>&description=<?php echo $row["description"];?>&deliverytime=<?php echo $row["deliverytime"]; ?>">Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["description"]; ?></a></p>
                
              </div>
            </div>
          </div>

            

          

        </div>
                      </div>
          </section>
    <?php          }
              }else{
                  
              }
          }
          ?>

        <!-- End Portfolio Details Section -->
      <hr>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Website Name</h3>
            <p>
              New Delhi<br>
              India <br><br>
             
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Contact us here to buy the software </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
              
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>