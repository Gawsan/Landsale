<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lucky-Land</title>
    <link rel="Stylesheet" href="Assert//Stylesheet//nav.css">
    <link rel="stylesheet" href="Assert//Stylesheet//Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Assert//Stylesheet//Header.css">
    <link rel="stylesheet" href="Assert//Stylesheet//slider.css">
    <link rel="stylesheet" href="Assert//Stylesheet//card.css">
    <link rel="Stylesheet" href="Assert//Stylesheet//footer.css">

</head>

<body>
    <header>
        <div class="menu">

            <div class="brand">
                <img src="Assert//Img//LL.png" alt="company logo">
            </div>
            <ul>
                <div class="content">
                    <li><a href="index.html" class="">Home</a></li>
                    <li><a href="#news" class="">Land</a></li>
                    <li><a href="#contact" class="">Agent</a></li>
                    
                    <li><a href="About_us.html" class="">About us</a></li>
                    <li><a href="Contact_us.html" class="">Contact</a></li>
                    <li><a href="index.html" class="">LOG OUT</a></li>
                    <li><a href="USER/user.php" class="">Profile</a></li>
                    <li><a href="#" class=""><?php echo "Welcome ". $_SESSION['name']; ?></a></li>

                </div>
            </ul>
        </div>
    </header>




    <script>
        const currentlocation = location.href;
        const menuItem = document.querySelectorAll('a');
        for (let i = 0; i < menuItem.length; i++) {
            if (menuItem[i].href === currentlocation) {
                menuItem[i].className = "active";

            }

        }
    </script>
    <!--Intro of our company-->

    <section class="add">
        <div class="text-box">
            <h1>World's Largest Land sale company</h1>
            <b>
                <p>We Are the best online seller</p>
            </b>
        </div>
    </section>


    </section>
    <!--Addddddddddddddddddddddddddddddddddddddddddddddd-->
    <section class="service">
        <h1>Our sevices</h1><br>
        <hr><br>
        <!--Type of a business -->
        <div class="row">
            <div class="course-col">
                <center>
                    <h3>Land for Sale</h3>
                </center>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="course-col">
                <center>
                    <h3>Farms and Ranches</h3>
                </center>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="course-col">
                <center>
                    <h3>Home sites</h3>
                </center>
                <p>Assumenda minima officiis autem commodi perspiciatis exercitationem accusantium, sit laboriosam
                    quibusdam tenetur modi?</p>
            </div>
            <div class="course-col">
                <center>
                    <h3>Hunting Land</h3>
                </center>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

    </section>
    <br><br>

    </div>
    <div>
        <center>
            <div class="img-slider ">
                <div class="slide active">
                    <img src="Assert//Img///LL.png" alt="">
                </div>
                <div class="slide">
                    <img src="Assert//Img///02.slide.jpg">
                </div>
                <div class="slide">
                    <img src="Assert//Img//03-slide.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Assert//Img//04-slide .jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Assert//Img//LL.png" alt="">
                </div>
                <div class="navigation">
                    <div class="btn active"></div>
                    <div class="btn"></div>
                    <div class="btn"></div>
                    <div class="btn"></div>
                    <div class="btn"></div>
                </div>
            </div>

        </center>
    </div>

    <script type="text/javascript">
        var slides = document.querySelectorAll('.slide');
        var btns = document.querySelectorAll('.btn');
        let currentSlide = 1;

        // Javascript for image slider manual navigation
        var manualNav = function (manual) {
            slides.forEach((slide) => {
                slide.classList.remove('active');

                btns.forEach((btn) => {
                    btn.classList.remove('active');
                });
            });

            slides[manual].classList.add('active');
            btns[manual].classList.add('active');
        }

        btns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
                manualNav(i);
                currentSlide = i;
            });
        });

        // Javascript for image slider autoplay navigation
        var repeat = function (activeClass) {
            let active = document.getElementsByClassName('active');
            let i = 1;

            var repeater = () => {
                setTimeout(function () {
                    [...active].forEach((activeSlide) => {
                        activeSlide.classList.remove('active');
                    });

                    slides[i].classList.add('active');
                    btns[i].classList.add('active');
                    i++;

                    if (slides.length == i) {
                        i = 0;
                    }
                    if (i >= slides.length) {
                        return;
                    }
                    repeater();
                }, 4000);
            }
            repeater();
        }
        repeat();
    </script>

    </section>

    <!--Services of the page -->
    <section class="service2">
        <h1>Top selling lands</h1><br>
        <hr><br>
        <div class="main">
            <!--cards -->
            <div class="card">

                <div class="image">
                    <img src="Assert//Img//final.jpg">
                </div>
                <div class="title">
                    <h1>Nuwara Eliya</h1>
                </div>

                <div class="des">
                    <p>We have many type of Apartmenta</p>
                    <button>Read More...</button>
                </div>
            </div>

            <!--cards -->
            <div class="card">

                <div class="image">
                    <img src="Assert//Img//final.jpg">
                </div>
                <div class="title">
                    <h1>Colombo</h1>
                </div>

                <div class="des">
                    <p>We have many type of Apartmenta</p>
                    <button>Read More...</button>
                </div>
            </div>
            <!--cards -->
            <div class="card">
                <div class="image">
                    <img src="Assert//img/final.jpg">
                </div>
                <div class="title">
                    <h1>Malabe</h1>
                </div>

                <div class="des">
                    <p>We have over 1000+ House sites </p>
                    <button>Read More...</button>
                </div>
            </div>
            <!--cards -->
            <div class="card">

                <div class="image">
                    <img src="Assert//Img//final.jpg">
                </div>

                <div class="title">
                    <h1>
                        Kandy</h1>
                </div>
                <div class="des">
                    <p>we can make tou stress free person </p>
                    <button>Read More...</button>
                </div>
            </div>
            <!--cards -->
        </div>
        </div>
        </div>

    </section>


    <section class="service">
        <h1>Customer Review</h1><br>
        <hr><br>
        <div class="row">
            <div class="course-col">
                <center>
                    <h3>Peter Roy/h3>
                </center>
                <p>I Recommend this company.Highly recomended service. </p>
            </div>
            <div class="course-col">
                <center>
                    <h3>Kirthic Kiroshan</h3>
                </center>
                <p>Serives is best recomended site </p>
            </div>
            <div class="course-col">
                <center>
                    <h3>Kusun Silva</h3>
                </center>
                <p>Agent services very good </p>
            </div>
            <div class="course-col">
                <center>
                    <h3>Kannushan Sivarasa</h3>
                </center>
                <p>Secure payment </p>
            </div>
        </div>
    </section>
    <br><br>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>

                    </ul>
                </div>
                <div class="col">
                    <h4>get help</h4>
                    <ul>
                        <li><a
                                href="https://www.google.com/search?q=sliit+contact+number&safe=active&rlz=1C1EJFC_enLK938LK938&sxsrf=ALeKk01835QLR5x5ier8zrUQxWhi3Ciscg%3A1622387510454&ei=NquzYPOdG5j59QOG1YzAAw&oq=sliit+contact+number&gs_lcp=Cgdnd3Mtd2l6EAMyBAgjECcyBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjoHCCMQsAMQJzoHCAAQRxCwAzoLCC4QxwEQrwEQkQI6BAgAEEM6CAgAELEDEIMBOgsIABCxAxCDARCRAjoCCAA6BQguELEDOggILhDHARCvAToFCAAQyQNQvCFY4Uhgl0toAXACeACAAZcCiAHTHJIBBjAuMTcuNJgBAKABAaoBB2d3cy13aXrIAQnAAQE&sclient=gws-wiz&ved=0ahUKEwjzkP652PHwAhWYfH0KHYYqAzgQ4dUDCBE&uact=5">Contact</a>
                        </li>
                        <li><a href="#">Agent</a></li>
                        <li><a
                                href="https://www.google.com/maps/place/Sri+Lanka+Institute+of+Information+Technology/@6.8773913,79.8560958,12z/data=!4m19!1m13!4m12!1m4!2m2!1d79.8696947!2d6.8320508!4e1!1m6!1m2!1s0x3ae256db1a6771c5:0x2c63e344ab9a7536!2ssliit+malabe+location!2m2!1d79.9729445!2d6.9146775!3m4!1s0x3ae256db1a6771c5:0x2c63e344ab9a7536!8m2!3d6.9146775!4d79.9729445">location</a>
                        </li>
                        <li><a href="#">Complain</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">Framing Land</a></li>
                        <li><a href="#">House site</a></li>
                        <li><a href="#">Apartment</a></li>

                    </ul>
                </div>
                <div class="col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <center>
                <p class="copy-rights">&#169;ALL RIGHTS RESERVED TO LUCKY LAND 2021</p>
            </center>


        </div>

    </footer>

</body>

</html>