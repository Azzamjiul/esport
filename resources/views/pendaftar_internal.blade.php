<!DOCTYPE html>
<html>

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Esport Competition Dies Natalies ITS ke-59</title>

	<meta name="keywords" content="Esport Competition Dies Natalies ITS ke-59, Intitut Teknologi Sepuluh Nopember, Esport, Mobile Legend" />
	<meta name="description" content="Esport Competition Dies Natalies Intitut Teknologi Sepuluh Nopember ke-59">
	<meta name="author" content="Azzam Jihad Ulhaq">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('desain') }}/FAVICON-13.jpg" type="image/x-icon" />
	<link rel="apple-touch-icon" href="{{ asset('desain') }}/FAVICON-13.jpg">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ asset('template') }}/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('template') }}/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('template') }}/vendor/animate/animate.min.css">
	<link rel="stylesheet" href="{{ asset('template') }}/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="{{ asset('template') }}/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('template') }}/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{ asset('template') }}/vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{ asset('template') }}/css/theme.css">
	<link rel="stylesheet" href="{{ asset('template') }}/css/theme-elements.css">
	<link rel="stylesheet" href="{{ asset('template') }}/css/theme-blog.css">
	<link rel="stylesheet" href="{{ asset('template') }}/css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="{{ asset('template') }}/vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="{{ asset('template') }}/vendor/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="{{ asset('template') }}/vendor/rs-plugin/css/navigation.css">

	<!-- Demo CSS -->


	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{ asset('template') }}/css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{ asset('template') }}/css/custom.css">

	<!-- Head Libs -->
	<script src="{{ asset('template') }}/vendor/modernizr/modernizr.min.js"></script>

