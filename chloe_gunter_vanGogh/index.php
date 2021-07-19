<?php  
include('parse.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/f12efb326b.js" crossorigin="anonymous"></script>
  <title>Home Page</title>
  <link rel="stylesheet" href="https://use.typekit.net/lyj1kmp.css">
  <link href="css/reset.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body class="dhome">
<header class="top_nav flex">
  <a href="index.html"><img src="images/logo_grey.png" alt="Beyond VanGogh Logo"></a>
  <div class="nav_bar flex">
  <button class="ticket_button"><a href="#purchase_tickets">TICKETS    <i class="fas fa-arrow-right"></i></a></button>
  <button class="hamburger hamburger--squeeze" title="open navigation" type="button">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
</div>

</header>
<nav id="main_nav" role="navigation">
  <ul class="global flex">
    <a href="about.html"><li>ABOUT</li></a>
    <a href="gallery.html"><li>GALLERY</li></a>
    <a href="locations.html"><li>LOCATIONS</li></a>
  </ul>
</nav>

<main>
  <section class="hero">
    <!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/WyyXYo7sdyU?autoplay=1&loop=1&autopause=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
    <h1>Van Gogh San Diego</h1>
    <p>Immerse yourself in Van Gogh’s artwork like you’ve never seen it before.
      <!-- Beyond Van Gogh: The Immersive Experience will be in San Diego at the Wyland Center at Del Mar Fairgrounds for a limited engagement. 
      Don’t miss this stunning journey into the world of Vincent Van Gogh!</p> -->
    <p class="date">FROM JANUARY 14, 2022 - MARCH 6, 2022</p>
    <button class="ticket_button"><a href="#purchase_tickets">TICKETS    <i class="fas fa-arrow-right"></i></a></button>
  </section>
<div class="cf">
  <section class="about_exhibit">

      <img class="wrap"src="images/about_exhibit_home.jpg" alt="">
    <h1>About Beyond<br>Van Gogh</h1>
    <p>In an imaginative and immersive presentation crafted for our unique times by world renowned audiovisual designers, Beyond Van Gogh uses cutting-edge projection technology to create an engaging journey into the world of Van Gogh. Using his dreams, his thoughts, and his words to drive the experience as a narrative,we move along projection swathed walls wrapped in light, colour, and shapes that swirl, dance and refocus into flowers, cafes and landscapes. Masterpieces, now freed from frames, come alive, appear and disappear, flow across multi-surfaces, the minutia of details titillating our heightened senses. Through his own words set to a symphonic score, we may come toa new appreciation of this tortured artist’s stunning work.</p>

  </section>
</div>

  <div class="exhibit_details flex">
  <figure>
    <img src="images/exhibit_details_home.jpg" alt="Exhibit Image1">
    <img src="images/exhibit_details2_home.jpg" alt="Exhibit Image2">
  </figure>
  <section class="exhibit_details_text flex">
    <div>
      <h1>Exhibit Details</h1>
      <h3>DURATION</h3>
      <p>The visit will take around one hour.</p>
      <h3>LOCATION</h3>
      <p>Wyland Center at Del Mar Fairgrounds:2260 Jimmy Durante Blvd, Del Mar, CA 92014</p>
      <h3>HEALTH AND SAFETY</h3>
      <p>Beyond Van Gogh is a walk-through exhibition that allows for 6ft distance between all attendees, and includes increased cleaning practices. Safety of the attendees is our top priority as we continue to follow the advice of public health agencies and government officials.</p>
      <button class="more_button"><a href="pages/about.html#exhibit_details">MORE    <i class="fas fa-arrow-right"></i></a></button>
    </div>
    <div>
      <img src="images/exhibit_details3_home.jpg" alt="Exhibit Image3">
    </div>
  </section>
</div>

<div class="purchase_tickets_parent">
  <section class="purchase_tickets">
    <h1>Purchase Tickets</h1>
    <figure class="pricing">
      <ul class="pricing_table">
        <li><span>Children</span>
          <span>Free</span></li>
        <li><span>Adults(Ages 6+)</span>
          <span>$10</span></li>
        <li><span>Parking</span>
          <span>$12</span></li>
          <p>Disabled parking is available at both the Solana/Green Gate and the Stable/Yellow Gate.</p>
      </ul>
      <button class="ticket_button"><a href="#">TICKETS    <i class="fas fa-arrow-right"></i></a></button>
    </figure>
  </section>
</div>

  <section class="faq">
    <h1>Frequently Asked Questions</h1>
    <article class="faq_accordin">
      <button class="accordin_item">What safety measures are in place for Covid-19?</button>
        <div class="accordin_body">
          <p></p>
        </div>

      <button class="accordin_item">Where do I buy tickets?</button>
        <div class="accordin_body">
          <p></p>
        </div>
      
      <button class="accordin_item">Is the show wheelchair accessible?</button>
        <div class="accordin_body">
          <p></p>
        </div>
      
      <button class="accordin_item">Can I bring my service animal?</button>
        <div class="accordin_body">
          <p></p>
        </div>
      
    </article>


    <figure class="email_questions">
      <h1>Still have questions?</h1>
      <p>Reach us at <a href="mailto:Hello@VanGoghSanDiego.com" target="_blank" title="mail">Hello@VanGoghSanDiego.com</a></p>
    </figure>
  </section>

<div class="about_artist_parent">
  <section class="about_artist flex">
    <button class="about_artist_button"><a href="pages/about.html">ABOUT THE ARTIST    <i class="fas fa-arrow-right"></i></a></button>
  </section>
</div>
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
      <form class="emailform flex" name="emailform" id="emailform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="email"></label>
        <input type="email" name="email" id="email" class="fsize" placeholder="YOUR EMAIL" />

        
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>


</html>