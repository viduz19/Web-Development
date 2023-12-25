
<?php
   $con = mysqli_connect("localhost","root","","morito");


      $email=$_POST['email'];
      $password=$_POST['password'];
     
      $result=mysqli_query($con,"SELECT * FROM login WHERE email= '$email' and password= '$password'");
      $test=mysqli_fetch_array($result);
      $rows=mysqli_num_rows( $result);
      if($rows>0){
      
         echo 'You have logged in successfully';
         header('location:pf.php');
         
      } 
      else{
        echo 'You have entered invalid username or password';
         exit();
        }
        ?> 