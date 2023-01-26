<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Arquito - 3D Architecture &amp; Interior HTML Template" name="description">
    <meta content="Paul, Logan Cee, Mikhail Ojereliev" name="author">
    <title>Arquito - 3D Architecture &amp; Interior HTML Template</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400" rel="stylesheet">
    <!--CSS-->
    <link href="{{ asset('assets/css/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/linearicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animsition.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--Revolution Style Sheets-->
    <link href="{{ asset('assets/css/revolution/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/revolution/layers.css') }}" rel="stylesheet">
    <!--Panorama Add-On Files-->
    <link href="{{ asset('assets/css/revolution-addons/panorama/revolution.addon.panorama.css') }}" rel="stylesheet">
    <!--Theme CSS-->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <!--Favicons-->
    <link href="{{ asset('favicons/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180">
    <link href="{{ asset('favicons/favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png">
    <link href="{{ asset('favicons/favicon-16x16.png') }}" rel="icon" sizes="16x16" type="image/png">
    <link href="{{ asset('favicons/site.webmanifest') }}" rel="manifest">
    <link color="#5bbad5" href="{{ asset('favicons/safari-pinned-tab.svg') }}" rel="mask-icon">
    <link href="{{ asset('favicons/favicon.ico') }}" rel="shortcut icon">
    <meta content="#da532c" name="msapplication-TileColor">
    <meta content="{{ asset('favicons/browserconfig.xml') }}" name="msapplication-config">
    <meta content="#ffffff" name="theme-color">
</head>

<body class="page">
<div style="display: none">
    <!-- svg sprite-->
    <svg style="width:0; height:0; visibility:hidden;" xmlns="http://www.w3.org/2000/svg">
        <symbol id="icon_ion-icon-apps" viewBox="0 0 512 512">
            <path
                d="M96 176h80V96H96v80zm120 240h80v-80h-80v80zm-120 0h80v-80H96v80zm0-120h80v-80H96v80zm120 0h80v-80h-80v80zM336 96v80h80V96h-80zm-120 80h80V96h-80v80zm120 120h80v-80h-80v80zm0 120h80v-80h-80v80z"/>
        </symbol>
    </svg>
