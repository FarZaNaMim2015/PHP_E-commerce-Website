
<?php
// Define the background color based on some condition or user input
$backgroundColor = 'lightblue'; // Default color

// Example of setting the background color based on a condition

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body style="background-color: <?php echo htmlspecialchars($backgroundColor, ENT_QUOTES, 'UTF-8'); ?>;">
   
</body>
</html>

<footer class="footer" >

   <section class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="shop.php"> <i class="fas fa-angle-right"></i> shop</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> contact</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="cart.php"> <i class="fas fa-angle-right"></i> cart</a>
         <a href="wishlist.php"> <i class="fas fa-angle-right"></i> wishlist</a>
         <a href="login.php"> <i class="fas fa-angle-right"></i> login</a>
         <a href="register.php"> <i class="fas fa-angle-right"></i> register</a>
      </div>

      <div class="box" >
      <h3>contact info</h3>
         <p> <i class="fas fa-phone"></i>016***41705 </p>
         <p> <i class="fas fa-phone"></i> 0193***0776 </p>
         <p> <i class="fas fa-envelope"></i> Mithila@gmail.com </p>
         <p> <i class="fas fa-map-marker-alt"></i> Narayanganj,Dhaka,Bangladesh </p>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </section>

 

</footer>