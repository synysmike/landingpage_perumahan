<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Java Residence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="{{asset('assets')}}/css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="{{asset('assets')}}/css/dropzone.css">
    <link type="text/css" rel="stylesheet" href="{{asset('assets')}}/css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="{{asset('assets')}}/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="{{asset('assets')}}/css/leaflet.css">
    <link type="text/css" rel="stylesheet" href="{{asset('assets')}}/css/slick.css">
    <link type="text/css" rel="stylesheet" href="{{asset('assets')}}/css/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="{{asset('assets')}}/css/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="{{asset('assets')}}/css/map.css">
    <link type="text/css" rel="stylesheet" href="{{asset('assets')}}/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="{{asset('assets')}}/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="{{asset('assets')}}/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('assets')}}/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('assets')}}/css/skins/default.css">

</head>
<body id="top" class="index-body">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDTWJ3Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Top header start -->
{{-- <header class="top-header th-bg" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8">
                <div class="list-inline">
                    <a href="tel:1-7X0-555-8X22"><i class="fa fa-phone"></i>1-7X0-555-8X22</a>
                    <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>info@themevessel.com</a>
                    <a href="#" class="mr-0 d-none-992"><i class="fa fa-clock-o"></i>Mon - Sun: 8:00am - 6:00pm</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4">
                <ul class="top-social-media pull-right">
                    <li>
                        <a href="login.html" class="sign-in"><i class="fa fa-sign-in"></i> Login </a>
                    </li>
                    <li>
                        <a href="login.html" class="sign-in"><i class="fa fa-user"></i> Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header> --}}
<!-- Top header end -->

