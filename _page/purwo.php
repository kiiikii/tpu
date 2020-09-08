<?php
	$title = 'TPU Purwoloyo';
	$url = 'purwo';

	$db->where('idkub', Array(5), 'IN');
	$row = $db->ObjectBuilder()->getOne('kuburan');
	if ($db->count>0) {
		$idkub = $row->idkub;
		$namakub = $row->namakub;
		$alamat = $row->alamat;
		$deskripsi = $row->deskripsi;
	}
?>

		<!-- section hero -->
		<section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('assets/images/kuburan-purwoloyo.JPG');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="overlay-2"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
					<div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
						<h1 class="mb-3 bread"><?= $row->namakub ?></h1>
						<p class="breadcrumbs">
							<span class="mr-2">
								<a href="<?= url('beranda') ?>">
									Home <i class="ion-ios-arrow-foward"></i>
								</a>
							</span>
							<span><?= $row->namakub ?></span>
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-degree-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-8 ftco-animate">
						<?php
							$db->where('idkub', Array(1), 'IN');
							$kubur = $db->ObjectBuilder()->get('kuburan');
							foreach ($kubur as $row) {
						?>
						<h2 class="mb-3"><?= $row->namakub ?></h2>
						<p><?= $row->alamat ?></p>
						<img src="assets/images/bonoloyo.jpg" alt="" class="img-fluid">
						<p><?= $row->deskripsi ?></p>
						<?php 
							}
					 	?>
					</div>
					<div class="col-md-4 pl-md-5 sidebar ftco-animate">
						<div class="sidebar-box ftco-animate">
							<h3>Titik Letak Kuburan</h3>
							<div class="block-21 mb-4 d-flex">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.337370384103!2d110.8237425147765!3d-7.538135694563335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16bbb50296e7%3A0xc4c09d626583ff2a!2sTPU%20Bonoloyo!5e0!3m2!1sid!2sid!4v1595169881041!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
						</div>
						<div class="sidebar-box ftco-animate">
							<h3>Recent Kuburan</h3>
							<div class="block-21 mb-4 d-flex">
								<a class="blog-img" style="background-image: url('assets/images/bonoloyo.jpg');"></a>
								<div class="text pl-3">
									<h3 class="heading">
										<?php
												$db->where('idkub', Array(1), 'IN');
												$url1 = $db->ObjectBuilder()->get('kuburan');
												foreach ($url1 as $row) {
										?>
										<a href="<?= url('bonoloyo') ?>"><?= $row->namakub ?></a>
										<?php
											}
										?>
									</h3>
									<div class="meta">
                    <div><a href="#"><span class="icon-calendar mr-2"></span>Oct. 17, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
								</div>
							</div>
							<div class="block-21 mb-4 d-flex">
								<a class="blog-img" style="background-image: url('assets/images/astana-bibis-luhur.JPG');"></a>
								<div class="text pl-3">
									<h3 class="heading">
										<?php
												$db->where('idkub', Array(2), 'IN');
												$url1 = $db->ObjectBuilder()->get('kuburan');
												foreach ($url1 as $row) {
										?>
										<a href="<?= url('bibisluhur') ?>"><?= $row->namakub ?></a>
										<?php
											}
										?>
									</h3>
									<div class="meta">
                    <div><a href="#"><span class="icon-calendar mr-2"></span>Oct. 17, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
								</div>
							</div>
							<div class="block-21 mb-4 d-flex">
								<a class="blog-img" style="background-image: url('assets/images/astana-oetara-web.jpg');"></a>
								<div class="text pl-3">
									<h3 class="heading">
										<?php
												$db->where('idkub', Array(3), 'IN');
												$url1 = $db->ObjectBuilder()->get('kuburan');
												foreach ($url1 as $row) {
										?>
										<a href="<?= url('oetara') ?>"><?= $row->namakub ?></a>
										<?php
											}
										?>
									</h3>
									<div class="meta">
                    <div><a href="#"><span class="icon-calendar mr-2"></span>Oct. 17, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
								</div>
							</div>
							<div class="block-21 mb-4 d-flex">
								<a class="blog-img" style="background-image: url('assets/images/kuburan-mojo-jebres-solo.jpg');"></a>
								<div class="text pl-3">
									<h3 class="heading">
										<?php
												$db->where('idkub', Array(4), 'IN');
												$url1 = $db->ObjectBuilder()->get('kuburan');
												foreach ($url1 as $row) {
										?>
										<a href="<?= url('mojo') ?>"><?= $row->namakub ?></a>
										<?php
											}
										?>
									</h3>
									<div class="meta">
                    <div><a href="#"><span class="icon-calendar mr-2"></span>Oct. 17, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
								</div>
							</div>
							<div class="block-21 mb-4 d-flex">
								<a class="blog-img" style="background-image: url('assets/images/kuburan-purwoloyo.JPG');"></a>
								<div class="text pl-3">
									<h3 class="heading">
										<?php
												$db->where('idkub', Array(5), 'IN');
												$url1 = $db->ObjectBuilder()->get('kuburan');
												foreach ($url1 as $row) {
										?>
										<a href="<?= url('purwo') ?>"><?= $row->namakub ?></a>
										<?php
											}
										?>
									</h3>
									<div class="meta">
                    <div><a href="#"><span class="icon-calendar mr-2"></span>Oct. 17, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>