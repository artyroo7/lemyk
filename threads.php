<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lemyk - Треди, <?php echo($_GET['category']);?></title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/selectize.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- end inject -->
</head>
<body>
<!-- start cssload-loader -->
<div id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<header class="header-area bg-white border-bottom border-bottom-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo-box">
                    <a href="forum.html" class="logo"><img src="images/logo-black.png" alt="logo"></a>
                    <div class="user-action">
                        <div class="search-menu-toggle icon-element icon-element-xs shadow-sm mr-1" data-toggle="tooltip" data-placement="top" title="Search">
                            <i class="la la-search"></i>
                        </div>
                        <div class="off-canvas-menu-toggle icon-element icon-element-xs shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                            <i class="la la-bars"></i>
                        </div>
                    </div>
                </div>
            </div><!-- end col-lg-2 -->
            <div class="col-lg-10">
                <div class="menu-wrapper border-left border-left-gray pl-4 justify-content-end">
                    <nav class="menu-bar mr-auto">
                        <ul>
                            <li>
                                <a href="forum.html">Головна</a>
                                <!--<ul class="dropdown-menu-item">
                                    <li><a href="index.html">Home - landing</a></li>
                                    <li><a href="home-2.html">Home - main</a></li>
                                    <li><a href="home-3.html">Home - layout 2 <span class="badge bg-warning text-white">New</span></a></li>
                                </ul>-->
                            </li>
                            <li class="is-mega-menu">
                                <a href="#">Сторінки <i class="la la-angle-down fs-11"></i></a>
                                <div class="dropdown-menu-item mega-menu">
                                    <ul class="row">
                                        <li class="col-lg-3">
                                            <a href="user-profile.html">user profile</a>
                                            <a href="notifications.html">Notifications</a>
                                            <a href="referrals.html">Referrals</a>
                                            <a href="setting.html">settings</a>
                                            <a href="ask-question.html">ask question</a>
                                            <a href="question-details.html">question details</a>
                                            <a href="about.html">about</a>
                                            <a href="revisions.html">revisions</a>
                                            <a href="category.html">category</a>
                                            <a href="companies.html">companies</a>
                                            <a href="company-details.html">company details</a>
                                        </li>
                                        <li class="col-lg-3">
                                            <a href="careers.html">careers</a>
                                            <a href="career-details.html">career details</a>
                                            <a href="contact.html">contact</a>
                                            <a href="faq.html">FAQs</a>
                                            <a href="pricing-table.html">pricing tables</a>
                                            <a href="error.html">page 404</a>
                                            <a href="terms-and-conditions.html">Terms & conditions</a>
                                            <a href="privacy-policy.html">privacy policy</a>
                                            <a href="cart.html">cart</a>
                                            <a href="talent.html">talent</a>
                                            <a href="advertising.html">advertising</a>
                                        </li>
                                        <li class="col-lg-3">
                                            <a href="free-demo.html">free demo</a>
                                            <a href="checkout.html">checkout</a>
                                            <a href="wishlist.html">wishlist</a>
                                            <a href="login.html">login</a>
                                            <a href="login-2.html">login 2</a>
                                            <a href="signup.html">sign up</a>
                                            <a href="signup-2.html">sign up 2</a>
                                            <a href="recover-password.html">recover password</a>
                                            <a href="questions-layout-2.html">questions layout 2 <span class="badge bg-warning text-white">New</span></a>
                                            <a href="questions-full-width.html">questions full-width <span class="badge bg-warning text-white">New</span></a>
                                            <a href="questions-left-sidebar.html">questions left sidebar <span class="badge bg-warning text-white">New</span></a>
                                        </li>
                                        <li class="col-lg-3">
                                            <a href="questions-right-sidebar.html">questions right sidebar <span class="badge bg-warning text-white">New</span></a>
                                            <a href="user-list.html">user list <span class="badge bg-warning text-white">New</span></a>
                                            <a href="category-list.html">category list <span class="badge bg-warning text-white">New</span></a>
                                            <a href="tags-list.html">tags list <span class="badge bg-warning text-white">New</span></a>
                                            <a href="add-post.html">add post <span class="badge bg-warning text-white">New</span></a>
                                            <a href="badges-list.html">Badges list <span class="badge bg-warning text-white">New</span></a>
                                            <a href="job-list.html">job list <span class="badge bg-warning text-white">New</span></a>
                                            <a href="error-2.html">page 404 2 <span class="badge bg-warning text-white">New</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">ПасКод</a>
                                <!--<ul class="dropdown-menu-item">
                                    <li><a href="blog-grid-no-sidebar.html">grid no sidebar</a></li>
                                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                    <li><a href="blog-single.html">blog detail</a></li>
                                </ul>-->
                            </li>
                        </ul><!-- end ul -->
                    </nav><!-- end main-menu -->
                    <form method="post" class="mr-4">
                        <div class="form-group mb-0">
                            <input class="form-control form--control form--control-bg-gray" type="text" name="search" placeholder="Пошук...">
                            <button class="form-btn" type="button"><i class="la la-search"></i></button>
                        </div>
                    </form>
                    <div class="nav-right-button">
                        <a href="new-thread.html" class="btn theme-btn"><i class="la la-plus-circle mr-1"></i> Створити тред</a>
                    </div>
                </div><!-- end menu-wrapper -->
            </div><!-- end col-lg-10 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="off-canvas-menu custom-scrollbar-styled">
        <div class="off-canvas-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="forum.html">Головна</a>
                <!--<ul class="sub-menu">
                    <li><a href="index.html">Home - landing</a></li>
                    <li><a href="home-2.html">Home - main</a></li>
                </ul>-->
            </li>
            <li>
                <a href="#">Сторінки</a>
                <ul class="sub-menu">
                    <li><a href="user-profile.html">user profile</a></li>
                    <li><a href="notifications.html">Notifications</a></li>
                    <li><a href="referrals.html">Referrals</a></li>
                    <li><a href="setting.html">settings</a></li>
                    <li><a href="ask-question.html">ask question</a></li>
                    <li><a href="question-details.html">question details</a></li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="revisions.html">revisions</a></li>
                    <li><a href="category.html">category</a></li>
                    <li><a href="companies.html">companies</a></li>
                    <li><a href="company-details.html">company details</a></li>
                    <li><a href="careers.html">careers</a></li>
                    <li><a href="career-details.html">career details</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                    <li><a href="pricing-table.html">pricing tables</a></li>
                    <li><a href="error.html">page 404</a></li>
                    <li><a href="terms-and-conditions.html">Terms & conditions</a></li>
                    <li><a href="privacy-policy.html">privacy policy</a></li>
                </ul>
            </li>
            <li>
                <a href="#">ПасКод</a>
                <ul class="sub-menu">
                    <li><a href="blog-grid-no-sidebar.html">grid no sidebar</a></li>
                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                    <li><a href="blog-single.html">blog detail</a></li>
                </ul>
            </li>
        </ul>
        <div class="off-canvas-btn-box px-4 pt-5 text-center">
            <a href="new-thread.html" class="btn theme-btn theme-btn-sm theme-btn-outline" data-toggle="modal" data-target="#loginModal"><i class="la la-plus-circle mr-1"></i> Створити тред</a>
            <!--<span class="fs-15 fw-medium d-inline-block mx-2">Or</span>
            <a href="#" class="btn theme-btn theme-btn-sm" data-toggle="modal" data-target="#signUpModal"><i class="la la-plus mr-1"></i> Sign up</a>-->
        </div>
    </div><!-- end off-canvas-menu 
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="post" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-40px" type="text" name="search" placeholder="Пошук...">
                    <span class="la la-search input-icon"></span>
                </div>
            </form>
            <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                <i class="la la-times"></i>
            </div> end off-canvas-menu-close -->
        </div>
    </div><!-- end mobile-search-form -->
    <div class="body-overlay"></div>
