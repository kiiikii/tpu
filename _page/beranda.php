<?php  
	$title = 'HOME - TPU Surakarta';
	$url = 'beranda';
	$jsfile = 'leaflet';

	//search
	$namakubur = (isset($_GET['namakub']))?$_GET['namakub']:'';

	//counting kecamatan
	$kecamatan = $db->get('kecamatan');
	$countkec = $db->getValue("kecamatan", "count(*)");

	//counting kuburan
	$kuburan = $db->get('kuburan');
	$countkub = $db->getValue("kuburan", "count(*)");

	//counting Lahan
	$lahan = $db->get('lahan');
	$countla = $db->getValue("lahan", "count(*)");
?>

		<!-- section hero -->
		<div class="hero-wrap" style="background-image: url('assets/images/Wisata-Sejarah-Keraton-Kasunanan-Surakarta.png');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="overlay-2"></div>
			<div class="container">
				<div class="row no-gutters slider-text justify-content-center align-items-center">
					<div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
						<div class="text text-center w-100">
							<h1 class="mb-4">E-TPU Surakarta <br>Web Apps about cemetery in Surakarta city</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div>
		</div>

		<!-- section search -->
		<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="search-wrap-1 ftco-animate">
							<form class="search-property-1">
								<div class="row">
									<?= input_hidden('halaman', $url) ?>
									<div class="col-lg align-items-end">
										<div class="form-group">
											<label for="#">Nama Kuburan</label>
											<div class="form-field">
												<div class="icon"><span class="ion-ios-search"></span></div>
												<?= input_text('namakub', $namakubur) ?>
											</div>
										</div>
									</div>
									<div class="col-lg align-items-end">
										<div class="form-group">
											<div class="form-field">
												<input type="submit" value="search tpu" class="form-control btn btn-primary">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section Map -->
		<section class="ftco-section goto-here">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 heading-section text-center ftco-animate mb-5">
						<span class="subheading">Find Cemetery</span>
						<h2 class="mb-2">Find Cemetery in Surakarta</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="mapid"></div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section About -->
		<section class="ftco-section ftco-fullwidth">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 heading-section text-center ftco-animate mb-5">
						<span class="subheading">About</span>
						<h2 class="mb-2">Kota Surakarta</h2>
					</div>
				</div>
			</div>
			<div class="container-fluid px-0">
				<div class="row d-md-flex text-wrapper align-items-stretch">
					<div class="one-half mb-md-0 mb-4 img d-flex align-self-stretch" style="background-image: url('<?= templates() ?>images/logo-pemkot-surakarta-png-1.png'); background-size: 60%;"></div>
					<div class="one-half half-text d-flex justify-content-end align-items-center">
						<div class="text-inner pl-md-5">
							<div class="row d-flex">
								<div class="col-md-12 d-flex align-self-stretch ftco-animate">
									<div class="media block-6 services-wrap d-flex">
										<div class="d-flex justify-content-center align-items-center"><!--<span class="flaticon-piggy-bank"></span>--></div>
										<div class="media-body pl-4">
											<h3 style="text-align: center; font-size: 30pt;">Solo Berseri Tanpa Korupsi</h3>
											<p style="text-align: center; font-size: 15pt;">
												Solo Berseri Tanpa Korupsi untuk Mewujudkan Masyarakat 3 WMP (Waras, Wasis, Wareg, Mapan dan Papan) dengan membangun 5 Budhaya (Budhaya Hidup Gotong Royong, Budhaya Memiliki, Budhaya Merawat, Budhaya Menjaga, Budhaya Mengamankan Kota Solo dan isinya)
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section Counter -->
		<section class="ftco-counter ftco-section img" id="section-counter">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="text text-border d-flex align-items-center">
								<strong class="number" data-number="<?= $countkec ?>">0</strong>
								<span>Area <br>Kecamatan</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="text text-border d-flex align-items-center">
								<strong class="number" data-number="<?= $countkub ?>">0</strong>
								<span>Total <br>Kuburan</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="text text-border d-flex align-items-center">
								<strong class="number" data-number="<?= $countla ?>">0</strong>
								<strong class="number"> m<sup>2</sup></strong>
								<span>Total <br>Lahan</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Section List Kuburan -->
		<?php
			$row = $db->ObjectBuilder()->getOne('kuburan');
			if ($db->count>0) {
				$idkub = $row->idkub;
				$namakub = $row->namakub;
				$alamat = $row->alamat;
				$deskripsi = $row->deskripsi;
			}
		?>
		<section class="ftco-section testimony-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 heading-section text-center ftco-animate">
						<span class="subheading">List</span>
						<h2 class="mb-2">List cemetery in Surakarta</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="property-wrap ftco-animate carousel-testimony owl-carousel ftco-owl">
							<div class="item">
								<div class="testimony-wrap py-4">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url('assets/images/bonoloyo.jpg');">
										<a href="#" class="icon d-flex align-items-center justify-content-center btn-custom">
											<span class="ion-ios-link"></span>
										</a>
									</div>
									<div class="text">
										<?php
											$db->where('idkub', Array(1), 'IN');
											$kubur = $db->ObjectBuilder()->get('kuburan');
											foreach ($kubur as $row) {
										?>
										<h3 class="mb-3"><a href="<?= url('bonoloyo') ?>"><?= $row->namakub ?></a></h3>
										<span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i><?= $row->alamat ?></span>
										<?php
											}
										?>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="testimony-wrap py-4">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url('assets/images/astana-oetara-web.jpg');">
										<a href="#" class="icon d-flex align-items-center justify-content-center btn-custom">
											<span class="ion-ios-link"></span>
										</a>
									</div>
									<div class="text">
										<?php
											$db->where('idkub', Array(3), 'IN');
											$kubur = $db->ObjectBuilder()->get('kuburan');
											foreach ($kubur as $row) {
										?>
										<h3 class="mb-3"><a href="<?= url('oetara') ?>"><?= $row->namakub ?></a></h3>
										<span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i><?= $row->alamat ?></span>
										<?php
											}
										?>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="testimony-wrap py-4">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url('assets/images/kuburan-mojo-jebres-solo.jpg');">
										<a href="#" class="icon d-flex align-items-center justify-content-center btn-custom">
											<span class="ion-ios-link"></span>
										</a>
									</div>
									<div class="text">
										<?php 
											$db->where('idkub', array(4), 'IN');
											$kubur = $db->ObjectBuilder()->get('kuburan');
											foreach ($kubur as $row) {
										?>
										<h3 class="mb-3"><a href="<?= url('mojo') ?>"><?= $row->namakub ?></a></h3>
										<span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i><?= $row->alamat ?></span>
										<?php 
											} 
										?>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap py-4">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url('assets/images/kuburan-purwoloyo.jpg');">
										<a href="#" class="icon d-flex align-items-center justify-content-center btn-custom">
											<span class="ion-ios-link"></span>
										</a>
									</div>
									<div class="text">
										<?php
											$db->where('idkub', array(5), 'IN');
											$kubur = $db->ObjectBuilder()->get('kuburan');
											foreach ($kubur as $row) {
										?>
										<h3 class="mb-3"><a href="<?= url('purwo') ?>"><?= $row->namakub ?></a></h3>
										<span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i><?= $row->alamat ?></span>
										<?php
											}
										?>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap py-4">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url('assets/images/astana-bibis-luhur.jpg');">
										<a href="#" class="icon d-flex align-items-center justify-content-center btn-custom">
											<span class="ion-ios-link"></span>
										</a>
									</div>
									<div class="text">
										<?php 
											$db->where('idkub', array(2), 'IN');
											$kubur = $db->ObjectBUilder()->get('kuburan');
											foreach ($kubur as $row) {
										?>
										<h3 class="mb-3"><a href="<?= url('bibisluhur') ?>"><?= $row->namakub ?></a></h3>
										<span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i><?= $row->alamat ?></span>
										<?php
											}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

