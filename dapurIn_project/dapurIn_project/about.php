<!DOCTYPE php>
<html>

  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
  
    <title>dapurIn</title>
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap"
      rel="stylesheet" />
  
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
  </head>
  
  <body>
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
              <img src="images/logo.png" alt="" />
              <span>
                dapurIn
              </span>
            </a>
  
            <div class="navbar-collapse" id="">
              <div class="custom_menu-btn">
                <button onclick="openNav()">
                  <span class="s-1"> </span>
                  <span class="s-2"> </span>
                  <span class="s-3"> </span>
                </button>
              </div>
              <div id="myNav" class="overlay">
                <div class="overlay-content">
                  <a href="index.php">HOME</a>
                  <a href="about.php">ABOUT</a>
                  <a href="tools.php">Tools</a>
                  <a href="contact.php">Contact Us</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
    <!-- end header section -->
  </div>

  <!-- about section -->
  <section class="about_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <br>
                Our <br>
                Kitchen <br>
                Equipment
              </h2>
              <hr>
            </div>
            <p>
              Welcome to dapurIn! We are dedicated to providing high-quality kitchen appliances and tools to meet all your culinary needs. Whether you're a professional chef or a passionate home cook, we have a wide range of products to enhance your cooking experience.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/about_img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end about section -->

  <!-- subscribe section -->

  <section class="subscribe_section">
    <div class="container">
      <form action="">
        <div class="row">
          <div class="col-lg-3 col-md-4">
            <label for="subEmail">
              Our Newsletter
            </label>
          </div>
          <div class="col-lg-9 col-md-8">
            <div class="box">
              <input type="email" placeholder="Enter your email" id="subEmail">
              <button>
                Subscribe
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>

  <!-- end subscribe section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <div class="social_container">
      <h4>
        Follow on
      </h4>
      <div class="social-box">
        <a href="">
          <img src="images/fb.png" alt="">
        </a>
        <a href="">
          <img src="images/twitter.png" alt="">
        </a>
        <a href="">
          <img src="images/linkedin.png" alt="">
        </a>
        <a href="">
          <img src="images/youtube.png" alt="">
        </a>
      </div>
    </div>
    <p>
      &copy; 2023 All Rights Reserved. Design by
      <a href="https://html.design/">A N A N</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>

  <!-- owl carousel script -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 35,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->

</body>

</html>