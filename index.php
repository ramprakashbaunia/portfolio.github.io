<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <title>Digital Scanning HR services</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@300;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="css/color-switcher-design.css" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="css/color-themes/redd-color.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


    <style>
    .banner-section .slide {
        position: relative;
        overflow: hidden;
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .banner-section .content-column h1 {
        font-size: 50px;
        font-weight: 600;
    }

    .main-footer .footer-bottom .copyright {

        text-align: center;
    }

    .pricing-section {
        position: relative;
        padding: 10px 0px 40px;
    }

    .services-section-two .upper-box {

        padding: 30px 20px 180px;

    }

    .appointment-section {
        position: relative;
        padding-top: 40px;
    }

    .services-section {
        position: relative;
        padding: 190px 0px 128px;
        background-color: #141d38;
    }

    .services-section-two .inner-container {
        margin-top: -115px;
    }

    .team-block .inner-box .lower-box {
        position: relative;
        font-size: 15px;
        margin-left: 0px;
        margin-right: 30px;
        margin-top: 0px;
        padding: 20px 20px;
        text-align: justify;
        line-height: 28px;

    }

    .team-section {
        position: relative;
        padding: 30px 0px 70px;
    }


    .highlight {
        color: #b14550;
        font-size: 16px;
        font-weight: 600;
    }

    .flexc {
        display: flex;
        margin-top: 50px;
        justify-content: space-between;
    }

    .about-section-two .skill-column .inner-column {
        position: relative;
        padding-top: 65px;
    }

    .services {
        margin: 20px 0px;
        color: aliceblue;
    }

    .about-section-two {
        position: relative;
        margin-top: -100px;
        background-attachment: fixed;
        background-size: cover;
        padding-bottom: 0px;
    }

    .about-section-two .image-column .inner-column .image {
        position: relative;
        overflow: hidden;
        border: 15px solid #ffffff;
        border-radius: 0px 0px 250px 250px;
        height: 400px;
    }
    </style>

</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader"></div> -->

        <!-- Main Header-->

        <?php include"header.php" ?>
        <!-- End Main Header -->

        <!-- Sidebar Cart Item -->
        <div class="xs-sidebar-group info-group">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget">
                            X
                        </a>
                    </div>
                    <div class="sidebar-textwidget">

                        <!-- Sidebar Info Content -->
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="#"><img src="img/trividalogobigwhite.png" alt="" /></a>
                                </div>
                                <div class="content-box">
                                    <h2>About Us</h2>
                                    <p class="text">Trivida Pvt. Ltd. is founded and established in May 2021 with the
                                        aim
                                        to provide the goods and services to different sectors of manufacturing,
                                        fabrication
                                        and production including the supply of Power Tools & Machines, Mechanical &
                                        Electrical work & related Maintenance.</p>
                                    <!-- <a href="#" class="theme-btn btn-style-two"><span
                                            class="txt">Consultation</span></a> -->
                                </div>
                                <div class="contact-info">
                                    <h2>Contact Info</h2>
                                    <ul class="list-style-one">
                                        <li><span class="icon fa fa-location-arrow"></span>House no 32, Parshv Dham
                                            Colony<br>
                                            Bhanpur, Bhopal 462037</li>
                                        <li><span class="icon fa fa-phone"></span>(+91) 9755517733</li>
                                        <li><span class="icon fa fa-envelope"></span>contact@trivida.in</li>
                                        <!-- <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday:
                                            Closed</li> -->
                                    </ul>
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                                    <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                                    <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                                    <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                                    <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->

        <!-- Banner Section -->
        <section class="banner-section">
            <div class="main-slider-carousel owl-carousel owl-theme">

                <div class="slide" style="background-image: url(images/main-slider/slider1.jpg)">
                    <div class="patern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
                    <div class="patern-layer-two" style="background-image: url(images/main-slider/pattern-2.png)"></div>
                    <div class="auto-container">

                        <!-- Content Column -->
                        <div class="content-column">
                            <div class="inner-column">
                                <div class="patern-layer-three"
                                    style="background-image: url(images/main-slider/pattern-3.png)"></div>
                                <div class="title">Welcome to</div>
                                <h1>Trivida <br> Private Limited</h1>
                                <div class="text">We are providing quality products & reliable services. </div>
                                <div class="btns-box">
                                    <a href="#" class="theme-btn btn-style-one"><span class="txt">Learn
                                            More</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="slide" style="background-image: url(images/main-slider/Document-Scanning.jpg)">
                    <div class="patern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
                    <div class="patern-layer-two" style="background-image: url(images/main-slider/pattern-2.png)"></div>
                    <div class="auto-container">

                        <!-- Content Column -->
                        <div class="content-column">
                            <div class="inner-column">
                                <div class="patern-layer-three"
                                    style="background-image: url(images/main-slider/pattern-3.png)"></div>
                                <div class="title"></div>
                                <h1>Our Agency Provide <br> Digital Scanning</h1>
                                <div class="text">We are 100+ professional engineers with more than <br>
                                    years of experience in delivering superior products.</div>
                                <div class="btns-box">
                                    <a href="#" class="theme-btn btn-style-one"><span class="txt">Learn
                                            More</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="slide" style="background-image: url(images/main-slider/HR.jpg)">
                    <div class="patern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
                    <div class="patern-layer-two" style="background-image: url(images/main-slider/pattern-2.png)"></div>
                    <div class="auto-container">

                        <!-- Content Column -->
                        <div class="content-column">
                            <div class="inner-column">
                                <div class="patern-layer-three"
                                    style="background-image: url(images/main-slider/pattern-3.png)"></div>
                                <div class="title">Business Consulting</div>
                                <h1>Our Agency Provide <br> Best HR Solutions</h1>
                                <div class="text">We are 100+ professional engineers with more than <br>
                                    years of experience in delivering superior products.</div>
                                <div class="btns-box">
                                    <a href="#" class="theme-btn btn-style-one"><span class="txt">Learn
                                            More</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="slide" style="background-image: url(images/main-slider/man-workings.jpg)">
                    <div class="patern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
                    <div class="patern-layer-two" style="background-image: url(images/main-slider/pattern-2.png)"></div>
                    <div class="auto-container">

                        <!-- Content Column -->
                        <div class="content-column">
                            <div class="inner-column">
                                <div class="patern-layer-three"
                                    style="background-image: url(images/main-slider/pattern-3.png)"></div>
                                <div class="title">Best Power Tools</div>
                                <h1>Our Agency Provide <br> Power tools Solution</h1>
                                <div class="text">We are 100+ professional engineers with more than <br>
                                    years of experience in delivering superior products.</div>
                                <div class="btns-box">
                                    <a href="#" class="theme-btn btn-style-one"><span class="txt">Learn
                                            More</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>

        </section>
        <!-- End Banner Section -->

        <!-- About Section -->
        <section class="about-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="title">ABOUT COMPANY</div>
                    <h2>THE LINK FOR ULTIMATE SUCCESS</h2>
                </div>
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="text">Trivida Pvt. Ltd. is founded and established in May 2021 with the aim to
                                provide the goods and services to different sectors of manufacturing, fabrication and
                                production including the supply of <span class="highlight">Power Tools & Machines,
                                    Mechanical & Electrical work
                                    & related Maintenance, Human Resource Services, Digitization </span>etc. in India
                                and around
                                the world. The company is owned and managed by young Indian entrepreneur emanating from
                                engineering and technology background. <br>
                                <span class="highlight">CIN- U51909MP2021PTC056036</span><br>
                                <span class="highlight">GST- 23AAICT6118M1Z3</span><br>
                                <span class="highlight">Our MSME/udyam registration no. is UDYAM-MP-10-0012768</span>
                            </div>
                            <div class="blocks-outer">

                                <!-- Feature Block -->
                                <div class="feature-block">
                                    <div class="inner-box">
                                        <div class="icon flaticon-award-1"></div>
                                        <h6>Experience</h6>
                                        <div class="feature-text">Our team has also experienced team for industrial
                                            scanning/digitization of large data with expertise related to field of
                                            scanning. .
                                        </div>
                                    </div>
                                </div>

                                <!-- Feature Block -->
                                <div class="feature-block">
                                    <div class="inner-box">
                                        <div class="icon flaticon-technical-support"></div>
                                        <h6>Quick Support</h6>
                                        <div class="feature-text">Our team has a team of dedicated experts to make sure
                                            that our
                                            clients/customers get the best services and goods related to their fields,
                                            which they need to become more profitable, better informed and success in
                                            their business.
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>
                    </div>

                    <!-- Images Column -->
                    <div class="images-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column" style="background-image: url(images/icons/globe.png)">
                            <div class="pattern-layer" style="background-image: url(images/background/pattern-1.png)">
                            </div>
                            <div class="images-outer parallax-scene-1">
                                <div class="image" data-depth="0.10">
                                    <img src="img/scanman.jpg" alt="" />
                                </div>
                                <div class="image-two" data-depth="0.30">
                                    <img src="images/resource/about-2.jpg" alt="" />
                                </div>
                                <div class="image-three" data-depth="0.20">
                                    <img src="img/Side-Grinder.jpg" alt="" />
                                </div>
                                <div class="image-four" data-depth="0.30">
                                    <img src="images/resource/about-4.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <a href="#" class="learn"><span
                                class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Learn More About
                            Company</a>
                    </div>

                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Featured Section -->
        <section class="featured-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Featured Block Two -->
                    <div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"
                            style="background-image: url(images/resource/feature-1.jpg)">
                            <div class="number">
                                <div class="icon-box">
                                    <span class="icon flaticon-award"></span>
                                </div>
                            </div>
                            <h4>Our vision </h4>
                            <div class="text">Our vision is to make success everyone and every organization with
                                Trivida.</div>
                        </div>
                    </div>

                    <!-- Featured Block Two -->
                    <div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"
                            style="background-image: url(images/resource/feature-2.jpg)">
                            <div class="number">
                                <div class="icon-box">
                                    <span class="icon flaticon-target"></span>
                                </div>
                            </div>
                            <h4>Our mission </h4>
                            <div class="text">Our mission is to provide Goods and Services at the right time at the
                                right place </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Featured Section -->

        <!-- Services Section -->
        <section class="services-section margin-top">
            <div class="pattern-layer" style="background-image: url(images/background/pattern-2.png)"></div>
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title light centered">
                    <div class="title">WHO WE ARE</div>
                    <h2>We are MSME unit in following category<br> Industrial solution and services </h2>
                </div>
                <div class="auto-container">
                    <!-- Sec Title -->


                    <div class="row clearfix pricing-section">

                        <!-- Price Block -->
                        <div class="price-block col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="inner-box">
                                        <!-- <h3>We provide Goods and Services at the right time at the right place
                                    and achieve this by:</h3> -->
                                        <div class="text"> </div>

                                        <ul class="price-list">
                                            <li>Wholesale trade, except ofmotor vehicles and motorcycles</li>
                                            <li>Employment activities</li>
                                            <li>Office administrative, officesupport and other businesssupport
                                                activities</li>
                                            <li>Office administrative, officesupport and other businesssupport
                                                activities</li>
                                            <li>Office administrative, officesupport and other businesssupport
                                                activities</li>
                                            <!-- <li>Analyze our customer/client requirements – to reach the best services and
                                        products/goods.</li>
                                    <li>Providing quality products & reliable services from reputed
                                        manufacturers.</li>
                                    <li>Giving timely information to the customers regarding trends of the market
                                        dynamics.</li>
                                    <li>Team work and develop a transparent work environment.</li>
                                    <li>To meet the increasing and diversified demands of the customers.</li> -->
                                        </ul>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="inner-box">
                                        <!-- <h3>We provide Goods and Services at the right time at the right place
                                    and achieve this by:</h3> -->
                                        <div class="text"> </div>
                                        <img src="img/trividalogobig.png">

                                        <div class="flexc">
                                            <a href="pdf/MSME_UDYAM_CERTIFICATE_LATEST.pdf" target="_blank"
                                                class="theme-btn btn-style-two"><span class="txt">
                                                    MSME Certificate</span></a>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- Services Section Two -->
        <section class="services-section-two margin-top">
            <div class="auto-container">
                <div class="upper-box">
                    <div class="icon-one" style="background-image: url(images/icons/icon-1.png)"></div>
                    <div class="icon-two" style="background-image: url(images/icons/icon-2.png)"></div>
                    <div class="icon-three" style="background-image: url(images/icons/icon-3.png)"></div>
                    <!-- Sec Title -->
                    <div class="sec-title light centered">
                        <div class="title">Our Services Area</div>
                        <!-- <h2>We deal with the aspects of <br> industrial solution and services </h2> -->
                    </div>
                </div>
                <div class="inner-container">
                    <div class="row clearfix">

                        <!-- Service Block Two -->
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="shape-one"></div>
                                <div class="shape-two"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-coding-1"></span>
                                </div>
                                <h5><a href="#"> Government sectors </a></h5>
                                <!-- <div class="text">We carry more than just good coding skills. Our experience makes us
                                    stand out from other web development.</div> -->
                            </div>
                        </div>

                        <!-- Service Block Two -->
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="shape-one"></div>
                                <div class="shape-two"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-mobile-app"></span>
                                </div>
                                <h5><a href="#"> Public sectors</a></h5>
                                <!-- <div class="text">Create complex enterprise software, ensure reliable software
                                    integration, modernise your legacy system.</div> -->
                            </div>
                        </div>

                        <!-- Service Block Two -->
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="shape-one"></div>
                                <div class="shape-two"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-computer"></span>
                                </div>
                                <h5><a href="#">Private Sectors</a></h5>
                                <!-- <div class="text">Build the product you need on time with an experienced team that uses
                                    a clear and effective design process.</div> -->
                            </div>
                        </div>

                        <!-- Service Block Two -->
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="shape-one"></div>
                                <div class="shape-two"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-web"></span>
                                </div>
                                <h5><a href="#"> Social Organizations</a></h5>
                                <!-- <div class="text">Turn to our experts to perform comprehensive, multi-stage testing and
                                    auditing of your software.</div> -->
                            </div>
                        </div>

                        <!-- Service Block Two -->
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="shape-one"></div>
                                <div class="shape-two"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-monitor-2"></span>
                                </div>
                                <h5><a href="#"> Construction</a></h5>
                                <!-- <div class="text">Trust our top minds to eliminate workflow pain points, implement new
                                    tech, and consolidate app portfolios.</div> -->
                            </div>
                        </div>

                        <!-- Service Block Two -->
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="shape-one"></div>
                                <div class="shape-two"></div>
                                <div class="icon-box">
                                    <span class="icon flaticon-human-resources"></span>
                                </div>
                                <h5><a href="#">Logistics and Distribution </a></h5>
                                <!-- <div class="text">Over the past decade, our customers succeeded by leveraging
                                    Intellectsoft’s process of building, motivating.</div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section Two -->



        <!-- Cases Section -->

        <!-- End Cases Section -->
        <section class="about-section-two" style="background-image: url(images/background/3.jpg)">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="circle-layer" style="background-image: url(images/background/pattern-10.png)">
                            </div>
                            <div class="image">
                                <img src="img/about-6.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Skill Column -->
                    <div class="skill-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <!-- Sec Title -->
                            <div class="sec-title light">
                                <div class="title">We are authorized Dealer of MAKITA( A Global Leader in Power Tools
                                    and
                                    assessories)</div>
                                <h2></h2>
                                <div class="title"><b>Shop Address</b>:Shop No 58, Sector C, Indrapuri Bhopal 462022
                                </div>
                                <!-- <div class="text">We listen. We advise. We design, together. Happy customers and ongoing
                                    relationships are what we strive for. Success is measured by results, the most
                                    important being how our clients feel about their experience with us.</div>
                            </div> -->
                                <div class="flexc">
                                    <a href="pdf/Mini_Catalogue_2021-23_view.pdf" target="_blank"
                                        class="theme-btn btn-style-two"><span class="txt">
                                            Catalogue</span></a>
                                    <a href="pdf/Acc_Catalogue_view-1.pdf" target="_blank"
                                        class="theme-btn btn-style-two"><span class="txt">Accessory
                                            Catalogue</span></a><br>


                                </div>
                                <div class="flexc">
                                    <a href="pdf/delership_certificate_colour-merged.pdf" target="_blank"
                                        class="theme-btn btn-style-two"><span class="txt">
                                            Dealership Certificate</span></a>
                                    <a href="pdf/XGT_view.pdf" target="_blank" class="theme-btn btn-style-two"><span
                                            class="txt">XGT View</span></a>
                                </div>

                                <!-- Skills -->
                                <div class="services flexc">
                                    <ul class="price-list">
                                        <li>Drilling / Fastening</li>
                                        <li>Impact Wench</li>
                                        <li>Impact Drilling / Demolition</li>
                                        <li>Cutting</li>
                                    </ul>
                                    <ul class="price-list">
                                        <li>Grinding</li>
                                        <li>Sawing</li>
                                        <li>Vaccum Cleaner</li>
                                        <li>Dust Extraction</li>
                                    </ul>

                                </div>
                                <div class="title">For more information Visit <a href="www.makita.in">www.makita.in</a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
        </section>
        <!--Sponsors Section-->

        <!--End Sponsors Section-->
        <section class="team-section" style="background-image: url(images/background/2.jpg)">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="clearfix">
                        <div class="pull-left">
                            <div class="title">Director Message</div>
                            <h2>Greetings from the <br>
                                Trivida Private Limited.</h2>

                        </div>
                        <div class="pull-right">
                            <div class="text">Our goal is to help our companies maintain or achieve best- in-class <br>
                                positions in their respective industries and our team works.</div>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <!-- Team Block -->
                    <div class="team-block col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <!-- <div class="image">
                                <a href="#"><img src="images/resource/team-3.jpg" alt=""></a>
                            </div> -->
                            <div class="lower-box">
                                <!-- Social Box -->
                                <!-- <ul class="social-box">
                                    <li><a href="#" class="fa fa-facebook-f"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-dribbble"></a></li>
                                </ul> -->
                                <div class="content">

                                    <div class="text">This is my great pleasure to introduce ourselves as one of
                                        leading/growing company to provide solution and supply of goods & services in
                                        the field of <span class="highlight">power tools & Machines, Mechanical &
                                            Electrical work & related
                                            Maintenance, Human Resource Services, Digitization </span> etc. in India. We
                                        have the
                                        team of well experience staff and expertise to perform best by the right people
                                        to the right job for achieve our targets within time.
                                        We plan to explore more area for supply goods and services as per new market
                                        demands and match with it current global and local demands.
                                        We put continuous efforts to improve our supply management by interaction with
                                        customers and ensure their timely delivery. With the support of expertise and
                                        teamwork, I am confident that the company will perform excellence and grow to in
                                        height of achievements in fields of providing solution and supply of goods &
                                        services in coming years.
                                        we are committed to provide the best possible solutions and services.
                                        With very warm Regards<br>
                                    </div>
                                    <h5>Director</h5>
                                    <div class="designation"> Trivida Private Limited. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="#"><img src="img/kanakyadav.jpg" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <!-- Social Box -->
                                <!-- <ul class="social-box">
                                    <li><a href="#" class="fa fa-facebook-f"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-dribbble"></a></li>
                                </ul> -->
                                <div class="content">
                                    <h5><a href="#">Kanak Yadav</a></h5>
                                    <div class="designation">Director</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="#"><img src="img/meenayadav.jpg" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <!-- Social Box -->
                                <!-- <ul class="social-box">
                                    <li><a href="#" class="fa fa-facebook-f"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-dribbble"></a></li>
                                </ul> -->
                                <div class="content">
                                    <h5><a href="#">Meena Yadav</a></h5>
                                    <div class="designation">Executive director</div>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </section>

        <!-- Technology Section -->

        <!-- End Technology Section -->


        <section class="appointment-section">
            <div class="image-layer" style="background-image: url(images/background/4.jpg)"></div>
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title light centered">
                    <div class="title">CONTACT US</div>
                    <h2>Join Us To Get IT Free <br> Consultations</h2>
                </div>
                <div class="inner-container">
                    <div class="row clearfix">

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="img/appointmentnew.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- Form Column -->
                        <div class="form-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h4>You Don't Hesitate To Contact <br> With Us, Now Say Hello......</h4>
                                <!-- Appointment Form -->
                                <div class="appointment-form">
                                    <form method="post" action="contactindex.php">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Name" required="">
                                                <span class="icon fa fa-user"></span>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email" required="">
                                                <span class="icon fa fa-envelope"></span>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <input type="tel" name="phone" placeholder="Phone No" required="">
                                                <span class="icon fa fa-phone"></span>
                                            </div>



                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Message"></textarea>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <button class="theme-btn btn-style-three" type="submit"
                                                    name="submit-form"><span class="txt">Send Message</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <?php include"footer.php" ?>
    </div>
    <!--End pagewrapper-->

    <!-- Color Palate / Color Switcher -->



    <!-- Search Popup -->

    <!-- End Header Search -->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/nav-tool.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
    <script src="js/color-settings.js"></script>
    <!-- GetButton.io widget -->
    <script type="text/javascript">
    (function() {
        var options = {
            whatsapp: "9407276919 ", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
    </script>
    <!-- /GetButton.io widget -->
</body>


</html>