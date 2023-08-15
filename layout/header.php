
<?php if (isset($_GET['rq'])) { ?>
	<?php if($_GET['rq']=="tt"){ ?>
		<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center">
					<div class="col-md-9 ftco-animate text-center">
						<p class="breadcrumbs"><span class="mr-2"><a href="?rq=home">Trang Chủ</a></span></p>
						<h1 class="mb-0 bread">Tin Tức</h1>
					</div>
				</div>
			</div>
		</div>
	<?php } elseif ($_GET['rq']=="home") { ?>
		

		<section id="home-section" style="margin-bottom:20px" class="hero">
			<div class="home-slider owl-carousel">
				<div class="slider-item" style="background-image: url(images/bg_1.jpg);">
					<div class="overlay"></div>
					<div class="container">
						<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

							<div class="col-md-12 ftco-animate text-center">
								<h1 class="mb-2">Rau  &amp; Trái Cây Tươi</h1>
								<h2 class="subheading mb-4">Chúng Tôi Cung Cấp Rau &amp; Trái Cây Tươi</h2>
								<p><a href="?rq=sanpham" class="btn btn-primary">Xem Thêm</a></p>
							</div>

						</div>
					</div>
				</div>

				<div class="slider-item" style="background-image: url(images/bg_2.jpg);">
					<div class="overlay"></div>
					<div class="container">
						<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

							<div class="col-sm-12 ftco-animate text-center">
								<h1 class="mb-2">Thực Phẩm Tươi &amp; Hữu Cơ 100%</h1>
								<h2 class="subheading mb-4">Chúng Tôi Cung Cấp Rau &amp; Trái Cây Tươi</h2>
								<p><a href="?rq=sanpham" class="btn btn-primary">Xem Thêm</a></p>

							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
	<?php } else{ ?>

		<section id="home-section" style="margin-bottom:20px" class="hero">
			<div class="home-slider owl-carousel">
				<div class="slider-item" style="background-image: url(images/bg_1.jpg);">
					<div class="overlay"></div>
					<div class="container">
						<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

							<div class="col-md-12 ftco-animate text-center">
								<h1 class="mb-2">Rau  &amp; Trái Cây Tươi</h1>
								<h2 class="subheading mb-4">Chúng Tôi Cung Cấp Rau &amp; Trái Cây Tươi</h2>
								<p><a href="?rq=sanpham" class="btn btn-primary">Xem Thêm</a></p>
							</div>

						</div>
					</div>
				</div>

				<div class="slider-item" style="background-image: url(images/bg_2.jpg);">
					<div class="overlay"></div>
					<div class="container">
						<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

							<div class="col-sm-12 ftco-animate text-center">
								<h1 class="mb-2">Thực Phẩm Tươi &amp; Hữu Cơ 100%</h1>
								<h2 class="subheading mb-4">Chúng Tôi Cung Cấp Rau &amp; Trái Cây Tươi</h2>
								<p><a href="?rq=sanpham" class="btn btn-primary">Xem Thêm</a></p>

							</div>

						</div>
					</div>
				</div>
			</div>
		</section>


	<?php }}else{ ?>

		<section id="home-section" style="margin-bottom:20px" class="hero">
			<div class="home-slider owl-carousel">
				<div class="slider-item" style="background-image: url(images/bg_1.jpg);">
					<div class="overlay"></div>
					<div class="container">
						<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

							<div class="col-md-12 ftco-animate text-center">
								<h1 class="mb-2">Rau  &amp; Trái Cây Tươi</h1>
								<h2 class="subheading mb-4">Chúng Tôi Cung Cấp Rau &amp; Trái Cây Tươi</h2>
								<p><a href="?rq=sanpham" class="btn btn-primary">Xem Thêm</a></p>
							</div>

						</div>
					</div>
				</div>

				<div class="slider-item" style="background-image: url(images/bg_2.jpg);">
					<div class="overlay"></div>
					<div class="container">
						<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

							<div class="col-sm-12 ftco-animate text-center">
								<h1 class="mb-2">Thực Phẩm Tươi &amp; Hữu Cơ 100%</h1>
								<h2 class="subheading mb-4">Chúng Tôi Cung Cấp Rau &amp; Trái Cây Tươi</h2>
								<p><a href="?rq=sanpham" class="btn btn-primary">Xem Thêm</a></p>

							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>
