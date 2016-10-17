
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/index.css" rel="stylesheet">

  <?php wp_head();?>  
  </head>

  <body>


    <div class="container">

    <div class="row greeting  ">
      
    <div class="col-md-3 hidden-md-down ">
        <p><img src="<?php bloginfo('template_directory'); ?>/hsmt2.png"></p>
    </div>
    <div class="col-lg-6 col-md-12 greeting">
       <h1>HEALTHY START</h1>
       
       <p class="hidden-sm-down">Transportation for Seniors and Disabled Persons</p>
    </div>

     <div class="col-md-3 hidden-md-down">
        <p>
          <img src="<?php bloginfo('template_directory'); ?>/fb.png" class="img-fluid d-inline" alt="Responsive image">
            <img src="<?php bloginfo('template_directory'); ?>/in.png" class="img-fluid d-inline" alt="Responsive image">
            <img src="<?php bloginfo('template_directory'); ?>/youtube-icon.png" class="img-fluid d-inline" alt="Responsive image">
            <img src="<?php bloginfo('template_directory'); ?>/icon-twitter.jpg" class="img-fluid d-inline" alt="Responsive image">
        </p>
        <h4>252-252-2445</h4>
        <h5 class="serving hidden-lg-down"> Serving Eastern Carolina </h5>

    </div>
  </div>
   <nav class="navbar navbar-light bg-faded ">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
          &#9776; Healthy Start
        </button>
        <div class="collapse navbar-toggleable-xs" id="navbar-header">
          
          <ul class="nav nav-pills m-x-auto">
            <li class="nav-item hidden-md-down">
              <a class="nav-link  " ></a>
            </li>
            <li class="nav-item hidden-md-down">
              <a class="nav-link  " ></a>
            </li>
            <li class="nav-item hidden-md-down">
              <a class="nav-link  " ></a>
            </li>
            <li class="nav-item hidden-md-down">
              <a class="nav-link  "></a>
            </li>
            <li class="nav-item hidden-md-down">
              <a class="nav-link  " ></a>
            </li>
           <li class="nav-item hidden-md-down">
            <a class="nav-link  "></a>
          </li>
         <li class="nav-item hidden-md-down">
            <a class="nav-link  " ></a>
        </li>

  <li class="nav-item">
    <a class="nav-link active" href="index.html">Home</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="about/why-hst.html">Why Health Start</a>
      <a class="dropdown-item" href="about/hst-team.html">Healthy Start Team</a>
      <a class="dropdown-item" href="about/FAQ.html">Frequently asked Questions</a>
      <a class="dropdown-item" href="about/testimonials.html">Testimonials</a>
      <a class="dropdown-item" href="about/relationships.html">Relationships</a>
      <a class="dropdown-item" href="about/policies.html">Policies</a>
    </div>
  </li>
   <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="services/transportation.html">Transportation</a>
      <a class="dropdown-item" href="services/medical-companion.html">Medical Companion</a>
      <a class="dropdown-item" href="services/grocery-delivery.html">Grocery Delivery</a>
      <a class="dropdown-item" href="services/airport-companion.html">Airport Companion</a>
      <a class="dropdown-item" href="services/personal-errands.html">Personal Errands</a>

    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">News & Events</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="services/transportation.html">Press Releases</a>
      <a class="dropdown-item" href="services/medical-companion.html">Events</a>
      <a class="dropdown-item" href="services/grocery-delivery.html">News Letter</a>

    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.html">Careers</a>
  </li>
  <li class="nav-item">
    <span class="nav-link"><?php wp_list_pages( '&title_li='); ?></span>
  </li>
  
</ul>
  </div>
      </nav> <!-- /navbar -->
            <div class="jumbotron">
        <div class="row heading">
        <h1 class="heading-title"><?php echo get_bloginfo( 'name' ); ?></h1>
        <p class="hidden-sm-down">Personal, hands-on assistance is the essence of our door through-door transportation services.</p>
        </div>
      </div>
      