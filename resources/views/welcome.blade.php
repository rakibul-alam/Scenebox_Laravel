

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sceneabox-A great source of Bangla video and audio contents</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/style-liberty.css') }}">
	<!-- Template CSS -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&amp;display=swap"
		rel="stylesheet">
	<!-- Template CSS -->
</head>

<body>

<script src="https://m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>


	<!-- header -->
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
	<!-- //header -->
	<!-- main-slider -->
    {{-- Display API data --}}

    @foreach ($data as $contenttype)
    @if($contenttype['contentviewtype']==4)
    <section class="w3l-main-slider position-relative" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                    @foreach ($contenttype['contents'] as $content)
                        <div class="item">
                            <li>
                                <div class="slider-info banner-web-view" style="background-image: url({{ $content['image_location'] }});">
                                    <div class="banner-info">
                                        <h3 class="mb-5">huiyh</h3>
                                        <span class="video-play-icon">
                                            <span class="fa fa-play"></span>
                                        </span>
                                        <h6>Watch Trailer</h6>
                                    </div>
                                </div>
                            </li>
                        </div>
                    @endforeach
            </div>
        </div>
    </section>
    @endif
@endforeach
	<!-- //banner-slider-->
	<!-- main-slider -->
	<div style="margin: 8px auto; display: block; text-align:center;">
</div>
	<!-- new arrival -->

    @foreach ($data as $contenttype)
    @if($contenttype['contentviewtype']==1)
	<section class="w3l-grids">

			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">New Arrival</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="genre.html">Show all</a></h4>
						</div>
					</div>
				</div>
				<div class="w3l-populohny-grids">
                    @foreach ($contenttype['contents'] as $content)
                    <div class="item">
                        <li>
                            <div class="item vhny-grid" style="background-image: url({{ $content['image_location'] }});">
                                    <h3 class="mb-5">huiyh</h3>
                                    <span class="video-play-icon">
                                        <span class="fa fa-play"></span>
                                    </span>
                                    <h6>Watch Trailer</h6>
                            </div>
                        </li>
                    </div>
                @endforeach
			</div>
		</div>
	</section>
    @endif
    @endforeach

	<!-- new arrival -->

	<!-- RECOMMENDED -->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Recommended</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="genre.html">Show all</a></h4>
						</div>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m7.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Frozen 2</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m3.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Knives Out</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m4.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Little Women</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m5.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Jumanji</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- RECOMMENDED -->

   <!-- movie -->
   <section class="w3l-grids">
	<div class="grids-main py-5">
		<div class="container py-lg-3">
			<div class="headerhny-title">
				<div class="w3l-title-grids">
					<div class="headerhny-left">
						<h3 class="hny-title">Movie</h3>
					</div>
					<div class="headerhny-right text-lg-right">
						<h4><a class="show-title" href="genre.html">Show all</a></h4>
					</div>
				</div>
			</div>
			<div class="w3l-populohny-grids">
				<div class="item vhny-grid">
					<div class="box16">
						<a href="genre.html">
							<figure>
								<img class="img-fluid" src="{{ asset('assets/images/m7.jpg') }}" alt="">

							</figure>
							<div class="box-content">
								<h3 class="title">Frozen 2</h3>
								<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

									</span>

									<span class="post fa fa-heart text-right"></span>
								</h4>
							</div>
							<span class="fa fa-play video-icon" aria-hidden="true"></span>
						</a>
					</div>
				</div>
				<div class="item vhny-grid">
					<div class="box16">
						<a href="genre.html">
							<figure>
								<img class="img-fluid" src="{{ asset('assets/images/m3.jpg') }}" alt="">
							</figure>
							<div class="box-content">
								<h3 class="title">Knives Out</h3>
								<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

									</span>

									<span class="post fa fa-heart text-right"></span>
								</h4>
							</div>
							<span class="fa fa-play video-icon" aria-hidden="true"></span>
						</a>
					</div>
				</div>
				<div class="item vhny-grid">
					<div class="box16">
						<a href="genre.html">
							<figure>
								<img class="img-fluid" src="{{ asset('assets/images/m4.jpg') }}" alt="">
							</figure>
							<div class="box-content">
								<h3 class="title">Little Women</h3>
								<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

									</span>

									<span class="post fa fa-heart text-right"></span>
								</h4>
							</div>
							<span class="fa fa-play video-icon" aria-hidden="true"></span>
						</a>
					</div>
				</div>
				<div class="item vhny-grid">
					<div class="box16">
						<a href="genre.html">
							<figure>
								<img class="img-fluid" src="{{ asset('assets/images/m5.jpg') }}" alt="">
							</figure>
							<div class="box-content">
								<h3 class="title">Jumanji</h3>
								<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

									</span>

									<span class="post fa fa-heart text-right"></span>
								</h4>
							</div>
							<span class="fa fa-play video-icon" aria-hidden="true"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
   <!-- movie -->

	<!-- music video -->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Music Video</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="genre.html">Show all</a></h4>
						</div>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m7.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Frozen 2</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m3.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Knives Out</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m4.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Little Women</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m5.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Jumanji</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- music video -->

     <!-- drama serial -->
	 <section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Drama Serial</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="genre.html">Show all</a></h4>
						</div>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m7.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Frozen 2</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m3.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Knives Out</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m4.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Little Women</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m5.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Jumanji</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
     <!-- drama serial -->

    <!-- single drama -->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Single Drama</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="genre.html">Show all</a></h4>
						</div>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m7.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Frozen 2</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m3.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Knives Out</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m4.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Little Women</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m5.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Jumanji</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- single drama -->

    <!-- movie song -->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Movie Song</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="genre.html">Show all</a></h4>
						</div>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m7.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Frozen 2</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m3.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Knives Out</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m4.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Little Women</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{ asset('assets/images/m5.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Jumanji</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- movie song -->

	<!--/tabs-->

	<!-- //tabs-->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

</div>
	<!-- footer-66 -->
	<footer class="w3l-footer">
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-5">
				<div class="container py-lg-4">
					<div class="text-txt">
						<div class="right-side">

							<div class="row footer-links">
								<div class="col-md-4 col-sm-6 sub-two-right mt-5">
									<h6>Genre</h6>
									<ul>
										<li><a href="index.html#">Movies</a></li>
										<li><a href="index.html#">Drama</a></li>
										<li><a href="index.html#">Commedy</a></li>
										<li><a href="index.html#">Music</a></li>
									</ul>
								</div>
								<div class="col-md-4 col-sm-6 sub-two-right mt-5">
									<h6>Information</h6>
									<ul>
										<li><a href="index.html">About</a> </li>
										<li><a href="about.html">Privacy Policy</a> </li>
										<li><a href="blog.html">License</a> </li>
										<li><a href="blog.html">Help</a> </li>
									</ul>
								</div>
								<div class="col-md-4 col-sm-6 sub-two-right mt-5">
									<h6>Others</h6>
									<ul>
										<li><a href="genre.html">My Account</a></li>
										<li><a href="genre.html">Subscription</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="below-section">
				<div class="container">
					<div class="copyright-footer">
						<div class="columns text-lg-left">
							<p>&copy;2023 E.B. Solutions Limited. All rights reserved</p>
						</div>

						<ul class="social text-lg-right">
							<li><a href="index.html#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
							</li>
							<li><a href="index.html#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
							</li>
							<li><a href="index.html#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
							</li>
							<li><a href="index.html#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
							</li>

						</ul>
					</div>
				</div>
			</div>
			<!-- copyright -->
			<!-- move top -->
			<button onclick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-arrow-up" aria-hidden="true"></span>
			</button>
			<script>
				// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function () {
					scrollFunction()
				};

				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
						document.getElementById("movetop").style.display = "block";
					} else {
						document.getElementById("movetop").style.display = "none";
					}
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}
			</script>
			<!-- /move top -->

		</section>
	</footer>
	<!--//footer-66 -->
	</body>

