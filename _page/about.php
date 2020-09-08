<?php
	$title = 'ABOUT - TPU Surakarta';
	$url = 'about';

	//counting kecamatan
	$kecamatan = $db->get('kecamatan');
	$countkec = $db->getValue("kecamatan", "count(*)");

	//counting kuburan
	$kuburan = $db->get('kuburan');
	$countkub = $db->getValue("kuburan", "count(*)");
?>

		<!-- Section Hero -->
		<section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('assets/images/alunalunsolo.jpg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="overlay-2"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
					<div class="col-md-9 ftco-animate mb-5 text-center">
						<h1 class="mb-3 bread">About Us</h1>
						<p class="breadcrumbs">
							<span class="mr-2"><a href="<?= url('beranda') ?>">Home <i class="ion-ios-arrow-forward"></i></a></span>
							<span>About Us</span>
						</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Section About -->
		<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url('<?= templates() ?>images/logo-pemkot-surakarta-png-1.png'); background-size: 60%;"></div>
					<div class="col-md-6 wrap-about pl-md-5 ftco-animate">
						<div class="heading-section">
							<h2 class="mb-4">Apa itu E-TPU</h2>

							<p>E-TPU merupakan sebuah Web Apps yang bertujuan untuk memberikan informasi tentang Tempat Pemakaman Umum yang ada di Kota Surakarta.</p>
							<p>Web Apps ini terdapat map yang digunakan untuk melihat TPU yang ada di Kota Surakarta. dan disediakan tombol search untuk mecari TPU yang diinginkan tetapi masih dalam lingkup surakarta</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section Counter -->
		<section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img" id="section-counter">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
						<div class="block-18 py-4 mb-4">
							<div class="text text-border d-flex align-items-center">
								<strong class="number" data-number="<?= $countkec ?>">0</strong>
								<span>Area <br>Kecamatan</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
						<div class="block-18 py-4 mb-4">
							<div class="text text-border d-flex align-items-center">
								<strong class="number" data-number="<?= $countkub ?>">0</strong>
								<span>Total <br>Kuburan</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section -->
		<section class="ftco-section">
			<!-- this section just for spacing between counter and footer -->
		</section>

