<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8 " />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="ContactUs.css" />
    <link rel="stylesheet" href="nav.css" />

   

</head>

<body>
    <!-- Navigation Bar-->
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

   <section class="section3" >
    <h1 style="text-align: center;color :aliceblue; margin-top: 5px;">Contact Us </h1>
    <p style="color:#a78f17;text-align:center">Have a question, feedback, or craving to share?<br>
         We're here to help!
         Reach out to us for any inquiries or simply to say hello.<br> Whether it's about our menu, reservations, catering services,
         or just a chat about food, we're eager to hear from you.</p>
    <br>

    <div class="container1">

        <table>
            <tr>
                <td>
                    <div class="Contact">
                        <img src="bg5.jpg" width="700px" height="620px">

                    </div>
                </td>
                
                <td >

                    <form style ="align-content: center; margin-right: 0" method="POST" action="ContactAction.php" class="form">
                        <p class="title">Contact Us  </p>
                        <p class="message">Ask Us Anything </p>
                            <div class="flex">
                            
                            <label>
                                <input required="" name="name" placeholder="" type="text" class="input">
                                <span>Full Name</span>
                            </label>
                        </div>  
                                
                        <label>
                            <input required="" name="email"placeholder="" type="email" class="input">
                            <span>Email</span>
                        </label> 
                            
                        <label>
                            <input required="" name="mobile" placeholder="" type="tel" class="input">
                            <span>Phone No</span>
                            
                            
                        </label>
                        <label>
                            <input required="" name="msg" placeholder="" type="textarea" class="input" height="150px">
                            <span>message</span>
                        </label>
                        <button class="submit">Submit</button>
                        
                    </form>
                   
                    
                </td>
            
            </tr>

        </table>

    </div>
    <br>
    </section>
   
   </body>
   </html>
 