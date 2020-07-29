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

    <section id="content">
        <div class="container_12">
            <div class="grid_4 bot-1">
                <h2 class="top-6">Biz bilan bog'lanish</h2>
                <div class="map">
                    <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                </div>
                <dl>
                    <dt>Toshkent shaxri <br>
                        Sebzor 17/18</dt>
                    <dd><span>Telefon: </span>+99871 240 3712</dd>
                </dl>
            </div>
            <div class="grid_8">
                <div class="block-1 top-5">
                    <div class="block-1-shadow">
                        <h2 class="clr-6">Fikr va takliflar</h2>
                        <form id="form" method="post" action="?page=start">
                            <fieldset>
                                <label><strong>ismingiz:</strong>
                                    <input type="text" value="" name="name">
                                    <strong class="clear"></strong></label>
                                <label><strong>Email:</strong>
                                    <input type="email" name="email" value="">
                                    <strong class="clear"></strong></label>
                                <label><strong>Xabar:</strong>
                                    <textarea name="message"></textarea>
                                    <strong class="clear"></strong></label>
                                <strong class="clear"></strong><span><?php if(isset($_SESSION['error']) && $_SESSION['error']){ echo $_SESSION['error']; $_SESSION['error'] = ''; } ?></span>

                                <div class="btns pad-2"><button type="submit" name="hook" value="Message">Jo'natish</button></div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
</div>
</body>
</html>