</head>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>

	<body class="one-page" data-target="#header" data-spy="scroll" data-offset="100">

		<div class="body">

			<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0 bg-dark box-shadow-none">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="/">
											<img alt="Esport" width="auto" height="50" src="{{ asset('desain') }}/logo_esport.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a data-hash class="dropdown-item dropdown-toggle" href="/">
															Home
														</a>
													</li>
													<li>
														<a class="dropdown-item active" data-hash data-hash-offset="68" href="{{route('pendaftar.internal')}}">Pendaftar Internal</a>
                                                    </li>
                                                    <li class="dropdown">
														<a data-hash class="dropdown-item dropdown-toggle" href="#hehe">
															Bagan Pertandingan
														</a>
														<ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="{{ route('bagan_eksternal') }}">Bagan Eksternal</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('bagan_internal') }}">Bagan Internal</a></li>
														</ul>
													</li>
													@guest
													<li>
														<a href="{{route('login')}}" class="dropdown-item" data-hash data-hash-offset="68" href="#contact">Login</a>
													</li>
													@else
													<li class="dropdown">
														<a data-hash class="dropdown-item dropdown-toggle" href="#home">
															Halo, {{ Auth::user()->name }}
														</a>
														<ul class="dropdown-menu">

															@if(Auth::user()->type == 0)
															<li><a class="dropdown-item" href="{{ route('home') }}">Dashboard</a></li>
															@else
															<li><a class="dropdown-item" href="{{ route('operator.dashboard') }}">Dashboard</a></li>
															@endif
															<li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
																	Logout
																</a></li>

															<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																@csrf
															</form>
														</ul>
													</li>
													@endguest
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main" id="home">

                <section class="section section-background section-height-4 overlay overlay-show overlay-op-9 border-0 m-0" style="background-size: cover; background-position: center;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 class="font-weight-bold text-color-light mb-2">PENDAFTAR INTERNAL</h2>
                                <p class="text-color-light opacity-7"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <iframe width="100%" height="800px" src="https://docs.google.com/document/d/e/2PACX-1vQAuQXtCYLLjhY0GetFvYOEYmiwkZ6FgL91lemsUVDlig_2O3hTWiynH1lZHizAP8HwA0llSeYVUkdV/pub?embedded=true"></iframe>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-primary border-0 m-0">
                    <div class="container">
                        <div class="row justify-content-center text-center text-lg-left py-4">
                            <div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter">
                                <div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0">
                                    <div class="feature-box-icon">
                                        <i class="icon-location-pin icons text-color-light"></i>
                                    </div>
                                    <div class="feature-box-info pl-1">
                                        <h5 class="font-weight-light text-color-light opacity-7 mb-0">ADDRESS</h5>
                                        <p class="text-color-light font-weight-semibold mb-0">Ruang 203 Lt. 2, Gedung DKV, ITS, Surabaya</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                                <div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0 px-xl-4 mx-lg-5">
                                    <div class="feature-box-icon">
                                        <i class="icon-call-out icons text-color-light"></i>
                                    </div>
                                    <div class="feature-box-info pl-1">
                                        <h5 class="font-weight-light text-color-light opacity-7 mb-0">CALL US NOW</h5>
                                        <a href="https://api.whatsapp.com/send?phone=6282331211245" target="_blank" class="text-color-light font-weight-semibold text-decoration-none">Hani(WA) - 082331211245</a><br>
                                        <a href="https://api.whatsapp.com/send?phone=6282192695300" target="_blank" class="text-color-light font-weight-semibold text-decoration-none">Rio(WA) - 082192695300</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                <div class="feature-box feature-box-style-2 d-block d-lg-flex">
                                    <div class="feature-box-icon">
                                        <i class="icon-share icons text-color-light"></i>
                                    </div>
                                    <div class="feature-box-info pl-1">
                                        <h5 class="font-weight-light text-color-light opacity-7 mb-0">FOLLOW US</h5>
                                        <p class="mb-0">
                                            <!-- <span class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" class="text-color-light font-weight-semibold" title="Facebook"><i class="mr-1 fab fa-facebook-f"></i> FACEBOOK</a></span> -->
                                            <span class="social-icons-line pl-3"><a href="http://nav.cx/2Qekp9B" target="_blank" class="text-color-light font-weight-semibold" title="line"><i class="mr-1 fab fa-line"></i>Line</a></span>
                                            <span class="social-icons-instagram pl-3"><a href="http://www.instagram.com/esport.its" target="_blank" class="text-color-light font-weight-semibold" title="Instagram"><i class="mr-1 fab fa-instagram"></i> INSTAGRAM</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

			<footer id="footer" class="mt-0">
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center">
								<p><strong>Esport Dies Natalies ITS 59</strong> - © Copyright 2019. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</div>

		<!-- Vendor -->
		<script src="{{ asset('template') }}/vendor/jquery/jquery.min.js"></script>
		<script src="{{ asset('template') }}/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="{{ asset('template') }}/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="{{ asset('template') }}/vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="{{ asset('template') }}/vendor/popper/umd/popper.min.js"></script>
		<script src="{{ asset('template') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="{{ asset('template') }}/vendor/common/common.min.js"></script>
		<!-- <script src="{{ asset('template') }}/vendor/jquery.validation/jquery.validate.min.js"></script> -->
		<!-- <script src="{{ asset('template') }}/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script> -->
		<!-- <script src="{{ asset('template') }}/vendor/jquery.gmap/jquery.gmap.min.js"></script> -->
		<!-- <script src="{{ asset('template') }}/vendor/jquery.lazyload/jquery.lazyload.min.js"></script> -->
		<script src="{{ asset('template') }}/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="{{ asset('template') }}/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="{{ asset('template') }}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="{{ asset('template') }}/vendor/jquery.countdown/jquery.countdown.min.js"></script>
		<!-- <script src="{{ asset('template') }}/vendor/vide/jquery.vide.min.js"></script> -->
		<!-- <script src="{{ asset('template') }}/vendor/vivus/vivus.min.js"></script> -->

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('template') }}/js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('template') }}/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="{{ asset('template') }}/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="{{ asset('template') }}/js/views/view.contact.js"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('template') }}/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('template') }}/js/theme.init.js"></script>

		<!-- Examples -->
		<script src="{{ asset('template') }}/js/examples/examples.portfolio.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->
	</body>

</html>