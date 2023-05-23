<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>fashion world</title>
  <link rel="stylesheet" href=".//css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light jon-header ">
    <div class="container">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">


          <li class="nav-item ">
            <a class="nav-link" href="#">HOME</a>
          </li>
          <a class="nav-link" href="Products.php">PRODUCTS</a></li>
          <a class="nav-link" href="Cart.php">CART</a></li>
          <a class="nav-link" href="aboutUs.html">ABOUT US</a></li>
          <a class="nav-link" href="#">CONTACT US</a></li>





        </ul>
        <div class="logo mx-auto mt-2 ">
          <img src=".//img/LOGO.png" alt="">
        </div>


      <?php
      session_start();
       
      if(isset($_SESSION['Name']))
      {
    
      
    echo ' <div class="text-center px-1" >
          <a href="./logout.php" class="w-100"><button class="btn btn-secondary"> Log-out
                  </button></a>

      </div>';
    }
else{
    echo '  <div class="text-center px-2" >
        <a href="./login.php" class="w-100"><button class="btn btn-secondary"> Log-in
                </button></a>
    </div>';
}


    ?>

        <form class="d-flex ml-auto ">
          <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="banner">
    <div class="banner-img">
      <img src=".//img/banner.jpg" alt="">
    </div>
    <div class="banner-title">
      <h1>HUNT THE PRE-OWNED</h1>
      <h1>SMART SHOPPING, BIG SAVINGS</h1>
    </div>

  </div>
  <section class="fashion-trends">
    <div class="container">
      <div class="fashion-box">
        <div class="title-style text-center ">
          <h1 class="">NEW ARRIVALS</h1>
        </div>

        <h1 class="text-center">WE promise to make your shopping more Fun & Easy</h1>
      </div>
      <div class="row">

        <div class="col-lg-4">
          <div class="trending-img">
            <img src=".//img/trend-1.jpg" alt="">
            <div class="overlay">

            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="trending-img">
            <img src=".//img/trend-2.jpg" alt="">
            <div class="overlay">

            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="trending-img">
            <img src=".//img/trend-3.jpg" alt="">
            <div class="overlay">

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="offer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center ">
          <img src=".//img/exclusive.jpeg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="subscribe">
            <h2>HTP</h2>
            <H3>You can buy new as well as pre-owned fashion for all. We desire to inspire, update
              and inform you of current fashion trends.</H3>
          </div>
        </div>
      </div>
    </div>

    </div>

  </section>
  <section class="fashion-blog">
    <div class="title-style text-center ">
      <h1 class=""> NEW OFFERS</h1>
      <h5 class=""> check product descriptions</h5>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-lg-4 text-center">
          <div class="blog-img">
            <img src=".//img/blog-1.jpg" alt="">
          </div>
          <h5>New style of 50% off</h5>
        </div>
        <div class="col-lg-4 text-center">
          <div class="blog-img">
            <img src=".//img/blog-2.jpg" alt="">
          </div>
          <h5>But 2 Get 1 Free</h5>
        </div>
        <div class="col-lg-4 text-center">
          <div class="blog-img">
            <img src=".//img/product3.png" alt="">
          </div>
          <h5>Winter Wear at 50% off</h5>
        </div>
      </div>
    </div>
    </div>

  </section>
  <section class="fashion-brunds">
    <div class="title-style text-center ">
      <h1 class=""> CUSTOMERS FIRST </h1>
    </div>
    <div class="container">
      <div class="row text-center">

        <div class="col-lg-3">
          <div class="brand-logo">
            <img src=".//img/Offer.jpg" alt="">
            <p>SPECIAL OFFER</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="brand-logo">
            <img src=".//img/minOff.jpg" alt="">
            <p>MIN .50% OFF</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="brand-logo">
            <img src=".//img/cartIMG.jpg" alt="">
            <p>FREE DELEVERY</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="brand-logo">
            <img src=".//img/off.jpg" alt="">
            <p>UP TO 65% OFF</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="footer">
    <div class="row">
      <div class="col-lg-8 ">
        <p class="copyright"> Design </i>By Sameer and Jitten with ❤️</p>
      </div>
      <div class="col-lg-4">
        <div class="footer-icon">

          <i class="fab fa-facebook"></i>
          <i class="fab fa-youtube"></i>



        </div>
      </div>
    </div>

  </section>

  <!-- Optional JavaScript -->
  <!-- Popper.js first, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
</body>

</html>