<?php
    include '../assets/includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>EVEREST</title>

    <meta charset="UTF-8">
    <meta>

    <!-- Design -->
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="../assets/css/aos.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Icons -->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>


    <!-- Animations -->
    <link rel="stylesheet" href="../assets/css/jarallax.css">

</head>

<body>
    <!-- Loading --
    <section class="Loading">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </section>
    <!-- Loading End -->

    <!-- Navbar -->
    <header class="header smart-scroll">
        <div class="Container">
            <nav class="nav">
                <ul class="nav-list nav-list-mobile">
                    <li class="nav-item">
                        <div class="mobile-menu">
                            <span class="line line-top"></span>
                            <span class="line line-middle"></span><span class="line line-bottom"></span>
                            <div class="container-text-center">
                                <p>Made by
                                    <br>Gulomkhonov Bositkhon I.N.C
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link nav-link-web">
                            <span class="iconify" data-icon="emojione-monotone:mountain" data-inline="false"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link-bag"></a>
                    </li>
                </ul>
                <!--/.nav-list nav-list-mobile -->
                <ul class="nav-list nav-list-larger">
                    <li class="nav-item nav-item-hidden">
                        <a href="../index.php" class="nav-link nav-link-web">
                            <span class="iconify" data-icon="emojione-monotone:mountain" data-inline="false"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link hide">Home</a>
                    </li>
                    <li class="nav-item verein">
                        <a href="#about-us" class="nav-link hide">About Us<span class="iconify" data-icon="gridicons:dropdown" data-inline="false"></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link hide">News</a>
                    </li>
                    <li class="nav-item termine">
                        <a href="#" class="nav-link hide">Projects<span class="iconify" data-icon="gridicons:dropdown" data-inline="false"></span></a>
                    </li>
                    <li class="nav-item trainer">
                        <a href="#" class="nav-link hide">Media</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link hide">Contact/Support</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link hide">Corona-news</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" id="search" class="nav-link nav-link-search">
                            <span class="iconify" data-icon="bx:bx-search-alt-2" data-inline="false"></span>
                        </a>
                    </li>
                    <li class="nav-item nav-item-hidden-mobile">
                        <a class="nav-link close">
                            <span class="iconify" data-icon="clarity:window-close-line" data-inline="false"></span>
                        </a>
                    </li>
                </ul>
                <!--/.nav-list nav-list-desktop -->
                <ul class="nav-list nav-list-mobilescreen">
                    <li class="nav-item nav-item-hidden">
                        <a href="index.html" class="nav-link nav-link-web"><span class="iconify" data-icon="emojione-monotone:mountain" data-inline="false"></span>
                        </a>
                    </li>
                    <li class="nav-item">

                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about-us" class="nav-link">Verein</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">News</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Termine</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Trainer</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Medien</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Corona-news</a>
                    </li>
                    <li class="nav-item">
                        <a href="" id="search" class="nav-link nav-link-search">
                            <span class="iconify" data-icon="bx:bx-search-alt-2" data-inline="false"></span>
                        </a>
                    </li>
                    <li class="nav-item nav-item-hidden">
                        <a class="nav-link close">
                            <span class="iconify" data-icon="clarity:window-close-line" data-inline="false"></span>
                        </a>
                    </li>
                </ul>
                <div class="search-form">
                    <form action="search.php" method="POST">
                        <input type="text" name="search" placeholder="Search">
                        <button type="submit" name="submit-search" class="nav-link nav-link-search-after">
                            <span class="iconify" data-icon="bx:bx-search-alt-2" data-inline="false"></span>
                        </button>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#search').click(function() {
                $('.nav-link').addClass('hide-item')
                $('.search-form').addClass('Active')
                $('.close').addClass('Active')
                $('#search').hide()
            })

            $('.close').click(function() {
                $('.nav-link').removeClass('hide-item')
                $('.search-form').removeClass('Active')
                $('.close').removeClass('Active')
                $('#search').show()
            })
        })

    </script>
    <!-- Navbar End -->

    <!-- Main Content -->
    <section class="main">
        <div class="content">
            <div class="phone blue" data-aos="fade-right" data-aos-delay="500" data-aos-duration="2000">
                <iframe name="phone" src="../demos/demo/advanced.html" frameborder="0" width="320" height="480"></iframe>
            </div>
            <div class="text left" data-aos="fade-left" data-aos-delay="500" data-aos-duration="2000">
                <h1 class="title left">mmenu</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="content">
            <div class="text right" data-aos="fade-right" data-aos-delay="500" data-aos-duration="2000">
                <h1 class="title right">mmenu</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="phone red" data-aos="fade-left" data-aos-delay="500" data-aos-duration="2000">
                <iframe name="phone" src="../demos/demo/alarm.html" frameborder="0" width="320" height="480"></iframe>
            </div>
        </div>
        <div class="content">
            <div class="phone black" data-aos="fade-right" data-aos-delay="500" data-aos-duration="2000">
                <iframe name="phone" src="../demos/demo/demo2.html" frameborder="0" width="320" height="480"></iframe>
            </div>
            <div class="text left" data-aos="fade-left" data-aos-delay="500" data-aos-duration="2000">
                <h1 class="title left">mmenu</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="content">
            <div class="text right" data-aos="fade-right" data-aos-delay="500" data-aos-duration="2000">
                <h1 class="title right">mmenu</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="phone yellow" data-aos="fade-left" data-aos-delay="500" data-aos-duration="2000">
                <iframe name="phone" src="../demos/demo/demoshop.html" frameborder="0" width="320" height="480"></iframe>
            </div>
        </div>
    </section>
    <!-- Main Content End -->

    <!-- Get Social -->
    <section id="GetSocial">
        <div class="Getsocial">
            <h2 class="tittle-get-social">Our Social Links Below</h2>
            <ul>
            <li data-aos="fade-in" data-aos-delay="00" data-aos-duration="2000"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li data-aos="fade-in" data-aos-delay="500" data-aos-duration="2000"><a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
            <li data-aos="fade-in" data-aos-delay="1000" data-aos-duration="2000"><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            <li data-aos="fade-in" data-aos-delay="1500" data-aos-duration="2000"><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
            <li data-aos="fade-in" data-aos-delay="2000" data-aos-duration="2000"><a href=""><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
        </ul>
        </div>
        <h1 class="copyright">Copyright <span>&#169; </span> Everest DE, Inc. All rights reserved. <a href="#">Terms of Use </a> | <a href="https://www.iubenda.com/privacy-policy/23256582" class="iubenda-WHITE iubenda-embed" title="Privacy Policy "> Privacy Policy</a></h1>
    </section>
    <!-- Get Social End -->

    <!-- JavaScripts -->

    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/jarallax.js"></script>
    <script src="../assets/js/jarallax-element.js"></script>

    <script>
        // Laoading
        let Loading = document.querySelector('.Loading')
        window.addEventListener('load', function() {
            Loading.parentElement.removeChild(Loading);
        });

        // detect scroll top or down
        if ($('.smart-scroll').length > 0) { // check if element exists
            var last_scroll_top = 0;
            $(window).on('scroll', function() {
                scroll_top = $(this).scrollTop();
                if (scroll_top < last_scroll_top) {
                    $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
                } else {
                    $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
                }
                last_scroll_top = scroll_top;
            });
        }

        //Initializing Animation
        AOS.init();

        //Jarallax
        jarallax(document.querySelectorAll('.jarallax'), {
            speed: 0.2
        });

        //ChatBot
        var convo = {
            "ice": {
                "says": ["hi"]
            }
        }

        var givemeBubbles = new Bubbles(
            document.getElementById('chat'),
            "givemeBubbles"
        );

        givemeBubbles.talk(convo);

        //Swiper
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });

    </script>
</body>

</html>
