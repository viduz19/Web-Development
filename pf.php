<!DOCTYPE html>

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<!--Import Files-->
 <link rel ="stylesheet" type = "text/css"  href = "pf.css">
  <link rel ="stylesheet" type = "text/css" href = "nav.css">

</head>
 <body style ="background:url(bg3.jpg)" ></body>

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

<!----------------------------------------------------------------------Login Forum------------------------------------------------>

<div class="delivery-box">

    <p>Delivery Details</p>

    <form action="pf1.php" method="POST">

      <div class="details-box">
            <input type = "text" name="name" required	>
            <label>Name</label>
      </div>

    <div class="details-box">
            <input type = "text"  name="address" required >
            <label>Address</label>
      </div>
		  
		  <div class="details-box">
        <input  type="email" name="email"  required>
        <label>Email</label>
      </div>
	  
	  
      <div class="details-box">
        <input type="text"  name="phone" required>
        <label>Phone Number </label>
      </div>

      <div class="Yorder">
        <a href="CheckOut.php">
        <button type="button">CheckOut</button>
      </a>
      </div>
    </form>
  </div>
</body>
</html>