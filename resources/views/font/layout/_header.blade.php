
    <!DOCTYPE HTML>
    <html>
    <head>
    <title>New Shop a E-Commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!--css-->
    <link href="{{ asset('/') }}font/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('/') }}font/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/') }}font/css/font-awesome.css" rel="stylesheet">
    <!--css-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="{{ asset('/') }}font/js/jquery.min.js"></script>
    <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <!--search jQuery-->
        <script src="{{ asset('/') }}font/js/main.js"></script>
    <!--search jQuery-->
    <script src="{{ asset('/') }}font/js/responsiveslides.min.js"></script>
     <script>
        $(function () {
          $("#slider").responsiveSlides({
              auto: true,
              nav: true,
              speed: 500,
            namespace: "callbacks",
            pager: true,
          });
        });
     </script>
     <!--mycart-->
    <script type="text/javascript" src="{{ asset('/') }}font/js/bootstrap-3.1.1.min.js"></script>
     <!-- cart -->
    <script src="{{ asset('/') }}font/js/simpleCart.min.js"></script>
    <!-- cart -->
      <!--start-rate-->
    <script src="{{ asset('/') }}font/js/jstarbox.js"></script>
        <link rel="stylesheet" href="{{ asset('/') }}font/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
            <script type="text/javascript">
                jQuery(function() {
                jQuery('.starbox').each(function() {
                    var starbox = jQuery(this);
                        starbox.starbox({
                        average: starbox.attr('data-start-value'),
                        changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                        ghosting: starbox.hasClass('ghosting'),
                        autoUpdateAverage: starbox.hasClass('autoupdate'),
                        buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                        stars: starbox.attr('data-star-count') || 5
                        }).bind('starbox-value-changed', function(event, value) {
                        if(starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' '+val);
                        return val;
                        }
                    })
                });
            });
            </script>
    <!--//End-rate-->
    </head>
    <body>
        <!--header-->
            <div class="header">
                <div class="header-top">
                    <div class="container">
                         <div class="top-left">
                            <a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +0123-456-789</a>
                        </div>
                        <div class="top-right">
                        <ul>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="registered.html"> Create Account </a></li>
                        </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="heder-bottom">
                    <div class="container">
                        <div class="logo-nav">
                            <div class="logo-nav-left">
                                <h1><a href="index.html">New Shop <span>Shop anywhere</span></a></h1>
                            </div>
                            <div class="logo-nav-left1">
                                <nav class="navbar navbar-default">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header nav_2">
                                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                    <ul class="nav navbar-nav">
                                        @foreach ($category as $category )
                                        <li class="active"><a href="{{ route('category-product',['id'=>$category->id])}}" class="act">{{$category->category_name }}</a></li>

                                        @endforeach


                                    </ul>
                                </div>
                                </nav>
                            </div>
                            <div class="logo-nav-right">
                                <ul class="cd-header-buttons">
                                    <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                                </ul> <!-- cd-header-buttons -->
                                <div id="cd-search" class="cd-search">
                                    <form action="#" method="post">
                                        <input name="Search" type="search" placeholder="Search...">
                                    </form>
                                </div>
                            </div>
                            <div class="header-right2">
                                <div class="cart box_1">
                                    <a href="checkout.html">
                                        <h3> <div class="total">
                                            <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                                            <img src="{{ asset('/') }}font/images/bag.png" alt="" />
                                        </h3>
                                    </a>
                                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header-->
            <!--banner-->
            <div class="banner-w3">
                <div class="demo-1">
                    <div id="example1" class="core-slider core-slider__carousel example_1">
                        <div class="core-slider_viewport">
                            <div class="core-slider_list">
                                <div class="core-slider_item">
                                    <img src="{{ asset('/') }}font/images/b1.jpg" class="img-responsive" alt="">
                                </div>
                                 <div class="core-slider_item">
                                     <img src="{{ asset('/') }}font/images/b2.jpg" class="img-responsive" alt="">
                                 </div>
                                <div class="core-slider_item">
                                      <img src="{{ asset('/') }}font/images/b3.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="core-slider_item">
                                      <img src="{{ asset('/') }}font/images/b4.jpg" class="img-responsive" alt="">
                                </div>
                             </div>
                        </div>
                        <div class="core-slider_nav">
                            <div class="core-slider_arrow core-slider_arrow__right"></div>
                            <div class="core-slider_arrow core-slider_arrow__left"></div>
                        </div>
                        <div class="core-slider_control-nav"></div>
                    </div>
                </div>
                <link href="{{ asset('/') }}font/css/coreSlider.css" rel="stylesheet" type="text/css">
                <script src="{{ asset('/') }}font/js/coreSlider.js"></script>
                <script>
                $('#example1').coreSlider({
                  pauseOnHover: false,
                  interval: 3000,
                  controlNavEnabled: true
                });

                </script>

            </div>
