<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />

		<title>WCKMarkets</title>
		<meta content="" name="description" />
		<meta content="" name="keywords" />

		<!-- Favicons -->
		<link href="assets/img/wck_icon/favicon-32x32.png" rel="icon" />
		<link href="assets/img/wck_icon/apple-touch-icon.png" rel="apple-touch-icon" />

		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
			rel="stylesheet"
		/>

		<!-- Vendor CSS Files -->
		<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
		<link href="assets/vendor/aos/aos.css" rel="stylesheet" />
		<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
		<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

		<!-- Variables CSS Files. Uncomment your preferred color scheme -->
		<link href="assets/css/variables.css" rel="stylesheet" />
		<!-- <link href="assets/css/variables-blue.css" rel="stylesheet" /> -->
		<!-- <link href="assets/css/variables-green.css" rel="stylesheet" /> -->
		<!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
		<!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
		<!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
		<!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

		<!-- Template Main CSS File -->
		<link href="assets/css/main.css" rel="stylesheet" />

		<!-- =======================================================
  * Template Name: HeroBiz - v2.3.1
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
	======================================================== -->
	</head>

	<body>
		<!-- ======= Header ======= -->
		<header id="header" class="header fixed-top" data-scrollto-offset="0">
			<?php 
				include 'navbar.php';
				if(!empty($_GET['message'])){
					$message = $_GET['message'];
				}
			?>
			<?php if(!empty($message) && $message == 'success'): ?>
				<div class="alert alert-success" role="alert">
					Your application was submitted successfully, we'll get back to you shortly
				</div>
			<?php endif; ?>
			<?php if(!empty($message) && $message == 'danger'): ?>
				<div class="alert alert-danger" role="alert">
					Please make sure all fields have been filled correctly
				</div>
			<?php endif; ?>

			
		</header>
		<!-- End Header -->

		<section id="hero-animated" class="hero-animated d-flex align-items-center">
			<div
				class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
				data-aos="zoom-out"
			>
				<img
					src="assets/img/hero-carousel/6.svg"
					class="img-fluid animated"
				/>
				<h2>Welcome to <span>WCK Markets</span></h2>
				<p>An investment in knowledge pays the best interest.</p>
				<div class="d-flex">
					<a href="#about" class="btn-get-started scrollto">Get Started</a>
					<a
						href="https://www.youtube.com/watch?v=OTm1-17XWPU"
						class="glightbox btn-watch-video d-flex align-items-center"
						><i class="bi bi-play-circle"></i><span>Watch Video</span></a
					>
				</div>
			</div>
		</section>

		<main id="main">
			<!-- ======= Featured Services Section ======= -->
			<!-- <section id="featured-services" class="featured-services">
				<div class="container">
					<div class="row gy-4">
						<div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
							<div class="service-item position-relative">
								<div class="icon"><i class="bi bi-activity icon"></i></div>
								<h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
								<p>
									Voluptatum deleniti atque corrupti quos dolores et quas
									molestias excepturi
								</p>
							</div>
						</div> -->
			<!-- End Service Item -->

			<!-- <div
							class="col-xl-3 col-md-6 d-flex"
							data-aos="zoom-out"
							data-aos-delay="200"
						>
							<div class="service-item position-relative">
								<div class="icon">
									<i class="bi bi-bounding-box-circles icon"></i>
								</div>
								<h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
								<p>
									Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore
								</p>
							</div>
						</div> -->
			<!-- End Service Item -->

			<!-- <div
							class="col-xl-3 col-md-6 d-flex"
							data-aos="zoom-out"
							data-aos-delay="400"
						>
							<div class="service-item position-relative">
								<div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
								<h4><a href="" class="stretched-link">Magni Dolores</a></h4>
								<p>
									Excepteur sint occaecat cupidatat non proident, sunt in culpa
									qui officia
								</p>
							</div>
						</div> -->
			<!-- End Service Item -->

			<!-- <div
							class="col-xl-3 col-md-6 d-flex"
							data-aos="zoom-out"
							data-aos-delay="600"
						>
							<div class="service-item position-relative">
								<div class="icon"><i class="bi bi-broadcast icon"></i></div>
								<h4><a href="" class="stretched-link">Nemo Enim</a></h4>
								<p>
									At vero eos et accusamus et iusto odio dignissimos ducimus qui
									blanditiis
								</p>
							</div>
						</div> -->
			<!-- End Service Item -->
			<!-- </div>
				</div>
			</section> -->
			<!-- End Featured Services Section -->

			<!-- ======= About Section ======= -->
			<!-- <section id="about" class="about">
				<div class="container" data-aos="fade-up">
					<div class="section-header">
						<h2>About Us</h2>
						<p>
							Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic
							deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores
							incidunt enim voluptatem magnam cumque fuga.
						</p>
					</div>

					<div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
						<div class="col-lg-5">
							<div class="about-img">
								<img src="assets/img/about.jpg" class="img-fluid" alt="" />
							</div>
						</div>

						<div class="col-lg-7">
							<h3 class="pt-0 pt-lg-5">
								Neque officiis dolore maiores et exercitationem quae est seda lidera
								pat claero
							</h3> -->

			<!-- Tabs -->
			<!-- <ul class="nav nav-pills mb-3">
								<li>
									<a class="nav-link active" data-bs-toggle="pill" href="#tab1"
										>Saepe fuga</a
									>
								</li>
								<li>
									<a class="nav-link" data-bs-toggle="pill" href="#tab2"
										>Voluptates</a
									>
								</li>
								<li>
									<a class="nav-link" data-bs-toggle="pill" href="#tab3"
										>Corrupti</a
									>
								</li>
							</ul> -->
			<!-- End Tabs -->

			<!-- Tab Content -->
			<!-- <div class="tab-content">
								<div class="tab-pane fade show active" id="tab1">
									<p class="fst-italic">
										Consequuntur inventore voluptates consequatur aut vel et.
										Eos doloribus expedita. Sapiente atque consequatur minima
										nihil quae aspernatur quo suscipit voluptatem.
									</p>

									<div class="d-flex align-items-center mt-4">
										<i class="bi bi-check2"></i>
										<h4>
											Repudiandae rerum velit modi et officia quasi facilis
										</h4>
									</div>
									<p>
										Laborum omnis voluptates voluptas qui sit aliquam
										blanditiis. Sapiente minima commodi dolorum non eveniet
										magni quaerat nemo et.
									</p>

									<div class="d-flex align-items-center mt-4">
										<i class="bi bi-check2"></i>
										<h4>Incidunt non veritatis illum ea ut nisi</h4>
									</div>
									<p>
										Non quod totam minus repellendus autem sint velit. Rerum
										debitis facere soluta tenetur. Iure molestiae assumenda sunt
										qui inventore eligendi voluptates nisi at. Dolorem quo
										tempora. Quia et perferendis.
									</p>

									<div class="d-flex align-items-center mt-4">
										<i class="bi bi-check2"></i>
										<h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
									</div>
									<p>
										Eius alias aut cupiditate. Dolor voluptates animi ut
										blanditiis quos nam. Magnam officia aut ut alias quo
										explicabo ullam esse. Sunt magnam et dolorem eaque magnam
										odit enim quaerat. Vero error error voluptatem eum.
									</p>
								</div> -->
			<!-- End Tab 1 Content -->

			<!-- <div class="tab-pane fade show" id="tab2">
									<p class="fst-italic">
										Consequuntur inventore voluptates consequatur aut vel et.
										Eos doloribus expedita. Sapiente atque consequatur minima
										nihil quae aspernatur quo suscipit voluptatem.
									</p>

									<div class="d-flex align-items-center mt-4">
										<i class="bi bi-check2"></i>
										<h4>
											Repudiandae rerum velit modi et officia quasi facilis
										</h4>
									</div>
									<p>
										Laborum omnis voluptates voluptas qui sit aliquam
										blanditiis. Sapiente minima commodi dolorum non eveniet
										magni quaerat nemo et.
									</p>

									<div class="d-flex align-items-center mt-4">
										<i class="bi bi-check2"></i>
										<h4>Incidunt non veritatis illum ea ut nisi</h4>
									</div>
									<p>
										Non quod totam minus repellendus autem sint velit. Rerum
										debitis facere soluta tenetur. Iure molestiae assumenda sunt
										qui inventore eligendi voluptates nisi at. Dolorem quo
										tempora. Quia et perferendis.
									</p>

									<div class="d-flex align-items-center mt-4">
										<i class="bi bi-check2"></i>
										<h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
									</div>
									<p>
										Eius alias aut cupiditate. Dolor voluptates animi ut
										blanditiis quos nam. Magnam officia aut ut alias quo
										explicabo ullam esse. Sunt magnam et dolorem eaque magnam
										odit enim quaerat. Vero error error voluptatem eum.
									</p>
								</div> -->
			<!-- End Tab 2 Content -->

			<!-- <div class="tab-pane fade show" id="tab3">
									<p class="fst-italic">
										Consequuntur inventore voluptates consequatur aut vel et.
										Eos doloribus expedita. Sapiente atque consequatur minima
										nihil quae aspernatur quo suscipit voluptatem.
									</p>

									<div class="d-flex align-items-center mt-4">
										<i class="bi bi-check2"></i>
										<h4>
											Repudiandae rerum velit modi et officia quasi facilis
										</h4>
									</div>
									<p>
										Laborum omnis voluptates voluptas qui sit aliquam
										blanditiis. Sapiente minima commodi dolorum non eveniet
										magni quaerat nemo et.
									</p>

									<div class="d-flex align-items-center mt-4">
										<i class="bi bi-check2"></i>
										<h4>Incidunt non veritatis illum ea ut nisi</h4>
									</div>
									<p>
										Non quod totam minus repellendus autem sint velit. Rerum
										debitis facere soluta tenetur. Iure molestiae assumenda sunt
										qui inventore eligendi voluptates nisi at. Dolorem quo
										tempora. Quia et perferendis.
									</p>

									<div class="d-flex align-items-center mt-4">
										<i class="bi bi-check2"></i>
										<h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
									</div>
									<p>
										Eius alias aut cupiditate. Dolor voluptates animi ut
										blanditiis quos nam. Magnam officia aut ut alias quo
										explicabo ullam esse. Sunt magnam et dolorem eaque magnam
										odit enim quaerat. Vero error error voluptatem eum.
									</p>
								</div> -->
			<!-- End Tab 3 Content -->
			<!-- </div>
						</div>
					</div>
				</div>
			</section> -->
			<!-- End About Section -->

			<!-- ======= Clients Section ======= -->
			<!-- <section id="clients" class="clients">
				<div class="container" data-aos="zoom-out">
					<div class="clients-slider swiper">
						<div class="swiper-wrapper align-items-center">
							<div class="swiper-slide">
								<img
									src="assets/img/clients/client-1.png"
									class="img-fluid"
									alt=""
								/>
							</div>
							<div class="swiper-slide">
								<img
									src="assets/img/clients/client-2.png"
									class="img-fluid"
									alt=""
								/>
							</div>
							<div class="swiper-slide">
								<img
									src="assets/img/clients/client-3.png"
									class="img-fluid"
									alt=""
								/>
							</div>
							<div class="swiper-slide">
								<img
									src="assets/img/clients/client-4.png"
									class="img-fluid"
									alt=""
								/>
							</div>
							<div class="swiper-slide">
								<img
									src="assets/img/clients/client-5.png"
									class="img-fluid"
									alt=""
								/>
							</div>
							<div class="swiper-slide">
								<img
									src="assets/img/clients/client-6.png"
									class="img-fluid"
									alt=""
								/>
							</div>
							<div class="swiper-slide">
								<img
									src="assets/img/clients/client-7.png"
									class="img-fluid"
									alt=""
								/>
							</div>
							<div class="swiper-slide">
								<img
									src="assets/img/clients/client-8.png"
									class="img-fluid"
									alt=""
								/>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<!-- End Clients Section -->

			<!-- ======= Call To Action Section ======= -->
			<section id="about" class="cta">
				<div class="container" data-aos="zoom-out">
					<div class="row g-5">
						<div
							class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first"
						>
							<h3>About <em>Us</em></h3>
							<p>
								Our mission is to bring quality education to the retail trading
								community, to help people build their wealth by teaching them how to
								become profitable traders.
							</p>
							<a class="cta-btn align-self-start" href="#pricing">Apply Now</a>
						</div>

						<div
							class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center"
						>
							<div class="img">
								<img src="assets/img/About us -1.png" alt="" class="img-fluid" />
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Call To Action Section -->

			<!-- ======= On Focus Section ======= -->
			<section id="onfocus" class="onfocus">
				<div class="container-fluid p-0" data-aos="fade-up">
					<div class="row g-0">
						<div class="col-lg-6 video-play position-relative">
							<a
								href="https://www.youtube.com/watch?v=OTm1-17XWPU"
								class="glightbox play-btn"
							></a>
						</div>
						<div class="col-lg-6">
							<div class="content d-flex flex-column justify-content-center h-100">
								<h3>Why WCK Markets?</h3>
								<p class="fst-italic">
									We share our own trade setups with you. Our charts highlight
									areas of interest which are defined by a number of confluences
									fully broken down to you in WCK markets’ Sunday Breakdowns,
									allowing you to learn from them and develop similar trading
									skills.
								</p>
								<ul>
									<li>
										<i class="bi bi-check-circle"></i> We also explain how we
										personally manage our charts and share our targets and
										thoughts on the market.
									</li>
									<li>
										<i class="bi bi-check-circle"></i> Along with the charts,
										videos to further enhance your trading skills are also
										provided, offering tips and tricks that we have developed
										over the years, whether it will be on technical trading or
										mindset. As part of your subscription you will also be able
										to join our Chart Analysis service and W.C.K markets chats.
									</li>
									<li>
										<i class="bi bi-check-circle"></i> Access to our physical
										class is exclusive to our strategy’s students who either
										purchased our digital course or attended our in-person
										training. All charts, updates and videos are sent via the
										Telegram app.
									</li>
									<li>
										<i class="bi bi-check-circle"></i> All content and
										commentary shared in the Elite Room is for educational
										purposes only and not to be construed as advice.
									</li>
								</ul>
								<a href="#recent-blog-posts" class="read-more align-self-start"
									><span>Read More</span><i class="bi bi-arrow-right"></i
								></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End On Focus Section -->

			<!-- ======= Features Section ======= -->
			<!-- <section id="features" class="features">
				<div class="container" data-aos="fade-up">
					<ul class="nav nav-tabs row gy-4 d-flex">
						<li class="nav-item col-6 col-md-4 col-lg-2">
							<a
								class="nav-link active show"
								data-bs-toggle="tab"
								data-bs-target="#tab-1"
							>
								<i class="bi bi-binoculars color-cyan"></i>
								<h4>Modinest</h4>
							</a>
						</li> -->
			<!-- End Tab 1 Nav -->

			<!-- <li class="nav-item col-6 col-md-4 col-lg-2">
							<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
								<i class="bi bi-box-seam color-indigo"></i>
								<h4>Undaesenti</h4>
							</a>
						</li> -->
			<!-- End Tab 2 Nav -->

			<!-- <li class="nav-item col-6 col-md-4 col-lg-2">
							<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
								<i class="bi bi-brightness-high color-teal"></i>
								<h4>Pariatur</h4>
							</a>
						</li> -->
			<!-- End Tab 3 Nav -->

			<!-- <li class="nav-item col-6 col-md-4 col-lg-2">
							<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
								<i class="bi bi-command color-red"></i>
								<h4>Nostrum</h4>
							</a>
						</li> -->
			<!-- End Tab 4 Nav -->

			<!-- <li class="nav-item col-6 col-md-4 col-lg-2">
							<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
								<i class="bi bi-easel color-blue"></i>
								<h4>Adipiscing</h4>
							</a>
						</li> -->
			<!-- End Tab 5 Nav -->

			<!-- <li class="nav-item col-6 col-md-4 col-lg-2">
							<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
								<i class="bi bi-map color-orange"></i>
								<h4>Reprehit</h4>
							</a>
						</li> -->
			<!-- End Tab 6 Nav -->
			<!-- </ul> -->

			<!-- <div class="tab-content">
						<div class="tab-pane active show" id="tab-1">
							<div class="row gy-4">
								<div
									class="col-lg-8 order-2 order-lg-1"
									data-aos="fade-up"
									data-aos-delay="100"
								>
									<h3>Modinest</h3>
									<p class="fst-italic">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
										do eiusmod tempor incididunt ut labore et dolore magna
										aliqua.
									</p>
									<ul>
										<li>
											<i class="bi bi-check-circle-fill"></i> Ullamco laboris
											nisi ut aliquip ex ea commodo consequat.
										</li>
										<li>
											<i class="bi bi-check-circle-fill"></i> Duis aute irure
											dolor in reprehenderit in voluptate velit.
										</li>
										<li>
											<i class="bi bi-check-circle-fill"></i> Ullamco laboris
											nisi ut aliquip ex ea commodo consequat. Duis aute irure
											dolor in reprehenderit in voluptate trideta
											storacalaperda mastiro dolore eu fugiat nulla pariatur.
										</li>
									</ul>
									<p>
										Ullamco laboris nisi ut aliquip ex ea commodo consequat.
										Duis aute irure dolor in reprehenderit in voluptate velit
										esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
										occaecat cupidatat non proident, sunt in culpa qui officia
										deserunt mollit anim id est laborum
									</p>
								</div>
								<div
									class="col-lg-4 order-1 order-lg-2 text-center"
									data-aos="fade-up"
									data-aos-delay="200"
								>
									<img src="assets/img/features-1.svg" alt="" class="img-fluid" />
								</div>
							</div>
						</div> -->
			<!-- End Tab Content 1 -->

			<!-- <div class="tab-pane" id="tab-2">
							<div class="row gy-4">
								<div class="col-lg-8 order-2 order-lg-1">
									<h3>Undaesenti</h3>
									<p>
										Ullamco laboris nisi ut aliquip ex ea commodo consequat.
										Duis aute irure dolor in reprehenderit in voluptate velit
										esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
										occaecat cupidatat non proident, sunt in culpa qui officia
										deserunt mollit anim id est laborum
									</p>
									<p class="fst-italic">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
										do eiusmod tempor incididunt ut labore et dolore magna
										aliqua.
									</p>
									<ul>
										<li>
											<i class="bi bi-check-circle-fill"></i> Ullamco laboris
											nisi ut aliquip ex ea commodo consequat.
										</li>
										<li>
											<i class="bi bi-check-circle-fill"></i> Duis aute irure
											dolor in reprehenderit in voluptate velit.
										</li>
										<li>
											<i class="bi bi-check-circle-fill"></i> Provident
											mollitia neque rerum asperiores dolores quos qui a.
											Ipsum neque dolor voluptate nisi sed.
										</li>
										<li>
											<i class="bi bi-check-circle-fill"></i> Ullamco laboris
											nisi ut aliquip ex ea commodo consequat. Duis aute irure
											dolor in reprehenderit in voluptate trideta
											storacalaperda mastiro dolore eu fugiat nulla pariatur.
										</li>
									</ul>
								</div>
								<div class="col-lg-4 order-1 order-lg-2 text-center">
									<img src="assets/img/features-2.svg" alt="" class="img-fluid" />
								</div>
							</div>
						</div> -->
			<!-- End Tab Content 2 -->

			<!-- <div class="tab-pane" id="tab-3">
							<div class="row gy-4">
								<div class="col-lg-8 order-2 order-lg-1">
									<h3>Pariatur</h3>
									<p>
										Ullamco laboris nisi ut aliquip ex ea commodo consequat.
										Duis aute irure dolor in reprehenderit in voluptate velit
										esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
										occaecat cupidatat non proident, sunt in culpa qui officia
										deserunt mollit anim id est laborum
									</p>
									<ul>
										<li>
											<i class="bi bi-check-circle-fill"></i> Ullamco laboris
											nisi ut aliquip ex ea commodo consequat.
										</li>
										<li>
											<i class="bi bi-check-circle-fill"></i> Duis aute irure
											dolor in reprehenderit in voluptate velit.
										</li>
										<li>
											<i class="bi bi-check-circle-fill"></i> Provident
											mollitia neque rerum asperiores dolores quos qui a.
											Ipsum neque dolor voluptate nisi sed.
										</li>
									</ul>
									<p class="fst-italic">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
										do eiusmod tempor incididunt ut labore et dolore magna
										aliqua.
									</p>
								</div>
								<div class="col-lg-4 order-1 order-lg-2 text-center">
									<img src="assets/img/features-3.svg" alt="" class="img-fluid" />
								</div>
							</div>
						</div> -->
			<!-- End Tab Content 3 -->

			<!-- <div class="tab-pane" id="tab-4">
							<div class="row gy-4">
								<div class="col-lg-8 order-2 order-lg-1">
									<h3>Nostrum</h3>
									<p>
										Ullamco laboris nisi ut aliquip ex ea commodo consequat.
										Duis aute irure dolor in reprehenderit in voluptate velit
										esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
										occaecat cupidatat non proident, sunt in culpa qui officia
										deserunt mollit anim id est laborum
									</p>
									<p class="fst-italic">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
										do eiusmod tempor incididunt ut labore et dolore magna
										aliqua.
									</p>
									<ul>
										<li>
											<i class="bi bi-check-circle-fill"></i> Ullamco laboris
											nisi ut aliquip ex ea commodo consequat.
										</li>
										<li>
											<i class="bi bi-check-circle-fill"></i> Duis aute irure
											dolor in reprehenderit in voluptate velit.
										</li>
										<li>
											<i class="bi bi-check-circle-fill"></i> Ullamco laboris
											nisi ut aliquip ex ea commodo consequat. Duis aute irure
											dolor in reprehenderit in voluptate trideta
											storacalaperda mastiro dolore eu fugiat nulla pariatur.
										</li>
									</ul>
								</div>
								<div class="col-lg-4 order-1 order-lg-2 text-center">
									<img src="assets/img/features-4.svg" alt="" class="img-fluid" />
								</div>
							</div>
						</div> -->
			<!-- End Tab Content 4 -->

			<!-- <div class="tab-pane" id="tab-5">
							<div class="row gy-4">
								<div class="col-lg-8 order-2 order-lg-1">
									<h3>Adipiscing</h3>
									<p>
										Ullamco laboris nisi ut aliquip ex ea commodo consequat.
										Duis aute irure dolor in reprehenderit in voluptate velit
										esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
										occaecat cupidatat non proident, sunt in culpa qui officia
										deserunt mollit anim id est laborum
									</p>
									<p class="fst-italic">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
										do eiusmod tempor incididunt ut labore et dolore magna
										aliqua.
									</p>
									<ul>
										<li>
											<i class="bi bi-check-circle-fill"></i> Ullamco laboris
											nisi ut aliquip ex ea commodo consequat.
										</li>
										<li>
											<i class="bi bi-check-circle-fill"></i> Duis aute irure
											dolor in reprehenderit in voluptate velit.
										</li>
										<li>
											<i class="bi bi-check-circle-fill"></i> Ullamco laboris
											nisi ut aliquip ex ea commodo consequat. Duis aute irure
											dolor in reprehenderit in voluptate trideta
											storacalaperda mastiro dolore eu fugiat nulla pariatur.
										</li>
									</ul>
								</div>
								<div class="col-lg-4 order-1 order-lg-2 text-center">
									<img src="assets/img/features-5.svg" alt="" class="img-fluid" />
								</div>
							</div>
						</div> -->
			<!-- End Tab Content 5 -->

			<!-- <div class="tab-pane" id="tab-6">
							<div class="row gy-4">
								<div class="col-lg-8 order-2 order-lg-1">
									<h3>Reprehit</h3>
									<p>
										Ullamco laboris nisi ut aliquip ex ea commodo consequat.
										Duis aute irure dolor in reprehenderit in voluptate velit
										esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
										occaecat cupidatat non proident, sunt in culpa qui officia
										deserunt mollit anim id est laborum
									</p>
									<p class="fst-italic">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
										do eiusmod tempor incididunt ut labore et dolore magna
										aliqua.
									</p>
									<ul>
										<li>
											<i class="bi bi-check-circle-fill"></i> Ullamco laboris
											nisi ut aliquip ex ea commodo consequat.
										</li>
										<li>
											<i class="bi bi-check-circle-fill"></i> Duis aute irure
											dolor in reprehenderit in voluptate velit.
										</li>
										<li>
											<i class="bi bi-check-circle-fill"></i> Ullamco laboris
											nisi ut aliquip ex ea commodo consequat. Duis aute irure
											dolor in reprehenderit in voluptate trideta
											storacalaperda mastiro dolore eu fugiat nulla pariatur.
										</li>
									</ul>
								</div>
								<div class="col-lg-4 order-1 order-lg-2 text-center">
									<img src="assets/img/features-6.svg" alt="" class="img-fluid" />
								</div>
							</div>
						</div> -->
			<!-- End Tab Content 6 -->
			<!-- </div>
				</div>
			</section> -->
			<!-- End Features Section -->

			<!-- ======= Services Section ======= -->
			<section id="services" class="services">
				<div class="container" data-aos="fade-up">
					<div class="section-header">
						<h2>Our Services</h2>
						<p>
							The hard work in trading comes in the preparation. The actual process of
							trading, however, should be effortless.
						</p>
					</div>

					<div class="row gy-5">
						<div
							class="col-xl-4 col-md-6"
							data-aos="zoom-in"
							data-aos-delay="200"
							data-bs-toggle="modal"
							data-bs-target="#physicalModal"
						>
							<div class="service-item">
								<div class="img">
									<img
										src="assets/img/services/physical_course.jpg"
										class="img-fluid"
										alt=""
									/>
								</div>
								<div class="details position-relative">
									<div class="icon">
										<i class="bi bi-activity"></i>
									</div>
									<a class="stretched-link">
										<h3>Physical Course</h3>
									</a>
									<p>
										We will teach you our proven profitable strategies and
										techniques. Whether you are a beginner or considered an
										experienced retail trader, our Forex trading course will
										show you how to identify good trading opportunities.
									</p>
								</div>
							</div>
						</div>

						<!-- End Service Item -->

						<div
							class="col-xl-4 col-md-6"
							data-aos="zoom-in"
							data-aos-delay="300"
							data-bs-toggle="modal"
							data-bs-target="#digitalModal"
						>
							<div class="service-item">
								<div class="img">
									<img
										src="assets/img/services/digital_course.jpg"
										class="img-fluid"
										alt=""
									/>
								</div>
								<div class="details position-relative">
									<div class="icon">
										<i class="bi bi-broadcast"></i>
									</div>
									<a href="#" class="stretched-link">
										<h3>Digital Course</h3>
									</a>
									<p>
										In this course you will learn how hundreds generate a second
										income trading the Forex market. Our course will allow you
										to access all the powerful strategies used by W.C.K markets
										experts, from the comfort of your home.
									</p>
								</div>
							</div>
						</div>
						<!-- End Service Item -->

						<div
							class="col-xl-4 col-md-6"
							data-aos="zoom-in"
							data-aos-delay="400"
							data-bs-toggle="modal"
							data-bs-target="#chartModal"
						>
							<div class="service-item">
								<div class="img">
									<img
										src="assets/img/services/chart_analysis.jpg"
										class="img-fluid"
										alt=""
									/>
								</div>
								<div class="details position-relative">
									<div class="icon">
										<i class="bi bi-easel"></i>
									</div>
									<a href="#" class="stretched-link">
										<h3>Chart Analysis</h3>
									</a>
									<p>
										Our analysts share their personal trade setups by providing
										you with their own charts which have areas of interest. The
										areas are defined by a number of confluences that fit in
										with the G.O.A.T strategy. These confluences are indicated
										on the charts allowing subscribers to learn from them and
										develop their technical analysis skills.
									</p>
								</div>
							</div>
						</div>
						<!-- End Service Item -->

						<div
							class="col-xl-4 col-md-6"
							data-aos="zoom-in"
							data-aos-delay="500"
							data-bs-toggle="modal"
							data-bs-target="#freeModal"
						>
							<div class="service-item">
								<div class="img">
									<img
										src="assets/img/services/free_trading_books.jpg"
										class="img-fluid"
										alt=""
									/>
								</div>
								<div class="details position-relative">
									<div class="icon">
										<i class="bi bi-bounding-box-circles"></i>
									</div>
									<a href="#" class="stretched-link">
										<h3>Free Trading Books.</h3>
									</a>
									<p>
										"How to get started in Forex" gives beginners the skills &
										strategies they need to get started the right way in this
										competitive market. Easy to read, the recommended books
										describe simple strategies to beat the odds where 90% of
										other traders fail.
									</p>
									<a href="#" class="stretched-link"></a>
								</div>
							</div>
						</div>
						<!-- End Service Item -->

						<div
							class="col-xl-4 col-md-6"
							data-aos="zoom-in"
							data-aos-delay="600"
							data-bs-toggle="modal"
							data-bs-target="#tradingModal"
						>
							<div class="service-item">
								<div class="img">
									<img
										src="assets/img/services/trading_mentorship.jpg"
										class="img-fluid"
										alt=""
									/>
								</div>
								<div class="details position-relative">
									<div class="icon">
										<i class="bi bi-calendar4-week"></i>
									</div>
									<a href="#" class="stretched-link">
										<h3>Trading Mentorship</h3>
									</a>
									<p>
										A trading mentor is an experienced individual who has been
										in the industry for a long time and helps to guide a less
										experienced one. This process is known as mentorship and the
										person being mentored can be referred to as a protege or an
										apprentice.
									</p>
									<a href="#" class="stretched-link"></a>
								</div>
							</div>
						</div>
						<!-- End Service Item -->

						<div
							class="col-xl-4 col-md-6"
							data-aos="zoom-in"
							data-aos-delay="700"
							data-bs-toggle="modal"
							data-bs-target="#signalsModal"
						>
							<div class="service-item">
								<div class="img">
									<img
										src="assets/img/services/signals.jpg"
										class="img-fluid"
										alt=""
									/>
								</div>
								<div class="details position-relative">
									<div class="icon">
										<i class="bi bi-chat-square-text"></i>
									</div>
									<a href="#" class="stretched-link">
										<h3>Signals</h3>
									</a>
									<p>
										Everyday the WCK team shows you the best time to make the
										right move. Just free daily analysis to help you make better
										trading movements. Join our telegram group.
									</p>
									<a href="#" class="stretched-link"></a>
								</div>
							</div>
						</div>
						<!-- End Service Item -->
					</div>
				</div>
			</section>
			<!-- End Services Section -->

			<!-- Services Modals -->

			<!-- Phsical Course Modal -->
			<div
				class="modal fade"
				id="physicalModal"
				tabindex="-1"
				aria-labelledby="exampleModalLabel"
				aria-hidden="true"
			>
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Physical Course</h1>
							<button
								type="button"
								class="btn-close"
								data-bs-dismiss="modal"
								aria-label="Close"
							></button>
						</div>
						<div class="modal-body text-center">
							<h5 class="fw-bold">Technical analysis</h5>
							<p>Discover WCKMarkets's strategies to master "sniper entries"</p>
							<h5 class="fw-bold">Fundamental analysis</h5>
							<p>
								Learn how to identify & profit from the data that drive the market.
							</p>
							<h5 class="fw-bold">Risk management</h5>
							<p>Find out how to minimize your risk to maximize your profits.</p>
							<h5 class="fw-bold">Implementation</h5>
							<p>
								Analyse currency pairs under the supervision of experienced traders.
							</p>
							<h5 class="fw-bold">Community</h5>
							<p>Become part of a thriving community.</p>
						</div>
						<!-- <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
							Close
						</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div> -->
					</div>
				</div>
			</div>

			<!-- Digital Course Modal -->
			<div
				class="modal fade"
				id="digitalModal"
				tabindex="-1"
				aria-labelledby="exampleModalLabel"
				aria-hidden="true"
			>
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Digital Course</h1>
							<button
								type="button"
								class="btn-close"
								data-bs-dismiss="modal"
								aria-label="Close"
							></button>
						</div>
						<div class="modal-body text-center">
							<h5 class="fw-bold">10 hours of videos</h5>
							<p>
								All explained by W.C.K Market Experts, with subtitles. *English
								audio, English subtitles*
							</p>
							<h5 class="fw-bold">G.O.A.T Strategies</h5>
							<p>Combining both Fundamental & Technical analyses.</p>
							<h5 class="fw-bold">For all levels</h5>
							<p>Beginners to confirmed traders.</p>
							<h5 class="fw-bold">Bonus chat</h5>
							<p>
								"W.C.K Markets chat" for members of our analysis service. *Not part
								of the course. Being a member of the analysis service is mandatory
								to access the chat*
							</p>
						</div>
						<!-- <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
							Close
						</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div> -->
					</div>
				</div>
			</div>

			<!-- Chart Analysis Modal -->
			<div
				class="modal fade"
				id="chartModal"
				tabindex="-1"
				aria-labelledby="exampleModalLabel"
				aria-hidden="true"
			>
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Chart Analysis</h1>
							<button
								type="button"
								class="btn-close"
								data-bs-dismiss="modal"
								aria-label="Close"
							></button>
						</div>
						<div class="modal-body text-center">
							<p>
								Analysts also share how they are personally managing their own
								charts, their targeted spot price and thoughts on the market.
							</p>
							<p>
								Along with the charts, analysis of the key factors influencing
								markets by determining risk tone and potential direction throughout
								sessions are also provided. Fundamental data releases are analyzed
								providing likely scenarios and reactions, these are paired with
								technical analysis by the analysts and incorporated into their
								charts.
							</p>
							<p>
								All charts, updates and fundamental breakdowns in our Chart Analysis
								service are sent via the Telegram app.
							</p>
							<p>
								Our team provides you with their personal analysis on charts so you
								can use it with your own to help you learn, see and understand price
								action.
							</p>
							<p>
								All content and commentary shared in the Chart Analysis service is
								for educational purposes only and not to be construed as advice.
							</p>
							<h5 class="fw-bold">Easy-to-read Charts</h5>
							<p>Spot FX charts shared by experienced analysts</p>
							<h5 class="fw-bold">EDUCATIONAL</h5>
							<p>Learn how WCK Markets experts confluences match price action</p>
							<h5 class="fw-bold">Fundamentals</h5>
							<p>Understand the key factors and what moves the market</p>
							<h5 class="fw-bold">Average of 4 charts per week</h5>
							<p>
								Dependent on market conditions and sent during European & American
								sessions
							</p>
							<!-- <h5 class="fw-bold">Bonus GROUP chat</h5>
							<p>
								Bonus "WCK Marketsl chat" to interact with other members *Different
								from "50cal chat"*
							</p> -->
						</div>
						<!-- <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
							Close
						</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div> -->
					</div>
				</div>
			</div>

			<!-- Free Trading Modal -->
			<div
				class="modal fade"
				id="freeModal"
				tabindex="-1"
				aria-labelledby="exampleModalLabel"
				aria-hidden="true"
			>
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">
								Free Trading Books
							</h1>
							<button
								type="button"
								class="btn-close"
								data-bs-dismiss="modal"
								aria-label="Close"
							></button>
						</div>
						<div class="modal-body text-center">
							<div class="row">
								<div class="col-6 mb-3">
									<a href="/assets/books/FOREX SECRETS.pdf">
										Forex Secrets

										<i class="bi bi-download ms-2"></i>
									</a>
								</div>
								<div class="col-6 mb-3">
									<a href="/assets/books/Forex Wave Theory ( PDFDrive ).pdf">
										Forex Wave Theory

										<i class="bi bi-download ms-2"></i>
									</a>
								</div>
								<div class="col-6 mb-3">
									<a href="/assets/books/Order_Execution_Policy.pdf">
										Order Execution Policy

										<i class="bi bi-download ms-2"></i>
									</a>
								</div>
								<div class="col-6 mb-3">
									<a
										href="/assets/books/Sniper Trading Workbook - George Angell.pdf"
									>
										Sniper Trading Workbook

										<i class="bi bi-download ms-2"></i>
									</a>
								</div>
								<div class="col-6 mb-3">
									<a href="/assets/books/The Richest Man in Babylon.pdf">
										The Richest Man in Babylon

										<i class="bi bi-download ms-2"></i>
									</a>
								</div>
								<div class="col-6 mb-3">
									<a href="/assets/books/Think and Grow Rich.pdf">
										Think and Grow Rich <i class="bi bi-download ms-2"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
							Close
						</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div> -->
					</div>
				</div>
			</div>

			<!-- Trading Mentorship Modal -->
			<div
				class="modal fade"
				id="tradingModal"
				tabindex="-1"
				aria-labelledby="exampleModalLabel"
				aria-hidden="true"
			>
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">
								Trading Mentorship
							</h1>
							<button
								type="button"
								class="btn-close"
								data-bs-dismiss="modal"
								aria-label="Close"
							></button>
						</div>
						<div class="modal-body text-center">
							<p>
								Historically, traders who have a good mentor tend to be more
								successful. That’s because trading is not an easy thing. As you
								probably know, more than <strong>80%</strong> of all people who
								start trading don’t succeed.
							</p>
							<p>
								Most importantly, every trader loses a substantial amount of money
								at a certain period. So, in this article, we will look at the
								concept of mentorship and how to get a good one.
							</p>
						</div>
						<!-- <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
							Close
						</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div> -->
					</div>
				</div>
			</div>

			<!-- Signals Modal -->
			<div
				class="modal fade"
				id="signalsModal"
				tabindex="-1"
				aria-labelledby="exampleModalLabel"
				aria-hidden="true"
			>
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Signals</h1>
							<button
								type="button"
								class="btn-close"
								data-bs-dismiss="modal"
								aria-label="Close"
							></button>
						</div>
						<div class="modal-body text-center">
							<h5 class="fw-bold">Telegram Connections</h5>
							<p class="fs-4 fw-3">
								<a href="https://t.me/wck00" target="_blank">join us</a>
							</p>
						</div>
						<!-- <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
							Close
						</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div> -->
					</div>
				</div>
			</div>

			<!-- ======= Testimonials Section ======= -->
			<section id="testimonials" class="testimonials">
				<div class="container" data-aos="fade-up">
					<div class="testimonials-slider swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="testimonial-item">
									<img
										src="assets/img/wck_logo_400.png"
										class="testimonial-img"
										alt=""
									/>
									<h3>Trading Psychology</h3>
									<!-- <h4>Ceo &amp; Founder</h4> -->
									<div class="stars">
										<i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i>
									</div>
									<p class="fs-5">
										<i class="bi bi-quote quote-icon-left"></i>
										If you can learn to create a state of mind that is not
										affected by the market’s behaviour, the struggle will cease
										to exist.
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div>
							<!-- End testimonial item -->

							<div class="swiper-slide">
								<div class="testimonial-item">
									<img
										src="assets/img/wck_logo_400.png"
										class="testimonial-img"
										alt=""
									/>
									<h3>Trading Systems</h3>
									<!-- <h4>Designer</h4> -->
									<div class="stars">
										<i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i>
									</div>
									<p class="fs-5">
										<i class="bi bi-quote quote-icon-left"></i>
										Do more of what works and less of what doesn’t.
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div>
							<!-- End testimonial item -->

							<div class="swiper-slide">
								<div class="testimonial-item">
									<img
										src="assets/img/wck_logo_400.png"
										class="testimonial-img"
										alt=""
									/>
									<h3>Discipline and patience</h3>
									<!-- <h4>Store Owner</h4> -->
									<div class="stars">
										<i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i>
									</div>
									<p class="fs-5">
										<i class="bi bi-quote quote-icon-left"></i>
										The goal of a successful trader is to make the best trades.
										Money is secondary.
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div>
							<!-- End testimonial item -->

							<div class="swiper-slide">
								<div class="testimonial-item">
									<img
										src="assets/img/wck_logo_400.png"
										class="testimonial-img"
										alt=""
									/>
									<h3>Technical Analysis</h3>
									<!-- <h4></h4> -->
									<div class="stars">
										<i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i>
									</div>
									<p class="fs-5">
										<i class="bi bi-quote quote-icon-left"></i>
										All you need is one pattern to make a living.
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div>
							<!-- End testimonial item -->

							<div class="swiper-slide">
								<div class="testimonial-item">
									<img
										src="assets/img/wck_logo_400.png"
										class="testimonial-img"
										alt=""
									/>
									<h3>Risk</h3>
									<!-- <h4>Entrepreneur</h4> -->
									<div class="stars">
										<i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i>
									</div>
									<p class="fs-5">
										<i class="bi bi-quote quote-icon-left"></i>
										Are you willing to lose money on a trade? If not, then don't
										take it. You can only win if you're not afraid to lose. And
										you can only do that if you truly accept the risks in front
										of you.
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div>
							<!-- End testimonial item -->

							<div class="swiper-slide">
								<div class="testimonial-item">
									<img
										src="assets/img/wck_logo_400.png"
										class="testimonial-img"
										alt=""
									/>
									<h3>Cut your losses</h3>
									<!-- <h4>Entrepreneur</h4> -->
									<div class="stars">
										<i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i
										><i class="bi bi-star-fill"></i>
									</div>
									<p class="fs-5">
										<i class="bi bi-quote quote-icon-left"></i>
										Letting losses run is the most serious mistake made by most
										investors.
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div>
							<!-- End testimonial item -->
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</section>
			<!-- End Testimonials Section -->

			<!-- ======= Pricing Section ======= -->
			<section id="pricing" class="pricing">
				<div class="container" data-aos="fade-up">
					<div class="section-header">
						<h2>COURSE PACKAGE</h2>
						<p>
							The biggest risk of all is not taking one. An investment in knowledge
							pays the best interest. Education is the passport to the future, for
							tomorrow belongs to those who prepare for it today.
						</p>
					</div>

					<div class="row gy-4">
						<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
							<div class="pricing-item">
								<div class="pricing-header">
									<h3>Chart Analysis</h3>
									<h4><sup>$</sup>149<span> / month</span></h4>
								</div>

								<ul>
									<li>
										<i class="bi bi-dot"></i>
										<span>Easy-to-read Charts</span>
									</li>
									<li>
										<i class="bi bi-dot"></i>
										<span>Educational</span>
									</li>
									<li>
										<i class="bi bi-dot"></i>
										<span>Fundamentals</span>
									</li>
									<li>
										<i class="bi bi-dot"></i>
										<span>Average of 4 charts shared per week</span>
									</li>
									<li>
										<i class="bi bi-dot"></i>
										<span>Bonus GROUP chat</span>
									</li>
									<li>
										<i class="bi bi-dot"></i>
										<span>Sniper Entries (Pro-Signal)</span>
									</li>
								</ul>

								<div class="text-center mt-auto">
									<a
										href="#"
										class="buy-btn"
										data-bs-toggle="modal"
										data-bs-target="#application-modal"
										onclick="getCourse('Chart Analysis Course')"
										>Apply Now</a
									>
								</div>
							</div>
						</div>
						<!-- End Pricing Item -->

						<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
							<div class="pricing-item featured">
								<div class="pricing-header">
									<h3>Digital Course</h3>
									<h4><sup>$</sup>99<span> / month</span></h4>
								</div>

								<ul>
									<li>
										<i class="bi bi-dot"></i>
										<span>Technical analysis</span>
									</li>
									<li>
										<i class="bi bi-dot"></i>
										<span> Fundamental analysis </span>
									</li>
									<li>
										<i class="bi bi-dot"></i>
										<span> Market Physiology </span>
									</li>
									<li>
										<i class="bi bi-dot"></i>
										<span> Risk management </span>
									</li>
									<li>
										<i class="bi bi-dot"></i>
										<span> Implementation </span>
									</li>
									<li>
										<i class="bi bi-dot"></i>
										<span> Community </span>
									</li>
								</ul>

								<div class="text-center mt-auto">
									<a
										href="#"
										class="buy-btn"
										data-bs-toggle="modal"
										data-bs-target="#application-modal"
										onclick="getCourse('Digital Course')"
										>Apply Now</a
									>
								</div>
							</div>
						</div>
						<!-- End Pricing Item -->

						<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
							<div class="pricing-item">
								<div class="pricing-header">
									<h3>Physical Course</h3>
									<h4><sup>$</sup>299<span> / month</span></h4>
								</div>

								<ul>
									<li>
										<i class="bi bi-dot"></i>
										<span>Technical analysis</span>
									</li>
									<li>
										<i class="bi bi-dot"></i>
										<span> Fundamental analysis </span>
									</li>
									<li>
										<i class="bi bi-dot"></i>
										<span> Market Physiology </span>
									</li>
									<li>
										<i class="bi bi-dot"></i>
										<span> Risk management </span>
									</li>
									<li>
										<i class="bi bi-dot"></i>
										<span> Implementation </span>
									</li>
									<li>
										<i class="bi bi-dot"></i>
										<span> Community </span>
									</li>
								</ul>

								<div class="text-center mt-auto">
									<a
										href="#"
										class="buy-btn"
										data-bs-toggle="modal"
										data-bs-target="#application-modal"
										onclick="getCourse('Physical Course')"
										>Apply Now</a
									>
								</div>
							</div>
						</div>
						<!-- End Pricing Item -->
					</div>
				</div>
			</section>
			<!-- Chart Application Modal -->
			<div
				class="modal fade"
				id="application-modal"
				tabindex="-1"
				aria-labelledby="exampleModalLabel"
				aria-hidden="true"
			>
				<div class="modal-dialog modal-dialog-centered modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="modal-header"></h1>
							<button
								type="button"
								class="btn-close"
								data-bs-dismiss="modal"
								aria-label="Close"
							></button>
						</div>
						<div class="modal-body text-center">
							<form action="mail.php" name="charts" method="post">
								<input type="hidden" name="course" value="" id="course-name" />
								<div class="row">
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input
												type="text"
												class="form-control"
												id="fname"
												name="fname"
												placeholder="John"
												required
											/>
											<label for="fname">First Name</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input
												type="text"
												class="form-control"
												id="lname"
												name="lname"
												placeholder="Doe"
												required
											/>
											<label for="lname">Last Name</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input
												type="text"
												class="form-control"
												id="phone"
												name="phone"
												placeholder="0700 111 222"
												required
											/>
											<label for="phone">Mobile Phone number</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input
												type="email"
												class="form-control"
												id="email"
												name="email"
												placeholder="name@example.com"
												required
											/>
											<label for="floatingInput">Email address</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-floating mb-3">
											<input
												type="date"
												class="form-control"
												id="dob"
												name="dob"
												placeholder="Date of Birth"
												required
											/>
											<label for="dob">Date of Birth</label>
										</div>
									</div>
									<div class="form-floating mb-3 col-md-6">
										<select
											class="form-select"
											id="gender"
											name="gender"
											aria-label="Floating label select example"
											required
										>
											<option value="Male" selected>Male</option>
											<option value="Female">Female</option>
										</select>
										<label for="floatingSelect">Gender</label>
									</div>
									<div class="form-floating mb-3">
										<select
											class="form-select"
											id="experience"
											name="experience"
											aria-label="Floating label select example"
											required
										>
											<option value="none" selected>None</option>
											<option value="Below-6">Less than 6 months</option>
											<option value="Above-6">More than 6 months</option>
										</select>
										<label for="floatingSelect">Experience on the Market</label>
									</div>
									<div>
										<div class="form-floating mb-3">
											<input
												type="text"
												class="form-control"
												id="job-location"
												name="location"
												placeholder="Job and Location"
												required
											/>
											<label for="job-location">Job and Location</label>
										</div>
									</div>
									<div>
										<div class="form-floating mb-3">
											<textarea
												type="text"
												class="form-control"
												id="reason"
												name="reason"
												placeholder="Why should you be considered as a WCK member?"
												rows="2"
												required
											></textarea>
											<label for="job-location"
												>Why should you be considered as a WCK Markets
												member?</label
											>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary form-control">
									Submit Application
								</button>
							</form>
						</div>
						<!-- <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
							Close
						</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div> -->
					</div>
				</div>
			</div>
			<!-- End Pricing Section -->

			<!-- ======= F.A.Q Section ======= -->
			<section id="faq" class="faq">
				<div class="container-fluid" data-aos="fade-up">
					<div class="row gy-4">
						<div
							class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1"
						>
							<div class="content px-xl-5">
								<h3>Frequently Asked <strong>Questions</strong></h3>
								<p>
									At WCK Markets we take you by the hand and show you step-by-step
									how to trade like a professional. That’s what makes us
									different.
								</p>
							</div>

							<div class="accordion accordion-flush px-xl-5" id="faqlist">
								<div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
									<h3 class="accordion-header">
										<button
											class="accordion-button collapsed"
											type="button"
											data-bs-toggle="collapse"
											data-bs-target="#faq-content-1"
										>
											<i class="bi bi-question-circle question-icon"></i>
											How long does it take to be added to the service?
										</button>
									</h3>
									<div
										id="faq-content-1"
										class="accordion-collapse collapse"
										data-bs-parent="#faqlist"
									>
										<div class="accordion-body">
											Once you subscribe, you will need to allow 24 hours to
											be contacted with a link to join the chart analysis
											channel. If you do not receive an email, please check
											your spam folder.
										</div>
									</div>
								</div>
								<!-- # Faq item-->

								<div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
									<h3 class="accordion-header">
										<button
											class="accordion-button collapsed"
											type="button"
											data-bs-toggle="collapse"
											data-bs-target="#faq-content-2"
										>
											<i class="bi bi-question-circle question-icon"></i>
											Can I cancel at any time?
										</button>
									</h3>
									<div
										id="faq-content-2"
										class="accordion-collapse collapse"
										data-bs-parent="#faqlist"
									>
										<div class="accordion-body">
											Yes, as long as you provide us with 48 hours’ notice via
											email at info@wckmarkets.com before your payment date is
											due.
										</div>
									</div>
								</div>
								<!-- # Faq item-->

								<div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
									<h3 class="accordion-header">
										<button
											class="accordion-button collapsed"
											type="button"
											data-bs-toggle="collapse"
											data-bs-target="#faq-content-3"
										>
											<i class="bi bi-question-circle question-icon"></i>
											How many charts will I receive per day?
										</button>
									</h3>
									<div
										id="faq-content-3"
										class="accordion-collapse collapse"
										data-bs-parent="#faqlist"
									>
										<div class="accordion-body">
											Charts will be posted and updated as soon as they become
											clear to us. We send an average of 4 charts per week,
											but it can vary depending on market conditions. There is
											no minimum per day.
										</div>
									</div>
								</div>
								<!-- # Faq item-->

								<!-- <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
									<h3 class="accordion-header">
										<button
											class="accordion-button collapsed"
											type="button"
											data-bs-toggle="collapse"
											data-bs-target="#faq-content-4"
										>
											<i class="bi bi-question-circle question-icon"></i>
											Do I need to attend your in-person course or order 50cal
											digital course to be able to sign up to chart analysis ?
										</button>
									</h3>
									<div
										id="faq-content-4"
										class="accordion-collapse collapse"
										data-bs-parent="#faqlist"
									>
										<div class="accordion-body">
											<i class="bi bi-question-circle question-icon"></i>
											No you don’t. However we would recommend that you know
											the basics of the Forex market.
										</div>
									</div>
								</div> -->
								<!-- # Faq item-->

								<div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
									<h3 class="accordion-header">
										<button
											class="accordion-button collapsed"
											type="button"
											data-bs-toggle="collapse"
											data-bs-target="#faq-content-5"
										>
											<i class="bi bi-question-circle question-icon"></i>
											Where can I find education research materials?
										</button>
									</h3>
									<div
										id="faq-content-5"
										class="accordion-collapse collapse"
										data-bs-parent="#faqlist"
									>
										<div class="accordion-body">
											All content and commentary is shared in the Elite Room
											for educational purposes only and should not to be
											construed as advice.
										</div>
									</div>
								</div>
								<!-- # Faq item-->
							</div>
						</div>

						<div
							class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
							style="background-image: url('assets/img/faq.jpg')"
						>
							&nbsp;
						</div>
					</div>
				</div>
			</section>
			<!-- End F.A.Q Section -->

			<!-- ======= Portfolio Section ======= -->
			<section id="portfolio" class="portfolio" data-aos="fade-up">
				<div class="container">
					<div class="section-header">
						<h2>Portfolio</h2>
						<p>
							An organisation's ability to learn, and translate that learning into
							action rapidly, is the ultimate competitive advantage. A vision is not
							just a picture of what could be, it is an appeal to our better selves, a
							call to become something more.
						</p>
					</div>
				</div>

				<div class="container-fluid" data-aos="fade-up" data-aos-delay="200">
					<div
						class="portfolio-isotope"
						data-portfolio-filter="*"
						data-portfolio-layout="masonry"
						data-portfolio-sort="original-order"
					>
						<ul class="portfolio-flters">
							<li data-filter="*" class="filter-active">All</li>
							<li data-filter=".filter-app">App</li>
							<li data-filter=".filter-product">Charts</li>
							<li data-filter=".filter-branding">Trading Area</li>
							<li data-filter=".filter-books">Signals</li>
						</ul>
						<!-- End Portfolio Filters -->

						<div class="row g-0 portfolio-container">
							<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
								<img
									src="assets/img/portfolio1/Portfolio-1.jpg"
									class="img-fluid"
									alt=""
								/>
								<div class="portfolio-info">
									<h4>App 1</h4>
									<a
										href="assets/img/portfolio1/Portfolio-1.jpg"
										title="App 1"
										data-gallery="portfolio-gallery"
										class="glightbox preview-link"
										><i class="bi bi-zoom-in"></i
									></a>
									<a
										href="portfolio-details.html"
										title="More Details"
										class="details-link"
										><i class="bi bi-link-45deg"></i
									></a>
								</div>
							</div>
							<!-- End Portfolio Item -->

							<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
								<img
									src="assets/img/portfolio1/Portfolio-2.jpg"
									class="img-fluid"
									alt=""
								/>
								<div class="portfolio-info">
									<h4>Product 1</h4>
									<a
										href="assets/img/portfolio1/Portfolio-2.jpg"
										title="Product 1"
										data-gallery="portfolio-gallery"
										class="glightbox preview-link"
										><i class="bi bi-zoom-in"></i
									></a>
									<a
										href="portfolio-details.html"
										title="More Details"
										class="details-link"
										><i class="bi bi-link-45deg"></i
									></a>
								</div>
							</div>
							<!-- End Portfolio Item -->

							<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
								<img
									src="assets/img/portfolio1/Portfolio-3.jpg"
									class="img-fluid"
									alt=""
								/>
								<div class="portfolio-info">
									<h4>Branding 1</h4>
									<a
										href="assets/img/portfolio1/Portfolio-3.jpg"
										title="Branding 1"
										data-gallery="portfolio-gallery"
										class="glightbox preview-link"
										><i class="bi bi-zoom-in"></i
									></a>
									<a
										href="portfolio-details.html"
										title="More Details"
										class="details-link"
										><i class="bi bi-link-45deg"></i
									></a>
								</div>
							</div>
							<!-- End Portfolio Item -->

							<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
								<img
									src="assets/img/portfolio1/Portfolio-4.jpg"
									class="img-fluid"
									alt=""
								/>
								<div class="portfolio-info">
									<h4>Books 1</h4>
									<a
										href="assets/img/portfolio1/Portfolio-4.jpg"
										title="Branding 1"
										data-gallery="portfolio-gallery"
										class="glightbox preview-link"
										><i class="bi bi-zoom-in"></i
									></a>
									<a
										href="portfolio-details.html"
										title="More Details"
										class="details-link"
										><i class="bi bi-link-45deg"></i
									></a>
								</div>
							</div>
							<!-- End Portfolio Item -->

							<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
								<img
									src="assets/img/portfolio1/Portfolio-5.jpg"
									class="img-fluid"
									alt=""
								/>
								<div class="portfolio-info">
									<h4>App 2</h4>
									<a
										href="assets/img/portfolio1/Portfolio-5.jpg"
										title="App 2"
										data-gallery="portfolio-gallery"
										class="glightbox preview-link"
										><i class="bi bi-zoom-in"></i
									></a>
									<a
										href="portfolio-details.html"
										title="More Details"
										class="details-link"
										><i class="bi bi-link-45deg"></i
									></a>
								</div>
							</div>
							<!-- End Portfolio Item -->

							<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
								<img
									src="assets/img/portfolio1/Portfolio-6.jpg"
									class="img-fluid"
									alt=""
								/>
								<div class="portfolio-info">
									<h4>Product 2</h4>
									<a
										href="assets/img/portfolio1/Portfolio-6.jpg"
										title="Product 2"
										data-gallery="portfolio-gallery"
										class="glightbox preview-link"
										><i class="bi bi-zoom-in"></i
									></a>
									<a
										href="portfolio-details.html"
										title="More Details"
										class="details-link"
										><i class="bi bi-link-45deg"></i
									></a>
								</div>
							</div>
							<!-- End Portfolio Item -->

							<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
								<img
									src="assets/img/portfolio1/Portfolio-7.jpg"
									class="img-fluid"
									alt=""
								/>
								<div class="portfolio-info">
									<h4>Branding 2</h4>
									<a
										href="assets/img/portfolio1/Portfolio-7.jpg"
										title="Branding 2"
										data-gallery="portfolio-gallery"
										class="glightbox preview-link"
										><i class="bi bi-zoom-in"></i
									></a>
									<a
										href="portfolio-details.html"
										title="More Details"
										class="details-link"
										><i class="bi bi-link-45deg"></i
									></a>
								</div>
							</div>
							<!-- End Portfolio Item -->

							<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
								<img
									src="assets/img/portfolio1/Portfolio-8.jpg"
									class="img-fluid"
									alt=""
								/>
								<div class="portfolio-info">
									<h4>Books 2</h4>
									<a
										href="assets/img/portfolio1/Portfolio-8.jpg"
										title="Branding 2"
										data-gallery="portfolio-gallery"
										class="glightbox preview-link"
										><i class="bi bi-zoom-in"></i
									></a>
									<a
										href="portfolio-details.html"
										title="More Details"
										class="details-link"
										><i class="bi bi-link-45deg"></i
									></a>
								</div>
							</div>
							<!-- End Portfolio Item -->

							<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
								<img
									src="assets/img/portfolio1/Portfolio-9.jpg"
									class="img-fluid"
									alt=""
								/>
								<div class="portfolio-info">
									<h4>App 3</h4>
									<a
										href="assets/img/portfolio1/Portfolio-9.jpg"
										title="App 3"
										data-gallery="portfolio-gallery"
										class="glightbox preview-link"
										><i class="bi bi-zoom-in"></i
									></a>
									<a
										href="portfolio-details.html"
										title="More Details"
										class="details-link"
										><i class="bi bi-link-45deg"></i
									></a>
								</div>
							</div>
							<!-- End Portfolio Item -->

							<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
								<img
									src="assets/img/portfolio1/Portfolio-10.jpg"
									class="img-fluid"
									alt=""
								/>
								<div class="portfolio-info">
									<h4>Product 3</h4>
									<a
										href="assets/img/portfolio1/Portfolio-10.jpg"
										title="Product 3"
										data-gallery="portfolio-gallery"
										class="glightbox preview-link"
										><i class="bi bi-zoom-in"></i
									></a>
									<a
										href="portfolio-details.html"
										title="More Details"
										class="details-link"
										><i class="bi bi-link-45deg"></i
									></a>
								</div>
							</div>
							<!-- End Portfolio Item -->

							<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
								<img
									src="assets/img/portfolio1/Portfolio-11.jpg"
									class="img-fluid"
									alt=""
								/>
								<div class="portfolio-info">
									<h4>Branding 3</h4>
									<a
										href="assets/img/portfolio1/Portfolio-11.jpg"
										title="Branding 2"
										data-gallery="portfolio-gallery"
										class="glightbox preview-link"
										><i class="bi bi-zoom-in"></i
									></a>
									<a
										href="portfolio-details.html"
										title="More Details"
										class="details-link"
										><i class="bi bi-link-45deg"></i
									></a>
								</div>
							</div>
							<!-- End Portfolio Item -->

							<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
								<img
									src="assets/img/portfolio1/Portfolio-12.jpg"
									class="img-fluid"
									alt=""
								/>
								<div class="portfolio-info">
									<h4>Books 3</h4>
									<a
										href="assets/img/portfolio1/Portfolio-12.jpg"
										title="Branding 3"
										data-gallery="portfolio-gallery"
										class="glightbox preview-link"
										><i class="bi bi-zoom-in"></i
									></a>
									<a
										href="portfolio-details.html"
										title="More Details"
										class="details-link"
										><i class="bi bi-link-45deg"></i
									></a>
								</div>
							</div>
							<!-- End Portfolio Item -->
						</div>
						<!-- End Portfolio Container -->
					</div>
				</div>
			</section>
			<!-- End Portfolio Section -->

			<!-- ======= Team Section ======= -->
			<section id="team" class="team">
				<div class="container" data-aos="fade-up">
					<div class="section-header">
						<h2>Our Team</h2>
						<p>
							Together, ordinary people can achieve extraordinary results. Leadership
							is the secret that makes common people achieve uncommon results.
						</p>
					</div>

					<div class="row gy-5">
						<div
							class="col-xl-6 col-md-6 d-flex"
							data-aos="zoom-in"
							data-aos-delay="200"
						>
							<div class="team-member">
								<div class="member-img">
									<img
										src="assets/img/team/Fahad Kabenge - Chief Executive Officer.jpg"
										class="img-fluid"
										alt=""
									/>
								</div>
								<div class="member-info">
									<div class="social">
										<a href=""><i class="bi bi-twitter"></i></a>
										<a href=""><i class="bi bi-facebook"></i></a>
										<a href=""><i class="bi bi-instagram"></i></a>
										<a href=""><i class="bi bi-linkedin"></i></a>
									</div>
									<h4>Fahad Kabenge</h4>
									<span>Chief Executive Officer</span>
								</div>
							</div>
						</div>
						<!-- End Team Member -->

						<div
							class="col-xl-6 col-md-6 d-flex"
							data-aos="zoom-in"
							data-aos-delay="400"
						>
							<div class="team-member">
								<div class="member-img">
									<img
										src="assets/img/team/Felix Mwebe - Managing Partner.jpg"
										class="img-fluid"
										alt=""
									/>
								</div>
								<div class="member-info">
									<div class="social">
										<a href=""><i class="bi bi-twitter"></i></a>
										<a href=""><i class="bi bi-facebook"></i></a>
										<a href=""><i class="bi bi-instagram"></i></a>
										<a href=""><i class="bi bi-linkedin"></i></a>
									</div>
									<h4>Felix Mwebe</h4>
									<span>Managing Partner</span>
								</div>
							</div>
						</div>
						<!-- End Team Member -->

						<!-- <div
							class="col-xl-4 col-md-6 d-flex"
							data-aos="zoom-in"
							data-aos-delay="600"
						>
							<div class="team-member">
								<div class="member-img">
									<img
										src="assets/img/team/team-3.jpg"
										class="img-fluid"
										alt=""
									/>
								</div>
								<div class="member-info">
									<div class="social">
										<a href=""><i class="bi bi-twitter"></i></a>
										<a href=""><i class="bi bi-facebook"></i></a>
										<a href=""><i class="bi bi-instagram"></i></a>
										<a href=""><i class="bi bi-linkedin"></i></a>
									</div>
									<h4>William Anderson</h4>
									<span>CTO</span>
								</div>
							</div>
						</div> -->
						<!-- End Team Member -->
					</div>
				</div>
			</section>
			<!-- End Team Section -->

			<!-- ======= Recent Blog Posts Section ======= -->
			<section id="recent-blog-posts" class="recent-blog-posts">
				<div class="container" data-aos="fade-up">
					<div class="section-header">
						<h2>Blog</h2>
						<p>Recent posts form our Blog</p>
					</div>

					<div class="row">
						<div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
							<div class="post-box">
								<div class="post-img">
									<img
										src="assets/img/blog1/Blog - Forex or Stock Market.jpg"
										class="img-fluid"
										alt=""
									/>
								</div>
								<div class="meta">
									<span class="post-date">Tue, December 12</span>
									<span class="post-author"> / Julia Parker</span>
								</div>
								<h3 class="post-title">
									Forex or Stock Market? Which is better? What is the Forex
									market?
								</h3>
								<p>
									The forex or ‘foreign exchange’ market is a marketplace in which
									currencies can be bought, sold, and exchanged. The participants
									in this market range from banks, individual retail traders, and
									even travelers in need of local currency...
								</p>
								<a href="blog-details.php" class="readmore stretched-link"
									><span>Read More</span><i class="bi bi-arrow-right"></i
								></a>
							</div>
						</div>

						<div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
							<div class="post-box">
								<div class="post-img">
									<img
										src="assets/img/blog1/blog - MT4 app for iOS.jpg"
										class="img-fluid"
										alt=""
									/>
								</div>
								<div class="meta">
									<span class="post-date">Fri, September 05</span>
									<span class="post-author"> / Mario Douglas</span>
								</div>
								<h3 class="post-title">
									MT4 app for iOS has been removed from the Appstore, where to
									find a replacement?
								</h3>
								<p>
									In early October, Apple removed the mobile versions of the MT4
									and MT5 trading platforms from its Appstore. The reason is
									alleged non-compliance with guidelines by the developers of the
									MetaTrader 4 and ...
								</p>
								<a href="blog-details2.php" class="readmore stretched-link"
									><span>Read More</span><i class="bi bi-arrow-right"></i
								></a>
							</div>
						</div>

						<div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
							<div class="post-box">
								<div class="post-img">
									<img
										src="assets/img/blog1/blog - The Basics about Cryptocurrency.---.jfif"
										class="img-fluid"
										alt=""
									/>
								</div>
								<div class="meta">
									<span class="post-date">Tue, July 27</span>
									<span class="post-author"> / Lisa Hunter</span>
								</div>
								<h3 class="post-title">How does cryptocurrency work?</h3>
								<p>
									Cryptocurrencies run on a distributed public ledger called
									blockchain, a record of all transactions updated and held by
									currency holders
								</p>
								<p>
									Units of cryptocurrency are created through a process called
									mining, which involves using computer power to solve complicated
									mathematical problems that generate coins. Users can also buy
									the currencies from brokers, then....
								</p>
								<a href="blog-details3.php" class="readmore stretched-link"
									><span>Read More</span><i class="bi bi-arrow-right"></i
								></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Recent Blog Posts Section -->

			<!-- ======= Contact Section ======= -->
			<section id="contact" class="contact">
				<div class="container">
					<div class="section-header">
						<h2>Contact Us</h2>
						<p>Where to find us</p>
					</div>
				</div>

				<div class="map">
					<!-- <iframe
						src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
						frameborder="0"
						allowfullscreen
					></iframe> -->

					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4794.213213009867!2d32.632692058015124!3d0.3673551834116364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177db9f40f689413%3A0xae7ffd566351f185!2sMetroplex%20Shopping%20Centre!5e0!3m2!1sen!2sug!4v1671055642596!5m2!1sen!2sug"
						width="600"
						height="450"
						style="border: 0"
						allowfullscreen=""
						loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"
					></iframe>
				</div>
				<!-- End Google Maps -->

				<div class="container">
					<div class="row gy-5 gx-lg-5">
						<div class="col-lg-4">
							<div class="info">
								<h3>Get in touch</h3>
								<p>Reach Us at the following Addresses:</p>

								<div class="info-item d-flex">
									<i class="bi bi-geo-alt flex-shrink-0"></i>
									<div>
										<h4>Location:</h4>
										<p>
											Metroplex Shopping Centre, Northern Bypass Hwy, Kampala,
											Uganda.
										</p>
									</div>
								</div>
								<!-- End Info Item -->

								<div class="info-item d-flex">
									<i class="bi bi-envelope flex-shrink-0"></i>
									<div>
										<h4>Email:</h4>
										<p>info@wckmarkets.com</p>
									</div>
								</div>
								<!-- End Info Item -->

								<div class="info-item d-flex">
									<i class="bi bi-phone flex-shrink-0"></i>
									<div>
										<h4>Call:</h4>
										<p>+256 770 355 497 / +256 700 808 321</p>
									</div>
								</div>
								<!-- End Info Item -->
							</div>
						</div>

						<div class="col-lg-8">
							<form
								action="mail.php"
								method="post"
								role="form"
								class="php-email-form"
							>
								<div class="row">
									<div class="col-md-6 form-group">
										<input
											type="text"
											name="name"
											class="form-control"
											id="name"
											placeholder="Your Name"
											required
										/>
									</div>
									<div class="col-md-6 form-group mt-3 mt-md-0">
										<input
											type="email"
											class="form-control"
											name="email"
											id="email"
											placeholder="Your Email"
											required
										/>
									</div>
								</div>
								<div class="form-group mt-3">
									<input
										type="text"
										class="form-control"
										name="subject"
										id="subject"
										placeholder="Subject"
										required
									/>
								</div>
								<div class="form-group mt-3">
									<textarea
										class="form-control"
										name="message"
										placeholder="Message"
										required
									></textarea>
								</div>
								<div class="my-3">
									<div class="loading">Loading</div>
									<div class="error-message"></div>
									<div class="sent-message">
										Your message has been sent. Thank you!
									</div>
								</div>
								<div class="text-center">
									<button type="submit">Send Message</button>
								</div>
							</form>
						</div>
						<!-- End Contact Form -->
					</div>
				</div>

				<div class="map">
					<!-- <iframe
						src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
						frameborder="0"
						allowfullscreen
					></iframe> -->
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63835.98093444795!2d32.56235024584997!3d0.33821386376098167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbbae31f63ad7%3A0xabdd927afe42cf5d!2sAcacia%20Mall!5e0!3m2!1sen!2sug!4v1670693196425!5m2!1sen!2sug"
						allowfullscreen
						frameborder="0"
					></iframe>
				</div>
				<!-- End Google Maps -->

			</section>
			<!-- End Contact Section -->
		</main>
		<!-- End #main -->

		<!-- ======= Footer ======= -->
		<footer id="footer" class="footer">
			<div class="footer-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="footer-info">
								<h3>wckmarkets</h3>
								<p>
									Metroplex Shopping Centre<br />
									Northern Bypass Hwy, Kampala, Uganda.<br /><br />
									<strong>Phone:</strong> +256 770 355 497 / +256 700 808 321<br />
									<strong>Email:</strong> info@wckmarkets.com<br />
								</p>
							</div>
						</div>

						<div class="col-lg-2 col-md-6 footer-links">
							<h4>Useful Links</h4>
							<ul>
								<li>
									<i class="bi bi-chevron-right"></i>
									<a href="index.php">Home</a>
								</li>
								<li>
									<i class="bi bi-chevron-right"></i>
									<a href="index.php#about">About us</a>
								</li>
								<li>
									<i class="bi bi-chevron-right"></i>
									<a href="index.php#services">Services</a>
								</li>
								<!-- <li>
									<i class="bi bi-chevron-right"></i>
									<a href="#">Terms of service</a>
								</li>
								<li>
									<i class="bi bi-chevron-right"></i>
									<a href="#">Privacy policy</a>
								</li> -->
							</ul>
						</div>

						<div class="col-lg-3 col-md-6 footer-links">
							<h4>Our Services</h4>
							<ul>
								<li>
									<i class="bi bi-chevron-right"></i>
									<a href="index.php#services">See Our Services</a>
								</li>
								<!-- <li>
									<i class="bi bi-chevron-right"></i>
									<a href="#">Web Development</a>
								</li>
								<li>
									<i class="bi bi-chevron-right"></i>
									<a href="#">Product Management</a>
								</li>
								<li>
									<i class="bi bi-chevron-right"></i> <a href="#">Marketing</a>
								</li>
								<li>
									<i class="bi bi-chevron-right"></i>
									<a href="#">Graphic Design</a>
								</li> -->
							</ul>
						</div>

						<div class="col-lg-4 col-md-6 footer-newsletter">
							<!-- <h4>Our Newsletter</h4>
							<p>
								Tamen quem nulla quae legam multos aute sint culpa legam noster
								magna
							</p>
							<form action="" method="post">
								<input type="email" name="email" /><input
									type="submit"
									value="Subscribe"
								/>
							</form> -->
						</div>
					</div>
				</div>
			</div>

			<div class="footer-legal text-center">
				<div
					class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center"
				>
					<div class="d-flex flex-column align-items-center align-items-lg-start">
						<div class="copyright">
							&copy; Copyright <strong><span>WCKMarkets</span></strong
							>. All Rights Reserved
						</div>
						<div class="credits">
							<!-- All the links in the footer should remain intact. -->
							<!-- You can delete the links only if you purchased the pro version. -->
							<!-- Licensing information: https://bootstrapmade.com/license/ -->
							<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
							Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
						</div>
					</div>

					<div class="social-links order-first order-lg-last mb-3 mb-lg-0">
						<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
						<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
						<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
						<a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
						<a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->

		<a href="#" class="scroll-top d-flex align-items-center justify-content-center"
			><i class="bi bi-arrow-up-short"></i
		></a>

		<div id="preloader"></div>

		<!-- Vendor JS Files -->
		<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/vendor/aos/aos.js"></script>
		<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
		<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
		<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
		<script src="assets/vendor/php-email-form/validate.js"></script>

		<!-- Template Main JS File -->
		<script src="assets/js/main.js"></script>
		<script>
			function getCourse(courseName) {
				document.getElementById("modal-header").innerHTML = courseName + ' Application Form';
				document.getElementById("course-name").value = courseName;
			}
		</script>
	</body>
</html>