</header><!-- end header-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!--======================================
        START HERO AREA
======================================-->
<!--<section class="hero-area pt-80px pb-50px bg-white shadow-sm">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="hero-content text-center pb-5">
            <h2 class="section-title pb-3 theme-font-2 fs-40">The Social Q&A Community</h2>
            <p class="section-desc">The question and answer site designed to help people, to help each other: <br>
                To ask, to learn, to share, to grow.
            </p>
            <div class="hero-btn-box py-4">
                <a href="signup.html" class="btn theme-btn mr-2">Join the community</a>
                <a href="ask-question.html" class="btn theme-btn theme-btn-outline">Ask a Question</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 media align-items-center pb-30px responsive-column-half">
                <svg class="mr-3" width="45px" height="45px" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                    <path style="fill:#C7EAFF;" d="M286,184H70c-33.137,0-60,26.863-60,60v154c0,33.137,26.863,60,60,60h64.979l-0.901,0.078L178,502
                        l0.031-44H286c33.137,0,60-26.863,60-60V244C346,210.863,319.137,184,286,184z"/>
                                        <path d="M178.002,512c-2.603,0-5.16-1.016-7.073-2.929L129.858,468H70c-38.598,0-70-31.402-70-70V244c0-38.598,31.402-70,70-70h101
                        c5.522,0,10,4.477,10,10s-4.478,10-10,10H70c-27.57,0-50,22.43-50,50v154c0,27.57,22.43,50,50,50h64.979
                        c4.09,0,7.626,2.461,9.171,6.008l23.868,23.867l0.014-19.882c0.004-5.52,4.479-9.993,10-9.993H286c27.57,0,50-22.43,50-50v-69
                        c0-5.523,4.478-10,10-10s10,4.477,10,10v69c0,38.598-31.402,70-70,70h-97.976L188,502.007c-0.003,4.043-2.44,7.687-6.177,9.233
                        C180.588,511.751,179.289,512,178.002,512z"/>
                                        <path style="fill:#FFBC53;" d="M366.655,10h-25.309C266.597,10,206,70.596,206,145.346l0,0c0,74.749,60.596,135.346,135.346,135.346
                        h25.309c13.854,0,27.22-2.086,39.805-5.953L448,316.255v-62.733c32.794-24.699,54-63.96,54-108.177l0,0
                        C502,70.596,441.404,10,366.655,10z"/>
                                        <path d="M448.002,326.255c-2.602,0-5.158-1.016-7.071-2.927l-37.387-37.366c-12,3.14-24.381,4.729-36.89,4.729h-25.309
                        C261.202,290.691,196,225.49,196,145.346S261.202,0,341.346,0h25.309C446.798,0,512,65.202,512,145.346
                        c0,23.216-5.313,45.405-15.794,65.951c-9.228,18.09-22.377,34.283-38.206,47.102v57.856c0,4.044-2.436,7.69-6.172,9.238
                        C450.591,326.006,449.291,326.255,448.002,326.255z M406.459,264.738c2.612,0,5.166,1.025,7.07,2.927L438,292.123v-38.6
                        c0-3.141,1.476-6.099,3.983-7.988C473.77,221.595,492,185.077,492,145.346C492,76.23,435.771,20,366.655,20h-25.309
                        C272.23,20,216,76.23,216,145.346s56.229,125.346,125.346,125.346h25.309c12.561,0,24.965-1.854,36.868-5.512
                        C404.489,264.883,405.479,264.738,406.459,264.738z"/>
                                        <path d="M356.8,186.774c-5.522,0-10-4.477-10-10v-24.025c0-8.957,6.13-16.585,14.908-18.549
                        c10.834-2.424,18.141-12.266,17.373-23.403c-0.76-11.027-9.649-19.916-20.677-20.676c-6.29-0.434-12.268,1.679-16.842,5.948
                        c-4.578,4.273-7.1,10.074-7.1,16.333c0,5.523-4.478,10-10,10s-10-4.477-10-10c0-11.691,4.903-22.973,13.453-30.954
                        c8.669-8.093,19.995-12.096,31.863-11.281c20.936,1.443,37.812,18.319,39.255,39.254c1.435,20.821-12.084,39.259-32.234,44.127
                        v23.226C366.8,182.297,362.323,186.774,356.8,186.774z"/>
                                        <path d="M356.8,226.33c-2.63,0-5.21-1.06-7.07-2.92c-1.859-1.86-2.93-4.44-2.93-7.08c0-2.63,1.07-5.21,2.93-7.07
                        s4.44-2.93,7.07-2.93s5.21,1.07,7.07,2.93c1.859,1.86,2.93,4.44,2.93,7.07c0,2.64-1.07,5.21-2.93,7.08
                        C362.01,225.27,359.43,226.33,356.8,226.33z"/>
                                        <path d="M275,330H64c-5.522,0-10-4.477-10-10s4.478-10,10-10h211c5.522,0,10,4.477,10,10S280.523,330,275,330z"/>
                                        <path d="M275,386c-2.63,0-5.21-1.07-7.07-2.93S265,378.63,265,376s1.069-5.21,2.93-7.07c1.86-1.86,4.44-2.93,7.07-2.93
                        s5.21,1.07,7.069,2.93c1.86,1.86,2.931,4.44,2.931,7.07c0,2.64-1.07,5.21-2.931,7.07C280.21,384.93,277.63,386,275,386z"/>
                                        <path d="M235.667,386H64c-5.522,0-10-4.477-10-10s4.478-10,10-10h171.667c5.522,0,10,4.477,10,10S241.19,386,235.667,386z"/>
                                        <path d="M210,274H64c-5.522,0-10-4.477-10-10s4.478-10,10-10h146c5.522,0,10,4.477,10,10S215.523,274,210,274z"/>
                    </svg>
                <div class="media-body">
                    <h5 class="fs-18 mb-1 theme-font-2 fw-bold">Ask Questions</h5>
                    <p class="fs-15 lh-20">Get the right answers. Fast</p>
                </div>
            </div>
            <div class="col-lg-4 media align-items-center pb-30px responsive-column-half">
                <svg class="mr-3" width="45px" height="45px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><g><path d="m80.267 7.5c-25.124 0-45.492 20.367-45.492 45.492v406.017c0 25.124 20.367 45.492 45.492 45.492h300.284c25.124 0 45.492-20.367 45.492-45.492v-333.882c0-7.913-3.143-15.501-8.738-21.096l-87.792-87.792c-5.595-5.595-13.184-8.738-21.096-8.738h-228.15z" fill="#f7f4f7"/><g><path d="m417.305 104.03-56.639-56.639v411.617c0 25.124-20.367 45.492-45.492 45.492h65.377c25.124 0 45.492-20.367 45.492-45.492v-333.881c0-7.913-3.143-15.502-8.738-21.097z" fill="#e0dde0"/></g><path d="m417.305 104.03-87.792-87.792c-2.55-2.55-5.518-4.584-8.738-6.051v78.211c0 13.459 10.911 24.37 24.37 24.37h78.211c-1.467-3.22-3.501-6.187-6.051-8.738z" fill="#efd133"/></g><g><path d="m130.884 226.457h-36.596c-3.557 0-6.44-2.883-6.44-6.44v-36.596c0-3.557 2.883-6.44 6.44-6.44h36.596c3.557 0 6.44 2.883 6.44 6.44v36.596c0 3.557-2.883 6.44-6.44 6.44z" fill="#e49542"/><path d="m130.884 319.784h-36.596c-3.557 0-6.44-2.883-6.44-6.44v-36.596c0-3.557 2.883-6.44 6.44-6.44h36.596c3.557 0 6.44 2.883 6.44 6.44v36.596c0 3.556-2.883 6.44-6.44 6.44z" fill="#95d6a4"/><path d="m130.884 413.11h-36.596c-3.557 0-6.44-2.883-6.44-6.44v-36.596c0-3.557 2.883-6.44 6.44-6.44h36.596c3.557 0 6.44 2.883 6.44 6.44v36.596c0 3.557-2.883 6.44-6.44 6.44z" fill="#e07f84"/></g><g><g><path d="m429.739 292.024-31.709-31.709-5.735.339-153.687 153.687c-2.375 2.375-4.496 4.976-6.362 7.747l36.367 36.367c2.771-1.866 5.372-3.987 7.747-6.362l153.687-153.687z" fill="#e07f84"/><path d="m271.514 456.351-37.164-37.164c-3.133 4.024-5.679 8.486-7.521 13.267l-15.809 41.028c-1.495 3.88 2.319 7.693 6.198 6.198l41.028-15.809c4.782-1.841 9.244-4.387 13.268-7.52z" fill="#a87f7f"/><path d="m453.023 275.431-22.976 22.975-37.752-37.752 22.976-22.975 5.525.246 31.771 31.772z" fill="#d1ccd3"/></g></g><path d="m269.924 71.035h-174.594c-4.132 0-7.483 3.35-7.483 7.483v26.769c0 4.132 3.35 7.483 7.483 7.483h174.594c4.132 0 7.483-3.35 7.483-7.483v-26.77c0-4.132-3.35-7.482-7.483-7.482z" fill="#bed8fb"/><path d="m269.924 71.035h-65.377c4.132 0 7.482 3.35 7.482 7.483v26.769c0 4.133-3.35 7.483-7.482 7.483h65.377c4.132 0 7.482-3.35 7.482-7.483v-26.77c.001-4.132-3.349-7.482-7.482-7.482z" fill="#9dc6fb"/></g><path d="m469.422 221.279c10.425 10.425 10.425 27.327 0 37.752l-16.4 16.4-37.752-37.752 16.4-16.4c10.425-10.425 27.327-10.425 37.752 0z" fill="#88a8d8"/><g><path d="m372.971 178.12h-191.128c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h191.128c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"/><path d="m372.971 210.319h-191.128c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h191.128c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"/><path d="m147.367 112.769c0 4.142 3.358 7.5 7.5 7.5h115.057c8.261 0 14.982-6.721 14.982-14.983v-26.768c0-8.261-6.721-14.982-14.982-14.982h-174.594c-8.261 0-14.982 6.721-14.982 14.982v26.769c0 8.262 6.721 14.983 14.982 14.983h24.451c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5l-24.433.017-.018-26.752 174.576-.018.018 26.751h-115.057c-4.142.001-7.5 3.359-7.5 7.501z"/><path d="m426.043 333.057c-4.142 0-7.5 3.358-7.5 7.5v118.452c0 20.949-17.043 37.992-37.992 37.992h-300.284c-20.949 0-37.992-17.043-37.992-37.992v-406.017c0-20.949 17.043-37.992 37.992-37.992 241.684.205 228.307-.493 233.007.545v72.854c0 17.573 14.297 31.87 31.87 31.87h72.854c.349 1.579.545 3.202.545 4.858v64.141c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-64.141c0-9.973-3.883-19.349-10.935-26.4l-87.792-87.792c-7.051-7.052-16.427-10.935-26.4-10.935h-228.149c-29.22 0-52.992 23.772-52.992 52.992v406.017c0 29.22 23.772 52.992 52.992 52.992h300.285c29.22 0 52.992-23.772 52.992-52.992v-118.452c-.001-4.142-3.359-7.5-7.501-7.5zm-18.106-227.788h-62.793c-9.302 0-16.87-7.568-16.87-16.87v-62.793z"/><path d="m144.824 183.421c0-7.687-6.253-13.94-13.94-13.94h-36.596c-7.687 0-13.94 6.253-13.94 13.94v36.596c0 7.687 6.253 13.94 13.94 13.94h36.596c7.687 0 13.94-6.253 13.94-13.94zm-15 35.536h-34.476v-34.476h34.476z"/><path d="m144.824 276.748c0-7.687-6.253-13.94-13.94-13.94h-36.596c-7.687 0-13.94 6.253-13.94 13.94v36.596c0 7.687 6.253 13.94 13.94 13.94h36.596c7.687 0 13.94-6.253 13.94-13.94zm-15 35.536h-34.476v-34.476h34.476z"/><path d="m130.884 356.135h-36.596c-7.687 0-13.94 6.253-13.94 13.94v36.596c0 7.687 6.253 13.94 13.94 13.94h36.596c7.687 0 13.94-6.253 13.94-13.94v-36.596c0-7.687-6.253-13.94-13.94-13.94zm-1.06 49.475h-34.476v-34.476h34.476z"/><path d="m474.725 215.976c-13.332-13.333-35.026-13.333-48.358 0l-55.47 55.47h-189.054c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h174.054l-17.199 17.199h-156.855c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h141.855l-46.127 46.127h-95.728c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h80.728l-17.199 17.199h-63.528c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h48.743c-4.623 5.339-8.216 11.195-10.755 17.785l-15.809 41.029c-1.746 4.532-.655 9.68 2.779 13.114 3.452 3.452 8.604 4.517 13.115 2.779l41.027-15.809c8.094-3.118 15.246-8 20.72-13.475l45.424-45.424h45.883c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-30.883l17.199-17.199h13.684c4.142 0 7.5-3.358 7.5-7.5 0-3.729-2.725-6.814-6.29-7.394l100.545-100.545c13.332-13.33 13.332-35.023-.001-48.356zm-219.175 240.898-35.339 13.617 13.617-35.34c.533-1.384 1.138-2.742 1.81-4.068l23.981 23.981c-1.326.672-2.684 1.276-4.069 1.81zm16.257-10.835-27.145-27.145 147.633-147.633 27.145 27.145zm158.24-158.239-27.145-27.145 12.369-12.369 27.145 27.145zm34.072-34.072-11.096 11.096-27.146-27.146 11.096-11.096c7.484-7.483 19.661-7.483 27.146 0 7.484 7.484 7.484 19.662 0 27.146z"/></g></g></svg>
                <div class="media-body">
                    <h5 class="fs-18 mb-1 theme-font-2 fw-bold">Answer Questions</h5>
                    <p class="fs-15 lh-20">Spend five minutes feeling smart.</p>
                </div>
            </div>
            <div class="col-lg-4 media align-items-center pb-30px responsive-column-half">
                <svg class="mr-3" width="45px" height="45px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m483.375 275.673c-22.532-28.534-38.683-36.819-38.683-36.819h-377.385s-16.151 8.285-38.683 36.819c-9.528 12.066-6.42 29.753 6.609 37.914 28.293 17.722 77.555 52.959 124.079 107.678h193.374c46.525-54.719 95.786-89.956 124.079-107.678 13.031-8.162 16.138-25.848 6.61-37.914z" fill="#ff748f"/><path d="m188.333 414.829c-58.545-68.856-120.534-113.198-156.137-135.498-1.453-.91-2.804-1.919-4.058-3.004-8.918 12.043-5.701 29.245 7.097 37.261 28.293 17.722 77.555 52.959 124.079 107.678z" fill="#fd5f7e"/><path d="m50.59 212.91c0-113.263 92.147-205.41 205.41-205.41 113.264 0 205.41 92.147 205.41 205.41z" fill="#77718c"/><path d="m276 8.476c-6.583-.639-13.252-.976-20-.976-113.263 0-205.41 92.147-205.41 205.41h40c0-106.516 81.497-194.346 185.41-204.434z" fill="#5c586f"/><circle cx="426.995" cy="230.609" fill="#ffbd86" r="40.451"/><path d="m332.358 368.749s80.291 41.586 80.291 135.751h-307.661c0-94.166 80.291-135.751 80.291-135.751z" fill="#76e6d5"/><path d="m210.279 368.748h-25s-80.291 41.586-80.291 135.751h25c0-94.165 80.291-135.751 80.291-135.751z" fill="#00d6bc"/><path d="m392.324 109.681c-12.553-16.55-35.056-21.854-53.842-12.99-19.762 9.324-48.958 19.462-82.482 19.462-33.523 0-62.718-10.137-82.48-19.461-18.968-8.949-41.543-3.335-54.166 13.415-21.821 28.953-34.652 65.063-34.344 104.184.753 95.343 78.474 171.133 173.808 169.592 93.138-1.505 168.176-77.476 168.176-170.972.001-38.782-12.912-74.545-34.67-103.23z" fill="#fed2a4"/><path d="m125.01 214.29c-.309-39.121 12.523-75.23 34.344-104.185 4.188-5.557 9.474-9.879 15.357-12.859-.399-.186-.8-.371-1.191-.555-18.968-8.949-41.543-3.335-54.166 13.415-17.26 22.902-28.889 50.285-32.846 80.09-.497-.019-.994-.039-1.504-.039-22.341 0-40.451 18.111-40.451 40.452s18.111 40.451 40.451 40.451c3.497 0 6.695-.444 9.601-1.279 23.651 67.59 88.355 115.327 164.213 114.101 5.793-.094 11.515-.476 17.154-1.132-84.602-9.775-150.27-80.86-150.962-168.46z" fill="#ffbd86"/><path d="m386.446 172.401c-5.764-18.527-26.641-27.605-44.096-19.131l-86.35 41.924-86.351-41.924c-17.455-8.474-38.331.604-44.096 19.131-3.984 12.805-6.132 26.412-6.132 40.512 0 18.375 3.65 35.914 10.261 51.93 6.907 16.734 26.684 23.985 42.969 16.078l83.349-40.466 83.348 40.466c16.286 7.907 36.062.656 42.969-16.078 6.611-16.017 10.261-33.555 10.261-51.93 0-14.101-2.148-27.707-6.132-40.512z" fill="#ff748f"/><g fill="#f9f097"><path d="m204.265 209.462c-11.292-4.716-22.339-7.524-31.594-9.194-6.877-1.241-13.221 3.994-13.353 10.981-.037 1.945.136 3.93.538 5.93 2.63 13.072 14.699 22.395 28.011 21.631 9.551-.548 17.517-5.886 21.905-13.426 3.379-5.808.694-13.332-5.507-15.922z"/><path d="m307.735 209.462c11.292-4.716 22.339-7.524 31.594-9.194 6.877-1.241 13.221 3.994 13.353 10.981.037 1.945-.136 3.93-.538 5.93-2.63 13.072-14.699 22.395-28.011 21.631-9.551-.548-17.517-5.886-21.905-13.426-3.379-5.808-.694-13.332 5.507-15.922z"/><path d="m284.413 438.297-12.636-6.911-6.911-12.636c-3.834-7.009-13.9-7.009-17.734 0l-6.911 12.636-12.636 6.911c-7.009 3.833-7.009 13.9 0 17.734l12.636 6.911 6.911 12.636c3.834 7.009 13.9 7.009 17.734 0l6.911-12.636 12.636-6.911c7.01-3.833 7.01-13.9 0-17.734z"/></g></g><g><path d="m175.929 287.667 80.071-38.875 80.072 38.876c19.904 9.663 44.509 1.039 53.178-19.963 12.921-31.305 14.165-66.011 4.358-97.531-7.121-22.889-32.942-34.131-54.533-23.65l-83.075 40.333-83.075-40.334c-21.561-10.468-47.402.733-54.533 23.649-9.782 31.441-8.594 66.151 4.358 97.532 8.687 21.044 33.319 29.605 53.179 19.963zm-43.214-113.038c4.402-14.145 20.345-21.078 33.659-14.612l86.351 41.924c2.068 1.004 4.483 1.004 6.552 0l86.351-41.924c13.329-6.471 29.261.48 33.658 14.612 8.74 28.091 7.718 59.204-3.9 87.352-5.36 12.985-20.609 18.093-32.761 12.193l-83.348-40.466c-2.042-.991-4.454-1.018-6.552 0l-83.347 40.466c-12.155 5.901-27.402.79-32.762-12.192-11.59-28.082-12.663-59.192-3.901-87.353z"/><path d="m188.297 246.297c11.65-.668 22.102-7.077 27.958-17.142 5.623-9.663 1.346-22.252-9.099-26.614-10.271-4.29-21.424-7.538-33.151-9.654-11.405-2.057-21.963 6.604-22.184 18.219-.389 20.199 16.622 36.331 36.476 35.191zm-17.656-38.711c1.62 0 16.628 2.906 30.734 8.797 2.044.854 3 3.364 1.915 5.229-3.317 5.7-9.243 9.331-15.852 9.71-11.117.637-20.842-8.353-20.621-19.93.042-2.186 1.844-3.806 3.824-3.806z"/><path d="m323.704 246.297c19.88 1.139 36.865-15.008 36.477-35.19-.221-11.636-10.796-20.274-22.184-18.219-11.728 2.117-22.882 5.365-33.152 9.654-10.435 4.358-14.727 16.943-9.099 26.614 5.857 10.065 16.308 16.473 27.958 17.141zm-13.078-29.914c13.838-5.779 29.067-8.797 30.734-8.797 1.954 0 3.782 1.592 3.824 3.807.222 11.589-9.517 20.568-20.621 19.93-6.609-.379-12.535-4.01-15.852-9.71-1.086-1.869-.127-4.376 1.915-5.23z"/><path d="m279.898 268.946c-3.124-2.721-7.86-2.396-10.582.728-7.039 8.077-19.573 8.101-26.633 0-2.722-3.123-7.459-3.448-10.582-.727s-3.448 7.459-.727 10.582c13.061 14.987 36.259 14.909 49.25 0 2.723-3.124 2.397-7.861-.726-10.583z"/><path d="m288.013 431.717-10.708-5.856-5.856-10.708c-6.67-12.196-24.225-12.194-30.894 0l-5.856 10.708-10.708 5.856c-12.196 6.671-12.194 24.225 0 30.895l10.708 5.856 5.856 10.708c6.669 12.196 24.225 12.195 30.894 0l5.856-10.708 10.708-5.856c5.649-3.09 9.158-9.009 9.158-15.447s-3.509-12.358-9.158-15.448zm-7.198 17.734-12.636 6.911c-3.218 1.76-3.112 3.893-9.892 15.617-.988 1.805-3.575 1.825-4.574 0-6.793-11.747-6.675-13.858-9.892-15.617l-12.636-6.911c-1.804-.986-1.825-3.575 0-4.574 11.743-6.791 13.858-6.674 15.617-9.892l6.911-12.636c.988-1.805 3.575-1.825 4.574 0 6.793 11.747 6.675 13.858 9.892 15.617 0 0 12.636 6.91 12.636 6.91 1.791.981 1.778 3.603 0 4.575z"/><path d="m31.253 319.942c25.482 15.961 63.471 43.253 102.049 83.679-17.573 21.763-35.813 55.32-35.813 100.879 0 4.142 3.358 7.5 7.5 7.5h307.661c4.142 0 7.5-3.358 7.5-7.5 0-47.275-19.773-82.217-38.037-104.411 13.595-13.98 28.123-27.403 43.277-39.956 3.19-2.643 3.633-7.371.991-10.561-2.642-3.189-7.37-3.634-10.56-.991-15.294 12.67-29.977 26.199-43.736 40.293-8.19-8.444-17.057-15.979-25.572-22.053 32.744-19.323 60.498-50.004 75.646-88.507 14.722 1.491 29.72-3.801 40.199-15.297 5.031 5.135 10.099 10.929 15.132 17.303 6.951 8.801 4.285 21.28-4.704 26.91-10.995 6.887-22.202 14.555-33.308 22.793-3.327 2.468-4.023 7.165-1.556 10.492 2.468 3.327 7.164 4.023 10.492 1.556 10.792-8.005 21.67-15.45 32.333-22.129 16.747-10.49 20.845-33.303 8.514-48.918-6.131-7.763-12.341-14.735-18.517-20.823 6.174-13.732 5.566-29.696-1.94-43.031-1.469-55.252-23.988-107.025-63.573-145.974-40.106-39.463-93.104-61.196-149.23-61.196-30.241 0-59.485 6.245-86.917 18.561-3.779 1.697-5.467 6.135-3.771 9.914 1.697 3.778 6.135 5.467 9.914 3.771 25.488-11.444 52.664-17.246 80.774-17.246 102.525 0 185.385 77.752 196.585 175.017-6.418-4.054-13.76-6.397-20.584-7.102-4.735-28.168-15.921-54.06-33.701-77.767-13.894-18.317-38.813-25.124-60.381-16.386-8.334 3.38-39.941 19.89-81.919 19.89-45.941 0-77.491-19.083-87.725-21.853-20.123-5.452-42.103 1.799-54.911 18.793-16.958 22.496-28.566 48.75-33.367 77.323-7.074.736-14.287 3.127-20.571 7.094 6.777-58.308 39.241-110.916 89.337-143.35 3.477-2.251 4.471-6.895 2.22-10.372-2.252-3.477-6.895-4.471-10.372-2.22-59.238 38.354-95.531 102.945-97.409 173.09-7.493 13.305-8.139 29.271-1.947 43.043-6.177 6.089-12.388 13.062-18.517 20.823-12.346 15.637-8.214 38.442 8.514 48.919zm323.461 177.058v-39.831c0-4.143-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v39.831h-167.426v-39.831c0-4.143-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v39.831h-44.622c1.6-33.573 14.024-63.635 36.981-89.476 10.042-11.313 23.257-22.654 36.027-30.356 45.713 19.485 99.392 19.234 145.764-2.405 11.723 7.419 24.707 18.38 35.535 30.67 23.608 26.799 36.371 57.571 37.999 91.567zm-297.253-248.334c-12.754-19.39-1.797-45.517 20.626-50.271-.423 5.311-.617 10.711-.576 15.955.316 17.234 2.359 32.653 7.189 49.201-10.455-.096-20.918-5.23-27.239-14.885zm69.492-136.019c9.344-10.767 24.302-15.176 38.004-11.194 15.418 4.469 82.859 46.361 176.726 2.02 13.77-6.496 30.622-3.833 41.556 7.164 1.907 1.918 3.203 3.7 3.127 3.6 27.911 36.805 30.53 72.7 31.691 76.947 6.68 50.321-11.226 100.635-41.863 132.548-84.089 91.137-234.132 58.691-274.465-56.307-.001-.004-.002-.008-.003-.012-16.876-48.116-10.855-103.786 20.352-148.291 1.451-2.068 3.306-4.671 4.875-6.475zm326.174 97.919c16.548 21.578 1.195 52.788-25.898 52.987 6.316-21.447 8.404-43.653 6.691-65.157 7.389 1.571 14.299 5.787 19.207 12.17zm-418.615 69.754c5.032-6.373 10.101-12.167 15.132-17.303 10.392 11.399 25.319 16.771 40.085 15.308 15.567 39.844 44.851 71.765 80.191 91.183-9.7 6.749-18.919 14.753-26.658 22.819-39.343-41.037-78.026-68.798-104.046-85.097-8.996-5.634-11.648-18.116-4.704-26.91z"/></g></g></svg>
                <div class="media-body">
                    <h5 class="fs-18 mb-1 theme-font-2 fw-bold">Be Somebody's Hero</h5>
                    <p class="fs-15 lh-20">Pat yourself on the back. You deserve it.</p>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!--======================================
        END HERO AREA
