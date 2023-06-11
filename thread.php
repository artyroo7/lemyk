<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lemyk -  Тред №<?php echo($_GET['id']);?></title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
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
                        <div class="off-canvas-menu-toggle icon-element icon-element-xs shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                            <i class="la la-bars"></i>
                        </div>
                    </div>
                </div>
            </div><!-- end col-lg-2 -->
            <div class="col-lg-10">
                <div class="menu-wrapper">
                    <nav class="menu-bar ml-auto pr-2">
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
                                        </li>
                                        <li class="col-lg-3">
                                            <a href="company-details.html">company details</a>
                                            <a href="careers.html">careers</a>
                                            <a href="career-details.html">career details</a>
                                            <a href="contact.html">contact</a>
                                            <a href="faq.html">FAQs</a>
                                            <a href="pricing-table.html">pricing tables</a>
                                            <a href="error.html">page 404</a>
                                            <a href="terms-and-conditions.html">Terms & conditions</a>
                                            <a href="privacy-policy.html">privacy policy</a>
                                            <a href="cart.html">cart</a>
                                        </li>
                                        <li class="col-lg-3">
                                            <a href="talent.html">talent</a>
                                            <a href="advertising.html">advertising</a>
                                            <a href="free-demo.html">free demo</a>
                                            <a href="checkout.html">checkout</a>
                                            <a href="wishlist.html">wishlist</a>
                                            <a href="login.html">login</a>
                                            <a href="login-2.html">login 2</a>
                                            <a href="signup.html">sign up</a>
                                            <a href="signup-2.html">sign up 2</a>
                                            <a href="recover-password.html">recover password</a>
                                        </li>
                                        <li class="col-lg-3">
                                            <a href="questions-layout-2.html">questions layout 2 <span class="badge bg-warning text-white">New</span></a>
                                            <a href="questions-full-width.html">questions full-width <span class="badge bg-warning text-white">New</span></a>
                                            <a href="questions-left-sidebar.html">questions left sidebar <span class="badge bg-warning text-white">New</span></a>
                                            <a href="questions-right-sidebar.html">questions right sidebar <span class="badge bg-warning text-white">New</span></a>
                                            <a href="user-list.html">user list <span class="badge bg-warning text-white">New</span></a>
                                            <a href="category-list.html">category list <span class="badge bg-warning text-white">New</span></a>
                                            <a href="tags-list.html">tags list <span class="badge bg-warning text-white">New</span></a>
                                            <a href="add-post.html">add post <span class="badge bg-warning text-white">New</span></a>
                                            <a href="badges-list.html">Badges list <span class="badge bg-warning text-white">New</span></a>
                                            <a href="job-list.html">job list <span class="badge bg-warning text-white">New</span></a>
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
                    <div class="nav-right-button">
                        <a href="new-thread.html" class="btn theme-btn"><i class="la la-plus-circle mr-1"></i> Створити тред</a>
                    </div><!-- end nav-right-button -->
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
                <!--<ul class="sub-menu">
                    <li><a href="blog-grid-no-sidebar.html">grid no sidebar</a></li>
                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                    <li><a href="blog-single.html">blog detail</a></li>
                </ul>-->
            </li>
        </ul>
        <div class="off-canvas-btn-box px-4 pt-5 text-center">
            <a href="new-thread.html" class="btn theme-btn theme-btn-sm theme-btn-outline" data-toggle="modal" data-target="#loginModal"><i class="la la-plus-circle mr-1"></i> Створити тред</a>
            <!--<span class="fs-15 fw-medium d-inline-block mx-2">Or</span>
            <a href="#" class="btn theme-btn theme-btn-sm" data-toggle="modal" data-target="#signUpModal"><i class="la la-plus mr-1"></i> Sign up</a>-->
        </div>
    </div><!-- end off-canvas-menu -->
    <div class="body-overlay"></div>
</header><!-- end header-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!--======================================
        START HERO AREA
