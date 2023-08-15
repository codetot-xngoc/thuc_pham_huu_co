   <?php 
   if (isset($_GET['id'])) {
   	$id=$_GET['id'];
   	$query="select*from sanpham where id=$id";
   	$item=mysqli_fetch_array($connect->query($query));
   }
   ?>

   
   	<div class="container">
   		<div class="row">
   			<div class="col-lg-6 mb-5 ftco-animate">
   				<a href="images/<?=$item['anhsp']?>" class="image-popup"><img src="images/<?=$item['anhsp']?>" class="img-fluid" alt="Colorlib Template"></a>
   			</div>
   			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
   				<h3><?=$item['tensp']?></h3>
   				<p class="price"><span><?=number_format($item['giasp'],0,',','.')?> vnđ/kg</span></p>
   				<p><?=$item['mota']?>
   			</p>

   			<form action="?rq=cart&action=add&id=<?=$item['id']?>" method="POST">
   				<label class="form-group">Số Lượng :</label>
   				<input style="width:26%;margin-bottom: 10px;" value="1" type="number" name="sl" class="form-control">
   				<input type="submit" value="Đặt mua" class="btn btn-info">
   			</form>	
   		</div>
   	<hr style="border: 1.5px solid black;">
   	<div class="">
   		<h3>Mô Tả Chi Tiết</h3>
   		<div class="text-justify"><?=$item['chitietsp']?></div>
   	</div>
   	</div>
   </div>

