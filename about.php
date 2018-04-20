<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>About Domestic For You</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="css/stylesheet.css?v=1.0" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
  </head>
  <body>
  
    <?php
      include_once 'includes/mainNav.php';
    ?>

    <section class="otherPagesIntroSectionWrapper" id="opisw-about">
    </section>

    <section id="whyUsSection002Wrapper" class="universalPadding" style="background:;">
      <div class="mainWrapper">
        <section id="whyUsSection002Section">
          <p class="breadCrum001">About Us</p>
          <p class="p002" style="margin-bottom: 0">Domestic For You Private Limited is a small business which was founded in 2016 by the 2 Individual Partners to transform the Life of domestic workers.
          <br><br>
          Domestic For You Provides the Training, Placement for Domestic Workers and Deep Cleaning Service in Delhi NCR. We are Delhi based company with extensive skills and experience in our field. We specialise in providing domestic assistance to the employers. We are building our relationships with satisfied clients and candidates so we can build a successful and transparent company. 
          <br><br>
          Our main goal is to meet the expectations of Clients and Candidates to maintain a balance and thrive in business so we could only be known for our teams hard work and efficiency. Be a part of our journey to make your life easier and more productive.
          <br><br>
          Domestic For You is a well-established firm providing trustworthy domestic services to all its clients. If you are in need of a domestic help, then we have the right solution for you. We have maintained a large database of experienced and verified domestic workers that would match all your requirements. Our verification process is very reliable and transparent. The process starts with the collection of documents like their identity proofs and photographs. Next, we call the third party for further verification. This is done to ensure the safety of both the client as well as the candidate. Done with the documentation and verification, we provide the domestic worker that is matching all your requirements, right at your service.</p>
        </section>
      </div>
    </section>

    <section id="OurServicesWrapper001" class="universalPadding">
      <section class="servicesGrids001">
        <img src="images/placement.jpg">
        <div>
          <h2 class="h2002">Placements</h2>
          <p class="p002">We are here to find the people that would suit your needs, adapt to your lifestyle and accept you as a family and work for you for a long period.</p>
          <a href="placement.php" class="anchor001">Read more</a>
        </div>
      </section><section class="servicesGrids001">
        <img src="images/training.jpg">
        <div>
          <h2 class="h2002">Training</h2>
          <p class="p002">Training the person who is already working for you because we understand that people bond to others over time, but that does not mean you have to sacrifice over it. Contact us to Know more.</p>
          <a href="training.php" class="anchor001">Read more</a>
        </div>
      </section><section class="servicesGrids001">
        <img src="images/deep-cleaning.jpg">
        <div>
          <h2 class="h2002">Deep Cleaning</h2>
          <p class="p002">Our team will visit your home and clean your entire home in a specified time. Contact us to Know more</p>
          <a href="deep-cleaning.php" class="anchor001">Read more</a>
        </div>
      </section>
    </section>

    <?php
      include_once 'includes/mainFooter.php';
    ?>

    <?php
      include_once 'includes/gtag.php';
    ?>

    <script type="text/javascript">
      function _(e){
        return document.getElementById(e);
      };
    </script>
    <script type="text/javascript" src="js/mainNav.js"></script>
  <script type="text/javascript">
    // main index intro animation

    var mainNavWrapper = _('mainNavWrapper');


    function init(){
      mainNavWrapper.style.top = 0;
    };

    window.onload = init;

  </script>
  </body>
</html>