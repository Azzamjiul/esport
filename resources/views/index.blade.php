<!DOCTYPE html>
<html>

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Esport Competition Dies Natalies ITS ke-59</title>

	<meta name="keywords" content="Esport Competition Dies Natalies ITS ke-59, Intitut Teknologi Sepuluh Nopember, Esport, Mobile Legend" />
	<meta name="description" content="Esport Competition Dies Natalies Intitut Teknologi Sepuluh Nopember ke-59">
	<meta name="author" content="okler.net">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('desain') }}/logo_59.png" type="image/x-icon" />
	<link rel="apple-touch-icon" href="{{ asset('desain') }}/logo_59.png">

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
														<a data-hash class="dropdown-item dropdown-toggle active" href="#home">
															Home
														</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#about">About</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#information">Information</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#rundown">Rundown</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#faq">FAQ</a>
													</li>
													<!-- <li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#contact">Contact Us</a>
													</li> -->
													@guest
													<li>
														<a href="{{route('login')}}" class="dropdown-item" data-hash data-hash-offset="68" href="#contact">Login</a>
													</li>
													@else
													<li class="dropdown">
														<a data-hash class="dropdown-item dropdown-toggle active" href="#home">
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
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500]}">
						<ul>
							<!-- <li class="slide-overlay" data-transition="fade">
								<img src="{{ asset('template') }}/img/slides/slide-one-page-1-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

								<div class="tp-caption tp-resizeme" data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-type="image" data-x="left" data-hoffset="['0','-150','-200','-200']" data-y="top" data-voffset="['-100','-150','-200','-200']" data-width="['auto']" data-height="['auto']" data-basealign="slide"><img src="{{ asset('template') }}/img/slides/slide-one-page-1-2.jpg" alt=""></div>

								<div class="tp-caption tp-resizeme" data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-type="image" data-x="right" data-hoffset="['0','-150','-200','-200']" data-y="top" data-voffset="['-100','-150','-200','-200']" data-width="['auto']" data-height="['auto']" data-basealign="slide"><img src="{{ asset('template') }}/img/slides/slide-one-page-1-3.jpg" alt=""></div>

								<div class="tp-caption tp-resizeme" data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-type="image" data-x="left" data-hoffset="['0','-150','-200','-200']" data-y="bottom" data-voffset="['-100','-150','-200','-200']" data-width="['auto']" data-height="['auto']" data-basealign="slide"><img src="{{ asset('template') }}/img/slides/slide-one-page-1-4.jpg" alt=""></div>

								<div class="tp-caption tp-resizeme" data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-type="image" data-x="right" data-hoffset="['0','-150','-200','-200']" data-y="bottom" data-voffset="['-100','-150','-200','-200']" data-width="['auto']" data-height="['auto']" data-basealign="slide"><img src="{{ asset('template') }}/img/slides/slide-one-page-1-5.jpg" alt=""></div>

								<div class="tp-caption" data-x="center" data-hoffset="['-170','-170','-170','-365']" data-y="center" data-voffset="['-80','-80','-80','-105']" data-start="1000" data-transform_in="x:[-300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('template') }}/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center" data-voffset="['-80','-80','-80','-105']" data-start="700" data-fontsize="['16','16','16','40']" data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:500;">WE WORK HARD AND PORTO HAS</div>

								<div class="tp-caption" data-x="center" data-hoffset="['170','170','170','365']" data-y="center" data-voffset="['-80','-80','-80','-105']" data-start="1000" data-transform_in="x:[300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('template') }}/img/slides/slide-title-border.png" alt=""></div>

								<h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-1" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-voffset="['-30','-30','-30','-30']" data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']">THE BEST DESIGN</h1>

								<div class="tp-caption" data-frames='[{"delay":2000,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-hoffset="['-40','-40','-40','-40']" data-y="center" data-voffset="['2','2','2','15']"><img src="{{ asset('template') }}/img/slides/slide-blue-line-big.png" alt=""></div>

								<div class="tp-caption font-weight-light ws-normal text-center" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="center" data-y="center" data-voffset="['53','53','53','105']" data-width="['530','530','530','1100']" data-fontsize="['18','18','18','40']" data-lineheight="['26','26','26','45']" style="color: #b5b5b5;">Trusted by over <strong class="text-color-light">30,000</strong> satisfied users, Porto is a huge success in the one of largest world's MarketPlace.</div>

								<a class="tp-caption btn btn-primary btn-rounded font-weight-semibold" data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-hash data-hash-offset="85" href="#projects" data-x="center" data-hoffset="0" data-y="center" data-voffset="['133','133','133','255']" data-whitespace="nowrap" data-fontsize="['14','14','14','33']" data-paddingtop="['15','15','15','40']" data-paddingright="['45','45','45','110']" data-paddingbottom="['15','15','15','40']" data-paddingleft="['45','45','45','110']">GET STARTED NOW!</a>

							</li> -->
							<li class="slide-overlay" data-transition="fade">
								<!-- <img src="{{ asset('template') }}/img/slides/slide-bg-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"> -->
								<img src="{{ asset('desain') }}/HOME_1000x1250.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

								<div class="tp-caption" data-x="center" data-hoffset="['-170','-170','-170','-350']" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="1000" data-transform_in="x:[-300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('template') }}/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="700" data-fontsize="['16','16','16','40']" data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:500;">E SPORT DIESNATALIS 59 ITS</div>

								<div class="tp-caption" data-x="center" data-hoffset="['170','170','170','350']" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="1000" data-transform_in="x:[300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('template') }}/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']">Mobile Legends : Bang Bang</div>

								<div class="tp-caption font-weight-light ws-normal text-center" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="center" data-y="center" data-voffset="['60','60','60','105']" data-width="['530','530','530','1100']" data-fontsize="['18','18','18','40']" data-lineheight="['26','26','26','45']" style="color: #b5b5b5;">Turnamen yang dibuka untuk internal <strong class="text-color-light">ITS</strong> dan <strong class="text-color-light">umum</strong></div>

							</li>
							<!-- <li class="slide-overlay slide-overlay-dark" data-transition="fade">
								<img src="{{ asset('template') }}/img/slides/slide-bg-6.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

								<div class="tp-caption" data-x="center" data-hoffset="['-145','-145','-145','-320']" data-y="center" data-voffset="['-80','-80','-80','-130']" data-start="1000" data-transform_in="x:[-300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('template') }}/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center" data-voffset="['-80','-80','-80','-130']" data-start="700" data-fontsize="['16','16','16','40']" data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:500;">WE CREATE DESIGNS, WE ARE</div>

								<div class="tp-caption" data-x="center" data-hoffset="['145','145','145','320']" data-y="center" data-voffset="['-80','-80','-80','-130']" data-start="1000" data-transform_in="x:[300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('template') }}/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption font-weight-extra-bold text-color-light" data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-hoffset="['-155','-155','-155','-255']" data-y="center" data-fontsize="['145','145','145','250']" data-lineheight="['150','150','150','260']">P</div>

								<div class="tp-caption font-weight-extra-bold text-color-light" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-hoffset="['-80','-80','-80','-130']" data-y="center" data-fontsize="['145','145','145','250']" data-lineheight="['150','150','150','260']">O</div>

								<div class="tp-caption font-weight-extra-bold text-color-light" data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-fontsize="['145','145','145','250']" data-lineheight="['150','150','150','260']">R</div>

								<div class="tp-caption font-weight-extra-bold text-color-light" data-frames='[{"delay":1900,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-hoffset="['65','65','65','115']" data-y="center" data-fontsize="['145','145','145','250']" data-lineheight="['150','150','150','260']">T</div>

								<div class="tp-caption font-weight-extra-bold text-color-light" data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-hoffset="['139','139','139','240']" data-y="center" data-fontsize="['145','145','145','250']" data-lineheight="['150','150','150','260']">O</div>

								<div class="tp-caption font-weight-light text-color-light" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="center" data-y="center" data-voffset="['85','85','85','140']" data-fontsize="['18','18','18','40']" data-lineheight="['26','26','26','45']">The best choice for your new website</div>

							</li>
							<li class="slide-overlay" data-transition="fade">
								<img src="{{ asset('template') }}/img/blank.gif" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

								<div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="video/memory-of-a-woman.mp4" data-videopreload="preload" data-videoloop="loop" data-forceCover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false" data-nextslideatend="false">
								</div>

								<div class="tp-caption" data-x="center" data-hoffset="['-170','-170','-170','-350']" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="1000" data-transform_in="x:[-300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;" style="z-index: 5;"><img src="{{ asset('template') }}/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal" data-x="center" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="700" data-fontsize="['16','16','16','40']" data-lineheight="['25','25','25','45']" data-transform_in="y:[-50%];opacity:0;s:500;" style="z-index: 5;">WE WORK HARD AND PORTO HAS</div>

								<div class="tp-caption" data-x="center" data-hoffset="['170','170','170','350']" data-y="center" data-voffset="['-50','-50','-50','-75']" data-start="1000" data-transform_in="x:[300%];opacity:0;s:500;" data-transform_idle="opacity:0.2;s:500;" style="z-index: 5;"><img src="{{ asset('template') }}/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']" style="z-index: 5;">PERFECT VIDEOS</div>

								<div class="tp-caption font-weight-light ws-normal text-center" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="center" data-y="center" data-voffset="['60','60','60','105']" data-width="['530','530','530','1100']" data-fontsize="['18','18','18','40']" data-lineheight="['26','26','26','45']" style="color: #b5b5b5; z-index: 5;">Trusted by over <strong class="text-color-light">30,000</strong> satisfied users, Porto is a huge success in the one of largest world's MarketPlace.</div>

								<div class="tp-dottedoverlay tp-opacity-overlay"></div>
							</li> -->
						</ul>
					</div>
				</div>

				<section id="about" class="section section-height-3 bg-primary border-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container my-3">
						<div class="row mb-5">
							<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<h2 class="font-weight-bold text-color-light mb-2">About</h2>
								<br><br>
								<p class="text-color-light opacity-7">Turnamen ESport yang dibuka untuk internal ITS dan umum. Turnamen ini diadakan pertama kali oleh Institut Teknologi Sepuluh Nopember Surabaya dengan tawaran hadiah yang menarik. Pada tahun 2019, cabang Esport yang dilombakan yaitu Game Mobile Legends.</p>
							</div>
							<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<img alt="Esport" width="auto" height="400" src="{{ asset('desain') }}/Maskot.png">
							</div>
						</div>
						<!-- <div class="row mb-lg-4">
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-support text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">CUSTOMER SUPPORT</h4>
										<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font text-color-light">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-layers text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">SLIDERS</h4>
										<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-menu text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">BUTTONS</h4>
										<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-doc text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">HTML5 / CSS3 / JS</h4>
										<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-user text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">ICONS</h4>
										<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font text-color-light">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-screen-desktop text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">LIGHTBOX</h4>
										<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</section>

				<div id="information" class="container">
					<div class="row justify-content-center pt-5 mt-5">
						<div class="col-lg-9 text-center">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter">
								<h2 class="font-weight-bold mb-2">Informations</h2>
								<p class="mb-4">Hal-hal yang perlu diketahui</p>
							</div>
							<!-- <p class="pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.</p> -->
						</div>
					</div>
					<div class="row pb-5 mb-5">
						<div class="col">

							<div class="appear-animation popup-gallery-ajax" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<div class="owl-carousel owl-theme mb-0" data-plugin-options="{'items': 3, 'margin': 35, 'loop': false}">


									<div class="portfolio-item">
										<a href="{{ asset('ajax') }}/cara-pendaftaran.html" data-ajax-on-modal>
											<span class="thumb-info thumb-info-lighten">
												<span class="thumb-info-wrapper">
													<img src="{{ asset('template') }}/img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">Cara Pendaftaran</span>
														<span class="thumb-info-type"></span>
													</span>
													<span class="thumb-info-action">
														<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
													</span>
												</span>
											</span>
										</a>
									</div>

									<div class="portfolio-item">
										<a href="{{ asset('ajax') }}/hadiah.html" data-ajax-on-modal>
											<span class="thumb-info thumb-info-lighten">
												<span class="thumb-info-wrapper">
													<span class="owl-carousel owl-theme dots-inside m-0" data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
														<span><img src="{{ asset('desain') }}/HADIAH_1000x1000-09.jpg" class="img-fluid border-radius-0" alt=""></span>
													</span>
													<span class="thumb-info-title">
														<span class="thumb-info-inner">Hadiah</span>
														<span class="thumb-info-type"></span>
													</span>
													<span class="thumb-info-action">
														<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
													</span>
												</span>
											</span>
										</a>
									</div>

									<div class="portfolio-item">
										<a href="{{ asset('ajax') }}/peraturan-internal.html" data-ajax-on-modal>
											<span class="thumb-info thumb-info-lighten">
												<span class="thumb-info-wrapper">
													<img src="{{ asset('desain') }}/PERATURAN_1000x1000.jpg" class="img-fluid border-radius-0" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">Peraturan Internal</span>
														<span class="thumb-info-type"></span>
													</span>
													<span class="thumb-info-action">
														<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
													</span>
												</span>
											</span>
										</a>
									</div>

									<div class="portfolio-item">
										<a href="{{ asset('ajax') }}/peraturan-eksternal.html" data-ajax-on-modal>
											<span class="thumb-info thumb-info-lighten">
												<span class="thumb-info-wrapper">
													<img src="{{ asset('desain') }}/PERATURAN_1000x1000.jpg" class="img-fluid border-radius-0" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">Peraturan Eksternal</span>
														<span class="thumb-info-type"></span>
													</span>
													<span class="thumb-info-action">
														<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
													</span>
												</span>
											</span>
										</a>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>

				<section id="rundown" class="section section-background section-height-4 overlay overlay-show overlay-op-9 border-0 m-0" style="background-size: cover; background-position: center;">
					<div class="container">
						<div class="row">
							<div class="col-md-11 text-center">
								<h2 class="font-weight-bold text-color-light mb-2">Rundown</h2>
								<p class="text-color-light opacity-7"></p>
							</div>
						</div>
						<div class="row process my-5">
							<div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
								<div class="process-step-circle">
									<strong class="process-step-circle-content">01</strong>
								</div>
								<div class="process-step-content">
									<h4 class="mb-1 text-white-jiul text-5 font-weight-bold">Pendaftaran</h4>
									<p class="mb-0 text-white-jiul">30 September 2019 - 24 Oktober 2019</p>
								</div>
							</div>
							<div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
								<div class="process-step-circle">
									<strong class="process-step-circle-content">02</strong>
								</div>
								<div class="process-step-content">
									<h4 class="mb-1 text-white-jiul text-5 font-weight-bold">Technical Meeting</h4>
									<p class="mb-0 text-white-jiul">25 Oktober 2019</p>
								</div>
							</div>
							<div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">
								<div class="process-step-circle">
									<strong class="process-step-circle-content">03</strong>
								</div>
								<div class="process-step-content">
									<h4 class="mb-1 text-white-jiul text-5 font-weight-bold">Pelaksanaan</h4>
									<p class="mb-0 text-white-jiul">Online: 28-31 Oktober 2019</p>
									<p class="mb-0 text-white-jiul">Offline: 2 November 2019</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- <div id="team" class="container pb-4">
					<div class="row pt-5 mt-5 mb-4">
						<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter">
							<h2 class="font-weight-bold mb-1">Team</h2>
							<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</p>
						</div>
					</div>
					<div class="row pb-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
						<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
							<span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
								<span class="thumb-info-wrapper">
									<a href="about-me.html">
										<img src="{{ asset('template') }}/img/team/team-1.jpg" class="img-fluid" alt="">
									</a>
								</span>
								<span class="thumb-info-caption">
									<h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">John Doe</h3>
									<span class="text-2 mb-0">CEO</span>
									<span class="thumb-info-caption-text pt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
									<span class="thumb-info-social-icons">
										<a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									</span>
								</span>
							</span>
						</div>
						<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
							<span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
								<span class="thumb-info-wrapper">
									<a href="about-me.html">
										<img src="{{ asset('template') }}/img/team/team-2.jpg" class="img-fluid" alt="">
									</a>
								</span>
								<span class="thumb-info-caption">
									<h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">Jessica Doe</h3>
									<span class="text-2 mb-0">DESIGNER</span>
									<span class="thumb-info-caption-text pt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
									<span class="thumb-info-social-icons">
										<a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									</span>
								</span>
							</span>
						</div>
						<div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
							<span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
								<span class="thumb-info-wrapper">
									<a href="about-me.html">
										<img src="{{ asset('template') }}/img/team/team-3.jpg" class="img-fluid" alt="">
									</a>
								</span>
								<span class="thumb-info-caption">
									<h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">Ricki Doe</h3>
									<span class="text-2 mb-0">DEVELOPER</span>
									<span class="thumb-info-caption-text pt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
									<span class="thumb-info-social-icons">
										<a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									</span>
								</span>
							</span>
						</div>
						<div class="col-sm-6 col-lg-3">
							<span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
								<span class="thumb-info-wrapper">
									<a href="about-me.html">
										<img src="{{ asset('template') }}/img/team/team-4.jpg" class="img-fluid" alt="">
									</a>
								</span>
								<span class="thumb-info-caption">
									<h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">Melinda Doe</h3>
									<span class="text-2 mb-0">SEO ANALYST</span>
									<span class="thumb-info-caption-text pt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
									<span class="thumb-info-social-icons">
										<a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									</span>
								</span>
							</span>
						</div>
					</div>
				</div> -->

				<div id="faq" class="container">
					<div class="row justify-content-center pt-5 mt-5">
						<div class="col-md-6 text-center">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter">
								<h2 class="font-weight-bold mb-2">FAQ</h2>
								<p class="mb-4">FREQUENTLY ASKED QUESTIONS</p>
							</div>
							<!-- <p class="pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.</p> -->
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="toggle toggle-primary" data-plugin-toggle="">
								<section class="toggle">
									<label>Bagaimana cara mengupload hasil kemenangan?</label>
									<p style="height: 0px;" class="">Setiap tim wajib mengirim bukti dalam bentuk screenshoot yang harus dikirim ke website</p>
								</section>

								<section class="toggle">
									<label>Apakah jadwal pertandingan online dapat dirubah?</label>
									<p style="height: 0px;" class="">Ya, sangat boleh. Dengan catatan bahwa perubahan ini telah disetujui oleh kedua tim yang bertanding dan jadwal perubahan harus di hari itu juga.</p>
								</section>

								<section class="toggle">
									<label>Apabila saya internal ITS tapi tidak masuk dalam perwakilan fakultas apakah bisa mendaftar?</label>
									<p style="height: 0px;" class=""> Sangat bisa, dengan mendaftar dibagian eksternal dengan biaya pendaftaran yang sama dengan lainnya</p>
								</section>

								<section class="toggle">
									<label>Jika saya termasuk perwakilan fakultas tapi ingin mendaftar eksternal apa diperbolehkan?</label>
									<p style="height: 0px;" class=""> Tentu, Diperbolehkan kok</p>
								</section>
							</div>
						</div>
						<div class="col-md-6">
							<div class="toggle toggle-primary" data-plugin-toggle="">
								<section class="toggle">
									<label>Dimanakah pertandingan Online dan Offline dilakukan?</label>
									<p style="height: 0px;" class="">Pertandingan online dilakukan di tempat masing-masing, sedangkan pertandingan offline akan dilakukan dilingkungan kampus ITS yang telah di tentukan oleh panitia.</p>
								</section>

								<section class="toggle">
									<label>Apakah menggunakan koneksi internet sendiri?</label>
									<p style="height: 0px;" class="">Santuy kami menyediakan koneksi internet.</p>
								</section>

								<section class="toggle">
									<label>Apakah bisa mendaftarkan diri dalam 2 tim yang berbeda?</label>
									<p style="height: 0px;" class=""> Tentu Bisa, tapi hanya 2 ya gaboleh lebih.</p>
								</section>

								<section class="toggle">
									<label>Apakah terdapat batasan umur?</label>
									<p style="height: 0px;" class=""> Tentu tidak, perlombaan ini dapat diikuti oleh semua kalangan umur.</p>
								</section>

								<section class="toggle">
									<label>Bagaimana cara melakukan pembayaran?</label>
									<p style="height: 0px;" class="">Transfer uang sesuai nominal yang tertera pada website ke rekening BRI</p>
								</section>
							</div>
						</div>
					</div>
				</div>

				<section class="call-to-action with-borders with-button-arrow mb-5">
					<div class="col-sm-9 col-lg-9">
						<div class="call-to-action-content">
							<h3>Pendaftaran akan dibuka sampai <strong class="font-weight-extra-bold">21 Oktober 2019</strong></h3>
							<p class="mb-0"><strong class="font-weight-extra-bold">Segera</strong> Daftarkan Tim kamu !!!</p>
						</div>
					</div>
					<div class="col-sm-3 col-lg-3">
						<div class="call-to-action-btn">
							<a href="{{route('register')}}" target="_blank" class="btn btn-modern text-2 btn-primary">Daftar Sekarang</a><span class="arrow hlb d-none d-md-block appear-animation animated rotateInUpLeft appear-animation-visible" data-appear-animation="rotateInUpLeft" style="left: 100%; top: -32px; animation-delay: 100ms;"></span>
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
										<p class="text-color-light font-weight-semibold mb-0">Coming Soon</p>
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
										<a href="tel:0" class="text-color-light font-weight-semibold text-decoration-none">Coming Soon</a>
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