======================================-->

<!-- ================================
         START QUESTION AREA
================================= -->
<section class="question-area pt-80px pb-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 pr-0">
                <div class="sidebar pb-45px position-sticky top-0">
                    <ul class="generic-list-item generic-list-item-highlight fs-15">
                        <li class="lh-26"><a href="forum.html"><i class="la la-home mr-1 text-black"></i> Головна</a></li>
                        <li class="lh-26 active"><a href="home-3.html"><i class="la la-car mr-1 text-black"></i> Автомобілі</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-bicycle mr-1 text-black"></i> Велосипеди</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-suitcase mr-1 text-black"></i> Бізнес</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-book mr-1 text-black"></i> Книги</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-mask mr-1 text-black"></i> Комікси</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-money mr-1 text-black"></i> Криптовалюти</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-globe mr-1 text-black"></i> Інші країни</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-tshirt mr-1 text-black"></i> Мода та стиль</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-running mr-1 text-black"></i> Фізкультура</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-language mr-1 text-black"></i> Ін.мови</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-futbol mr-1 text-black"></i> Футбол</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-history mr-1 text-black"></i> Історія</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-stethoscope mr-1 text-black"></i> Медицина</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-magic mr-1 text-black"></i> Магія</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-motorcycle mr-1 text-black"></i> Мотоцикли</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-film mr-1 text-black"></i> Фільми</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-music mr-1 text-black"></i> Музика</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-paw mr-1 text-black"></i> Тварини</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-brain mr-1 text-black"></i> Психологія</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-church mr-1 text-black"></i> Релігія</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-atom mr-1 text-black"></i> Наука</a></li>
                        <li class="lh-26"><a href="tags-list.html"><i class="la la-dragon mr-1 text-black"></i> Наук. фантастика</a></li>
                    </ul>
                </div><!-- end sidebar -->
            </div><!-- end col-lg-2 -->
            <?php include 'src/backend/php/load_thread_quantity.php'; ?>
            <div class="col-lg-7 px-0">
                <div class="question-main-bar border-left border-left-gray pb-50px">
                    <div class="filters pb-4 pl-3 d-flex align-items-center justify-content-between">
                        <div class="mr-3">
                            <h3 class="fs-18 fw-medium">Усі треди</h3>
                            <p class="pt-1 fs-14 fw-medium lh-20"><?php echo $category_threads_number;?> тредів</p>
                        </div>
                        <div class="filter-option-box w-20">
                            <select class="select-container">
                                <option value="popular" selected="selected">Популярні </option>
                                <option value="newest">Нові </option>
                                <option value="less-comments">Без коментарів </option>
                            </select>
                        </div><!-- end filter-option-box -->
                    </div><!-- end filters -->
                    <div class="questions-snippet border-top border-top-gray">
                        <?php include 'src/backend/php/load_threads.php'; ?>
                    </div>
                    </div><!-- end questions-snippet -->
                    <div class="pager d-flex flex-wrap align-items-center justify-content-between pt-30px px-3">
                        <div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination generic-pagination pr-1">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!--<p class="fs-13 pt-2">Showing 1-10 results of 50,577 questions</p>-->
                        </div>
                        <div class="filter-option-box w-20">
                            <select class="select-container">
                                <option selected="" value="10">10 на сторінку</option>
                                <option value="15">15 на сторінку</option>
                                <option value="20">20 на сторінку</option>
                                <option value="30">30 на сторінку</option>
                                <option value="40">40 на сторінку</option>
                                <option value="50">50 на сторінку</option>
                            </select>
                        </div>
                    </div>
                </div><!-- end question-main-bar -->
            </div><!-- end col-lg-7 -->
            <!--<div class="col-lg-3">
                <div class="sidebar">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Related Questions</h3>
                            <div class="divider"><span></span></div>
                            <div class="sidebar-questions pt-3">
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details.html">Using web3 to call precompile contract</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">2 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Sudhir Kumbhare</a>
                                        </small>
                                    </div>
                                </div>
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details.html">Is it true while finding Time Complexity of the algorithm [closed]</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">48 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">wimax</a>
                                        </small>
                                    </div>
                                </div>
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details.html">image picker and store them into firebase with flutter</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">1 hour ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Antonin gavrel</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Related Tags</h3>
                            <div class="divider"><span></span></div>
                            <div class="tags pt-4">
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">analytics</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div>
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">computer</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div>
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">python</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div>
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">javascript</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div>
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">c#</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div>
                                <div class="collapse" id="showMoreTags">
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">java</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div>
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">swift</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div>
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">html</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div>
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">angular</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div>
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">flutter</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div>
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">machine-language</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div>
                                </div>
                                <a class="collapse-btn fs-13" data-toggle="collapse" href="#showMoreTags" role="button" aria-expanded="false" aria-controls="showMoreTags">
                                    <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-11"></i></span>
                                    <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-11"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="ad-card">
                        <h4 class="text-gray text-uppercase fs-13 pb-3 text-center">Advertisements</h4>
                        <div class="ad-banner mb-4 mx-auto">
                            <span class="ad-text">290x500</span>
                        </div>
                    </div>
                </div>
            </div>-->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end question-area -->
