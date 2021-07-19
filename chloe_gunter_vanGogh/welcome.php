<?php  
include('parse.php');
?>
<!DOCTYPE html class="no-js">
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/f12efb326b.js" crossorigin="anonymous"></script>
  <title>Welcome Page</title>
  <link rel="icon" href="images/logo_grey.png" type="image/gif">
  <link rel="stylesheet" href="https://use.typekit.net/lyj1kmp.css">
  <link href="css/reset.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body class="dhome">
  <header> 
        <a href="index.html" class="logo"><img src="images/logo_grey.png" alt="logo"></a>
        <a href="#purchase_tickets" class="purchase_tickets"><button class="ticket_button">TICKETS<i class="fas fa-arrow-right"></i></button></a> 
        <button class="hamburger hamburger--squeeze" title="open navigation" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      <nav id="main_nav" role="navigation">
        <ul class="global flex">
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="gallery.html">GALLERY</a></li>
          <li><a href="locations.html">LOCATIONS</a></li>
        </ul>
      </nav>
    </header>

<main>
  <section class="welcome">
    <h1>Thank You For Joining!</h1>
    <p class="welcome">You will be receiving detailed updates on dates, venue, and ticket on-sale!</p>
    <p>Beyond Van Gogh: The Immersive Experience will be in San Diego at the Wyland Center at Del Mar Fairgrounds for a limited engagement. Don’t miss this stunning journey into the world of Vincent Van Gogh!</p>
  </section>
</main>

<footer class="flex">
  <a href="index.html"><img src="images/logo_white.png" alt="Beyond VanGogh Logo"></a>
  <section class="flex">
    <figure>
      <h1>Contact Us</h1>
      <figcaption class="email_link"><a href="mailto:Hello@VanGoghSanDiego.com" target="_blank" title="mail">Hello@VanGoghSanDiego.com</a></figcaption>
      <a href="https://www.facebook.com/" target="_blank" title="facebook"><i class="fab fa-facebook-square"></i></a>
      <a href="https://www.instagram.com/" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a>
    </figure>
    <figure>
      <h1>Let Us Update You!</h1>
      <p>Daily tickets will be limited, so interested guests are encouraged to SIGN UP to receive updates detailing dates, venue, and ticket on-sale!</p>
      <form class="emailform flex" name="emailform" id="emailform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="email"></label>
        <input type="text" name="email" id="email" class="fsize" placeholder="YOUR EMAIL" />
  
  
        <input type="hidden" name="did_submit" value="true">
        <input type="submit" name="submit" value="SIGN ME UP" class="sign_me_up_button" />
        </form>
    </figure>
  </section>
</footer>

<div class="copyright">
  <small>© 2021 Beyond Van Gogh: The Immersive Experience. All Rights Reserved. | Privacy Policy</small>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/menu.js" type="text/javascript"></script>
<script src="js/accordion.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>


</html>