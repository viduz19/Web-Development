<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="MenuStyle.css">
</head>
<!----------------------------------------------------------- header ----------------------------------------------->
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
       <!-- <a href="#"></i> Contact</a> -->
        <a href="login.html" class="aj_btn"> <i class="fas fa-lock" aria-hidden="true"></i>
          LOGIN</a>
        <a href="Contactus.html" class="aj_btn"> <i class="fas fa-phone" aria-hidden="true"></i> 
           Contact  </a>     
      </nav>
    </div>
  </header>

<!----------------------------------------------------------- header end------------------------------------------------->


<body class="b1">
    
    <div class="container">
        <header class="header1">
            <h1>Menu</h1>
            <div class="shopping">
                <img src="cart-shopping-solid (1).svg">
                <span class="quantity">0</span>
            </div>
        </header>

        <div class="list">
          
        </div>
    </div>
    <div class="cart">
        <h1>Cart</h1>
        <ul class="listCart">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>

            <a href="login.php">
            <button class="place_btn">Place oder</button>
            </a>
        </div>
    </div>

    <script src="Menujs.js"></script>
</body>
</html>