</html>
<!-- responsive tabs -->
<script src="{{ asset('assets/js/jquery-1.9.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/easyResponsiveTabs.js') }}"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      //Horizontal Tab
      $('#parentHorizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        tabidentify: 'hor_1', // The tab groups identifier
        activate: function (event) { // Callback function if tab is switched
          var $tab = $(this);
          var $info = $('#nested-tabInfo');
          var $name = $('span', $info);
          $name.text($tab.text());
          $info.show();
        }
      });
    });
  </script>
<!-- //responsive tabs -->
<!--/theme-change-->
<script src="{{ asset('assets/js/theme-change.js') }}"></script>
<!-- //theme-change-->
<script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			stagePadding:280,
			loop: true,
			margin: 20,
			nav: true,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					stagePadding:40,
					nav: false
				},
				480: {
					items: 1,
					stagePadding:60,
					nav: true
				},
				667: {
					items: 1,
					stagePadding:80,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
<script>
	$(document).ready(function () {
		$('.owl-three').owlCarousel({
			loop: true,
			margin: 20,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 2,
					nav: false
				},
				480: {
					items: 2,
					nav: true
				},
				667: {
					items: 3,
					nav: true
				},
				1000: {
					items: 5,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
<!-- /mid-script -->
<script>
	$(document).ready(function () {
		$('.owl-mid').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //mid-script -->

<!-- script for owlcarousel -->
<!-- Template JavaScript -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
<!--//-->
<!-- disable body scroll which navbar is in active -->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
	$(window).on("scroll", function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 80) {
			$("#site-header").addClass("nav-fixed");
		} else {
			$("#site-header").removeClass("nav-fixed");
		}
	});

	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function () {
		$("header").toggleClass("active");
	});
	$(document).on("ready", function () {
		if ($(window).width() > 991) {
			$("header").removeClass("active");
		}
		$(window).on("resize", function () {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
		});
	});
</script>
<!--//MENU-JS-->

<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
 <!-- ajax call for postman api -->


 <!-- ajax call for postman api -->
