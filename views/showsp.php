


<section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Sản Phẩm Tươi</span>
            <h2 class="mb-4">Các Sản Phẩm Của Chúng Tôi</h2>
            <p>Chúng Tôi Cung Cấp Rau & Trái Cây Tươi</p>
          </div>
        </div>   		
    	</div>
    	<?php if (isset($_GET['rq'])) { ?>
    		<?php if ($_GET['rq']=="sanpham") { ?>
    			
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="?rq=sanpham" class="border">Tất Cả</a></li>
    					<?php foreach ($loaisp as $value): ?>
    					<li><a href="?rq=sanpham&id=<?=$value['id']?>" class="border "><?php echo $value['tenloai'];; ?></a></li>
    					<?php endforeach ?>
    					
    				</ul>
    			</div>
    		</div>
    		<?php } ?>
    		<?php } ?>
    	<div class="container">
    		<div class="row">
    			<?php foreach ($result as $value) { ?>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="?rq=chitiet&id=<?=$value['id']?>" class="img-prod"><img class="img-fluid" src="images/<?=$value['anhsp']?>">
    						
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?=$value['tensp']?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale"><?=number_format($value['giasp'],0,',','.')?> vnđ</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							
	    							<a href="?rq=cart&action=add&id=<?=$value['id']?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    						
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<?php } ?>
    		</div>
    	</div>
    </section>