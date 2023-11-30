<header id="site-header" class="w3l-header fixed-top">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        <div class="container">
            <h1>
                <a class="navbar-brand" href="http://www.sceneabox.com" id="lightLogo"><img src="{{ asset('assets/images/sceneboxlogo.png') }}" alt="Your logo" title="Your logo" style="height:35px;margin-top:-10px;">
                </a>
            </h1>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <span class="fa icon-expand fa-bars"></span>
                <span class="fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.html#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Genre <span class="fa fa-angle-down"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="genre.html">Movie</a>
                            <a class="dropdown-item" href="genre.html">Drama</a>
                            <a class="dropdown-item" href="genre.html">Commedy</a>
                            <a class="dropdown-item" href="genre.html">Music</a>
                            <a class="dropdown-item" href="genre.html">TV Show</a>
                            <a class="dropdown-item" href="genre.html">Health & Education</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Subscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pricing.html">Login</a>
                    </li>
                </ul>

                <!--/search-right-->
                <div class="search-right">
                    <a href="#search" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search" style="background: #ff0000!important;border: 1px solid #ff0000!important;">Search <span class="fa fa-search ml-3" aria-hidden="true"></span>
                    </a>
                    <!-- search popup -->
                    <div id="search" class="pop-overlay">
                        <div class="popup">
                            <form action="index.html#" method="post" class="search-box">
                                <input type="search" placeholder="Search your Keyword" name="search"
                                    required="required" autofocus="">
                                <button type="submit" class="btn"><span class="fa fa-search"
                                        aria-hidden="true"></span></button>
                            </form>
                            <div class="browse-items">
                                <h3 class="hny-title two mt-md-5 mt-4">Browse all:</h3>
                                <ul class="search-items">
                                    <li><a href="genre.html">Action</a></li>
                                    <li><a href="genre.html">Drama</a></li>
                                    <li><a href="genre.html">Family</a></li>
                                    <li><a href="genre.html">Thriller</a></li>
                                    <li><a href="genre.html">Commedy</a></li>
                                    <li><a href="genre.html">Romantic</a></li>
                                    <li><a href="genre.html">Tv-Series</a></li>
                                    <li><a href="genre.html">Horror</a></li>
                                    <li><a href="genre.html">Action</a></li>
                                    <li><a href="genre.html">Drama</a></li>
                                    <li><a href="genre.html">Family</a></li>
                                    <li><a href="genre.html">Thriller</a></li>
                                    <li><a href="genre.html">Commedy</a></li>
                                    <li><a href="genre.html">Romantic</a></li>
                                    <li><a href="genre.html">Tv-Series</a></li>
                                    <li><a href="genre.html">Horror</a></li>
                                </ul>
                            </div>
                        </div>
                        <a class="close" href="index.html#close">×</a>
                    </div>
                    <!-- /search popup -->
                    <!--/search-right-->
                </div>
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </div>
    </nav>
    <!--//nav-->
</header>
