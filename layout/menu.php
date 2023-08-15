   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="?rq=home">Vegefoods</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="?rq=home" class="nav-link">Trang Chủ</a></li>
	          <li class="nav-item active"><a href="?rq=sanpham" class="nav-link">Sản Phẩm</a></li>
	          <li class="nav-item active"><a href="?rq=gt" class="nav-link">Giới Thiệu</a></li>
	          <li class="nav-item active"><a href="?rq=tt" class="nav-link">Tin Tức</a></li>
	          <li class="nav-item active"><a href="?rq=contact" class="nav-link">Liên Hệ</a></li>
	          <?php if (!empty($_SESSION['khachhang'])) { ?>
	          	 <li class="nav-item" style="display: flex; " ><span style="padding-right: 0;" class="nav-link ">Xin Chào :<?=$_SESSION['khachhang']?></span> <a style="padding-left: 0;" href="?rq=thoat" class="nav-link active" >[ Thoát ]</a></li>
	          	
	         <?php }else {?>
	          
	          	 <li class="nav-item active"><a href="?rq=signin" class="nav-link ">Đăng Nhập</a></li>
	          		<li class="nav-item active" ><a href="?rq=register" class="nav-link">Đăng Kí</a></li>
	        <?php  } ?>
	         


	          <li class="nav-item cta cta-colored"><a href="?rq=cart" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>