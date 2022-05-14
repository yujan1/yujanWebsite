<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Keywords" content="HTML,CSS,jQuery,Bootstrap,Web development,programming,portfolio,source code,colors,demos,personal">
  <meta name="Description" content="Well designed, easy to understand and use">

  <title>Portfolio</title>

  <!-- =============== Favicon ===================== -->
  <link rel="shortcut icon" type="image/png" href="images/favicon.png">
  <!-- CSS LINK PART START  -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/heading.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>

<body data-spy="scroll" data-target="#navbar-example">
  <!-- PRELOADER & BACK BUTTON PART START  -->
  <div id="page-anim-preloader">
    <div class="page_preloader-inner">
      <div id="circle" class="circle">
        <div class="loader">
          <div class="loader">
            <div class="loader">
              <div class="loader"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php $link = mysqli_connect("localhost", "root", "", "mega_2nd_sem");

  if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  } 
  else{
    $banner = "SELECT * FROM banner_logo WHERE is_active = 1";
    $bannerQuery = mysqli_query($link, $banner);
    $bannerRow = mysqli_fetch_row($bannerQuery);

    $about = "SELECT * FROM about_me WHERE is_active = 1";
    $aboutQuery = mysqli_query($link, $about);
    $aboutRow = mysqli_fetch_row($aboutQuery);

    $social = "SELECT * FROM social_site WHERE is_active = 1";
    $socialQuery = mysqli_query($link, $social);

    $service = "SELECT * FROM services WHERE is_active = 1";
    $serviceQuery = mysqli_query($link, $service);

    $hire = "SELECT * FROM cv WHERE is_active = 1";
    $cvQuery = mysqli_query($link, $hire);
    $cvRow = mysqli_fetch_row($cvQuery);

    $footer = "SELECT * FROM footer_info ";
    $footerQuery = mysqli_query($link, $footer);
    $footerRow = mysqli_fetch_row($footerQuery);

    
  } 

  ?>

  <div id="top_to">
    <i class="fa fa-chevron-up"></i>
  </div>
  <!-- MENU PART START -->

  <section id="header" class="header_area">
    <!-- NAV AREA CSS -->
    <div class="nav_area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <!-- MENU AREA STARTS HERE -->
            <div class="menu_area">
              <div class="logo_container">

              </div>
              <div class="main_menu">
                <!-- nav toggle hamberger -->
                <a class="menu_toggler" href="#">
                  <i class="fa fa-align-left"></i>
                </a>
                <div class="offset_menu" id="navbar-example">
                  <div class="menu_wrapper">
                    <div class="cross">
                      <span class="left"></span>
                      <span class="right"></span>
                    </div>
                    <ul>
                      <li><a href="#about">About Me</a></li>
                      <li><a href="#service">My Services</a></li>
                      <li><a href="#portfolio">My Portfolio</a></li>
                      <li><a href="#testi">Testimonial</a></li>
                      <li><a href="#contact">Contact Me</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Banner PART START -->

  <section id="banner_header" class="header_area2">
    <div id="particles-js"></div>
    <div class="container">
      <div class="row banner_text">
        <div class="col-lg-2 offset-lg-4 col-md-3 offset-md-3">
          <h1>Hi!</h1>
        </div>
      </div>
      <div class="row banner_text">
        <div class="col-lg-5 offset-lg-4 col-md-8 offset-md-3">
          <h2><?=$bannerRow[3]?></h2>
        </div>
      </div>
      <div class="row banner_text">
        <div class="col-lg-4 offset-lg-5 col-md-8 offset-md-3 type_text">
          <h1 class="cd-headline clip is-full-width">
            <span>A<br></span>
            <span class="cd-words-wrapper">
              <b class="is-visible">Graphics Designer</b>
              <b>Web Designer</b>
              <b>Web Developer</b>
            </span>
          </h1>
        </div>
        <div class="banner_image">
          <img src="https://localhost/mega/admin/uploads/banner/<?=$bannerRow[2]?>" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>


  <!-- About me PART START  -->
  <section id="about" class="about_me">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="about_part">
            <img src="https://localhost/mega/admin/uploads/about/<?=$aboutRow['1']?>" class="img-fluid" alt="img">
          </div>
          <div class="chatbox">
            <a data-toggle="collapse" data-parent="#accordion" href="#popup"><i class="far fa-comments"></i></a>
          </div>
        </div>

        <div class="col-lg-8 col-md-6">
          <div class="heading gap">
            <h4>Who Am I ?</h4>
            <h2>About Me</h2>
            <?=$aboutRow[2];?>
          </div>

          <div class="about_social">
            <h3>Get Social:</h3>
            <ul>
              <?php while($row = $socialQuery->fetch_assoc()) { ?>
                <li><a href="<?=$row['url']?>" target="_blank"><i class="<?=$row['icon']?>"></i></a></li>
              <?php } ?>
              <!-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li> -->
            </ul>
          </div>

          <div class="clr"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About me PART End  -->