======================================-->
<?php include 'src/backend/php/load_thread_info.php'; ?>
<section class="hero-area pattern-bg-2 bg-white shadow-sm overflow-hidden pt-50px pb-50px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="hero-content">
            <ul class="breadcrumb-list pb-2">
                <li><a href="forum.html">Головна</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
                <li><a href="threads.php?category=<?php echo ($_GET['category']); ?>">Треди - <?php echo $thread_category_name; ?></a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
                <li>Тред № <?php echo($_GET['id']);?></li>
            </ul>
            <h2 class="section-title"><?php echo $thread_name;?></h2>
            <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                <a href="#" class="media-img media-img--sm d-block mr-2 rounded-full">
                    <img src="images/anonymous-user.png" data-src="images/anonymous-user.png" alt="avatar" class="rounded-full lazy">
                </a>
                <div class="media-body">
                    <?php $random_number = rand(1000,4000);?>
                    <h5 class="fs-14 fw-medium">Створив: <a>Анонім №<?php echo $random_number;?></a></h5>
                    <small class="meta d-block lh-20">
                        <span class="mr-2"><?php echo $thread_date;?></span>
                        <span class="mr-2 fs-15">.</span>
                        <a href="#comments" class="page-scroll text-gray"><i class="la la-comment mr-1"></i><?php echo $thread_comments_number;?></a>
                    </small>
                </div>
            </div>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section><!-- end hero-area -->
<!--======================================
        END HERO AREA
======================================-->

<!-- ================================
         START BLOG AREA
================================= -->
<section class="blog-area pt-30px pb-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card card-item">
                    <div class="card-body">
                        <p class="card-text pb-3"><?php echo $thread_body; ?></p>
                        <div class="row">
                            <?php include 'src/backend/php/load_images.php'; ?>
                        </div><!-- end row -->
                        <h4 class="pb-2 fs-20">Поділіться:</h4>
                        <div class="social-icon-box">
                            <a class="mr-1 icon-element icon-element-xs shadow-sm text-gray hover-y d-inline-block" href="#" target="_blank" title="Share on Facebook">
                                <svg focusable="false" class="svg-inline--fa fa-facebook-f fa-w-10" width="15px" height="15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
                            </a>
                            <a class="mr-1 icon-element icon-element-xs shadow-sm text-gray hover-y d-inline-block" href="#" target="_blank" title="Share on Twitter">
                                <svg focusable="false" class="svg-inline--fa fa-twitter fa-w-16" width="15px" height="15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                            </a>
                            <a class="mr-1 icon-element icon-element-xs shadow-sm text-gray hover-y d-inline-block" href="#" target="_blank" title="Share on Linkedin">
                                <svg focusable="false" class="svg-inline--fa fa-linkedin fa-w-14" width="15px" height="15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
                            </a>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <?php include 'src/backend/php/load_comments.php'; ?>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <form id="commentForm" method="post" class="card card-item" enctype="multipart/form-data">
                    <div class="card-body row">
                        <div class="form-group col-lg-12">
                            <h4 class="fs-20">Залишити коментар:</h4>
                            <input type="hidden" name="threadId" value="<?php echo ($_GET['id']); ?>">
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea class="form-control form--control" name="commentText" rows="5" placeholder="Напишіть щось цікаве :)"></textarea>
                        </div>
                        <div class="form-group col-lg-12" style="text-align: center;">
                            <button type="button" class="btn theme-btn" style="background-color: #3f3f3f4d;" onclick="document.getElementById('getFile').click()">Виберіть зображення <i class="la la-image mr-1"></i></button>
                            <input id="getFile" type="file" class="file-selector-button" name="commentImage" accept="image/*" style="display:none" onchange="showCheckmark()">
                            <i id="checkmark" class="la la-check-circle" style="color:green; display:none;"></i>
                        </div>
                        <div class="form-group col-lg-12 mb-0">
                            <button id="submitComment" class="btn theme-btn" type="submit">Опублікувати коментар</button>
                        </div>
                        <div id="output"></div>
                    </div>
                </form>
            </div><!-- end col-lg-8 -->
            <!--<div class="col-lg-4">
                <div class="sidebar">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Search blog</h3>
                            <div class="divider"><span></span></div>
                            <form method="post" class="pt-4">
                                <div class="form-group mb-0">
                                    <input class="form-control form--control form--control-bg-gray" type="text" name="search" placeholder="Type your search words...">
                                    <button class="form-btn" type="button"><i class="la la-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Categories</h3>
                            <div class="divider"><span></span></div>
                            <div class="category-list pt-4">
                                <a href="#" class="cat-item d-flex align-items-center justify-content-between mb-3 hover-y">
                                    <span class="cat-title">Technology</span>
                                    <span class="cat-number">238</span>
                                </a>
                                <a href="#" class="cat-item d-flex align-items-center justify-content-between mb-3 hover-y">
                                    <span class="cat-title">Project Management</span>
                                    <span class="cat-number">238</span>
                                </a>
                                <a href="#" class="cat-item d-flex align-items-center justify-content-between mb-3 hover-y">
                                    <span class="cat-title">Business</span>
                                    <span class="cat-number">238</span>
                                </a>
                                <a href="#" class="cat-item d-flex align-items-center justify-content-between mb-3 hover-y">
                                    <span class="cat-title">Digital design</span>
                                    <span class="cat-number">238</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Trending Posts</h3>
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
                            <h3 class="fs-17 pb-3">Trending Tags</h3>
                            <div class="divider"><span></span></div>
                            <div class="tags pt-4">
                                <a href="#" class="tag-link tag-link-md">analytics</a>
                                <a href="#" class="tag-link tag-link-md">computer</a>
                                <a href="#" class="tag-link tag-link-md">python</a>
                                <a href="#" class="tag-link tag-link-md">java</a>
                                <a href="#" class="tag-link tag-link-md">swift</a>
                                <a href="#" class="tag-link tag-link-md">javascript</a>
                                <a href="#" class="tag-link tag-link-md">c#</a>
                                <a href="#" class="tag-link tag-link-md">html</a>
                                <a href="#" class="tag-link tag-link-md">machine-language</a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Follow & Connect</h3>
                            <div class="divider"><span></span></div>
                            <div class="social-icon-box pt-3">
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
                        </div>
                    </div>
                </div>
            </div>-->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
         END BLOG AREA
