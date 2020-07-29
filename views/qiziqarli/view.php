<!DOCTYPE html>
<html lang="en">
<head>
    <title>MTT</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script>
        $(document)
            .ready(function () {
                $('.slider')
                    ._TMS({
                        show: 0,
                        pauseOnHover: true,
                        prevBu: '.prev',
                        nextBu: '.next',
                        playBu: false,
                        duration: 800,
                        preset: 'fade',
                        pagination: true,
                        pagNums: false,
                        slideshow: 7000,
                        numStatus: false,
                        banners: false,
                        waitBannerAnimation: false,
                        progressBar: false
                    })
            });
    </script>
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body>
<div class="main">
    <!--==============================header=================================-->
    <header>

        <nav>
            <div id="slide">
                <div class="slider">
                    <ul class="items">
                        <li><img src="images/slider-1.jpg" alt=""></li>
                        <li><img src="images/slider-2.jpg" alt=""></li>
                        <li><img src="images/slider-3.jpg" alt=""></li>
                    </ul>
                </div>
                <a href="#" class="prev"></a><a href="#" class="next"></a> </div>
            <ul class="menu">
                <li><a href="?page=start&hook=Start" class="clr-1">Asosiy</a></li>
                <li><a href="?page=start&hook=About" class="clr-2">Biz</a></li>
                <li><a href="?page=start&hook=Oqituvchilar" class="clr-3">tarbiyachi</a></li>
                <li><a href="?page=start&hook=Qiziqarli" class="clr-4">tadbirlar</a></li>
                <li><a href="?page=start&hook=Boglanish" class="clr-5">bog'lanish</a></li>
            </ul>
        </nav>
    </header>
    <!--==============================content================================-->
    <section id="content">
        <div class="container_12">
            <div class="grid_8">
                <div class="block-1 top-5">
                    <div class="block-1-shadow">
                        <div class="pag">
                            <div class="img-pags">
                                <ul>
                                    <?php foreach ($blogs as $blog) { ?>
                                    <li><a href="#"><span><img src="images/<?php echo $blog['image']; ?>" width="500px" height="400px" alt="" class="img-border"> </span></a></li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <!--==============================footer=================================-->

            </div>
            <div class="clear"></div>
        </div>
    </section>
</div>
</body>
</html>