<!-- main header start -->
{{-- <header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo navbar-brand d-flex w-50 mr-auto" href="index.html">
                        <img src="{{asset('assets')}}/img/logos/black-logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" id="drawer">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="navbar-collapse collapse w-100" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Index
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="index.html">Index 1</a></li>
                                    <li><a class="dropdown-item" href="index-2.html">Index 2</a></li>
                                    <li><a class="dropdown-item" href="index-3.html">Index 3</a></li>
                                    <li><a class="dropdown-item" href="index-4.html">Index 4</a></li>
                                    <li><a class="dropdown-item" href="index-5.html">Index 5</a></li>
                                    <li><a class="dropdown-item" href="index-6.html">Index 6</a></li>
                                    <li><a class="dropdown-item" href="index-7.html">Index 7</a></li>
                                    <li><a class="dropdown-item" href="index-8.html">Index 8 (Map)</a></li>
                                    <li><a class="dropdown-item" href="index-9.html">Index 9 (Video)</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Properties
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">List Layout</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-list-rightside.html">Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-list-leftside.html">Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-list-fullwidth.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Grid Layout</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-grid-rightside.html">Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-grid-leftside.html">Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-grid-fullwidth.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Map View</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-map-rightside-list.html">Map List Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-leftside-list.html">Map List Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-rightside-grid.html">Map Grid Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-leftside-grid.html">Map Grid Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-full.html">Map FullWidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Property Detail</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-details.html">Property Detail 1</a></li>
                                            <li><a class="dropdown-item" href="properties-details-2.html">Property Detail 2</a></li>
                                            <li><a class="dropdown-item" href="properties-details-3.html">Property Detail 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">My Account</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="user-profile.html">User profile</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="my-properties.html">My Properties</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="favorited-properties.html">Favorited Properties</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="submit-property.html">Submit Property</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">About</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                            <li><a class="dropdown-item" href="about-me.html">About Me</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Services</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="services.html">Services 1</a></li>
                                            <li><a class="dropdown-item" href="services-2.html">Services 2</a></li>
                                            <li><a class="dropdown-item" href="services-details.html">Services Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Pricing Tables</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="pricing-tables-1.html">Pricing Tables 1</a></li>
                                            <li><a class="dropdown-item" href="pricing-tables-2.html">Pricing Tables 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Gallery</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="gallery-1.html">Gallery 1</a></li>
                                            <li><a class="dropdown-item" href="gallery-2.html">Gallery 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Faq</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="faq-1.html">Faq 1</a></li>
                                            <li><a class="dropdown-item" href="faq-2.html">Faq 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Typography</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="typography.html">Typography 1</a></li>
                                            <li><a class="dropdown-item" href="typography-2.html">Typography 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">404 Error</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="pages-404.html">404 Error 1</a></li>
                                            <li><a class="dropdown-item" href="pages-404-2.html">404 Error 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="properties-comparison.html">Properties Comparison</a></li>
                                    <li><a class="dropdown-item" href="search-brand.html">Search Brand</a></li>
                                    <li><a class="dropdown-item" href="elements.html">Elements</a></li>
                                    <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                                    <li><a class="dropdown-item" href="login.html">Login/Register</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Agents
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Agent List</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="agent-list.html">Agent List 1</a></li>
                                            <li><a class="dropdown-item" href="agent-list-2.html">Agent List 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Agent Grid</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="agent-grid.html">Agent Grid 1</a></li>
                                            <li><a class="dropdown-item" href="agent-grid-2.html">Agent Grid 2</a></li>
                                            <li><a class="dropdown-item" href="agent-grid-3.html">Agent Grid 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="agent-detail.html">Agent Detail</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Columns</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-columns-2col.html">2 Columns</a></li>
                                            <li><a class="dropdown-item" href="blog-columns-3col.html">3 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Classic</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-classic-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-classic-sidebar-left.html">Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-classic-fullwidth.html">FullWidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Blog Details</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-single-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-single-sidebar-left.html">Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-single-fullwidth.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="shop-list.html">Shop List</a>
                                    <a class="dropdown-item" href="shop-cart.html">Shop Cart</a>
                                    <a class="dropdown-item" href="shop-checkout.html">Shop Checkout</a>
                                    <a class="dropdown-item" href="shop-single.html">Shop Details</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Contact
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="contact-1.html">Contact 1</a>
                                    <a class="dropdown-item" href="contact-2.html">Contact 2</a>
                                    <a class="dropdown-item" href="contact-3.html">Contact 3</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#full-page-search" class="nav-link">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header> --}}
<!-- main header end -->

<!-- Sidenav start -->
{{-- <nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="{{asset('assets')}}/img/logos/black-logo.png" alt="sidebarlogo">
        </div>
        <div class="sidebar-navigation">
            <h3 class="heading">Pages</h3>
            <ul class="menu-list">
                <li><a href="#" class="active pt0">Index <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="index.html">Index 1</a></li>
                        <li><a href="index-2.html">Index 2</a></li>
                        <li><a href="index-3.html">Index 3</a></li>
                        <li><a href="index-4.html">Index 4</a></li>
                        <li><a href="index-5.html">Index 5</a></li>
                        <li><a href="index-6.html">Index 6</a></li>
                        <li><a href="index-7.html">Index 7</a></li>
                        <li><a href="index-8.html">Index 8</a></li>
                        <li><a href="index-9.html">Index 9</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Properties <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">List Layout <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="properties-list-rightside.html">Right Sidebar</a></li>
                                <li><a href="properties-list-leftside.html">Left Sidebar</a></li>
                                <li><a href="properties-list-fullwidth.html">Fullwidth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Grid Layout <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="properties-grid-rightside.html">Right Sidebar</a></li>
                                <li><a href="properties-grid-leftside.html">Left Sidebar</a></li>
                                <li><a href="properties-grid-fullwidth.html">Fullwidth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Map View <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="properties-map-rightside-list.html">Map List Right Sidebar</a></li>
                                <li><a href="properties-map-leftside-list.html">Map List Left Sidebar</a></li>
                                <li><a href="properties-map-rightside-grid.html">Map Grid Right Sidebar</a></li>
                                <li><a href="properties-map-leftside-grid.html">Map Grid Left Sidebar</a></li>
                                <li><a href="properties-map-full.html">Map FullWidth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Property Detail <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="properties-details.html">Property Detail 1</a></li>
                                <li><a href="properties-details-2.html">Property Detail 2</a></li>
                                <li><a href="properties-details-3.html">Property Detail 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">My Account <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="user-profile.html">User profile</a></li>
                                <li><a href="my-properties.html">My Properties</a></li>
                                <li><a href="favorited-properties.html">Favorited Properties</a></li>
                                <li><a href="submit-property.html">Submit Property</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">About <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about-me.html">About Me</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Services <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="services.html">Services 1</a></li>
                                <li><a href="services-2.html">Services 2</a></li>
                                <li><a href="services-details.html">Services Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pricing Tables <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="pricing-tables-1.html">Pricing Tables 1</a></li>
                                <li><a href="pricing-tables-2.html">Pricing Tables 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Gallery <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="gallery-1.html">Gallery 1</a></li>
                                <li><a href="gallery-2.html">Gallery 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Faq <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="faq-1.html">Faq 1</a></li>
                                <li><a href="faq-2.html">Faq 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Typography <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="typography.html">Typography 1</a></li>
                                <li><a href="typography-2.html">Typography 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">404 Error <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="pages-404.html">404 Error 1</a></li>
                                <li><a href="pages-404-2.html">404 Error 2</a></li>
                            </ul>
                        </li>
                        <li><a href="properties-comparison.html">Properties Comparison</a></li>
                        <li><a href="search-brand.html">Search Brand</a></li>
                        <li><a href="elements.html">Elements</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                        <li><a href="login.html">Login/Register</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"> Agents <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">Agent List <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="agent-list.html">Agent List 1</a></li>
                                <li><a href="agent-list-2.html">Agent List 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Agent Grid <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="agent-grid.html">Agent Grid 1</a></li>
                                <li><a href="agent-grid-2.html">Agent Grid 2</a></li>
                                <li><a href="agent-grid-3.html">Agent Grid 3</a></li>
                            </ul>
                        </li>
                        <li><a href="agent-detail.html">Agent Detail</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">Columns<em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="blog-columns-2col.html">2 Columns</a></li>
                                <li><a href="blog-columns-3col.html">3 Columns</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Classic <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="blog-classic-sidebar-right.html">Right Sidebar</a></li>
                                <li><a href="blog-classic-sidebar-left.html">Left Sidebar</a></li>
                                <li><a href="blog-classic-fullwidth.html">FullWidth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog Details <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="blog-single-sidebar-right.html">Right Sidebar</a></li>
                                <li><a href="blog-single-sidebar-left.html">Left Sidebar</a></li>
                                <li><a href="blog-single-fullwidth.html">Fullwidth</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Shop <em class="fa fa-chevron-down"></em></a>
                    <ul>

                        <li><a class="dropdown-item" href="shop-list.html">Shop List</a></li>
                        <li><a class="dropdown-item" href="shop-cart.html">Shop Cart</a></li>
                        <li> <a class="dropdown-item" href="shop-checkout.html">Shop Checkout</a></li>
                        <li><a class="dropdown-item" href="shop-single.html">Shop Details</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a class="dropdown-item" href="contact-1.html">Contact 1</a></li>
                        <li><a class="dropdown-item" href="contact-2.html">Contact 2</a></li>
                        <li><a class="dropdown-item" href="contact-3.html">Contact 3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="submit-property.html">Submit Property</a>
                </li>
            </ul>
        </div>
        <div class="get-in-touch">
            <h3 class="heading">Get in Touch</h3>
            <div class="media">
                <i class="fa fa-phone"></i>
                <div class="media-body">
                    <a href="tel:0477-0477-8556-552">0477 8556 552</a>
                </div>
            </div>
            <div class="media">
                <i class="fa fa-envelope"></i>
                <div class="media-body">
                    <a href="#">info@themevessel.com</a>
                </div>
            </div>
            <div class="media mb-0">
                <i class="fa fa-fax"></i>
                <div class="media-body">
                    <a href="#">info@themevessel.com</a>
                </div>
            </div>
        </div>
        <div class="get-social">
            <h3 class="heading">Get Social</h3>
            <a href="#" class="facebook-bg">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="twitter-bg">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="google-bg">
                <i class="fa fa-google"></i>
            </a>
            <a href="#" class="linkedin-bg">
                <i class="fa fa-linkedin"></i>
            </a>
        </div>
    </div>
</nav> --}}
<!-- Sidenav end -->

<!-- Banner start -->
<div class="banner banner_video_bg" id="banner">
    <div class="pattern-overlay">
        <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=LNMuWDf40b0',containment:'.banner_video_bg', quality:'large', autoPlay:true, mute:true, opacity:1}">bg</a>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner">
                        <div class="text-center">
                            <div id="typed-strings">
                                <p>Buy, Sell or Rent</p>
                            </div>
                            <h1 class="typed-text">&nbsp;
                                <span id="typed"></span>
                            </h1>
                            <p class="text-p" data-animation="animated fadeInUp delay-10s">
                                This is real estate website template based on Bootstrap 4 framework.
                            </p>
                            <a data-animation="animated fadeInUp delay-10s" href="#" class="btn-5">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search area start -->
    <div class="search-area d-none d-xl-block d-lg-block" id="search-area-4">
        <div class="container">
            <div class="search-area-inner">
                <div class="search-contents ">
                    <form action="index.html" method="GET">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="brand">
                                        <option>Area From</option>
                                        <option>1500</option>
                                        <option>1200</option>
                                        <option>900</option>
                                        <option>600</option>
                                        <option>300</option>
                                        <option>100</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-status">
                                        <option>Property Status</option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>Location</option>
                                        <option>United Kingdom</option>
                                        <option>American Samoa</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                        <option>Delaware</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="category">
                                        <option>Property Types</option>
                                        <option>Residential</option>
                                        <option>Commercial</option>
                                        <option>Land</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="body">
                                        <option>Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="transmission">
                                        <option>Bathrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <div class="range-slider">
                                        <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <button class="btn-4 btn btn-block" type="submit">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search area end -->
</div>
<!-- banner end -->

<!-- Featured properties start -->
<div class="featured-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Featured Properties</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="col-lg-12">
            <div class="row property-box-6">
                <div class="col-lg-6 col-pad">
                    <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="{{asset('assets')}}/img/property/img-5.png" class="img-fluid" alt="property-box-6">
                            </div>
                            <div class="item carousel-item" data-slide-number="1">
                                <img src="{{asset('assets')}}/img/property/img-4.png" class="img-fluid" alt="property-box-6">
                            </div>
                            <div class="item carousel-item" data-slide-number="2">
                                <img src="{{asset('assets')}}/img/property/img-3.png" class="img-fluid" alt="property-box-6">
                            </div>
                            <div class="item carousel-item" data-slide-number="4">
                                <img src="{{asset('assets')}}/img/property/img-2.png" class="img-fluid" alt="property-box-6">
                            </div>
                            <div class="item carousel-item" data-slide-number="5">
                                <img src="{{asset('assets')}}/img/property/img-1.png" class="img-fluid" alt="property-box-6">
                            </div>
                            <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-pad align-self-center">
                    <div class="info">
                        <h3>
                            <a href="properties-details.html">Find Your Dream House</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros.</p>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <ul>
                                    <li><i class="flaticon-bed"></i> 3 Bedrooms</li>
                                    <li><i class="flaticon-bath"></i> 2 Bathrooms</li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <ul>
                                    <li><i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400</li>
                                    <li><i class="flaticon-car-repair"></i> 1 Garage</li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <ul>
                                    <li><i class="flaticon-balcony-and-door"></i>1 Balcony</li>
                                    <li><i class="flaticon-monitor"></i>TV</li>
                                </ul>
                            </div>
                        </div>
                        <a href="properties-details.html" class="btn btn-4">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->



<!-- services 3 start -->
<div class="services-3 content-area-20 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>What Are you Looking For?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="services-info-3 df-box">
                    <div class="icon">
                        <i class="flaticon-hotel-building"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.html">Apartments Clean</a>
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <a href="services.html" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="services-info-3 df-box">
                    <div class="icon">
                        <i class="flaticon-house"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.html">Houses</a>
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <a href="services.html" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInDown delay-04s">
                <div class="services-info-3 df-box">
                    <div class="icon">
                        <i class="flaticon-call-center-agent"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.html">Support 24/7</a>
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <a href="services.html" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="services-info-3 df-box">
                    <div class="icon">
                        <i class="flaticon-office-block"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.html">Commercial</a>
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <a href="services.html" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a data-animation="animated fadeInUp delay-10s" href="services.html" class="btn-5">More Details</a>
            </div>
        </div>
    </div>
</div>
<!-- services 3 end -->

<!-- Recent Properties start -->
<div class="recent-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Recent Properties</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="property-box-8">
                    <div class="photo-thumbnail">
                        <div class="photo">
                            <img src="{{asset('assets')}}/img/property/img-12.png" alt="property-box-8" class="img-fluid">
                            <a href="#">
                                <span class="blog-one__plus"></span>
                            </a>
                        </div>
                        <div class="tag-for">For Rent</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Real Luxury Villa</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="property-box-8">
                    <div class="photo-thumbnail">
                        <div class="photo">
                            <img src="{{asset('assets')}}/img/property/img-13.png" alt="property-box-8" class="img-fluid">
                            <a href="#">
                                <span class="blog-one__plus"></span>
                            </a>
                        </div>
                        <div class="tag-for">For Sale</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Masons Villas</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="property-box-8">
                    <div class="photo-thumbnail">
                        <div class="photo">
                            <img src="{{asset('assets')}}/img/property/img-14.png" alt="property-box-8" class="img-fluid">
                            <a href="#">
                                <span class="blog-one__plus"></span>
                            </a>
                        </div>
                        <div class="tag-for">For Rent</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Luxury Villa</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="property-box-8">
                    <div class="photo-thumbnail">
                        <div class="photo">
                            <img src="{{asset('assets')}}/img/property/img-15.png" alt="property-box-8" class="img-fluid">
                            <a href="#">
                                <span class="blog-one__plus"></span>
                            </a>
                        </div>
                        <div class="tag-for">For Sale</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Park avenue</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recent Properties end -->

<!-- Most popular places start -->
<div class="most-popular-places content-area-23 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>Most Popular Places</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-pad wow fadeInLeft delay-04s">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-1">
                                <div class="thumb-photo">
                                    <img src="{{asset('assets')}}/img/popular-places/img-2.png" alt="img" class="img-fluid">
                                    <div class="content"></div>
                                    <div class="inner">
                                        <div class="info">
                                            <h3><a href="#">Rome City</a></h3>
                                            <p>14 Properties</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-1">
                                <div class="thumb-photo">
                                    <img src="{{asset('assets')}}/img/popular-places/img-4.png" alt="img" class="img-fluid">
                                    <div class="content"></div>
                                    <div class="inner">
                                        <div class="info">
                                            <h3><a href="#">California</a></h3>
                                            <p>27 Properties</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-pad cp-3 wow fadeInUp delay-04s d-none-992">
                    <div class="most-popular-box-1 mpb-2">
                        <div class="thumb-photo">
                            <img src="{{asset('assets')}}/img/popular-places/img-3.png" alt="img" class="img-fluid">
                            <div class="content"></div>
                            <div class="inner">
                                <div class="info">
                                    <h3><a href="#">Tokyo</a></h3>
                                    <p>84 Properties</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-pad wow fadeInRight delay-04s">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-1">
                                <div class="thumb-photo">
                                    <img src="{{asset('assets')}}/img/popular-places/img-6.png" alt="img" class="img-fluid">
                                    <div class="content"></div>
                                    <div class="inner">
                                        <div class="info">
                                            <h3><a href="#">Paris City</a></h3>
                                            <p>27 Properties</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-1">
                                <div class="thumb-photo">
                                    <img src="{{asset('assets')}}/img/popular-places/img-5.png" alt="img" class="img-fluid">
                                    <div class="content"></div>
                                    <div class="inner">
                                        <div class="info">
                                            <h3><a href="#">London</a></h3>
                                            <p>340 Properties</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Most popular places end -->

<!-- Agent start -->
<div class="agent content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Meet Our Agents</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel wow fadeInUp delay-04s" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="agent-3">
                        <div class="photo">
                            <img src="{{asset('assets')}}/img/avatar/avatar-5.png" alt="agent-3" class="img-fluid">
                            <div class="agent-overlay">
                                <div class="job">
                                    <h6>Support Manager</h6>
                                </div>
                            </div>
                        </div>
                        <div class="agent-details">
                            <h5><a href="agent-detail.html">Karen Paran</a></h5>
                            <div class="contact">
                                <p>
                                    <a href="mailto:info@themevessel.com"><i class="fa fa-envelope-o"></i>info@themevessel.com</a>
                                </p>
                                <p>
                                    <a href="tel:+554XX-634-7071"> <i class="fa fa-phone"></i>+55 4XX-634-7071</a>
                                </p>
                                <p>
                                    <a href="#"><i class="fa fa-skype"></i>sales.carshop</a>
                                </p>
                            </div>
                            <ul class="social-list clearfix">
                                <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram-bg"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="agent-3">
                        <div class="photo">
                            <img src="{{asset('assets')}}/img/avatar/avatar-7.png" alt="agent-3" class="img-fluid">
                            <div class="agent-overlay">
                                <div class="job">
                                    <h6>Office Manager</h6>
                                </div>
                            </div>
                        </div>
                        <div class="agent-details">
                            <h5><a href="agent-detail.html">Martin Smith</a></h5>
                            <div class="contact">
                                <p>
                                    <a href="mailto:info@themevessel.com"><i class="fa fa-envelope-o"></i>info@themevessel.com</a>
                                </p>
                                <p>
                                    <a href="tel:+554XX-634-7071"> <i class="fa fa-phone"></i>+55 4XX-634-7071</a>
                                </p>
                                <p>
                                    <a href="#"><i class="fa fa-skype"></i>sales.carshop</a>
                                </p>
                            </div>
                            <ul class="social-list clearfix">
                                <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram-bg"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="agent-3">
                        <div class="photo">
                            <img src="{{asset('assets')}}/img/avatar/avatar-6.png" alt="agent-3" class="img-fluid">
                            <div class="agent-overlay">
                                <div class="job">
                                    <h6>Web Developer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="agent-details">
                            <h5><a href="agent-detail.html">Brandon Miller</a></h5>
                            <div class="contact">
                                <p>
                                    <a href="mailto:info@themevessel.com"><i class="fa fa-envelope-o"></i>info@themevessel.com</a>
                                </p>
                                <p>
                                    <a href="tel:+554XX-634-7071"> <i class="fa fa-phone"></i>+55 4XX-634-7071</a>
                                </p>
                                <p>
                                    <a href="#"><i class="fa fa-skype"></i>sales.carshop</a>
                                </p>
                            </div>
                            <ul class="social-list clearfix">
                                <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram-bg"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="agent-3">
                        <div class="photo">
                            <img src="{{asset('assets')}}/img/avatar/avatar-8.png" alt="agent-3" class="img-fluid">
                            <div class="agent-overlay">
                                <div class="job">
                                    <h6>Creative Director</h6>
                                </div>
                            </div>
                        </div>
                        <div class="agent-details">
                            <h5><a href="agent-detail.html">John Pitarshon</a></h5>
                            <div class="contact">
                                <p>
                                    <a href="mailto:info@themevessel.com"><i class="fa fa-envelope-o"></i>info@themevessel.com</a>
                                </p>
                                <p>
                                    <a href="tel:+554XX-634-7071"> <i class="fa fa-phone"></i>+55 4XX-634-7071</a>
                                </p>
                                <p>
                                    <a href="#"><i class="fa fa-skype"></i>sales.carshop</a>
                                </p>
                            </div>
                            <ul class="social-list clearfix">
                                <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram-bg"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div >
<!-- Agent end -->

<!-- Testimonial start -->
<div class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="testimonial-inner">
                    <div class="main-title">
                        <h1>Our Testimonial</h1>
                    </div>
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="avatar">
                                    <img src="{{asset('assets')}}/img/avatar/avatar-2.png" alt="avatar" class="img-fluid">
                                </div>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                </p>
                                <h5><strong>Maria Blank</strong> Creative Director</h5>
                            </div>
                            <div class="carousel-item">
                                <div class="avatar">
                                    <img src="{{asset('assets')}}/img/avatar/avatar-3.png" alt="avatar" class="img-fluid">
                                </div>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                </p>
                                <h5><strong>Karen Paran</strong> Web Developer</h5>
                            </div>
                            <div class="carousel-item">
                                <div class="avatar">
                                    <img src="{{asset('assets')}}/img/avatar/avatar.png" alt="avatar" class="img-fluid">
                                </div>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                </p>
                                <h5><strong>Brandon Miller</strong> Support Manager</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial end -->

<!-- Blog start -->
<div class="blog content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Latest Blog</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel wow fadeInUp delay-04s" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="blog-5">
                        <div class="blog-image">
                            <img src="{{asset('assets')}}/img/blog/blog-2.png" alt="blog" class="img-fluid">
                            <div class="post-meta clearfix">
                                <span><a href="#"><i class="fa fa-user"></i></a>Admin</span>
                                <span><a href="#"><i class="fa fa-commenting-o"></i></a>17K</span>
                                <span><a href="#"><i class="fa fa-heart-o"></i></a>73k</span>
                            </div>
                            <div class="date-box">
                                <span>09</span>Sep
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-single-sidebar-right.html">Selling Your Real House</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard industry's standard</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-5">
                        <div class="blog-image">
                            <img src="{{asset('assets')}}/img/blog/blog.png" alt="blog" class="img-fluid">
                            <div class="post-meta clearfix">
                                <span><a href="#"><i class="fa fa-user"></i></a>Admin</span>
                                <span><a href="#"><i class="fa fa-commenting-o"></i></a>17K</span>
                                <span><a href="#"><i class="fa fa-heart-o"></i></a>73k</span>
                            </div>
                            <div class="date-box">
                                <span>24</span>Sep
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-single-sidebar-right.html">Find Your Dream Real Estate</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard industry's standard</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-5">
                        <div class="blog-image">
                            <img src="{{asset('assets')}}/img/blog/blog-3.png" alt="blog" class="img-fluid">
                            <div class="post-meta clearfix">
                                <span><a href="#"><i class="fa fa-user"></i></a>Admin</span>
                                <span><a href="#"><i class="fa fa-commenting-o"></i></a>17K</span>
                                <span><a href="#"><i class="fa fa-heart-o"></i></a>73k</span>
                            </div>
                            <div class="date-box">
                                <span>07</span>Sep
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-single-sidebar-right.html">Buying a Best House</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard industry's standard</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-5">
                        <div class="blog-image">
                            <img src="{{asset('assets')}}/img/blog/blog-3.png" alt="blog" class="img-fluid">
                            <div class="post-meta clearfix">
                                <span><a href="#"><i class="fa fa-user"></i></a>Admin</span>
                                <span><a href="#"><i class="fa fa-commenting-o"></i></a>17K</span>
                                <span><a href="#"><i class="fa fa-heart-o"></i></a>73k</span>
                            </div>
                            <div class="date-box">
                                <span>07</span>Sep
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-single-sidebar-right.html">Buying a Best House</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard industry's standard</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<!-- Intro section start -->
<div class="intro-section">
    <div class="intro-section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <h3>Looking To Sell Or Rent Your Property?</h3>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <a class="btn btn-white2" href="contact-1.html">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro section end -->

<!-- Footer start -->
<footer class="footer-4 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-image">
                    <a href="#"><img src="{{asset('assets')}}/img/logos/black-logo.png" alt="logo"></a>
                </div>
                <div class="footer-menu">
                    <ul>
                        <li class="li">
                            <a href="#">Home</a>
                        </li>
                        <li class="li">
                            <a href="properties-grid-rightside.html">Properties</a>
                        </li>
                        <li class="li">
                            <a href="agent-grid.html">Agents</a>
                        </li>
                        <li class="li">
                            <a href="gallery-1.html">Gallery</a>
                        </li>
                        <li class="li">
                            <a href="blog-columns-3col.html">Blog</a>
                        </li>
                        <li class="li">
                            <a href="contact-1.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="social-media clearfix">
                    <div class="social-list">
                        <div class="icon facebook">
                            <div class="tooltip">Facebook</div>
                            <span><i class="fa fa-facebook"></i></span>
                        </div>
                        <div class="icon twitter">
                            <div class="tooltip">Twitter</div>
                            <span><i class="fa fa-twitter"></i></span>
                        </div>
                        <div class="icon instagram">
                            <div class="tooltip">Instagram</div>
                            <span><i class="fa fa-instagram"></i></span>
                        </div>
                        <div class="icon github">
                            <div class="tooltip">Github</div>
                            <span><i class="fa fa-github"></i></span>
                        </div>
                        <div class="icon youtube mr-0">
                            <div class="tooltip">Youtube</div>
                            <span><i class="fa fa-youtube"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="copy">© 2022 <a href="#">Theme Vessel.</a> All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#" class="search">
        <input type="search" value="" placeholder="type keyword(s) here"/>
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

<!-- Property Video Modal -->
<div class="modal property-modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">
                    Find Your Dream Properties
                </h5>
                <p>
                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> 123 Kathal St. Tampa City,
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 modal-left">
                        <div class="modal-left-content">
                            <div id="modalCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <iframe class="modalIframe" src="https://www.youtube.com/embed/V7IrnC9MISU" allowfullscreen></iframe>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('assets')}}/img/img-8.png" alt="Test ALT">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('assets')}}/img/img-9.png" alt="Test ALT">
                                    </div>
                                </div>
                                <a class="control control-prev" href="#modalCarousel" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="control control-next" href="#modalCarousel" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 modal-right">
                        <div class="modal-right-content">
                            <section>
                                <h3>Features</h3>
                                <ul class="bullets">
                                    <li><i class="flaticon-bed"></i> Double Bed</li>
                                    <li><i class="flaticon-swimmer"></i> Swimming Pool</li>
                                    <li><i class="flaticon-bath"></i> 2 Bathroom</li>
                                    <li><i class="flaticon-car-repair"></i> Garage</li>
                                    <li><i class="flaticon-parking"></i> Parking</li>
                                    <li><i class="flaticon-theatre-masks"></i> Home Theater</li>
                                    <li><i class="flaticon-old-typical-phone"></i> Telephone</li>
                                    <li><i class="flaticon-green-park-city-space"></i> Private space</li>
                                </ul>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <ul class="bullets bullets2">
                                    <li> Area</li>
                                    <li>Condition</li>
                                    <li>2 Year</li>
                                    <li>Price</li>
                                    <li>2500 Sq Ft:3400</li>
                                    <li>New</li>
                                    <li>2018</li>
                                    <li>$178,000</li>
                                </ul>
                            </section>
                            <div class="ratings-2">
                                <span class="ratings-box">4.5/5</span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>( 7 Reviews )</span>
                            </div>
                            <a href="properties-details.html" class="btn btn-show btn-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Off-canvas sidebar -->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper">
        <div class="off-canvas-header">
            <a class="close-offcanvas" href="#"><span class="fa fa-times"></span></a>
        </div>
        <div class="off-canvas-content">
            <aside class="canvas-widget">
                <div class="logo-sitebar text-center">
                    <img src="{{asset('assets')}}/img/logos/logo.png" alt="logo">
                </div>
            </aside>
            <aside class="canvas-widget">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="properties-grid-leftside.html">Properties List</a></li>
                    <li class="menu-item"><a href="properties-details.html">Property Detail</a></li>
                    <li class="menu-item"><a href="blog-single-sidebar-right.html">Blog</a></li>
                    <li class="menu-item"><a href="about.html">About  US</a></li>
                    <li class="menu-item"><a href="contact-3.html">Contact US</a></li>
                </ul>
            </aside>
            <aside class="canvas-widget">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>

<!-- External JS libraries -->
<script src="{{asset('assets')}}/js/jquery-2.2.0.min.js"></script>
<script src="{{asset('assets')}}/js/popper.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.selectBox.js"></script>
<script src="{{asset('assets')}}/js/rangeslider.js"></script>
<script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.filterizr.js"></script>
<script src="{{asset('assets')}}/js/wow.min.js"></script>
<script src="{{asset('assets')}}/js/backstretch.js"></script>
<script src="{{asset('assets')}}/js/jquery.countdown.js"></script>
<script src="{{asset('assets')}}/js/jquery.scrollUp.js"></script>
<script src="{{asset('assets')}}/js/particles.min.js"></script>
<script src="{{asset('assets')}}/js/typed.min.js"></script>
<script src="{{asset('assets')}}/js/dropzone.js"></script>
<script src="{{asset('assets')}}/js/jquery.mb.YTPlayer.js"></script>
<script src="{{asset('assets')}}/js/leaflet.js"></script>
<script src="{{asset('assets')}}/js/leaflet-providers.js"></script>
<script src="{{asset('assets')}}/js/leaflet.markercluster.js"></script>
<script src="{{asset('assets')}}/js/slick.min.js"></script>
<script src="{{asset('assets')}}/js/maps.js"></script>
<script src="{{asset('assets')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4omYJlOaP814WDcCG8eubXcbhB-44Uac"></script>
<script src="{{asset('assets')}}/js/ie-emulation-modes-warning.js"></script>
<!-- Custom JS Script -->
<script  src="{{asset('assets')}}/js/app.js"></script>
</body>
</html>