<!-- ================================
         END QUESTION AREA
================================= -->

<!-- ================================
         START CTA AREA
================================= -->
<section class="cta-area pt-80px pb-80px bg-radial-gradient-gray">
    <div class="container">
        <div class="cta-heading media align-items-center justify-content-center">
            <img src="images/undraw-team-up.svg" alt="undraw-questions" class="undraw-illustration mr-5">
            <div class="media-body flex-inherit">
                <h2 class="section-title pb-3 theme-font-2">Створи свій перший Тред!</h2>
                <p class="section-desc pb-4">– Поширь свою думку та запитай у комьюніті ставлення до твого треду.</p>
                <a href="new-thread.html" class="btn theme-btn">Створити тред</a>
            </div>
        </div><!-- end cta-heading -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
         END CTA AREA
================================= -->

<!-- ================================
         END FOOTER AREA
================================= -->
<section class="footer-area pt-80px position-relative">
    <span class="vertical-bar-shape vertical-bar-shape-1"></span>
    <span class="vertical-bar-shape vertical-bar-shape-2"></span>
    <span class="vertical-bar-shape vertical-bar-shape-3"></span>
    <span class="vertical-bar-shape vertical-bar-shape-4"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <a href="forum.html" class="d-inline-block">
                        <img src="images/logo-black.png" alt="footer logo" class="footer-logo">
                    </a>
                    <p class="py-3 fs-15 lh-24">Lemyk – це динамічна онлайн-платформа, створена для підтримки жвавих дискусій та обміну ідеями між українцями.</p>
                    <div class="social-icon-box">
                        <a class="mr-1 icon-element icon-element-sm shadow-sm text-gray hover-y d-inline-block" href="#" target="_blank" title="Follow on Facebook">
                            <svg focusable="false" class="svg-inline--fa fa-facebook-f fa-w-10" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
                        </a>
                        <a class="mr-1 icon-element icon-element-sm shadow-sm text-gray hover-y d-inline-block" href="#" target="_blank" title="Follow on Twitter">
                            <svg focusable="false" class="svg-inline--fa fa-twitter fa-w-16" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                        </a>
                        <a class="mr-1 icon-element icon-element-sm shadow-sm text-gray hover-y d-inline-block" href="#" target="_blank" title="Follow on Linkedin">
                            <svg focusable="false" class="svg-inline--fa fa-linkedin fa-w-14" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
                        </a>
                        <a class="mr-1 icon-element icon-element-sm shadow-sm text-gray hover-y d-inline-block" href="#" target="_blank" title="Follow on Instagram">
                            <svg focusable="false" class="svg-inline--fa fa-instagram-square fa-w-14" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"></path></svg>
                        </a>
                    </div>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
             <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2">LEMYK</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3">
                        <li><a href="about.html">Про Лемiка</a></li>
                        <li><a href="contact.html">Контакти</a></li>
                        <li><a href="careers.html">Реклама</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2">Юридичний матеріал</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3">
                        <li><a href="privacy-policy.html">Політика конфіденційності</a></li>
                        <li><a href="terms-and-conditions.html">Умови використання</a></li>
                        <li><a href="privacy-policy.html">Політика cookie</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2">Довідка</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3">
                        <li><a href="faq.html">База знань</a></li>
                        <li><a href="contact.html">Підтримка</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <hr class="border-top-gray my-4">
    <!--<div class="container">
        <div class="row align-items-center pb-4 copyright-wrap">
            <div class="col-lg-6">
                <p class="copyright-desc copyright--desc fs-14">Copyright &copy; 2021 <a href="https://techydevs.com/">TechyDevs</a> Inc.</p>
            </div>
            <div class="col-lg-6">
                <ul class="generic-list-item generic-list-item-hover-underline generic-list-item-inline text-right">
                    <li><a href="free-demo.html">Team</a></li>
                    <li><a href="talent.html">Talent</a></li>
                    <li><a href="advertising.html">Advertising</a></li>
                </ul>
            </div>
        </div>
    </div>-->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start back to top -->
<div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Догори">
    <i class="la la-arrow-up"></i>
</div>
<!-- end back to top -->

<!-- template js files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/selectize.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>