================================= -->

<!-- ================================
         START BLOG AREA
================================= -->
<section class="blog-area pt-80px pb-50px bg-gray">
    <div class="container">
        <h2 class="section-title fs-30">Інші треди у цій категорії:</h2>
        <div class="row mt-40px">
            <?php include 'src/backend/php/load_last_threads.php'; ?>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
         END BLOG AREA
================================= -->

<!-- ================================
         END FOOTER AREA
================================= -->
<section class="footer-area pt-80px bg-dark position-relative">
    <span class="vertical-bar-shape vertical-bar-shape-1"></span>
    <span class="vertical-bar-shape vertical-bar-shape-2"></span>
    <span class="vertical-bar-shape vertical-bar-shape-3"></span>
    <span class="vertical-bar-shape vertical-bar-shape-4"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">LEMYK</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="#">Про Лемiка</a></li>
                        <li><a href="#">Контакти</a></li>
                        <li><a href="#">Реклама</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Юридичний матеріал</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="#">Політика конфіденційності</a></li>
                        <li><a href="#">Умови використання</a></li>
                        <li><a href="#">Політика cookie</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Довідка</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="#">База знань</a></li>
                        <li><a href="#">Підтримка</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Зв'яжіться з нами</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="#"><i class="la la-facebook mr-1"></i> Facebook</a></li>
                        <li><a href="#"><i class="la la-twitter mr-1"></i> Twitter</a></li>
                        <li><a href="#"><i class="la la-linkedin mr-1"></i> LinkedIn</a></li>
                        <li><a href="#"><i class="la la-instagram mr-1"></i> Instagram</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <hr class="border-top-gray my-5">
    <div class="container">
        <div class="row align-items-center pb-4 copyright-wrap">
            <div class="col-lg-6">
                <a href="forum.html" class="d-inline-block">
                    <img src="images/logo-white.png" alt="footer logo" class="footer-logo">
                </a>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <!--<p class="copyright-desc text-right fs-14">Copyright &copy; 2021 <a href="https://techydevs.com/">TechyDevs</a> Inc.</p>-->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start back to top -->
<div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Догори">
    <i class="la la-arrow-up"></i>
</div>
<!-- end back to top -->

