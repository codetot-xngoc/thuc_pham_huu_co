<?php 
$trang = 1;
if(isset($_GET['trang'])){
$trang = $_GET['trang'];
}
$tt1trang = 2 ; 
$from = ($trang-1)*$tt1trang;
$tongtintuc = $connect->query("select*from tintuc");
$tongtrang  = ceil(mysqli_num_rows($tongtintuc)/$tt1trang);
$tintuc=$connect->query("select*from tintuc limit $from, $tt1trang");
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
			</div>
		</div>
	</div>
</section>

<div class="row mt-2 mb-3">
	<div class="col text-center">
		<div class="block-27">
			<ul>

				<!-- về trang đầu -->

				<?php  if($trang>3){
					$dau=1 ?>
					<li style="width: 100px;"><a style=" width: 100px;border-radius: 20px;" href="?rq=tt&trang=<?=$dau?>">Trang Đầu</a></li>

				<?php }  ?>

				<!-- lùi 1 trang -->
				<?php if($trang>1){ 
					$prev =$trang-1;
					?>
					<li><a href="?rq=tt&trang=<?=$prev?>">&lt;</a></li>
				<?php  }?>

				<!-- ///////////// -->
				<?php for($i=1;$i<=$tongtrang;$i++){ ?>   
					<?php if ($i==$trang) { ?>
						<li class="active"><span ><strong><?=$i?></strong></span></li>
					<?php }else { ?>
						<?php if ($i > $trang-3 && $i<$trang+3) { ?>
							<li><a href="?rq=tt&trang=<?=$i?>"><?=$i?></a></li>
						<?php } ?>
					<?php } ?>
				<?php } ?>
				<!-- /////////////// -->

				<!-- Tiến 1 trang -->

				<?php if($trang<=$tongtrang-1){ 
					$next =$trang+1;
					?>
					<li><a href="?rq=tt&trang=<?=$next?>">&gt;</a></li>
				<?php  }?>


				<!-- Đến trang cuối -->

				<?php  if($trang<$tongtrang-3){
					$cuoi=$tongtrang ?>
					<li style="width: 107px;"><a style=" width: 107px;border-radius: 20px;" href="?rq=tt>&trang=<?=$cuoi?>">Trang Cuối</a></li>

				<?php }  ?>
			</ul>
		</div>
	</div>
</div>