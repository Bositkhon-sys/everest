<?php
    date_default_timezone_set('Europe/Copenhagen');
    include 'assets/includes/newsletter.inc.php';
    include 'assets/includes/dbh.inc.php';
    include_once 'assets/php/header.php';
    include 'assets/includes/comments.inc.php';
?>

<div class="chatbot">
    <iframe src="bot/examples/mybot.html" frameborder="0" width="600px" height="800px"></iframe>
</div>

<!-- Welcome -->
<section id="welcome">
    <div class="banner welcome">
        <div class="textBox welcome" data-aos="fade-right" data-aos-delay="0" data-aos-duration="2000">
            <h2 class="title welcome">Welcome to Everest</h2>
            <p class="text welcome">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            <button class="submit order" name="submit" type="submit">Order</button>
        </div>
        <div class="imgbox welcome" data-aos="fade-in" data-aos-delay="200" data-aos-duration="3000"> <img src="assets/images/sherpany-software.png" width="100%" height="100%"> </div>
        <video src="assets/videos/The%20Power%20of%20Computer%20Science.mp4" muted autoplay loop type="mp4"></video>
        <div class="mouse_scroll">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <div>
                <span class="m_scroll_arrows unu"></span>
                <span class="m_scroll_arrows doi"></span>
                <span class="m_scroll_arrows trei"></span>
            </div>
        </div>
    </div>
</section>
<!-- Welcome -->

<!-- How to find Us -->
<section class="location">
    <div class="container">
        <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2427.783337183441!2d13.296971315807415!3d52.51925997981414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a8512599f1338f%3A0x4c5990957761556!2sSpandauer%20Damm%201%2C%2014059%20Berlin!5e0!3m2!1sde!2sde!4v1607276734411!5m2!1sde!2sde" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
        <div class="address" data-aos="fade-left" data-aos-delay="500" data-aos-duration="2000">
            <div class="container contact">
                <h2 class="title">Contact Us</h2>
                <form class="Contact-Us" action="assets/php/contactUs.php" method="POST">
                    <div class="row100">
                        <div class="col">
                            <div class="inputBx">
                                <input type="text" name="FirstName" required="required"> <span class="text">Full Name</span> <span class="line-contact-us"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="col">
                            <div id="form" action="#">
                                <div class="inputBx email">
                                    <input type="text" name="Email" required="required" id="email"> <span class="text">E-Mail</span> <span class="line-contact-us" onkeydown="validation()"></span> <span id="text"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="inputBx">
                                <input type="number" name="Mobile" required="required"> <span class="text">Mobile</span> <span class="line-contact-us"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="col">
                            <div class="inputBx textarea">
                                <textarea type="text" name="Message" required="required"></textarea> <span class="text">Type your message Here...</span> <span class="line-contact-us  comment"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="col">
                            <input class="submit" type="submit" name="submit" value="Send">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- How to find Us En -->

<!-- JavaScripts -->

<script src="assets/js/script.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jarallax.js"></script>
<script src="assets/js/jarallax-element.js"></script>


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBT2sfaXrReVsNwwIdO7PKfvFZ3baJkRp8&callback=initMap"></script>


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

<?php
    include_once 'assets/php/footer.php';
?>
<!--

    [[[[[[[[[[[[[[[      ]]]]]]]]]]]]]]]
    [::::::::::::::      ::::::::::::::]
    [::::::::::::::      ::::::::::::::]
    [::::::[[[[[[[:      :]]]]]]]::::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[   Code by Bositkhon  ]:::::]
    [:::::[      Gulomkhonov     ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [:::::[                      ]:::::]
    [::::::[[[[[[[:      :]]]]]]]::::::]
    [::::::::::::::      ::::::::::::::]
    [::::::::::::::      ::::::::::::::]
    [[[[[[[[[[[[[[[      ]]]]]]]]]]]]]]]

-->
