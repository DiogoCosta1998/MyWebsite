<?php
include('php/github_stats.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="google-site-verification" content="3_dUrV0l3CoZllaqpkc7CesDN_pHwbzQr9pLCrrr0gk"/>
    <title>Diogo Costa - Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Diogo Costa's Portfolio">
    <meta name="keywords"
          content="diogothecoder, diogo costa, diogo, costa, web development, software, coval solutions, lending works, brunel, flutter, laravel, development, android, app">
    <meta name="author" content="Diogo Costa">

    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
          integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172511095-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-172511095-1');
    </script>
</head>

<body>
<div class="preloader">
    <div class="status-mes"></div>
</div>
<header id="home" class="welcome-header-area">
    <!-- Start Header Top -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div id="navLogo" class="col-md-4">
                    <!-- Start Logo -->
                    <div class="logo">
                        <a href="#home">Diogo Costa</a>
                    </div>
                    <!--/ End Logo -->
                </div>
                <div id="navMenu" class="col-md-8">
                    <!-- Start Main Menu -->
                    <div class="main_menu">
                        <div class="navbar text-right">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a class="smooth-scroll" href="#home">home</a>
                                    </li>
                                    <li><a class="smooth-scroll" href="#about">about</a>
                                    </li>
                                    <li><a class="smooth-scroll" href="#services">services</a>
                                    </li>
                                    <li><a class="smooth-scroll" href="#portfolio">portfolio</a>
                                    </li>
                                    <li><a class="smooth-scroll" href="#blog">blog</a>
                                    </li>
                                    <li><a class="smooth-scroll" href="#contact">contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/ End Main Menu -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Top -->
    <!-- Start Image Area -->
    <div class="welcome-image-area particle-bg" data-stellar-background-ratio="0.6">
        <div id="particles-js"></div>
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="welcome-text text-center">
                                <h1 class="typewrite" data-period="2000"
                                    data-type='[ "Hi, I am Diogo Costa.", "I am a Developer.", "I am a Designer.", "I am an Engineer.", "I am creative.", "I am a Londoner." ]'>
                                </h1>
                                <div class="line"></div>
                                <div class="author-social text-center">
                                    <ul>
                                        <li><a class="f-color" href="https://www.facebook.com/DiogoTheCoder/"
                                               target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li><a class="t-color" href="https://twitter.com/DiogoTheCoder/"
                                               target="_blank"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li><a class="g-color" href="https://github.com/DiogoTheCoder/" target="_blank"><i
                                                        class="fab fa-github"></i></a>
                                        </li>
                                        <li><a class="l-color" href="https://www.linkedin.com/in/DiogoTheCoder/"
                                               target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li><a class="y-color"
                                               href="https://www.youtube.com/DiogoTheCoder?sub_confirmation=1"
                                               target="_blank"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="arrow-down">
                                    <a href="#about" class="smooth-scroll btn"><i
                                                class="fa fa-angle-double-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Image Area -->
</header>
<!--/ End Header Area -->
<!-- Start About Us area -->
<section id="about" class="about_us-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Start Section Title -->
                <div class="section-title">
                    <h2>Who I Am</h2>
                </div>
                <!--/ End Section Title -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <!-- Start About Image -->
                <div class="about-image ">
                    <img class="img-responsive" src="img/bg/about-image.jpg" alt=""/>
                </div>
                <!--/ End About Image -->
            </div>
            <div class="col-md-6 col-sm-6">
                <!-- Start About Text -->
                <div class="about-Landon-text">
                    <h2>My name is Diogo Costa, Software Developer from the UK.</h2>
                    <p>Experienced Software Developer with a proven track record and expert knowledge of developing
                        software for a variety of platforms and technologies such as Flask, Laravel, Flutter and React.
                        Worked with Lending Works as a full-stack Web Developer and at Coval Solutions as a Mobile App
                        Developer.</p>
                </div>
                <div class="author-skills">
                    <div class="progress-bar-inner">
                        <p class="progress-bar-text">
                            Python &amp; Flask
                            <span>90%</span>
                        </p>
                        <div class="progress-bar">
                            <span style="transition: width 3s ease 0s; width: 90%;" data-percent="90"></span>
                        </div>
                    </div>
                    <div class="progress-bar-inner">
                        <p class="progress-bar-text">
                            PHP &amp; Laravel
                            <span>75%</span>
                        </p>
                        <div class="progress-bar">
                            <span style="transition: width 3s ease 0s; width: 75%;" data-percent="75"></span>
                        </div>
                    </div>
                    <div class="progress-bar-inner">
                        <p class="progress-bar-text">
                            Flutter & Dart
                            <span>60%</span>
                        </p>
                        <div class="progress-bar">
                            <span style="transition: width 3s ease 0s; width: 60%;" data-percent="60"></span>
                        </div>
                    </div>
                    <div class="progress-bar-inner">
                        <p class="progress-bar-text">
                            React & React Native
                            <span>50%</span>
                        </p>
                        <div class="progress-bar">
                            <span style="transition: width 3s ease 0s; width: 50%;" data-percent="50"></span>
                        </div>
                    </div>
                    <div class="progress-bar-inner">
                        <p class="progress-bar-text">
                            C# &amp; Java
                            <span>75%</span>
                        </p>
                        <div class="progress-bar">
                            <span style="transition: width 3s ease 0s; width: 75%;" data-percent="75"></span>
                        </div>
                    </div>
                </div>
                <!--/ End About Text -->
            </div>
        </div>
    </div>
</section>
<!--/ End About Us Area -->
<!-- Start Services Area -->
<section id="services" class="our_services_area section-padding gry-bg">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>What I Do</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="single-service">
                    <h4>Mobile Development</h4>
                    <p>Developed native mobile applications for Android. Registered Google Play Developer. As well as
                        creating mobile applications for multiple platforms using technologies such as Flutter and React
                        Native.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-service">
                    <h4>Tutoring</h4>
                    <p>Taught a variety number of students ranging from GCSE to University level. Familiar with the GCSE
                        and A level Computer Science syllabus. Helped students achieve A/A* in their Software
                        Development Projects for GCSE.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-service">
                    <h4>Web Development</h4>
                    <p>Experience in working as a full stack developer and for working with multiple CMSs such as Drupal
                        and Wordpress. Developed websites and web applications for Clients under Coval Solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="portfolio" class="our-portfolio-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>My recent Projects</h2>
                </div>
            </div>
        </div>
        <div class="center">
            <button class="contact-btn" type="submit"
                    onclick="window.open('https://github.com/DiogoTheCoder?tab=repositories');"><i
                        class="fab fa-github"></i>View My Projects
            </button>
        </div>
    </div>
</section>

<div class="complete-project-area section-padding gry-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="single-service">
                    <div class="single-project text-center">
                        <div><i class="fa fa-users"></i>
                        </div>
                        <h4>NUMBER OF PROJECTS</h4>
                        <h2 class="project-number"><?php echo($_SESSION["GITHUB_NUM_OF_PROJECTS"] ?? 30); ?></h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="single-service">
                    <div class="single-project text-center">
                        <div><i class="fa fa-code"></i>
                        </div>
                        <h4>LINES OF CODE</h4>
                        <h2 class="project-number">750000</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="single-service">
                    <div class="single-project text-center">
                        <div><i class="fa fa-coffee"></i>
                        </div>
                        <h4>cups of coffee</h4>
                        <h2 class="project-number">8500</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="single-service">
                    <div class="single-project text-center">
                        <div><i class="fa fa-clock"></i>
                        </div>
                        <h4>Years of Experience</h4>
                        <h2 class="project-number"><?php echo($_SESSION["YRS_XP"] ?? 8); ?></h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- start blog area -->
<div id="blog" class="my_blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>Recent blog post</h2>
                </div>
            </div>
        </div>
        <div class="owl-carousel">
            <div class="item">
                <div class="text">
                    <h1><a href="https://birdmagazine.pt/2018/12/12/governo-forte-e-estavel-onde-voce-esta/"
                           target="_blank">Strong and Stable, Where Are You?</a></h1>
                    <p>We were promised strong and stable leadership, but I cannot see this?</p>
                </div>
                <img class="img-responsive" src="img/blog/1.jpg"/>
            </div>
            <div class="item">
                <div class="text">
                    <h1><a href="https://birdmagazine.pt/2018/10/17/portugal-e-brexit/" target="_blank">Portugal and
                            Brexit</a></h1>
                    <p>Brexit and its impact on the UK's oldest ally.</p>
                </div>
                <img class="img-responsive" src="img/blog/2.jpg"/>
            </div>
            <div class="item">
                <div class="text">
                    <h1><a href="https://birdmagazine.pt/2018/07/25/referendos-eles-sao-ruins-para-a-democracia/"
                           target="_blank">Referendums: Bad For Democracy?</a></h1>
                    <p>Purest form of democracy? That may not be the case.</p>
                </div>
                <img class="img-responsive" src="img/blog/3.jpg"/>
            </div>
            <div class="item">
                <div class="text">
                    <h1><a href="https://birdmagazine.pt/2018/05/30/the-e-u-and-poland-the-fight-to-maintain-democracy/"
                           target="_blank">EU, Poland and Democracy</a></h1>
                    <p>How can an existing EU member become a dictatorship?</p>
                </div>
                <img class="img-responsive" src="img/blog/4.jpg"/>
            </div>
            <div class="item">
                <div class="text">
                    <h1><a href="https://love.lambeth.gov.uk/lambeth-youth-council-news/" target="_blank">A Better Youth
                            Council</a></h1>
                    <p>Important meetings and a new constitution!</p>
                </div>
                <img class="img-responsive" src="img/blog/5.jpg"/>
            </div>
        </div>
    </div>
</div>
<section id="contact" class="contact_us-area gry-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Start Section Title -->
                <div class="section-title">
                    <h2>Contact Me</h2>
                </div>
                <!--/ End Section Title -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <!-- Start Contact Form -->
                <div class="contact-us">
                    <div id="form-messages"></div>
                    <div class="col-md-6 form-group text-center">
                        <button class="contact-btn" type="submit" data-toggle="tooltip" data-placement="top"
                                title="hello@diogothecoder.com"
                                onclick="location.href='mailto:hello@diogothecoder.com';"><i
                                    class="fa fa-paper-plane"></i>Email Me
                        </button>
                    </div>
                    <div class="col-md-6 form-group text-center">
                        <button class="contact-btn" type="submit" data-toggle="tooltip" data-placement="top"
                                title="@DiogoTheCoder" onclick="location.href='skype:live:diogothecoder?call';"><i
                                    class="fab fa-skype"></i>Call Me
                        </button>
                    </div>
                </div>
                <!-- End Contact Form -->
            </div>
        </div>
    </div>
</section>

<footer class="footer-bottom-area section-padding">
    <div class="container">
        <div class="row">
            <div class="footer-social-profile text-center">
                <ul>
                    <li><a class="f-color" href="https://www.facebook.com/DiogoTheCoder/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                    </li>
                    <li><a class="t-color" href="https://twitter.com/DiogoTheCoder/" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                    </li>
                    <li><a class="g-color" href="https://github.com/DiogoTheCoder/" target="_blank"><i
                                    class="fab fa-github"></i></a>
                    </li>
                    <li><a class="l-color" href="https://www.linkedin.com/in/DiogoTheCoder/" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li><a class="y-color" href="https://www.youtube.com/DiogoTheCoder?sub_confirmation=1"
                           target="_blank"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <p>All Rights Reserved by <a target="_blank" href="https://www.linkedin.com/in/DiogoTheCoder/">Diogo
                    Costa</a>
            </p>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>

<script src="js/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
<script src="https://www.blogger.com/static/v1/widgets/866654127-widgets.js"></script>

<script src="js/main.js"></script>

<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    });
</script>
</body>
</html>