</div>
<div class="page__inner animsition">
    <header class="header header_white header_fixed ">
        <div class="header__container">
            <div class="header__wrapper container-fluid">
                <div class="header__inner">
                    <a class="logo header__logo" href="/">Arquito</a>
                    <button class="header__menu-button" type="button">
                        <span class="header__menu-button-inner"></span>
                    </button>
                </div>
            </div>
            <div class="header-fixed">
                <div class="header-fixed__bottom container">
                    <ul class="top-menu header-fixed__menu">
                        <li class="top-menu__menu-item">
                            <div class="dropdown">
                                <a class="dropdown__trigger top-menu__menu-link" href="/">Home</a>
                                <div class="dropdown__menu">
                                    <div class="dropdown__column">
                                        <div class="dropdown__title">Light</div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="index.html">Default</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="home-parallax-piling.html">Parallax
                                                Piling</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="home-zoom-parallax.html">Zoom Parallax</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="home-3d-panorama.html">3D Panorama</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link dropdown__link dropdown__link_active"
                                               href="home-studio.html">Studio</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="home-minimal.html">Minimal</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="home-grid-background.html">Grid
                                                Background</a>
                                        </div>
                                    </div>
                                    <div class="dropdown__column">
                                        <div class="dropdown__title">Dark</div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="home-default-dark.html">Default Dark</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="home-zoom-parallax-dark.html">Zoom Parallax
                                                Dark</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="home-3d-panorama-dark.html">3D Panorama
                                                Dark</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="home-studio-dark.html">Studio Dark</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="home-minimal-dark.html">Minimal Dark</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="top-menu__menu-item">
                            <div class="dropdown">
                                <a class="dropdown__trigger top-menu__menu-link" href="#">Work</a>
                                <div class="dropdown__menu">
                                    <div class="dropdown__column">
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="work-grid.html">Grid</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="work-carousel.html">Carousel</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="work-listing.html">Listing</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="project-detail-image.html">Project Detail
                                                Image</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="project-detail-slider.html">Project Detail
                                                Slider</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="project-detail-panorama.html">Project Detail
                                                Panorama</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="top-menu__menu-item">
                            <div class="dropdown">
                                <a class="dropdown__trigger top-menu__menu-link" href="#">News</a>
                                <div class="dropdown__menu">
                                    <div class="dropdown__column">
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="news-grid.html">Grid</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="news-listing.html">Listing</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="news-masonry.html">Masonry</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="news-single-post.html">Single Post</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="top-menu__menu-item">
                            <div class="dropdown">
                                <a class="dropdown__trigger top-menu__menu-link" href="#">Page</a>
                                <div class="dropdown__menu">
                                    <div class="dropdown__column">
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="page-about.html">About</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="page-services.html">Services</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="page-services-detail.html">Services
                                                Detail</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="page-contact.html">Contact</a>
                                        </div>
                                        <div class="dropdown__item">
                                            <a class="dropdown__link" href="page-404.html">404</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header__overlay"></div>
        <div class="menu-panel header__menu">
            <div class="menu-panel__inner">
                <button class="header__menu-button header__menu-button_fixed" type="button">
                    <span class="header__menu-button-inner"></span>
                </button>
                <div class="menu-panel__locales">
                    <div class="menu-panel__locale link link link_active">En</div>
                    <div class="menu-panel__locale link">Fr</div>
                    <div class="menu-panel__locale link">De</div>
                </div>
                <div class="menu-panel__menu">
                    <div class="menu-panel__menu-item">
                        <a class="menu-panel__menu-link menu-panel__menu-link menu-panel__menu-link_active"
                           data-toggle="collapse" href="#submenu1">Home</a>
                        <div class="menu-panel__menu-list collapse" id="submenu1">
                            <div class="menu-panel__bottom-submenu">
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="index.html">Default</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="home-parallax-piling.html">Parallax
                                        Piling</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="home-zoom-parallax.html">Zoom Parallax</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="home-3d-panorama.html">3D Panorama</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link menu-panel__submenu-link menu-panel__submenu-link_active"
                                       href="home-studio.html">Studio</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="home-minimal.html">Minimal</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="home-grid-background.html">Grid
                                        Background</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="home-default-dark.html">Default Dark</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="home-zoom-parallax-dark.html">Zoom
                                        Parallax Dark</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="home-3d-panorama-dark.html">3D Panorama
                                        Dark</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="home-studio-dark.html">Studio Dark</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="home-minimal-dark.html">Minimal Dark</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-panel__menu-item">
                        <a class="menu-panel__menu-link collapsed" data-toggle="collapse" href="#submenu2">Work</a>
                        <div class="menu-panel__menu-list collapse" id="submenu2">
                            <div class="menu-panel__bottom-submenu">
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="work-grid.html">Grid</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="work-carousel.html">Carousel</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="work-listing.html">Listing</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="project-detail-image.html">Project Detail
                                        Image</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="project-detail-slider.html">Project Detail
                                        Slider</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="project-detail-panorama.html">Project
                                        Detail Panorama</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-panel__menu-item">
                        <a class="menu-panel__menu-link collapsed collapsed" data-toggle="collapse" href="#submenu3">News</a>
                        <div class="menu-panel__menu-list collapse" id="submenu3">
                            <div class="menu-panel__bottom-submenu">
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="news-grid.html">Grid</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="news-listing.html">Listing</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="news-masonry.html">Masonry</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="news-single-post.html">Single Post</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-panel__menu-item">
                        <a class="menu-panel__menu-link collapsed collapsed" data-toggle="collapse" href="#submenu4">Page</a>
                        <div class="menu-panel__menu-list collapse" id="submenu4">
                            <div class="menu-panel__bottom-submenu">
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="page-about.html">About</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="page-services.html">Services</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="page-services-detail.html">Services
                                        Detail</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="page-contact.html">Contact</a>
                                </div>
                                <div class="menu-panel__submenu-item">
                                    <a class="menu-panel__submenu-link" href="page-404.html">404</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-panel__footer">
                    <div class="socials menu-panel__socials">
                        <a class="socials__social icofont-twitter" href="#">
                            <div class="visually-hidden">twitter</div>
                        </a>
                        <a class="socials__social icofont-facebook" href="#">
                            <div class="visually-hidden">facebook</div>
                        </a>
                        <a class="socials__social icofont-google-plus" href="#">
                            <div class="visually-hidden">google plus</div>
                        </a>
                    </div>
                    <div class="menu-panel__bottom">
                        <div class="menu-panel__copyright">© 2019
                            <strong>ARQUITO.</strong>
                            All Rights Reserved.
                        </div>
                        <div class="menu-panel__author">Design by
                            <a href="#">Logan Cee</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="studio-intro-slide">
            <div class="Background">
                <video playsinline style="pointer-events: none;position: absolute;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    background-size: cover;
    overflow: hidden;" src="{{ asset('storage/uploads/2021/07/17/font-arazi-draft-1080.mp4') }}" loop muted autoplay></video>
            </div>
            <div class="faded-block studio-intro-slide__container container">
                <div class="studio-intro-slide__inner">
                    <div class="studio-intro-slide__subtitle">Minimalistic, Modern and Comfortable Sofa</div>
                    <div class="studio-intro-slide__title-wrapper">
                        <div class="studio-intro-slide__title">Font Sofa Collections</div>
                    </div>
                    <div class="studio-intro-slide__text">Font Sofa factory designs, produces and exports sofas with great interest and enthusiasm with professional craftmanship.
                    </div>
                    <a class="studio-intro-slide__link studio-intro-slide__link_inverted" href="#">MORE</a>
                </div>
            </div>
        </div>
        <div class="clients-wrapper">
            <div class="container">
                <div class="clients">
                    <div class="clients__list">
                        <div class="clients__item">
                            <div class="clients__item-inner">
                                <img alt="" src="img/client-1-dark.png"/>
                            </div>
                        </div>
                        <div class="clients__item">
                            <div class="clients__item-inner">
                                <img alt="" src="img/client-2-dark.png"/>
                            </div>
                        </div>
                        <div class="clients__item">
                            <div class="clients__item-inner">
                                <img alt="" src="img/client-3-dark.png"/>
                            </div>
                        </div>
                        <div class="clients__item">
                            <div class="clients__item-inner">
                                <img alt="" src="img/client-4-dark.png"/>
                            </div>
                        </div>
                        <div class="clients__item">
                            <div class="clients__item-inner">
                                <img alt="" src="img/client-5-dark.png"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cards-block">
            <div class="cards-block__head">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-5">
                            <div class="cards-block__title">We are happy to design the products of your dreams.</div>
                        </div>
                        <div class="col-12 col-lg-6 offset-xl-1">
                            <div class="cards-block__text">Font Sofa factory designs, produces and exports sofas with great interest and enthusiasm with professional craftmanship. Font labeled sofas has delivered high quality and entire satisfaction to customers from all around the world with the industry expertise.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="features-block">
            <div class="container">
                <div class="features-block__title">WITH DOMESTIC PRODUCTION</div>
                <div class="features-block__text">Countries we export to</div>
                <div class="row d-flex justify-content-center">
                    <figure>
                        <img style="width: 100%;" src="https://fontsofa.com/wp-content/uploads/2021/02/ihracaat-1536x7791-1.png" alt="" loading="lazy">
                    </figure>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer-studio footer">
        <div class="container-fluid">
            <div class="row">
                <div class="footer-studio__column col-12 col-sm-6 col-xl-3">
                    <div class="footer-studio__group-title">Get In Touch</div>
                    <p>Ahi Evran OSB Dist. Anadolu St. No 27,
                        <br/>
                        06935 Sincan / Ankara, TURKEY
                    </p>
                    <p>
                        <a href="mailto:export@fontsofa.com">export@fontsofa.com</a>
                    </p>
                    <p>+90 312 267 5666</p>
                    <p>
                        <img loading="lazy" src="https://fontsofa.com/wp-content/uploads/2021/01/Whatsapp-300x300.png" alt="" width="26" height="26">
                        <img loading="lazy" src="https://fontsofa.com/wp-content/uploads/2021/01/skype-300x300.png" alt="" width="28" height="28">
                        <img loading="lazy" src="https://fontsofa.com/wp-content/uploads/2021/01/Botim-300x300.png" alt="" width="27" height="27">
                        <strong>+905354960669</strong>
                    </p>
                </div>
            </div>
            <div class="footer-studio__bottom">
                <div class="row">
                    <div class="footer-studio__column col-12 col-sm-6">
                        <div class="footer-studio__copyright">© 2021
                            <strong>FONTSOFA</strong>
                            All Rights Reserved.
                        </div>
                    </div>
                    <div class="footer-studio__column col-12 col-sm-6 col-lg-3 offset-lg-3">
                        <div class="footer-studio__socials">
                            <a class="footer-studio__social icofont-twitter" href="#">
                                <div class="visually-hidden">twitter</div>
                            </a>
                            <a class="footer-studio__social icofont-facebook" href="#">
                                <div class="visually-hidden">facebook</div>
                            </a>
                            <a class="footer-studio__social icofont-instagram" href="#">
                                <div class="visually-hidden">instagram</div>
                            </a>
                            <a class="footer-studio__social icofont-linkedin" href="#">
                                <div class="visually-hidden">linkedin</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!--JS-->
