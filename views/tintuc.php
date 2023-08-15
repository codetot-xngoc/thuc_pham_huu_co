<?php 
$tintuc=$connect->query("select*from tintuc");
?>
<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-10 ftco-animate">
				<div class="row">
					<?php foreach ($tintuc as $value) { ?>
 

						<div class="col-md-12 d-flex ftco-animate">
						<div class="blog-entry align-self-stretch d-md-flex">
						<a href="?rq=cttt&id=<?=$value['id']?>" class="block-20" style="background-image: url('images/<?=$value['anhtt']?>');">
						</a>
						<div class="text d-block pl-md-4">
						<div class="meta mb-3">
		                  <div><a href="#"></a><?=$value['ngaydang']?></div>
		                  
		                  </div>
		                <h3 class="heading"><a href="?rq=cttt&id=<?=$value['id']?>"><?=$value['tieude']?></a></h3>
		                <p><?=$value['mota']?></p>
		                <p><a href="?rq=cttt&id=<?=$value['id']?>" class="btn btn-primary py-2 px-3">Đọc Thêm</a></p>
		                </div>
		                </div>
		                </div>
		           <?php   } ?>




		            </div>
		          </div> <!-- .col-md-8 -->

		        </div>

		      </div>

    </section> <!-- .section -->