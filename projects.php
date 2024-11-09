<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!--========= Required meta tags =========-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--====== Title ======-->
    <title>WeNetworkLLC</title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="./assets/img/logo/logo.png" type="images/x-icon" />

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/lightcase.css" />
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/ukit.css" />
    <link rel="stylesheet" href="assets/css/odometer.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/wenet.css" />
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <style>
        .image {
            height: 90px;
            min-width: 100px;
        }
    </style>
     
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php
    $projects =
        [
            array(
                "project" => "Helios",
                "logo" => "./assets/img/clients/Logo/Helios.png",
                "title" => "Helios Tower Projects",
                "period" => "Nov, 2022",
                "description" => [
                    ["title" => 'Client', 'value' => 'Helios Tower Oman'],
                    ["title" => 'Country', 'value' => 'Sultanate of Oman'],
                ],
                "data" => "Colocation, Greenfield, Tower maintenance, Tower strengthening, Foundation strengthening & Quality audits."
            ),
            array(
                "project" => "Helios",
                "logo" => "./assets/img/clients/Logo/Helios.png",
                "title" => "Helios Project",
                "period" => "Jan, 2024",
                "description" => [
                    ["title" => 'Client', 'value' => 'Helios'],
                    ["title" => 'Country', 'value' => 'Rumeiz'],
                ],
                "data" => "Supply of DCRP and Std metering panels and 3 phase energy meters"
            ),
            array(
                "project" => "OTC",
                "logo" => "./assets/img/clients/OTC.png",
                "title" => "Oman Tower Company",
                "period" => "2018",
                "description" => [
                    ["title" => 'Client', 'value' => 'Helios Tower Oman'],
                    ["title" => 'Country', 'value' => 'Sultanate of Oman'],
                ],
                "data" => "Colocation, Greenfield, Maintenance, Roof Top, Emergency power Restore/ MOD Marine Project."
            ),
            array(
                "project" => "ROP",
                "logo" => "./assets/img/clients/ROP-ROFA.jpg",
                "title" => "ROP Etesalat Project",
                "period" => "2018",
                "description" => [
                    ["title" => 'Client', 'value' => 'Establishment of ROP tower, infrasturcture and complete project'],
                    ["title" => 'Country', 'value' => 'Dahirah, Musandam, Burami'],
                ],
                "data" => ""
            ),
            array(
                "project" => "Omantel",
                "logo" => "./assets/img/clients/Omantel.png",
                "title" => "RAN & MW survey",
                "period" => "2014",
                "description" => [
                    ["title" => 'Client', 'value' => 'Omantel - Ericsson'],
                    ["title" => 'Country', 'value' => 'Sultanate of Oman'],
                ],
                "data" => "TSSR (Technical Site Survey Report) survey for new and existing towers for Ericsson client all over Oman"
            ),
            array(
                "project" => "Omantel",
                "logo" => "./assets/img/clients/Omantel.png",
                "title" => "RAN installation",
                "period" => "2014",
                "description" => [
                    ["title" => 'Client', 'value' => 'Omantel - Ericsson'],
                    ["title" => 'Country', 'value' => 'Sultanate of Oman'],
                ],
                "data" => "Implementation and integration of 2G,WCDMA,LTE and 5G networks all over Oman"
            ),
            array(
                "project" => "Omantel",
                "logo" => "./assets/img/clients/Omantel.png",
                "title" => "MW installation,Upgradation",
                "period" => "2014",
                "description" => [
                    ["title" => 'Client', 'value' => 'Omantel - Ericsson'],
                    ["title" => 'Country', 'value' => 'Sultanate of Oman'],
                ],
                "data" => "Implementation,integration Upgradation of all new and existing MW technologies including Traditional links, E-band, Xpic and SD links"
            ),
            array(
                "project" => "Omantel",
                "logo" => "./assets/img/clients/Omantel.png",
                "title" => "IBS installation",
                "period" => "2014",
                "description" => [
                    ["title" => 'Client', 'value' => 'Omantel - Ericsson'],
                    ["title" => 'Country', 'value' => 'Sultanate of Oman'],
                ],
                "data" => "IBS installation of telecom equipments in Ministy buildings, malls, hospitals, hotels etc."
            ),
            array(
                "project" => "Ericsson",
                "logo" => "./assets/img/clients/Ericsson.png",
                "title" => "RF & LOS survey",
                "period" => "2020",
                "description" => [
                    ["title" => 'Client', 'value' => 'Ericsson-Vodafone '],
                    ["title" => 'Country', 'value' => 'Sultanate of Oman'],
                ],
                "data" => "TSSR & LOS survey for new and existing towers for both Ericsson client all over Oman."
            ),
            array(
                "project" => "Ericsson",
                "logo" => "./assets/img/clients/Ericsson.png",
                "title" => "RAN installation",
                "period" => "2020",
                "description" => [
                    ["title" => 'Client', 'value' => 'Ericsson-Vodafone '],
                    ["title" => 'Country', 'value' => 'Sultanate of Oman'],
                ],
                "data" => " Implementation and integration of 2g,3g,4g and 5g networks all over Oman"
            ),
            array(
                "project" => "Ericsson",
                "logo" => "./assets/img/clients/Ericsson.png",
                "title" => "MW installation",
                "period" => "2020",
                "description" => [
                    ["title" => 'Client', 'value' => 'Ericsson-Vodafone '],
                    ["title" => 'Country', 'value' => 'Sultanate of Oman'],
                ],
                "data" => "Implement and integration of all diffent MW technologies including normal links, E-band, Xpic, SD of all sizes. "
            ),
            array(
                "project" => "Ericsson",
                "logo" => "./assets/img/clients/Ericsson.png",
                "title" => "IBS installation",
                "period" => "2021",
                "description" => [
                    ["title" => 'Client', 'value' => 'Ericsson-Vodafone '],
                    ["title" => 'Country', 'value' => 'Sultanate of Oman'],
                ],
                "data" => "IBS installation of telecom equipments in ministy buildings, malls, hospitals, hotels etc."
            ),
            array(
                "project" => "Ooredoo",
                "logo" => "./assets/img/clients/Oredoo.png",
                "title" => "Line of Sight",
                "period" => "2014",
                "description" => [
                    ["title" => 'Client', 'value' => 'Ericsson-Vodafone '],
                    ["title" => 'Country', 'value' => 'Sultanate of Oman'],
                ],
                "data" => "Line of site survey "
            ),
            array(
                "project" => "Ooredoo",
                "logo" => "./assets/img/clients/Oredoo.png",
                "title" => "MW implementation for BC/2G/3G/4G/5G",
                "period" => "2014",
                "description" => [
                    ["title" => 'Client', 'value' => 'Ericsson-Vodafone '],
                    ["title" => 'Country', 'value' => 'Sultanate of Oman'],
                ],
                "data" => "MW link implementation for different project "
            ),
            array(
                "project" => "Ooredoo",
                "logo" => "./assets/img/clients/Oredoo.png",
                "title" => "OSP service",
                "period" => "2014",
                "description" => [
                    ["title" => 'Client', 'value' => 'Ericsson-Vodafone '],
                    ["title" => 'Country', 'value' => 'Sultanate of Oman'],
                ],
                "data" => "Fiber specialist out soured to ooredoo"
            ),
            array(
                "project" => "Ooredoo",
                "logo" => "./assets/img/clients/Oredoo.png",
                "title" => "Drive test project",
                "period" => "2016",
                "description" => [
                    ["title" => 'Client', 'value' => 'Ericsson-Vodafone '],
                    ["title" => 'Country', 'value' => 'Sultanate of Oman'],
                ],
                "data" => "MW link implementation for different project "
            ),
            array(
                "project" => "PDO",
                "logo" => "./assets/img/clients/PDO.png",
                "title" => "FOC & CCTV integration project",
                "period" => "Dec, 2023",
                "description" => [
                    ["title" => 'Client', 'value' => 'PDO'],
                    ["title" => 'Country', 'value' => 'Dhulaima'],
                ],
                "data" => "Connecting existing RMS to newly constructed RMS through FOC network. New RMS station entirely secured with newly installed CCTV metwork and integareted FOC system"
            ),
            array(
                "project" => "PDO",
                "logo" => "./assets/img/clients/PDO.png",
                "title" => "FAAL FOC project",
                "period" => "Jan, 2024",
                "description" => [
                    ["title" => 'Client', 'value' => 'PDO'],
                    ["title" => 'Country', 'value' => 'Faal'],
                ],
                "data" => "Supply and installation of FOC integration at FAAL Lekwair station"
            ),
            array(
                "project" => "PDO",
                "logo" => "./assets/img/clients/PDO.png",
                "title" => "FAAL FOC project",
                "period" => "Feb, 2024",
                "description" => [
                    ["title" => 'Client', 'value' => 'PDO'],
                    ["title" => 'Country', 'value' => 'Amal'],
                ],
                "data" => "Supply and installation of FOC integration at FAAL Lekwair station"
            ),
            array(
                "project" => "RAFO",
                "logo" => "./assets/img/clients/ROP-ROFA.jpg",
                "title" => "RAFO Mashira Tower",
                "period" => "Jan, 2023, Com - Dec, 2023",
                "description" => [
                    ["title" => 'Client', 'value' => 'RAFO'],
                    ["title" => 'Country', 'value' => 'Mashira'],
                ],
                "data" => "Supply, installation and Renovation of existing RAFO communication tower"
            ),
            array(
                "project" => "Motorola",
                "logo" => "./assets/img/clients/Motrola.png",
                "title" => "VHF Gateway",
                "period" => "Jan, 2023, Com - Feb, 2024",
                "description" => [
                    ["title" => 'Client', 'value' => 'Motorola'],
                    ["title" => 'Country', 'value' => 'Central office, Qurum'],
                ],
                "data" => "Radio Communication Network for ROP"
            ),
            array(
                "project" => "Motorola",
                "logo" => "./assets/img/clients/Motrola.png",
                "title" => "Desktop Installation",
                "period" => "2022",
                "description" => [
                    ["title" => 'Client', 'value' => 'Motorola'],
                    ["title" => 'Country', 'value' => 'Sultanate of Oman'],
                ],
                "data" => "Security Monitoring desktop and accessories installation "
            ),
            array(
                "project" => "MEP",
                "logo" => "./assets/img/clients/Logo/MEP.jpg",
                "title" => "Desktop Installation",
                "period" => "Dec, 2023",
                "description" => [
                    ["title" => 'Client', 'value' => 'Amlak Real Estate'],
                    ["title" => 'Country', 'value' => 'Bousher'],
                ],
                "data" => "Security Monitoring desktop and accessories installation "
            ),
            array(
                "project" => "MEP",
                "logo" => "./assets/img/clients/Logo/MEP.jpg",
                "title" => "MEP works",
                "period" => "Jan, 2024",
                "description" => [
                    ["title" => 'Client', 'value' => 'Al Fardan'],
                    ["title" => 'Country', 'value' => 'Ghala'],
                ],
                "data" => "Supply and Installation of 18 nos of 3 phase tested digital AMR meters"
            )
            

        ]
        ?>

    <!--====== HEADER START ======-->
    <div id="sotcox-loadding" class="sotcox-loader">
        <div class="sotcox-spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!--====== HEADER END ======-->

    <!--====== HEADER START ======-->
    <!--====== HEADER START ======-->
  <header class="sotcox-header uk-sticky mobnav tabnav" data-uk-sticky="top: 250 px; animation: uk-animation-slide-top;" style="    z-index: 100;
    background: none;
    position: fixed;
    top: 0px;
    background:none">
    <div class="container-fluid sotcox-container__fluid">
      <div class="row">
        <div class="col-xl-11 col-lg-4 col-sm-6 col-7 align-self-center">
          <div class="sotcox-logo-menu-wrapper" >
            <a href="./index.html" class="sotcox-logo" style="background: scroll !important;">
              <img src="assets/img/logo/logo.png" alt="LOGO" >
            </a>
            <div class="sotcox-menu-wrapper sotcox-menu-wrapper1" style="background:white">
              <div class="sotcox-main-menu pe-0">
                <nav id="sotcox-navbar" style="display: inline-block;">
                  <ul>
                    <li ><a class="title-font " href="./index.html">Home</a></li>
                    <li><a class="title-font" href="./about.html">About Us</a></li>
                    <li><a class="title-font" href="./services.html">Services</a></li>
                    <!-- <li><a class="title-font" href="./awards.html">Appreciation</a></li> -->
                    <li class="active"><a class="title-font" style="font-size: 14px;" href="./projects.php">Project</a></li>
                    <li><a class="title-font" href="./product.html">Product</a></li>
                    <li><a class="title-font" href="./ProjectGallery.html">Gallery</a></li>
                    <li><a class="title-font" href="./career.html">Career</a></li>
                    <li><a class="title-font" href="./contact.html">Contact</a></li>
                    
                  </ul>
                  
                </nav>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-xl-1 col-lg-8 col-sm-6 col-5 align-self-center insidemenu" >
          <div class="right-element">
            <ul class="list-unstyled d-flex align-items-center">
              <li class="sideinfo-trigger" data-sideinfo-trigger="">
                <span></span>
                <span></span>
                <span></span>
              </li>
            </ul>
          </div>
        </div>
        
        
      </div>
    </div>
  </header>
  <!--====== HEADER END ======-->

    <!--====== OVERLAY START ======-->
    <div class="sotcox-overlay"></div>
    <!--====== OVERLAY END ======-->

    <!--====== SIDE INFO FOR MOBILE START ======-->
    <aside class="side-info-wrapper mm-only">
        <nav>
            <div class="nav" id="nav-tab" role="tablist">
                <a class="nav-link active" id="menu-tab-1-tab" data-bs-toggle="tab" href="#menu-tab-1" role="tab"
                    aria-controls="menu-tab-1" aria-selected="true">Menu</a>
                <a class="nav-link" id="menu-tab-2-tab" data-bs-toggle="tab" href="#menu-tab-2" role="tab"
                    aria-controls="menu-tab-2" aria-selected="false">Info</a>
            </div>
        </nav>
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="./index.html">
                    <img src="assets/img/logo/logo.png" alt="logo">
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="far fa-times"></i></a>
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="menu-tab-1" role="tabpanel" aria-labelledby="menu-tab-1-tab">
                <div class="sotcox-mobile-menu"></div>
            </div>
            <div class="tab-pane fade" id="menu-tab-2" role="tabpanel" aria-labelledby="menu-tab-2-tab">
                <div class="side-info">
                    <div class="side-info__content mb-35">
                        <h4 class="mb-10 title-font title">About us</h4>
                        <p class="text-justify " >
              At We Network LLC, we specialize in delivering cutting-edge telecommunications infrastructure solutions designed to meet the demands of a rapidly evolving digital landscape. Our expertise spans key areas, including Telecom Infrastructure, Radio Network Optimization Planning (RNO-RNT), and Microwave Rollouts, enabling us to provide comprehensive services that enhance connectivity and operational efficiency.
            </p>
            <p class="text-justify " style="text-indent:50px">
              We are committed to excellence in all aspects of our work, from meticulous operation and maintenance to ICT, 5G private networks and MEP solutions. Our experienced team leverages innovative strategies and the latest technologies to ensure that our clients benefit from reliable, high-performance networks tailored to their specific needs. At We Network LLC, we believe in building strong partnerships that empower businesses to thrive in an interconnected world.
            </p>
                        <a class="mt-20 sotcox-btn sotcox-btn__small title-font" href="./contact.html">Contact us
                            <span></span></a>
                    </div>
                    <div class="contact__info--wrapper mt-15">
                        <h4 class="title-font title mb-15">Contact us</h4>
                        <ul class="contact__info list-unstyled">
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <p>We Network LLC, first floor,
                                    0401-Z-319-KOM-4, Knowledge Oasis
                                    Muscat, Sultanate of Oman.</p>
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i></span>
                                <p>+968 24170030</p>
                            </li>
                            <li>
                                <span><i class="fas fa-envelope-open-text"></i></span>
                                <p>info@wenetworkllc.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="sotcox-social-links mt-30">
                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                        <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--====== SIDE INFO FOR MOBILE END ======-->

    <!--====== SIDE INFO FOR DESKTOP START ======-->
    <aside class="side-info-wrapper show-all">
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="index.html">
                    <img src="assets/img/logo/logo.png" alt="logo">
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="far fa-times"></i></a>
            </div>
        </div>
        <div class="side-info">
            <div class="side-info__content mb-35">
                <h4 class="mb-10 title-font title">About us</h4>
                <p class="text-justify " >
              At We Network LLC, we specialize in delivering cutting-edge telecommunications infrastructure solutions designed to meet the demands of a rapidly evolving digital landscape. Our expertise spans key areas, including Telecom Infrastructure, Radio Network Optimization Planning (RNO-RNT), and Microwave Rollouts, enabling us to provide comprehensive services that enhance connectivity and operational efficiency.
            </p>
            <p class="text-justify " style="text-indent:50px">
              We are committed to excellence in all aspects of our work, from meticulous operation and maintenance to ICT, 5G private networks and MEP solutions. Our experienced team leverages innovative strategies and the latest technologies to ensure that our clients benefit from reliable, high-performance networks tailored to their specific needs. At We Network LLC, we believe in building strong partnerships that empower businesses to thrive in an interconnected world.
            </p>
                <a class="mt-20 sotcox-btn sotcox-btn__small title-font" href="contact.html">Contact us
                    <span></span></a>
            </div>
            <div class="contact__info--wrapper mt-15">
                <h4 class="title mb-15 title-font">Contact us</h4>
                <ul class="contact__info list-unstyled">
                    <li>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p> We Network LLC, first floor,
                            0401-Z-319-KOM-4, Knowledge Oasis
                            Muscat, Sultanate of Oman.</p>
                    </li>
                    <li>
                        <span><i class="fas fa-phone"></i></span>
                        <p>+968 24170030</p>
                    </li>
                    <li>
                        <span><i class="fas fa-envelope-open-text"></i></span>
                        <p>info@wenetworkllc.com</p>
                    </li>
                </ul>
            </div>
            <div class="sotcox-social-links mt-30">
                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                <a href="#0"><i class="fab fa-twitter"></i></a>
                <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                <a href="#0"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </aside>
    <!--====== SIDE INFO FOR DESKTOP END ======-->


    <!--====== BREADCRUMB SECTION START ======-->
    <!-- <section class="breadcrumb-area fix wow fadeInUp" data-wow-delay="300ms" data-wow-duration="800ms" style=" height:
        130px; background-color: #4cdf84;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="sotcox-breadcrumb-wrapper breadcrumb-new position-relative">
                        <h2 class="page-title title-font mt-25">Project</h2>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--====== BREADCRUMB SECTION END ======-->

    <!---==== PROJECT SECTION START ====--->
    <div class="sotcox-project-section sotcox-project-section__style-2 pt-90 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="border-0 content-left-wrapper">
                        <ul class="sotcox-project-filter justify-content-left list-unstyled d-flex align-items-center">
                            <li class="title-font active show" data-filter=".Motorola">MOTROLLA </li>
                            <li class="title-font" data-filter=".Ericsson">ERICSSON </li>
                            <li class="title-font" data-filter=".Omantel">OMANTEL </li>
                            <li class="title-font" data-filter=".OTC">OTC </li>
                            <li class="title-font" data-filter=".PDO">PDO </li>
                            <li class="title-font" data-filter=".Ooredoo">OOREDOO </li>
                            <li class="title-font" data-filter=".pro-7">HUAWEI </li>
                            <li class="title-font" data-filter=".pro-8">NSN </li>
                            <li class="title-font" data-filter=".pro-9">SIEMENS </li>
                            <li class="title-font" data-filter=".RAFO">ROP / RAFO </li>
                            <li class="title-font" data-filter=".pro-11">FIBER OPTICS </li>
                            <li class="title-font" data-filter=".pro-12">ICT </li>
                            <li class="title-font" data-filter=".Helios">HELIOS </li>
                            <li class="title-font" data-filter=".MEP">MEP</li>
                            <li class="title-font" data-filter=".pro-15">VODAFONE </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="mt-10 sotcox-project-wrapper">
                        <div class="row sotcox-project-grid project">

                            <!-- Motrolla Start -->

                            <div class="grid col-xl-6 col-lg-6 Motorola mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Motrola.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-6 col-sm-12">
                                                    <h4 class="title-font">Drive test services </h4>
                                                    <p>2021 - ONGOING</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                                    <ul class="text-left list-unstyled border-right">
                                                        <li>Country: Oman </li>
                                                        <li>Account: Motorola </li>
                                                        <li>Operator: ROP </li>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-8 col-md-6 col-sm-12">
                                                    <p>Structured cabling and installation of Workstations</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Motorola mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Motrola.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Civil Construction and FOC Installation</h4>
                                                    <p>2021 October – 2021 December</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled ">
                                                        <li>Country: Oman </li>
                                                        <li>Account: Motorola </li>
                                                        <li>Operator: ROP and SQU </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p> Civil Work and FOC installation</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Motorola mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Motrola.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-6 col-sm-12">
                                                    <h4 class="title-font">Workstation Commissioning Project</h4>
                                                    <P>2021 - Ongoing</P>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Country: Oman </li>
                                                        <li>Account: Motorola </li>
                                                        <li>Operator: ROP </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-12">
                                                    <p>Structured cabling and installation of Workstations</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Motorola mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Motrola.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">ROP Etisalat Project</h4>
                                                    <p>2019-Ongoing</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Country: Oman </li>
                                                        <li>Account: Motorola </li>
                                                        <li>Operator: ROP </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 ps-lg-3">
                                                    <p>ROP Etisalat Project</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Motorola mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Motrola.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Stage - 01: SBP( Site Build Pack)+LOS + Civil
                                                        work validation Survey</h4>
                                                    <p>Motorola from 2016 to On Going</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled d-flex">
                                                        <li>Operator/Consultant:<br>
                                                            MOTOROLA/ ROP</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>SBP + LOS and Site Survey</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Motorola mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Motrola.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Stage - 2 : CME and TI supply and
                                                        Installation work (Civil Construction of Tower Work + Telecom
                                                        Supply and Installation Work)</h4>
                                                    <p>Motorola from 2016 to On Going</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Operator/Consultant:<br>
                                                            MOTOROLA/ ROP</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 pe-lg-4">
                                                    <p>CME(Civil+Mechanical + Electrical) and Telicom Materials Supply
                                                        Work</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Motorola mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Motrola.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Maintenance Work (CME and Telecom work)</h4>
                                                    <p>Motorola from 2016 to On Going</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Operator/Consultant:<br>
                                                            MOTOROLA/ ROP</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 pe-lg-4">
                                                    <p>CME(Civil+Mechanical + Electrical) and Telecom Materials Supply
                                                        Work</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Motorola mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Motrola.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">DRIVE TEST</h4>
                                                    <p>Motorola from 2016 to On Going</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Operator/Consultant:<br>
                                                            MOTOROLA/ ROP</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 pe-lg-4">
                                                    <p>Drive test for indoor & outdoor Equipments</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Motrolla End -->

                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-1g-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-10 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Ericsson RBS Service </h4>
                                                    <p>2014 - ONGOING</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Country: Oman </li>
                                                        <li>Main Contractor: Ericsson </li>
                                                        <li>End Customer: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Installation and commissioning of RBS and antenna for SRAN/LTE
                                                        FDD/ LTE
                                                        TDD/ 5G</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Motorola mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Ericsson MW Service</h4>
                                                    <p>2014 - Ongoing</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Main Contractor: Ericsson </li>
                                                        <li>End Customer: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-7 col-md-6 col-sm-12">
                                                    <p>Includes site survey/Engineering, installation of MW indoor and
                                                        outdoor
                                                        unit, LOS
                                                        verification,
                                                        Testing commisioning and integration of MW indoor and outdoor
                                                        system.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Motorola mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class=" row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Drive Test Services</h4>
                                                    <p>2012 - Ongoing</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Country: Oman </li>
                                                        <li>Main Contractor: Ericsson </li>
                                                        <li>End Customer: Omantel & Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply of resource with dedicated car and tools for drive test
                                                        for
                                                        Ericsson.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class=" row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Ericsson O&M Rigger service</h4>
                                                    <p>2016 - 2018</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-5 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-7 col-sm-12">
                                                    <p>Supply of resource with dedicated car for O&M services across all
                                                        part of
                                                        Oman.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Motorola mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class=" row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Drive Test Services</h4>
                                                    <p>2012-Ongoing</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericssion</li>
                                                        <li> End Customer: Omantel & Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply of resource with dedicated car and tools for drive test
                                                        for
                                                        Ericsson.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class=" row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">CW & TI</h4>
                                                    <p>2013-2014</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class=" row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Implementation services - Frame Agreement
                                                    </h4>
                                                    <p>2013-2014</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Middle East </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Omantel/Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Mw Projects</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class=" row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">TI/MW</h4>
                                                    <p>2011-2012</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class=" row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <h4 class="title-font">CW & TI</h4>
                                                    <p>2011-2012</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">TI/MW</h4>
                                                    <p>2011-2012</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Resource Supply</h4>
                                                    <p>2011-2012</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Resource Supply</h4>
                                                    <p>2010-2011</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Resource Supply</h4>
                                                    <p>2010-2011</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Professional Services</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Resource Supply</h4>
                                                    <p>2010-2011</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Professional Services</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Resource Supply</h4>
                                                    <p>2010-2011</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Professional Services</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Resource</h4>
                                                    <p>2010-2011</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country:Oman </li>
                                                        <li> Main Contractor:Ericsson </li>
                                                        <li> End Customer:Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Professional Services</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">TI</h4>
                                                    <p>2010-2011</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment Services</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">TI</h4>
                                                    <p>2010-2011</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">O & M</h4>
                                                    <p>2010-2011</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Nawras </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Professional Services</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">CW & TI</h4>
                                                    <p>2010-2011</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Nawras </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Installation /alignment &commissioning of M/w
                                                        link</h4>
                                                    <p>2009-2010</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Telecom Installation and commissioning /Mw
                                                        ,Drive
                                                        test/los/traffic Node</h4>
                                                    <p>2009-2010</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Nawras </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Professional Services </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class=" row">
                                                <div class="col-lg-10 col-md-12 col-sm-12">
                                                    <h4 class="title-font"> Ericsson SRAN & MW Project</h4>
                                                    <p>2014-2015</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Installation & Commissioning of
                                                        microwave
                                                        links, SRAN.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class=" row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Ericsson CIVIL WORKS Project</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Main Contractor: Ericsson </li>
                                                        <li> End Customer: MOD </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-7 col-md-6 col-sm-12">
                                                    <p>Service Offerings Building of new telecom sites,
                                                        Construction
                                                        of
                                                        tower
                                                        foundation, shelter
                                                        foundation, erection of tower. Installation &
                                                        Commissioning
                                                        of
                                                        microwave
                                                        links, Installation
                                                        of
                                                        solar power system.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-10 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply of Manpower</h4>
                                                    <p>From 2012</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-8 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consultant:<br>Omantel</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12">
                                                    <p>CONSULTANT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-10 col-md-12 col-sm-12">
                                                    <h4 class="title-font">RF & LOS survey</h4>
                                                    <p>Omantel-From 2012, Vodafone-From 2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-8 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Operator/Consultant:<br>Oman, Omantel & Vodafone</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 ps-lg-5">
                                                    <p>TTSR & LOS survey for new and existing towers for both Ericsson
                                                        client.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-10 col-md-12 col-sm-12">
                                                    <h4 class="title-font">RAN Instatallation</h4>
                                                    <p>Omantel-From 2012, Vodafone-From 2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-8 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Operator/Consultant:<br>Oman, Omantel & Vodafone</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 ps-lg-5">
                                                    <p>Implementation and integration of 2g,3g,4g and 5g networks all
                                                        over Oman.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-10 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MW installation</h4>
                                                    <p>Omantel-From 2012, Vodafone-From 2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-8 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Operator/Consultant:<br>Oman, Omantel & Vodafone</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 ps-lg-5">
                                                    <p>Implementation and integration of different MW links</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-10 col-md-12 col-sm-12">
                                                    <h4 class="title-font">DRIVE TEST</h4>
                                                    <p>From 2012</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-8 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Operator/Consultant:<br>Omantel</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 ps-lg-5">
                                                    <p>Drive test for indoor & outdoor equipments.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ericsson mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Ericsson.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-10 col-md-12 col-sm-12">
                                                    <h4 class="title-font">IBS installation</h4>
                                                    <p>From 2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-8 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Operator/Consultant:<br>Vodafone</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 ps-lg-5">
                                                    <p>IBS installation of telecom equipments.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Ericsson End -->

                            <div class="grid col-xl-6 col-lg-6 Omantel mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Omantel.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Design , Supply & Installation of Telecom
                                                        Towers</h4>
                                                    <p>2019-Ongoing</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Omantel </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-12">
                                                    <p>Design , Supply & Installation of Telecom Towers and
                                                        Construction
                                                        of
                                                        Boundary Walls &
                                                        Chanilink
                                                        fencing with Allied works- Oil Filed area
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Omantel mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Omantel.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Boundary Walls & Chanilink
                                                        fencing with Allied works</h4>
                                                    <p>2016-2018</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Omantel </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-12">
                                                    <p>Design , Supply & Installation of Telecom Towers and
                                                        Construction
                                                        of
                                                        Boundary Walls &
                                                        Chanilink
                                                        fencing with Allied works at Various Omantel sites in
                                                        the
                                                        Sultanate of
                                                        Oman.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Omantel mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Omantel.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Security Fencing for GRDU</h4>
                                                    <p>2016-2017</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Omantel </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-12">
                                                    <p>Design , Supply & Installation of Security Fencing for
                                                        GRDU
                                                        at
                                                        Various
                                                        Omantel Sites.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Omantel mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Omantel.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">General Civil Works Maintenance</h4>
                                                    <p>2015-2016</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Omantel </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-12">
                                                    <p>General Civil Works Maintenance at various Omantel Sites
                                                        in
                                                        the
                                                        Sultanate
                                                        of Oman.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Omantel mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Omantel.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">OMANTEL 500 Sites & USO Project</h4>
                                                    <p>2014-2015</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Omantel </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-12">
                                                    <p>Building of new telecom sites, Construction of tower
                                                        foundation,
                                                        shelter
                                                        foundation, erection
                                                        of
                                                        tower. Installation & Commissioning of 2G, 3G LTE.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Omantel mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Omantel.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">OMANTEL FRAME AGREEMENT GENERAL CIVIL
                                                        MAINTANENCE
                                                        Project
                                                    </h4>
                                                    <p>2014-2015</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: OTP </li>
                                                        <li> Operator: OTP </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-12">
                                                    <p> Maintenance and repairing of existing GSM sites & telecom
                                                        Exchanges.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Omantel mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Omantel.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">TI /CW</h4>
                                                    <p>2013-2014</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Omantel </li>
                                                        <li> Operator: Ericsson </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Omantel mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Omantel.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">TI</h4>
                                                    <p>2010-2011</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Omantel </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Omantel mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Omantel.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Dismantling of M/W Link</h4>
                                                    <p>2009-2010</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Omantel </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-12 ps-lg-5">
                                                    <p>Service Offerings Network Deployment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Omantel End -->

                            <div class="grid col-xl-6 col-lg-6 OTC mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="p-3 thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/OTC.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Design, Supply and Installation of Power
                                                        Supply</h4>
                                                    <p>2021 - Ongoing</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: OTC </li>
                                                        <li> Operator: OTC </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Maintenance of Telecom Towers</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 OTC mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="p-3 thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/OTC.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Maintenance of Telecom Tower and Power
                                                        Infrastructure</h4>
                                                    <p>2020 - Ongoing </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Oman Towers </li>
                                                        <li> Operator: Oman Towers </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Tower Construction and Power connection </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 OTC mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="p-3 thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/OTC.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Turnkey Rooftop Site Supply and Construction
                                                    </h4>
                                                    <p>2018 - Ongoing</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consulant:<br>
                                                            VODFONE / OOREDOO/ OMANTEL </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Special towers camouflage structures/ Moziaque towers TOWERS </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 OTC mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="p-3 thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/OTC.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Structure, Monopoly, Supply, and Interaction
                                                    </h4>
                                                    <p>2018 - Ongoing</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consulant:<br>
                                                            VODFONE / OOREDOO/ OMANTEL </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Special towers camouflage structures/ Moziaque towers TOWERS </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 OTC mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="p-3 thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/OTC.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Maintenance of Telecom Tower Sites</h4>
                                                    <p>2021 - Ongoing
                                                    <p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consulant:<br>
                                                            VODFONE / OOREDOO/ OMANTEL </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Existing tower maintenance</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 OTC mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="p-3 thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/OTC.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Emergency Power Alarm Intervention</h4>
                                                    <p>2022 - Ongoing
                                                    <p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consulant:<br>
                                                            VODFONE / OOREDOO/ OMANTEL </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Introduce new technology</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 OTC mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="p-3 thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/OTC.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font"> Supply of Turnkey Tower Sites</h4>
                                                    <p>2022 - Ongoing
                                                    <p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consulant:<br>
                                                            OTC/ VODFONE/ OORDOO/ OMANTEL</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply and delivery of towers/ Monopole structures and camouflage
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 OTC mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="p-3 thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/OTC.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply & Installation of towers & power
                                                        systems for MOD maritime Project</h4>
                                                    <p>2022 Ongoing
                                                    <p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consulant:<br>
                                                            MOD / OTC</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Monopole structures and camouflage</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- OTC End -->

                            <div class="grid col-xl-6 col-lg-6 PDO mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/PDO.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Telecom Service - HP Wells</h4>
                                                    <p>2020 - Ongoing</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: PDO </li>
                                                        <li> Operator: PDO </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Installation, Blowing and termination of FOC </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 PDO mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/PDO.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply of EXFO OLTS Test Unit</h4>
                                                    <p>2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: PDO </li>
                                                        <li> Operator: PDO </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply of EXFO OLTS Test Unit for PDO </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 PDO mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/PDO.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">FOC Installation, Configuration, Testing and
                                                        Commissioning</h4>
                                                    <p>2022</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            PDO</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/ TELECOMMUNICATION/ ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 PDO mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/PDO.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply of EXFO OLTS MAX 945</h4>
                                                    <p>2022</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            PDO</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 ps-lg-5">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 PDO mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/PDO.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">DHULIMA - CCTV , FOC Integration Project</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            PDO</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 ps-lg-5">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 PDO mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/PDO.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">FAAL -LEK</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            PDO</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 ps-lg-5">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 PDO mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/PDO.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply, Installation and Configuration
                                                        complete ELV systems(CCTV, WIFI, Data, Analog Telephony,
                                                        Networking, PABGM AMAL)</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            PDO</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/ TELECOMMUNICATION/ ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PDO End -->

                            <div class="grid col-xl-6 col-lg-6 Ooredoo mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Oredoo.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply of OSP/FOC</h4>
                                                    <p>2014-2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consultant:<br> Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply of OSP and FOC for Ooredoo projects</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ooredoo mt-30 project-card">
                                <div style="border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Oredoo.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MW Linking at business sites</h4>
                                                    <p>2014-2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consultant:<br> Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Microwave Linking at different business sites for ooredoo
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ooredoo mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Oredoo.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MW Link - LOS/ Transmission Work/ LTE</h4>
                                                    <p>2014-2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consultant:<br> Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>MW Link, LOS transmission works, LTE FDD works for the
                                                        new
                                                        ooredoo sites.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ooredoo mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Oredoo.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply of OSP/FOC Consultant</h4>
                                                    <p>2013 & ONGOING</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-9 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consultant: Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-8 col-sm-12 ps-lg-3">
                                                    <p>Consultant.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ooredoo mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Oredoo.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">DRIVE TEST </h4>
                                                    <p>2013 & ONGING </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consultant: Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <p>Drive test project.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ooredoo mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Oredoo.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">2G/3G/LTE/5G MW implementation.</h4>
                                                    <p>2013 & ONGING</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consultant:<br> Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Implementation and integration of different site.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ooredoo mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Oredoo.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Business to Business MW link implementation
                                                    </h4>
                                                    <p>2013 & ONGING</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consultant:<br> Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Implementation and integration of different MW links.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ooredoo mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Oredoo.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MW LOS Survey</h4>
                                                    <p>2013 & ONGOING</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consultant: Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-7 col-md-6 col-sm-12">
                                                    <p>LOS survey different sites.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Ooredoo mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Oredoo.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font"> Boradband connection to all TRA school in
                                                        OMAN </h4>
                                                    <p>2016 to 2018</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consultant: Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Broad band link connectivity.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Oredoo End -->

                            <div class="grid col-xl-6 col-lg-6 pro-7 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Huawei.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">HUAWEI NEW TK Project</h4>
                                                    <p>2014-2015 </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Huawei </li>
                                                        <li> Operator: Huawei </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Building of new telecom sites,
                                                        Construction
                                                        of
                                                        tower
                                                        foundation, shelter
                                                        foundation, erection of tower. Installation &
                                                        Commissioning
                                                        of
                                                        2G, 3G
                                                        LTE. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-7 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Huawei.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Huawei RNPO Project</h4>
                                                    <p>2014-2015</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Huawei </li>
                                                        <li> Operator: Huawei </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Planning, RF Planning & Design,
                                                        RF
                                                        Optimisation, Network Support
                                                        System, IBS, 2G 3G LTE Drive Test</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-7 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" class="image" src="./assets/img/clients/Huawei.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">CW & TI</h4>
                                                    <p>2013-2014</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Huawei </li>
                                                        <li> Operator: Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Civil TK Project</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-7 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Huawei.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">TI</h4>
                                                    <p>2010-2011</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Huawei </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-7 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Huawei.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">CW & TI</h4>
                                                    <p>2010-2011</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Huawei </li>
                                                        <li> Operator: Nawras </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Professional Services</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-7 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Huawei.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">T E/Datacom/NGT</h4>
                                                    <p>2009-2010</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Huawei </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-7 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Huawei.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">RF Planning & Optimizations/ DT services</h4>
                                                    <p>2013-2014</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Middle East </li>
                                                        <li> Account: Huawei </li>
                                                        <li> Operator: Ooredoo </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings RNO/RNP</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Huawei End -->

                            <div class="grid col-xl-6 col-lg-6 pro-8 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/NSN.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Resource Supply</h4>
                                                    <p>2010-2011</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: NSN </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Professional Services </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-8 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/NSN.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Drive Test/NPO</h4>
                                                    <p>2009-2010</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: NSN </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Professional Services</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-8 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/NSN.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Core/ebsc/Swap</h4>
                                                    <p>2009-2010</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: NSN </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-8 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/NSN.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Phase -4</h4>
                                                    <p>2007-2008</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: NSN </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- NSN End -->

                            <div class="grid col-xl-6 col-lg-6 pro-9 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Simens.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Road Project</h4>
                                                    <p>2005-2006</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Siemens </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-9 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Simens.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Road Project</h4>
                                                    <p>2004-2005</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Siemens </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Service Offerings Network Deployment </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Siemens End -->

                            <div class="grid col-xl-6 col-lg-6 RAFO mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/RAFO-ROFA.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply and installation of Video wall System
                                                    </h4>
                                                    <p>2018-2019</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: ROP </li>
                                                        <li> Operator: ROP </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply, Installation ,testing and commissioning of Video
                                                        wall
                                                        system</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 RAFO mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ROP-ROFA.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Conferencing System</h4>
                                                    <p>2021–2021</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: RAFO </li>
                                                        <li> Operator: RAFO </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Installation and Configuration of Huawei Conferencing
                                                        System
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 RAFO mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ROP-ROFA.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply, Installation and Configuration of
                                                        Cloudland Box 300</h4>
                                                    <p>2022</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            RAFO</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 RAFO mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ROP-ROFA.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply and Installation of CCTV System and
                                                        Video Conferencing System</h4>
                                                    <p>2022</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            RAFO</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 RAFO mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ROP-ROFA.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">TOWER, VOR , RADAR AND SPECIAL PROJECTS FOR
                                                        RAFO MASIRAH</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            RAFO</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 RAFO mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ROP-ROFA.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Desktop installation project for Motrolla all
                                                        over Oman</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            ROP</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 RAFO mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ROP-ROFA.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Fiber civil and FOC splicing and testing</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            ROP</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 ps-lg-4">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Rop/Rofa End -->

                            <div class="grid col-xl-6 col-lg-6 pro-11 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Fiber-Optics.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">DCS Upgrade Phase II Fiber Optic Network</h4>
                                                    <p>2021 – ongoing</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: AOTC </li>
                                                        <li> Operator: Oman LNG </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Civil Work and FOC installation</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-11 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Fiber-Optics.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">FOC- OPGW Cable Splicing</h4>
                                                    <p>2021 – ongoing</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: L & T </li>
                                                        <li> Operator: PDO </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Fiber Optics OPGW Cable Splicing testing and
                                                        Commissioning
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-11 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Fiber-Optics.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Fiber Optics Splicing</h4>
                                                    <p>2021 September – 2021 November</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: GPS </li>
                                                        <li> Operator: PDO </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Fiber Optics Splicing, Testing and Commissioning </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-11 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Fiber-Optics.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Tower Erection</h4>
                                                    <p>2021 March – 2021 June</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: STS </li>
                                                        <li> Operator: Duqm Refinery and Petrofac </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Tower Erection</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-11 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Fiber-Optics.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Installation and AMC of Avaya IP Phones</h4>
                                                    <p>2018 - 2021</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Ubhar Capital </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Installation , Configuration, Testing and AMC of Avaya IP
                                                        Phones
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-11 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Fiber-Optics.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">FTTH Construction in Sohar</h4>
                                                    <p>2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: OHI Telecom </li>
                                                        <li> Operator: Oman Broadband </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>FTTH Construction in Sohar for Oman Broadband </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-11 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Fiber-Optics.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">FOC Installation</h4>
                                                    <p>2020 - Ongoing</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: OHI Telecom </li>
                                                        <li> Operator: ARA Drilling </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>FOC Installation in PDO Sites </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-11 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Fiber-Optics.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">FTTH Construction in Ibri</h4>
                                                    <p>2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Al Jassar Telecom LLC </li>
                                                        <li> Operator: Oman Broadband </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>FTTH Construction in Ibri Al Murtafa Al Dhahira Region
                                                        for
                                                        Oman
                                                        Broadband</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-11 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Fiber-Optics.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">FTTH Construction in Nizwa</h4>
                                                    <p>2019-2020 </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Al Jassar Telecom LLC </li>
                                                        <li> Operator: Oman Broadband </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>FTTH Construction in Nizwa Farq-Al Dhakelyah Region for
                                                        Oman
                                                        Broadband </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Fiber Optics End-->

                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply and installation of Huawei IP
                                                        Telephony</h4>
                                                    <p>2018 May – 2018 July</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Advance Engineering LLC </li>
                                                        <li> Operator: Advance Engineering LLC </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply, installation, Testing and Commissioning of Huawei
                                                        IP
                                                        Telephony
                                                        and Servers</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply and installation of Nurse call System
                                                    </h4>
                                                    <p>2018-2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Al Tasnim </li>
                                                        <li> Operator: Royal Court Affairs (RCA) </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply, installation, Testing and Commissioning of ASCOM
                                                        nurse
                                                        call
                                                        system
                                                        at Sohar Palace</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Installation of ELV Systems</h4>
                                                    <p>2018 – 2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Royal Crown Hotel </li>
                                                        <li> Operator: Royal Crown Hotel </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Installation, Configuration and testing of Complete ELV
                                                        Systems
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Installation and AMC of Avaya IP Phones</h4>
                                                    <p>2018 - 2021</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Country: Oman </li>
                                                        <li> Account: Ubhar Capital </li>
                                                        <li> Operator: Omantel </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Installation , Configuration, Testing and AMC of Avaya IP
                                                        Phones
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply and Installation of Hospital token
                                                        systems
                                                    </h4>
                                                    <p>2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            Ministry of Health-Bhawan Projects & Telecom</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply of Huawei Switches & IT Accessories
                                                    </h4>
                                                    <p>2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            Ministry of Education-Huawei</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply and Installation of Hikvision CCTV
                                                        System</h4>
                                                    <p>2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            Smart Digital Technologies</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply of Server Storage</h4>
                                                    <p>2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            Ministry of Manpower:Ibra college</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply of Cisco Switches</h4>
                                                    <p>2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            Ministry of Education:Meridian IT</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply and Installation of Avaya Telephone,
                                                        CCTV, ACS Systems</h4>
                                                    <p>2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            Yas Communication-Majid Water Cooler & Airconditioning</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply and Installation of Huawei Data
                                                        Switches</h4>
                                                    <p>2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            Ministry of Education:Meridian IT</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply and Installation of ASCOM Nurse call
                                                        System for Sohar Palace</h4>
                                                    <p>2021</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            RCA-2-Al Tasnim</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/ TELECOMMUNICATION/ ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply, Installation and Configuration and
                                                        AMC of Avaya IP Telephony</h4>
                                                    <p>2021</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            Omantel-Ubhar Capital</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/ TELECOMMUNICATION/ ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply and Installation of Video Wall ROP ROP
                                                        40000</h4>
                                                    <p>2021</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            ROP</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/ TELECOMMUNICATION/ ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply, Installation and Configuration
                                                        complete ELV systems (CCTV, WIFI, Data, Analog Telephony,
                                                        Networking, PAI3GM System, SMATV)</h4>
                                                    <p>2021</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            Royal Crown Hotel-Advance Engineering LLC</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply and Installation of Huawei IP
                                                        Telephony, CCTV System & Server</h4>
                                                    <p>2021</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            Advance Engineering LLC</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">WP#20 FTTH Construction in Nizwa</h4>
                                                    <p>2022</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            Oman Broadband-Al Jasser Telecom</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">WP#33 FTTH Construction in Sohar</h4>
                                                    <p>2022</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            Oman Broadband-OHI Telecom</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">VVP#41 FTTH Construction in Ibri</h4>
                                                    <p>2022</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            TCIL</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 ps-lg-5">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Supply of EXFO OLTS MAS 945</h4>
                                                    <p>2022</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            Oman Broadband-OHI Telecom</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">WP#45 Civil and Telecom Works for Quriyat
                                                    </h4>
                                                    <p>2022</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            Oman Fiber Optic Co. SAOC.</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">FOC Cable Work in Qarn Al Alam</h4>
                                                    <p>2022</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>
                                                            PDO/Galfar</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 ps-lg-5">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">WP#55 FTTH Construction in Buraimi</h4>
                                                    <p>2022</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            MOTOROLA</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">(HP2, HP4, HP5, HP6) Telecom Services</h4>
                                                    <p>2019</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            GPS</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 ps-lg-5">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">FOC Switch Installation</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            MOTOROLA</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 ps-lg-4">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Work station Installation and Commissioning
                                                    </h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            MOTOROLA</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 ps-lg-4">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">FOC Termination and Testing</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            AOTC</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 ps-lg-5">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Testing L&T</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            AOTC</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 ps-lg-5">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Termination and Testing </h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            STS-GPS</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 ps-lg-5">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Rectification GPS</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            GPS</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 ps-lg-5">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Relocation FOC</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            OTC</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 ps-lg-5">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-12 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/ICT.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Gate barrier</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:
                                                            GALFAR</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 ps-lg-5">
                                                    <p>IT/TELECOMMUNICATION/ICT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- ICT End  -->


                            <div class="grid col-xl-6 col-lg-6 Helios mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/Helios.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">New Tower Construction and Strengthening of
                                                        Tower</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consulant:<br>
                                                            Omantel</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Construction of tower foundation, pedestals and boundary walls
                                                        with HTO standard.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Helios mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/Helios.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Tower Strengthing</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Operator/Consulant:<br>
                                                            Vodafone, Omantel, Oredoo</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Fabrication of new bracing and leg members based on structural
                                                        analysis report. Replacing existing members by new members</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Helios mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/Helios.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Tower Maintenance</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Operator/Consulant:<br>
                                                            Omantel, Oredoo</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Conduct detailed TSSR survey, fabrication and replacing of new
                                                        members
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 Helios mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/Helios.png" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">GRDU Maintenance
                                                    </h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consulant:<br>
                                                            Omantel</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Conduct detailed TSSR survey, fabrication and replacing of new
                                                        members. protect the tower from collapse condition.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Helios End -->

                            <div class="grid col-xl-6 col-lg-6 MEP mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/MEP.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MEP work proposed Commercial & Residential Building</h4>
                                                    <p>Dec 2023 - ongoing</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>Nebras Al Baraka Ent. (AMLAK)</li>
                                                        <li>Country:<br>Bousher, Muscat</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>G+7+PH Floors.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 MEP mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/MEP.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MEP work proposed Commercial & Residential Building</h4>
                                                    <p>May 2024 - ongoing</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>M/S. Build Engineering & Architect Modelling LLC (BEAM)</li>
                                                        <li>Country:<br>Bousher, Muscat</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>L+GF+2 Offices + 4 Apartments Floors.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 MEP mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/MEP.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MEP Works at Propossed Com and residential
                                                        BLD at AL KHUWAIR</h4>
                                                    <p>2015 - 2016</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>GOLDEN GROUP/ABDULLAH MUKADAM</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply and installation of all MEP material and installation.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 MEP mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/MEP.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MEP Works at Propossed Com Residential
                                                        BLD at GHALA</h4>
                                                    <p>2017 - 2019</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>OMAN RESIDENCE/SPACE DESIGNERS INTL LLC</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply and installation of all MEP material and installation</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 MEP mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/MEP.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MEP Works at Propossed at NIZWA
                                                        Industrial Estate</h4>
                                                    <p>2017 - 2018</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>IDS / AL NADA ENGINEERING CONSUTANCY</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply and installation of all MEP material and installation</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 MEP mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/MEP.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MEP Works at Proposed Pet Bottle Factory at
                                                        SUMAIL Industrial Estate</h4>
                                                    <p>2017 - 2018</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>AL NADA INDUSTRIES / LEEYANA ENGINEERING
                                                            CONSULTANCY</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply and installation of all MEP material and installation
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 MEP mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/MEP.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MEP Works at Propossed Com and Residential
                                                        BLD at GHALA</h4>
                                                    <p>2017 - 2018</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>DANA HOUSE /SPACE DESIGNERS INTL LLC
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply and installation of all MEP material and installation
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 MEP mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/MEP.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MEP Works at Propossed Com and Residential
                                                        BLD at AL KHUWAIR</h4>
                                                    <p>2018 - 2019</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>AL AMAL /SPACE DESIGNERS INTL LLC</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply and installation of all MEP material and installation
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 MEP mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/MEP.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MEP works at Propossed Storage Warehouse at
                                                        BARKA</h4>
                                                    <p>2019 - 2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>MD.NAZIR / AL SHAMIL ENGINEERING CONSULTANCY</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply and installation of all MEP material and installation
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 MEP mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/MEP.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MEP Works at 1000 Men Camp at BARKA
                                                    </h4>
                                                    <p>2019 - 2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>Synergy</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply and installation of all MEP material and installation
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 MEP mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/MEP.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MEP Works at Propossed Com and Residential
                                                        BLD at AZAIBA</h4>
                                                    <p>2019 - 2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>SUHIL AL BADAR CONSTRUCTION /ABDULLAH MUKADAM
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply and installation of all MEP material and installation
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 MEP mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/MEP.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MEP Works at A1 Fence Factory at BURAIMI
                                                        Industrial Estate</h4>
                                                    <p>2019 - 2020</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>A1 FENCE / AL SHAMIL ENDINEERING CONSULTANCY</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply and installation of all MEP material and installation</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 MEP mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/MEP.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MEP Works at Propossed Com and Residential
                                                        BLD at DUQM B+G+8</h4>
                                                    <p>2019 - 2021</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>AL NADA INDUSTRIES / LEEYANA ENGINEERING
                                                            CONSULTANCY</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply and installation of all MEP material and installation
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 MEP mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/MEP.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MEP Works Propossed Labour Camp at DUQM</h4>
                                                    <p>2019 - 2022</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>AL RAHA INTL LLC / AL SHAMIL ENGINEERING
                                                            CONSULTANCY</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply and installation of all MEP material and installation
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 MEP mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="./assets/img/clients/Logo/MEP.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">MEP Works at Propossed Materials Storage
                                                        Warehouse at SAHAM
                                                    </h4>
                                                    <p>2019 - 2022</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li>Client:<br>AL MAJIDI / SPACE DESIGNERS INTL LLC</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply and installation of all MEP material and installation</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Electrical / MEP End -->

                            <div class="grid col-xl-6 col-lg-6 pro-15 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image"
                                            src="./assets/img/clients/client logo/Vodafone-Logo-Vector.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Vodafone CO -Location</h4>
                                                    <p>2022-2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consulant:<br>
                                                            Vodafone</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Supply and installation of ACDB's, Cable ladders & Antenna/MW
                                                        brackets, Power connection
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid col-xl-6 col-lg-6 pro-15 mt-30 project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image"
                                            src="./assets/img/clients/client logo/Vodafone-Logo-Vector.jpg" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <h4 class="title-font">Vodafone Co-location</h4>
                                                    <p>2023</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul class="text-left list-unstyled">
                                                        <li> Operator/Consulant:<br>
                                                            Vodafone</li>
                                                    </ul>
                                                </div>
                                                <div class="text-left col-lg-6 col-md-6 col-sm-12">
                                                    <p>Assembling and installation of tower structure. Installation and
                                                        commissioning of Shelter, Rectifier and ACDB's.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php

                             foreach ($projects as $project) {
                                // print_r($project);
                                ?>
                                
                                <div class="col-xl-6 col-lg-6 <?php echo $project['project']; ?>  mt-30 grid project-card">
                                <div style="    border: 1px solid #0DA955 !important;"
                                    class="border sotcox-project-item sotcox-service-item d-flex align-items-center">
                                    <div class="thumb d-none d-lg-block">
                                        <img class="image" src="<?php echo $project['logo']; ?>" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ps-4" style="height: 100%;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-6 col-sm-12">
                                                    <h4 class="title-font"> <?php echo $project['title']; ?> </h4>
                                                    <p><?php echo $project['period']; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                                    <ul class="text-left list-unstyled border-right">
                                                        <?php foreach ($project['description'] as $description) {
                                                            echo "<li><b>" . $description['title'] . '</b>';
                                                            echo $description['title'] ? " : " : '';
                                                            echo $description['value'] . "</li>";
                                                        } ?>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <?php echo "<p>" . $project['data'] . "</p>"; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <?php } ?>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==== PROJECT SECTION END ====-->

    <!--====== FOOTER START ======-->
  <footer class="sotcox-footer wow fadeInUp" data-wow-delay="300ms" data-wow-duration="800ms"
    style="background-color: #1d2636;">
    <div class="sotcox-footer-widgets">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 sotcox-custom-col mt-75">
            <div class="widget">
              <h3 class="widget-title title-font text-light mt-5">We Network LLC</h3>
              <div class="widget ">
              
                <div class="about-widget">
                  <p class="text-light">
                    <i class="far fa-map-marker-alt"></i>
                    <span class="text-light fs-5">Corporate Office Address</span></p>
                    <p class="text-light footer-address">
                    Office No - 222,<br>
                    2nd floor Alfardan Heights, <br>
  
                    Block No: 250, Plot No: 151, <br>
  
                    24: Ghala Industrial Area,<br>
                    Sultanate of Oman.
  
                  </p>
                </div>
              </div>
              <div class="about-widget">

               
                <p class="text-light"><i class="far fa-envelope"></i> info@wenetworkllc.com</p>
                <div class="sotcox-social-links">
                  <a class="text-light" href="https://m.facebook.com/profile.php/?id=100079002285250"><i
                      class="fab fa-facebook-f"></i></a>
                  <a class="text-light" href="https://twitter.com/Wenetworksllc"><i class="fab fa-twitter"></i></a>
                  <a class="text-light" href="#0"><i class="fab fa-instagram"></i></a>
                  <a class="text-light" href="https://www.linkedin.com/company/we-network-llc/"><i
                      class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6 sotcox-custom-col footer-padding mt-75">
            <div class="widget ">
              
              <div class="about-widget">


                <p class="text-light">
                  <i class="far fa-map-marker-alt"></i>
                  <span class="text-light fs-5"><b>Social Link</b></span></p>
                  <ul>
                    <li><a class="text-light" href="https://m.facebook.com/profile.php/?id=100079002285250">Facebook</a></li>
                    <li><a class="text-light" href="https://twitter.com/Wenetworksllc">Twiter</a></li>
                    <li><a class="text-light" href="./services.html">Instagram</a></li>
                    <li><a class="text-light" href="https://www.linkedin.com/company/we-network-llc/">linkedin</a></li>
                    
                  </ul>
                  
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6 sotcox-custom-col mt-75">
            <div class="widget">
              <h3 class="widget-title text-light title-font mt-5">Information</h3>
              <ul>
                <li><a class="text-light" href="./index.html">Home</a></li>
                <li><a class="text-light" href="./about.html">About Us</a></li>
                <li><a class="text-light" href="./services.html">Services</a></li>
                <li><a class="text-light" href="./projects.php">Project</a></li>
                <li><a class="text-light" href="./ProjectGallery.html">Gallery</a></li>
                <li><a class="text-light" href="./contact.html">Contact us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sotcox-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p class="text-light">
              Copyright &copy; <span class="text-light" id="copyright-date"></span> <a href="./index.html">WE Network LLC</a>, All
              Rights Reserved. Designed by <a href="https://izhtech.com/">Izh-Tech</a>.
            </p>
          </div>
          <div class="col-md-4">
            <div class="sotcox-backtotop">
              <button data-sotcox-backtotop class="text-light">
                <i class="far fa-angle-up text-light"></i> Go On Top
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--====== FOOTER END ======-->

    <!--========= JS Here =========-->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/uikit.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/waypoint.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/js-jquery.knob.js"></script>
    <script src="assets/js/js-jquery.appear.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    

    




</body>




</html>