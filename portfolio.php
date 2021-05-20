<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="UTF-8">
    <title>Brutustech :: Portfolio</title>
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
                        <img class="logo" src="img/logo.png" height="70px";width="20px" alt="Desart">
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
                        </li><li class="nav-item active">
                            <a class="nav-link" href="portfolio.php">Portfolio</a>
                        </li>
                        
                        <li class="nav-item">
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
                 <h2 class="title-h2">Portfolio</h2>
                 <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
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

     <!-- Portfolio Tabs -->
     <section class="section section-portfolio">
         <div class="container">
            <ul class="nav nav-tabs nav-tabs-portfolio" id="Portfolio" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false">UI/UX Design</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="web-tab" data-toggle="tab" href="#web" role="tab" aria-controls="web" aria-selected="false">Web Development</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="seo-tab" data-toggle="tab" href="#seo" role="tab" aria-controls="seo" aria-selected="false">SEO Optimization</a>
                  </li>
              </ul>
              <div class="tab-content tab-portfolio" id="myTabContent">
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="box-portfolio">
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-1"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-2"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-3"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-4"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-5"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-6"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                    <div class="box-portfolio">
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-1"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="#">
                                <div class="portfolio-thumb portfolio-thumb-2"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-3"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-4"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-5"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-6"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Load more</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="web" role="tabpanel" aria-labelledby="web-tab">
                    <div class="box-portfolio">
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-1"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-2"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-3"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-4"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-5"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-6"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Load more</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                    <div class="box-portfolio">
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-1"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-2"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-3"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-4"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-5"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box-portfolio-item">
                            <a href="portfolio-details.php">
                                <div class="portfolio-thumb portfolio-thumb-6"> 
                                    <div class="portfolio-thumb__info">
                                        <p class="portfolio-thumb__name">Clean design concept</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Load more</a>
                        </div>
                    </div>
                </div>
              </div>
         </div>
         <div class="section-banner__box">
            <div class="section-banner__thumb">
                <img class="section-banner__img" src="img/header-img.jpg" alt="Image Banner">
            </div>
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
	<script src="js/plugins.js"></script>

</body>


<!-- Mirrored from my-templates.online/demo-content/desart/portfolio.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 May 2021 07:39:23 GMT -->
</html>
