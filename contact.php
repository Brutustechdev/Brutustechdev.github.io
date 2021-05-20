<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="UTF-8">
    <title>Brutustech :: Contact Us</title>
    <?php include 'inc/meta.php'?>
	<!-- Favicon -->
	<link rel="icon" type="image/ico" href="img/favicon.png">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Material Design Iconic -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<!-- Custom Style -->
    <link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

</head>

<body>
	<!-- Header -->
	<header>
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php">
                        <img class="logo" src="img/logo.png" height="70px";width="20px alt="Desart">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Our Services</a>
                        </li><li class="nav-item">
                            <a class="nav-link" href="portfolio.php">Portfolio</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Contacts</a>
                        </li>
                    </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
     <!-- Banner Header -->
     <section class="section section-banner">
         <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                  <h2 class="title-h2">Contact us</h2>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                    </ol>
                  </nav>
                </div>
              </div>
         </div>
         <div class="section-banner__box">
            <div class="section-banner__thumb">
                <img class="section-banner__img" src="img/header-img.jpg" alt="Image Banner">
            </div>
        </div>
     </section>
    
    <!-- Contact Info -->
    <section class="section section-contact">
        <div class="container">

            <p class="before-title text-center">Be in touch</p>
            <h2 class="title-h2 text-center">Contact Info</h2>
            <p class="text-center after-title">We tried to provide you with the most necessary information, so that it would be easier for you to contact us in any way convenient for you.</p>

            <div class="row-contact">
            <div class="col-contact">
                <img src="img/icons/call.svg" alt="">
                <h3 class="title-h3">Call us</h3>
                <ul class="col-contact__list">
                    <li class="col-contact__list-item"><span>Phone:</span> +1 6547 78 98</li>
                    <li class="col-contact__list-item"><span>Fax:</span> +1 6547 88 99</li>
                </ul>
            </div>
            <div class="col-contact">
                <img src="img/icons/speech-bubble.svg" alt="">
                <h3 class="title-h3">Chat us</h3>
                <ul class="col-contact__list">
                    <li class="col-contact__list-item"><span>Skype:</span> desart_agency</li>
                    <li class="col-contact__list-item"><span>Telegram:</span> @desart</li>
                </ul>
            </div>
            <div class="col-contact">
                <img src="img/icons/location.svg" alt="">
                <h3 class="title-h3">Visit us</h3>
                <ul class="col-contact__list">
                    <li class="col-contact__list-item"><span>Address:</span> 555 W Madison St, Chicago, IL 60661, USA</li>
                </ul>
            </div>
            <div class="col-contact">
                <img src="img/icons/clock.svg" alt="">
                <h3 class="title-h3">Working hours</h3>
                <ul class="col-contact__list">
                    <li class="col-contact__list-item"><span>Mon - Fri:</span> 9 am till 6 pm</li>
                    <li class="col-contact__list-item"><span>Sat, Sun:</span> closed</li>
                </ul>
            </div>
            </div>
        </div>
    </section>

   <!--  <section class="section section-map">
        <iframe class="iframe-map" src="https://maps.google.com/maps?&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"></iframe>
    </section> -->

    <!-- Form -->
    <section class="section section-form">
        <div class="container">

            <p class="before-title text-center">let’s talk</p>
            <h2 class="title-h2 text-center">Send Us a Massage</h2>
            <p class="text-center after-title">We are always happy to talk with you. Be sure to write to us if you have any questions or need help and support.</p>

            <form method="post" action="inc/mail.php" id="contact-form">
                <div class="form">
                    <div class="response"></div>
                    <div class="form-item">
                        <input class="form__input name" name="fname" type="text" placeholder="First name" required="">
                    </div>
                    <div class="form-item">
                        <input class="form__input"  name="lname"type="text" placeholder="Last name" required="">
                    </div>
                    <div class="form-item">
                        <input class="form__input email" name="email" type="email" placeholder="Email address" required="">
                    </div>
                    <div class="form-item">
                        <input class="form__input"  name="pnumber" type="text" placeholder="Phone number" required="">
                    </div>
                    <div class="form-item w-100">
                        <textarea class="form__textarea" name="message" rows="3" placeholder="Enter your massage"></textarea>
                    </div>
                    <div class="form-item text-center">
                        <button type="button" class="btn btn-primary" id="submit">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Footer -->
    <?php include 'inc/footer.php'?>
    <!-- Footer -->

    <!-- Social Networks Fixed -->
    <ul class="social-networks">
        <li class="social-networks-item">
            <a href="#" class="social-networks-link" target="_blank"><i class="zmdi zmdi-facebook"></i> facebook</a>
        </li>
        <li class="social-networks-item">
            <a href="#" class="social-networks-link" target="_blank"><i class="zmdi zmdi-linkedin"></i> linkedin</a>
        </li>
        <li class="social-networks-item">
            <a href="#" class="social-networks-link" target="_blank"><i class="zmdi zmdi-twitter"></i> twitter</a>
        </li>
    </ul>

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">We are the Creative Digital Team</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lM02vNMRRB0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                </div>
        </div>
        </div>
    </div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Plugins -->
    <script src="js/validate.js"></script>
	<script src="js/plugins.js"></script>

</body>


<!-- Mirrored from my-templates.online/demo-content/desart/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 May 2021 07:39:39 GMT -->
</html>
