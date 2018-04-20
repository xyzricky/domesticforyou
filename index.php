<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Domestic For You</title>
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

    <section id="mainIndexIntroWrapper" class="animation1">
      <section id="mainIndexIntroOverlay"></section>
      <section id="mainIndexIntroSection">
        <h2 class="h2001 animation075">Domestic for you</h2>
        <p class="p001 animation075">Be a part of our journey to make your life easier and more productive.</p>
        <a href="contact.php" class="btn001 animation075">Contact us</a>
      </section>
    </section>

    <section id="mainAboutUsWrapper001" class="universalPadding">
      <div class="mainWrapper">
        <section id="mainAboutUsSection001">
          <div id="maus-content">
            <h2 class="h2002 h2WidthMargin01 h2002a">Few Words About Us</h2>
            <p class="p002">We are Delhi based company with extensive skills and experince in our field. We specialise in poviding domestic assisitance to people. Our main goal is to meet the expectations of Clients and candidates to mentain a balance.</p>
            <a href="about.php" class="anchor001">Read More</a>
          </div><div id="maus-img">
            <img src="images/coonall-food-dark-image-1.jpg"><img src="images/coonall-food-dark-image-2.jpg">
          </div>
        </section>
      </div>
    </section>

    <section class="sectionWithBg001Wrapper" id="SectionDivider001">
      <section class="sectionWithBg001Section">
        <h2 class="h2002 h2WidthMargin01 h2002a">Our Mission</h2>
        <p class="p002">Our main goal is to meet the expectations of Clients and Candidates to maintain a balance and thrive in business so we could only be known for our teams hard work and efficiency. Be a part of our journey to make your life easier and more productive.</p>
        <a href="about.php" class="anchor001">Read More</a>
      </section>
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

    <section class="sectionWithBg001Wrapper" id="SectionDivider002">
      <section class="sectionWithBg001Section">
        <h2 class="h2002 h2WidthMargin01 h2002a">Our Training</h2>
        <p class="p002">Our Trainer work with closely with the clients and domestic worker to understand their needs of the training. The Training curriculum has been specially designed based on the domestic worker and Support staff. We focused on providing Personal Hygiene, Kitchen Hygiene, Work Etiquettes and More.</p>
        <a href="about.php" class="anchor001">Read More</a>
      </section>
    </section>

    <section id="whyUsSection001Wrapper" class="universalPadding">
      <div class="mainWrapper">
        <section id="whyUsSection001Section">
          <div id="wus-content">
            <h2 class="h2002 h2WidthMargin01 h2002a">Why Us</h2>
            <p class="p002">Here are some of the reasons why you should give us a chance to serve you</p>
            <ul class="ul001">
              <li>
                <span>1.</span> Obligation free quotes
              </li><li>
                <span>2.</span> Request free quotes online
              </li><li>
                <span>3.</span> Confidence of using our service
              </li><li>
                <span>4.</span> Friendly team of passionate professional
              </li>
            </ul>
          </div><div id="wus-img">
            <img src="images/anise-aroma-art-277253.jpg">
          </div>
        </section>
      </div>
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

    var IntroH2 = _('mainIndexIntroSection').getElementsByTagName('h2')[0];
    var IntroP = _('mainIndexIntroSection').getElementsByTagName('p')[0];
    var IntroAnchor = _('mainIndexIntroSection').getElementsByTagName('a')[0];
    var MainIndexIntro = _('mainIndexIntroWrapper');
    var liiaOthers = false;
    var mainNavWrapper = _('mainNavWrapper');

    function loadIndexIntroAnimationExteded(){
      IntroH2.style.opacity = 1;
      IntroH2.style.top = 0;
      setTimeout(function(){
        IntroP.style.opacity = 1;
        IntroP.style.top = 0;
        setTimeout(function(){
          IntroAnchor.style.opacity = 1;
          IntroAnchor.style.top = 0;
        }, 200)
      }, 200);
    }

    function loadIndexIntroAnimation(){
      if(window.innerWidth >= 1100){
          MainIndexIntro.style.height = '650px';
          liiaOthers = true;
          setTimeout(function(){
            mainNavWrapper.style.top = 0;
          },1000);
      }

      if(window.innerWidth >= 950){
        if(liiaOthers){
          setTimeout(function(){
            loadIndexIntroAnimationExteded();
          }, 1000);
        }else{
          loadIndexIntroAnimationExteded();
        };
      };
    }

    function init(){
      loadIndexIntroAnimation();
    };

    window.onload = init;

  </script>
  </body>
</html>