<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="<?= url('beranda') ?>">TPU Surakarta</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item <?php if ($url == 'beranda') echo "active" ?>">
							<a href="<?= url('beranda') ?>" class="nav-link">Home</a>
						</li>
						<li class="nav-item <?php if ($url == 'about') echo "active" ?>">
							<a href="<?= url('about') ?>" class="nav-link">About</a>
						</li>
						<li class="nav-item <?php if ($url == 'contact') echo "active" ?>">
							<a href="<?= url('contact') ?>" class="nav-link">Contact</a>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="skripsuit/" class="nav-link">Administrator</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