<!-- Modal -->
<div class="modal fade modal-container" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="replyModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="replyModalTitle">Відповісти на цей коментар</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="replyForm" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <textarea class="form-control form--control" name="replyText" rows="5" placeholder="Коментар..."></textarea>
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <button type="button" class="btn theme-btn" style="background-color: #3f3f3f4d;" onclick="document.getElementById('getFileReply').click()">Виберіть зображення <i class="la la-image mr-1"></i></button>
                        <input id="getFileReply" type="file" class="file-selector-button" name="commentImage" accept="image/*" style="display:none" onchange="showCheckmarkReply()">
                        <i id="checkmark-reply" class="la la-check-circle" style="color:green; display:none;"></i>
                    </div>
                    <input type="hidden" name="threadId" value="<?php echo $_GET['id'];?>">
                    <input type="hidden" name="parentCommentId" value="">
                    <div class="btn-box">
                        <button type="submit" class="btn theme-btn w-100">Відповісти <i class="la la-arrow-right icon ml-1"></i></button>
                        <div id="output-reply"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-container" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="replyModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="replyModalTitle">Вкажіть причину скарги на цей коментар</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="reportForm" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="report-modal">
                            <div>
                                <input class="form-check-input" type="radio" name="reportReason" id="reportSpam" value="Spam">
                                <label class="form-check-label" for="reportSpam">
                                  Spam
                                </label>
                            </div>
                            <div>
                                <input class="form-check-input" type="radio" name="reportReason" id="reportViolence" value="Violence">
                                <label class="form-check-label" for="reportViolence">
                                  Violence
                                </label>
                            </div>
                            <div>
                                <input class="form-check-input" type="radio" name="reportReason" id="reportPornographyChildAbuse" value="Pornography or Child abuse">
                                <label class="form-check-label" for="reportPornographyChildAbuse">
                                  Pornography or Child abuse
                                </label>
                            </div>
                            <div>
                                <input class="form-check-input" type="radio" name="reportReason" id="reportOther" value="Other">
                                <label class="form-check-label" for="reportOther">
                                  Other
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="threadId" value="<?php echo $_GET['id'];?>">
                    <input type="hidden" name="parentCommentId" value="">
                    <div class="btn-box">
                        <button type="submit" class="btn theme-btn w-100">Відправити скаргу <i class="la la-arrow-right icon ml-1"></i></button>
                        <div id="output-report"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- template js files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.lazy.min.js"></script>
<script src="js/main.js"></script>

<script>
function showCheckmark() {
    document.getElementById('checkmark').style.display = "inline";
}

function showCheckmarkReply() {
    document.getElementById('checkmark-reply').style.display = "inline";
}

$(document).ready(function(){
    $("#commentForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url: 'src/backend/php/submit_comment.php',
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
                var jsonData = JSON.parse(data);
                if (jsonData.error) {
                    $("#output").html("<p>" + jsonData.error + "</p>");
                    console.log(jsonData.error);
                } else {
                    location.reload();
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
    });

    $(".comment-reply").on('click', function(e){
        var commentId = $(this).closest('li').data('comment-id');
        $('input[name="parentCommentId"]').val(commentId);
    });

    $("#replyForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url: 'src/backend/php/submit_reply.php',
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
                var jsonData = JSON.parse(data);
                if (jsonData.error) {
                    $("#output-reply").html("<p>" + jsonData.error + "</p>");
                    console.log(jsonData.error);
                } else {
                    location.reload();
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
    });

    $('a[href*="#"]').on('click', function (e) {
        e.preventDefault();

        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 120  // 50 pixels above the target
        }, 500, 'linear');
    });

    $('#reportForm').on('submit', function(e) {
      e.preventDefault();

      var reportReason = $('input[name="reportReason"]:checked').val();
      var threadId = $('input[name="threadId"]').val();
      var parentCommentId = $('input[name="parentCommentId"]').val();

      if (typeof reportReason === "undefined") {
        $("#output-report").html("<p>Please select a reason for reporting.</p>");
        return;
      }

      $.ajax({
        url: 'src/backend/php/submit_report.php',
        type: 'POST',
        data: {
          reportReason: reportReason,
          threadId: threadId,
          parentCommentId: parentCommentId
        },
        success: function(data){
            var jsonData = JSON.parse(data);
            if (jsonData.error) {
                $("#output-report").html("<p>" + jsonData.error + "</p>");
                console.log(jsonData.error);
            } else {
                $("#output-report").html("<p>" + jsonData.success + "</p>");
                //location.reload();
            }
        },
        error: function(error) {
            console.log(error);
        }
      });
    });

});
</script>

</body>
</html>