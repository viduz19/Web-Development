<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Morito Restaurant</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="h_style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  </head>
  <body>
    <header>
      <div class="inner-width">
        <h1 class="logo">  
          <img src="logo.png"  height="40px"></h1>
          <i class="menu-toggle-btn fas fa-bars"></i>
<!------------------------------------------------------------- Navigation Bar ---------------------------------------------------------->        
        <nav class="navigation-menu">
          <a href="Home.html"><i class="fas fa-home home"></i> Home</a>
          <a href="#about-us"></i> About Us</a>
          <a href="#services"></i> Services</a>
          <a href="Menu.html"></i> Menu</a>         
          <a href="login.html" class="aj_btn"> <i class="fas fa-lock" aria-hidden="true"></i>
            LOGIN</a>
          <a href="Contactus.html" class="aj_btn"> <i class="fas fa-phone" aria-hidden="true"></i> 
             Contact  </a>     
        </nav>
      </div>
    </header>
<!------------------------------------------------------------- Background img ---------------------------------------------------------->
     <div class="container">
      <img src="bg3.png" height="650px" width="1520px" alt="">
  
  
      <div class="centered">
        <br><br><br><br>
          <p class="p1"> For Happy Movement</p>
          <p class="p2"> Welcome to Our<br><span style="color:#efdb00;">Morito </span> Restaurant </p>


          <p class="p3"> If you're looking for "Food delivery near me,
            <br>" there's likely a Morito restaurant near you.
            <br>
            With locations throughout 12 cities, 
            <br>we're the 1st largest food chain in the entire country, 
            and we're still growing.</p>

        </div>
     </div>
    </div>
  </div>
  
<!---------------------------------------- About Us ------------------------------------------------------------------------------------>
  <section class="about-us" id="about-us">
    <div class="about-us__image">
      <div class="about-us__image-img1">
        <img src="b3.png" height="300px" width="400px"   />
      </div>
       
      <a href="Home.html" >
      <button class="about-us__button">
        Home
      </button>
    </a>

      <div class="about-us__image-img2">
        <img src="shape-7.png" height="300px" width="400px" />
      </div>
    </div>

    <div class="about-us__content"  data-aos="fade-left">
      <p class="food__subtitle">About Us</p>
      <h3 class="food__title">Our mission is to bring true Your favorite flavours to you.</h3>
      <p class="food__description">"Morito Restaurant, a subsidiary of Morito! Brands,<br>
        At Morito restaurant, we believe in crafting more than just meals; we create experiences. Nestled in the heart of Colombo,
        <br>
         our restaurant is a culinary haven where flavors meet innovation and hospitality greets warmth.</p>
    </div>
  </section>
  
  <!----------------------------------------Services -------------------------------------------------------------------------------->


  <section class="subscription flex-center" id="services">
    <h2 data-aos="flip-down">
      Get offers stright <br />
      to your inbox
    </h2>
    <p >Sign up for the Sushiman newsletter</p>

    <div class="subscription__form">
      <input type="text" placeholder="Enter your email address"/>
      <button>Get Started</button>
    </div>
  </section>

<!----------------------------------------Footer -------------------------------------------------------------------------------->
<footer>
  <div class="footer_main">
      <div class="footer-1">
          <h2>Location</h2>
          <p>Colomobo 7</p>
          <p>Maharagama</p>
          <p>Kurunegala</p>
          <p>Kandy</p>
          <p>Kottawa</p>
      </div>

      <div class="footer-1">
          <h2>Quick Link</h2>
          <p> <a href="Home.html">Home</a></p>
          <p> <a href="#about-us">About</a></p>
          <p> <a href="#services">Services</a></p>     
          <p> <a href="Menu.html">Menu</a></p>
          <p><a href="Contactus.html">Contact</a></p>
      </div>

      <div class="footer-1">
          <h2>Contact</h2>
          <p>+94 11 456 6789</p>
          <p>+94 11 456 7698</p>
          <p>MoritoRestaurant@gmail.com</p>
      </div>

      <div class="footer-1">
          <h2>Our Service</h2>
          <p>Fast Delivery</p>
          <p>Easy Payments</p>
          <p>24 x 7 Service</p>
      </div>

      <div class="footer-1">
          <h2>Follows</h2>
          <i class='fab fa-facebook-f' style='font-size:24px;color:white'></i>
          <i class='fab fa-twitter' style='font-size:24px;color:white'></i>
          <i class='fab fa-instagram' style='font-size:24px;color:white'></i>
  
      </div>
  </div>
</footer>


    <script src="h_javas.js"></script>
  </body>
</html>