<!DOCTYPE html>
<html lang="en">
  <head>
    <title>120-MTT | Darslar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <div class="py-2 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md-5 pr-4 d-flex topper align-items-center">
                            <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                            <span class="text">Olmazor tumani “Xislat” maxallasi,Nozimaxonim 7 tor kuchasi</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text">+ 998 71 214 87 02</span>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="?page=start&hook=Start">120-MTT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="?page=start&hook=Start" class="nav-link pl-0">Asosiy</a></li>
                <li class="nav-item"><a href="?page=start&hook=About" class="nav-link">Biz haqimizda</a></li>
                <li class="nav-item"><a href="?page=start&hook=Oqituvchilar" class="nav-link">O'qituvchilar</a></li>
                <li class="nav-item  active"><a href="?page=start&hook=Darslar" class="nav-link">Darslar</a></li>
                <li class="nav-item"><a href="?page=start&hook=Qiziqarli" class="nav-link">Qiziqarli</a></li>
              <li class="nav-item"><a href="?page=start&hook=Boglanish" class="nav-link">Bog'lanish</a></li>
              <li class="nav-item"><a href="?page=start&hook=Login" class="nav-link text-primary">Kirish</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Darslar</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Asosiy <i class="ion-ios-arrow-forward"></i></a></span> <span>Darslar <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
        <?php  foreach($courses as $course) { ?>
        <div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/<?php echo $course['image'] ?>); height : 150px; width : 150px;"></div>
						<div class="text bg-light p-4">
							<h3><a href="?page=start&hook=Darslar"><?php echo $course['name'] ?></a></h3>
						</div>
          </div>
        <?php  } ?>
				</div>
			</div>
		</section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-6">
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Biz bilan bog'lanish</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">Olmazor tumani “Xislat” maxallasi,Nozimaxonim 7 tor kuchasi</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+998 71 214 87 02 </span></a></li>
                  </ul>
                </div>
            </div>           
          </div>
          <div class="col-md-6 col-lg-6">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="?page=start&hook=Start" class="nav-link pl-0">> Asosiy</a></li>
                <li class="nav-item"><a href="?page=start&hook=About" class="nav-link">> Biz haqimizda</a></li>
                <li class="nav-item"><a href="?page=start&hook=Oqituvchilar" class="nav-link">> O'qituvchilar</a></li>
                <li class="nav-item"><a href="?page=start&hook=Darslar" class="nav-link">> Darslar</a></li>
                <li class="nav-item"><a href="?page=start&hook=Qiziqarli" class="nav-link">> Qiziqarli</a></li>
              <li class="nav-item"><a href="?page=start&hook=Boglanish" class="nav-link">> Bog'lanish</a></li>
            </ul>
            </div>
      </div>
      
    </footer>
    
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>