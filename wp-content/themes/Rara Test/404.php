<?php get_header(); ?>

<body class="error404">
    <div id="page" class="hfeed site">
        <!-- header start-->
        <header id="masthead" class="site-header" role="banner">
            <div class="container">
                <div class="site-branding">
                    <h1 class="site-title"> <a href="" rel="home">Get More Readers</a> </h1>
                </div>
                <ul class="social-networks">
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
                <div id="mobile-header">
                    <a href="#site-navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <ul>
                        <li class="current-menu-item"><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- header ends-->
        <!-- page-header start-->
        <div class="page-header">
            <div class="container">
                <div id="crumbs">
                     <a href="#">Home</a> /
                     <span class="current">Page NOt Found</span>
                </div>
            </div>
        </div>
        <!-- page-header start-->
        <!-- site-content starts -->
        <div id="content" class="site-content">
            <div class="container">
                <div class="not-found">
                    <span>Oops</span>
                    <img src="images/error-img.png" alt="">
                    <h1>The requested page cannot be found</h1>
                    <p>
                        Can't find what you need? Take a moment and do a search below or start from our homepage.
                    </p>
                    <form role="search" method="get" class="search-form" action="">
                        <label>
                            <input type="search" class="search-field" placeholder="Search..." value="" name="s" title="Search for:">
                        </label>
                        <input type="submit" class="search-submit" value="Search">
                    </form>
                    <a href="#" class="home">Home page</a>
                    <a href="#" class="previous">Previous Page</a>
                </div>
            </div>
        </div>
        <!-- site-content ends -->
    <?php get_footer(); ?>