<!-- Services PART START  -->
<section id="service" class="my_services common">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading text-center">
          <h4>What I Do ?</h4>
          <h2>My Services</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="service_inner" class="my_services">
  <div class="container">
    <div class="row service_slic">
      <?php while($row = $serviceQuery->fetch_assoc()) { ?>
        <div class="col-md-4">
          <div class="service_inner graphice text-center">
            <div class="interest_icon">
              <img src="https://localhost/mega/admin/uploads/services/<?=$row['image']?>" class="img-fluid service_img" alt="">
              <img src="https://localhost/mega/admin/uploads/services/<?=$row['image']?>" class="img-fluid service_img_hover" alt="">
            </div>
            <h4><?=$row['skills']?></h4>
            <?=$row['description']?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- Services PART End  -->

<!-- My portfolio PART START  -->
<section id="portfolio" class="portfolio common">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading text-center port_bot">
          <h4>What I Did ?</h4>
          <h2>My Portfolio</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="filter-section">
  <div class="filter-container isotopeFilters portfolio_fillter">
    <div class="all-latest-project">
      <div class="filter-container isotopeFilters portfolio_fillter">
        <ul class="list-inline filter">
          <li class="filter" data-filter="*">ALL <span>|</span></li>
          <li class="filter" data-filter=".photography">Logo<span>|</span></li>
          <li class="filter" data-filter=".illustrations">Illustration<span>|</span></li>
          <li class="filter" data-filter=".websites">Web Template<span>|</span></li>
          <li class="filter" data-filter=".art">Others</li>
        </ul>
      </div>
    </div>
  </div>
  <div id="project_mix" class="container-fluid">
    <div class="col-lg-2 col-md-4 mix all illustrations art other portfolio_img p0">
      <img src="images/portfolio-1.jpg" class="img-fluid" alt="#">
      <div class="overlay">
        <a href="images/portfolio-1.jpg" data-fancybox>
          <div class="overlay_shape"><i class="fa fa-search-plus"></i></div>
        </a>
        <h3>3D Building</h3>
        <p>Category: Illustrations</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-4 mix all photography websites other portfolio_img p0">
      <img src="images/portfolio-2.jpg" class="img-fluid" alt="#">
      <div class="overlay">
        <a href="images/portfolio-2.jpg" data-fancybox>
          <div class="overlay_shape"><i class="fa fa-search-plus"></i></div>
        </a>
        <h3>3D Building</h3>
        <p>Category: Illustrations</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-4 mix all illustrations photography other portfolio_img p0">
      <img src="images/portfolio-6.jpg" class="img-fluid" alt="#">
      <div class="overlay">
        <a href="images/portfolio-6.jpg" data-fancybox>
          <div class="overlay_shape"><i class="fa fa-search-plus"></i></div>
        </a>
        <h3>3D Building</h3>
        <p>Category: Illustrations</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-4 mix all websites art other portfolio_img p0">
      <img src="images/portfolio-3.jpg" class="img-fluid" alt="#">
      <div class="overlay">
        <a href="images/portfolio-3.jpg" data-fancybox>
          <div class="overlay_shape"><i class="fa fa-search-plus"></i></div>
        </a>
        <h3>3D Building</h3>
        <p>Category: Illustrations</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-4 mix all photography websites other portfolio_img p0">
      <img src="images/portfolio-4.jpg" class="img-fluid" alt="#">
      <div class="overlay">
        <a href="images/portfolio-4.jpg" data-fancybox>
          <div class="overlay_shape"><i class="fa fa-search-plus"></i></div>
        </a>
        <h3>3D Building</h3>
        <p>Category: Illustrations</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-4 mix all websites art other portfolio_img p0">
      <img src="images/portfolio-5.jpg" class="img-fluid" alt="#">
      <div class="overlay">
        <a href="images/portfolio-5.jpg" data-fancybox>
          <div class="overlay_shape"><i class="fa fa-search-plus"></i></div>
        </a>
        <h3>3D Building</h3>
        <p>Category: Illustrations</p>
      </div>
    </div>

  </div>
  <div class="button-port">
    <a href="#"> browse all</a>
  </div>
</section>
<!-- My portfolio PART End  -->


<!-- Work with me PART START  -->
<section class="work_with">
  <div class="container">
    <div class="row">
      <div class="col-md-5 offset-md-2">
        <div class="with_me">
          <h3>Want to work with me?</h3>
          <p>Always feel Free to Contact & Hire me</p>
        </div>
      </div>
      <div class="col-md-3 offset-md-1">
        <div class="Hire_btn">
          <a target="_blank" href="https://localhost/mega/admin/uploads/cv/<?=$cvRow[1]?>">Hire Me</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Work with me PART End -->

<!-- Testimonial PART START -->
<section id="testi" class="common">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading text-center">
          <h4>What Think Client About Me?</h4>
          <h2>Testimonial</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="testimonial">
  <div class="container">
    <div class="row testimonial_slick">
      <div class="col-md-6">
        <div class="test_inner">
          <div class="testimonial_shape"></div>
          <div class="test_img">
            <img src="images/testimonial-2.png" class="img-fluid" alt="img">
          </div>
          <div class="testimonial_inner">
            <h3>Ahsan Rana</h3>
            <h5>Graphic Designer</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            <ul>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
            </ul>
            <span>Ahsanrana</span>
          </div>

        </div>

        <div class="clr"></div>
      </div>
      <div class="col-md-6">
        <div class="test_inner">
          <div class="testimonial_shape"></div>
          <div class="test_img">
            <img src="images/testimonial-1.png" class="img-fluid" alt="img">
          </div>

          <div class="testimonial_inner">
            <h3>Adreetanipa</h3>
            <h5>Web Designer</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            <ul>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star-half"></i></a></li>
              <li><a href="#"><i class="fa fa-star-half"></i></a></li>
            </ul>
            <span>Adreetanipa</span>
          </div>
        </div>
        <div class="clr"></div>
      </div>
      <div class="col-md-6">
        <div class="test_inner">
          <div class="testimonial_shape"></div>
          <div class="test_img">
            <img src="images/testimonial-1.png" class="img-fluid" alt="img">
          </div>
          <div class="testimonial_inner">
            <h3>Markeulas</h3>
            <h5>Graphic Designer</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            <ul>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star"></i></a></li>
              <li><a href="#"><i class="fa fa-star-half"></i></a></li>
            </ul>
            <span>Markeulas</span>
          </div>

        </div>

        <div class="clr"></div>
      </div>
    </div>
    <div class="arrow_test">
      <span>/</span>
    </div>
  </div>
</section>
<!-- Testimonial PART End -->

<!-- Contact PART START  -->
<section id="contact" class="contact_me common">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading center">
          <h4>How can you communicate?</h4>
          <h2>Contact Me</h2>
        </div>
      </div>

    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="form position">
          <form class="cont-inline flato">
            <div class="row">
              <div class="cont-group col-md-6">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="cont-group col-md-6">
                <input type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="cont-group col-md-12">
                <textarea cols="30" rows="10" placeholder="Message"></textarea>
              </div>
              <div class="cont-group col-md-12 text-center">
                <div class="send_btn">
                  <a href="#">Submit</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- Contact PART End -->

<!-- Footer PART START -->
<section id="footer" class="footer_part">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="footer_inner one">
          <a href="javascript:"><i class="fas fa-map-marker-alt"></i></a>
          <p><?=$footerRow[1]?></p>
        </div>
      </div>
      <div class="col-lg-3 offset-lg-1 col-md-4">
        <div class="footer_inner two">
          <a href="javascript:"><i class="fas fa-envelope"></i></a>
          <p><?=$footerRow[2]?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<footer id="sub-footer" class="footer-sub">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-12">
        <div class="footer_text">
          <a href="javascript:">Copyright © 2022. All rights reserved.</a>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Footer PART END  -->

<!-- Get_social PART START -->
<section class="social_icon">
  <ul>
    <li>
      <a target="_blank" href="https://localhost/mega/admin/uploads/cv/<?=$cvRow[1]?>"><i class="fa fa-key"></i>Hire Me</a>
    </li>
  </ul>
</section>



<!-- All js links -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/SmoothScroll.js"></script>
<script src="js/heading.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/app.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>