<script src="{{asset('assets/js/polyfill.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.viewport.min.js')}}"></script>
<script src="{{asset('assets/js/jQuerySimpleCounter.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/animsition.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/rellax.min.js')}}"></script>
<script src="{{asset('assets/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/js/smoothscroll.js')}}"></script>
<script src="{{asset('assets/js/svg4everybody.legacy.min.js')}}"></script>
<script src="{{asset('assets/js/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/js/TimelineLite.min.js')}}"></script>
<script src="{{asset('assets/js/typed.min.js')}}"></script>
<script src="{{asset('assets/js/vivus.min.js')}}"></script>
<!--Revolution JS-->
<script src="{{asset('assets/js/revolution/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/js/revolution/jquery.themepunch.revolution.min.js')}}"></script>
<!--Revolution Panorama Add-On JS-->
<script src="{{asset('assets/js/revolution-addons/panorama/three.min.js')}}"></script>
<script src="{{asset('assets/js/revolution-addons/panorama/revolution.addon.panorama.min.js')}}"></script>
<!-- Revolution Slicey Add-On JS-->
<script src="{{asset('assets/js/revolution-addons/slicey/revolution.addon.slicey.min.js')}}"></script>
<!-- Revolution Panorama extensions JS (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading)-->
<script src="{{asset('assets/js/revolution/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/js/revolution/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/revolution/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/js/revolution/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/js/revolution/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/js/revolution/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/js/revolution/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/js/revolution/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/js/revolution/extensions/revolution.extension.video.min.js')}}"></script>
<!--Theme JS-->
<script src="{{asset('assets/js/theme.js')}}"></script>
</body>

</html>
