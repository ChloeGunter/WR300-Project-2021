<?php  
include('parse.php');
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr" class="no-js">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome Page</title>
  <link rel="icon" href="images/logo_grey.png" type="image/gif">
  <link rel="stylesheet" href="https://use.typekit.net/lyj1kmp.css">
  <link href="css/reset.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body class="dhome">
<header> 
        <a href="index.html" class="logo"><img src="images/logo_grey.png" alt="logo"></a>
        <button class="ticket_button"><a href="#purchase_tickets" class="purchase_tickets">TICKETS<svg role="icon" viewBox="0 0 448 512" style="enable-background:new 0 0 448 512;">
       <path class="arrow" d="M190.5,66.9l22.2-22.2c9.4-9.4,24.6-9.4,33.9,0L441,239c9.4,9.4,9.4,24.6,0,33.9L246.6,467.3
         c-9.4,9.4-24.6,9.4-33.9,0l-22.2-22.2c-9.5-9.5-9.3-25,0.4-34.3L311.4,296H24c-13.3,0-24-10.7-24-24v-32c0-13.3,10.7-24,24-24h287.4
         L190.9,101.2C181.1,91.9,180.9,76.4,190.5,66.9z"/>
       </svg></a></button>
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
  <video class="video_hero" autoplay muted loop>
      <source src="videos/vangogh.mp4" type="video/mp4">
    </video>
    </section>
</main>

<footer class="flex">
  <a href="index.html" class="logo" ><img src="images/logo_white.png" alt="Beyond VanGogh Logo"></a>
  <section class="flex">
    <figure>
      <h1>Contact Us</h1>
      <figcaption class="email_link"><a href="mailto:Hello@VanGoghSanDiego.com" target="_blank" title="mail">Hello@VanGoghSanDiego.com</a></figcaption>
      <a href="https://www.facebook.com/" target="_blank" title="facebook"><svg role="icon" viewBox="0 0 448 512" style="enable-background:new 0 0 448 512;">
     <path class="social_icons" d="M400,32H48C21.5,32,0,53.5,0,80v352c0,26.5,21.5,48,48,48h137.2V327.7h-63V256h63v-54.6
       c0-62.2,37-96.5,93.7-96.5c27.1,0,55.5,4.8,55.5,4.8v61h-31.3c-30.8,0-40.4,19.1-40.4,38.7V256h68.8l-11,71.7h-57.8V480H400
       c26.5,0,48-21.5,48-48V80C448,53.5,426.5,32,400,32z"/>
     </svg>
     </a>

      <a href="https://www.instagram.com/" target="_blank" title="instagram"><svg version="1.1" id="Layer_1" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" viewBox="0 0 448 512" style="enable-background:new 0 0 448 512;" xml:space="preserve">
        
     <path class="social_icons" d="M224.1,141c-63.6,0-114.9,51.3-114.9,114.9s51.3,114.9,114.9,114.9S339,319.5,339,255.9S287.7,141,224.1,141z
        M224.1,330.6c-41.1,0-74.7-33.5-74.7-74.7s33.5-74.7,74.7-74.7s74.7,33.5,74.7,74.7S265.2,330.6,224.1,330.6L224.1,330.6z
        M370.5,136.3c0,14.9-12,26.8-26.8,26.8c-14.9,0-26.8-12-26.8-26.8s12-26.8,26.8-26.8S370.5,121.5,370.5,136.3z M446.6,163.5
       c-1.7-35.9-9.9-67.7-36.2-93.9c-26.2-26.2-58-34.4-93.9-36.2c-37-2.1-147.9-2.1-184.9,0C95.8,35.1,64,43.3,37.7,69.5
       s-34.4,58-36.2,93.9c-2.1,37-2.1,147.9,0,184.9c1.7,35.9,9.9,67.7,36.2,93.9s58,34.4,93.9,36.2c37,2.1,147.9,2.1,184.9,0
       c35.9-1.7,67.7-9.9,93.9-36.2c26.2-26.2,34.4-58,36.2-93.9C448.7,311.3,448.7,200.5,446.6,163.5L446.6,163.5z M398.8,388
       c-7.8,19.6-22.9,34.7-42.6,42.6c-29.5,11.7-99.5,9-132.1,9s-102.7,2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6
       c-11.7-29.5-9-99.5-9-132.1s-2.6-102.7,9-132.1c7.8-19.6,22.9-34.7,42.6-42.6c29.5-11.7,99.5-9,132.1-9s102.7-2.6,132.1,9
       c19.6,7.8,34.7,22.9,42.6,42.6c11.7,29.5,9,99.5,9,132.1S410.5,358.6,398.8,388z"/>
     </svg>
    </a>
    </figure>
    <figure>
      <h1>Let Us Update You!</h1>
      <p>Daily tickets will be limited, so interested guests are encouraged to SIGN UP to receive updates detailing dates, venue, and ticket on-sale!</p>
      <form class="emailform flex" name="emailform" id="emailform" method="post" action="welcome.php" novalidate>
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/menu.js" type="text/javascript"></script>
<script src="js/accordion.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
</body>

</html>