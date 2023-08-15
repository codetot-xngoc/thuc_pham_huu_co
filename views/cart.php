   <?php 
   if (empty($_SESSION['cart'])) {
   	$_SESSION['cart']=[];
   }

   if (isset($_GET['action'])) {
   	switch ($_GET['action']) {
   		case 'add':
   		$id=$_GET['id'];
   		if (array_key_exists($id, $_SESSION['cart'])) {
   			if (isset($_POST['sl'])) {
   				$_SESSION['cart'][$id]+=$_POST['sl'];
   			}else{
   				$_SESSION['cart'][$id]++;}
   			}else {
   				if (isset($_POST['sl'])) {
   					$_SESSION['cart'][$id]=$_POST['sl'];
   				}else{
   					$_SESSION['cart'][$id]=1;}
   				}
   				header("location: ?rq=cart");
   				break;

   				case 'xoa':
   				$id=$_GET['id'];
   				unset($_SESSION['cart'][$id]);
   				break;

   				case 'tang':
   				$id=$_GET['id'];
   				$_SESSION['cart'][$id]++;
   				header("location: ?rq=cart");
   				break;

   				case 'giam':
   				$id=$_GET['id'];
   				if ($_SESSION['cart'][$id]>1) {
   					$_SESSION['cart'][$id]--;
   				}
   				header("location: ?rq=cart");
   				break;

   				case 'xoaall':
   				unset($_SESSION['cart']);
   				break;

   				case 'dathang':
   					if (isset($_SESSION['khachhang'])) {
   						header("location: ?rq=dathang&tong=".$_GET['tong']);

   					}else{
   						header("location: ?rq=signin&dathang=1&tong=".$_GET['tong']);
   					}
   				break;
   			}
   		}
   		?>



   		<section class="ftco-section ftco-cart">
   			<?php 
   			if (!empty($_SESSION['cart'])) {
   				$ids  = implode(",",array_keys($_SESSION['cart']));
   				$query = "select*from sanpham where id in($ids)";
   				$result = $connect->query($query);

   				?>
   				<div class="container">
   					<div class="row">
   						<div class="col-md-12 ftco-animate">
   							<div class="cart-list">
   								<table class="table">
   									<thead class="thead-primary">
   										<tr class="text-center" id="tang">
   											<th>&nbsp;</th>
   											<th>&nbsp;</th>
   											<th>Tên Sản Phẩm</th>
   											<th>Giá Bánn</th>
   											<th>Số Lượng</th>
   											<th>Tổng Phụ</th>
   										</tr>
   									</thead>
   									<tbody>
   										<?php 
   										$tong=0;
   										foreach ($result as $value) { ?>
   											<tr class="text-center">
   												<td class="product-remove"><a href="?rq=cart&action=xoa&id=<?=$value['id']?>"><span class="ion-ios-close"></span></a></td>

   												<td class="image-prod"><div class="img" style="background-image:url(images/<?=$value['anhsp']?>);"></div></td>

   												<td class="product-name">
   													<h3><?=$value['tensp']?></h3>
   													<p><?php echo $value['mota'] ?></p>
   												</td>

   												<td class="price"><?=number_format($value['giasp'],0,',','.')?>vnđ/kg</td>

   												<td >
   													<a class="btn btn-outline-warning" href="?rq=cart&action=giam&id=<?=$value['id']?>#tang">-</a>&nbsp;&nbsp;&nbsp;&nbsp;
   													<span ><?=$_SESSION['cart'][$value['id']]?></span>&nbsp;&nbsp;&nbsp;&nbsp;
   													<a class="btn btn-outline-warning " href="?rq=cart&action=tang&id=<?=$value['id']?>">+</a>

   												</td>

   												<td class="total">
   													<?=number_format($value['giasp']*$_SESSION['cart'][$value['id']],0,',','.')?>vnđ
   												</td>

   											</tr><!-- END TR-->
   											<?php $tong+=$value['giasp']*$_SESSION['cart'][$value['id']];
   											?>
   										<?php } ?>


   									</tbody>
   								</table>
   							</div>
   						</div>
   					</div>
   					<div class="row justify-content-center">

   						<div class="col-lg-8 mt-9 cart-wrap ftco-animate">
   							<div class="cart-total mb-3 text-center ">

   								<p class="d-flex total-price">
   									<span><h3>Tổng số tiền trong giỏ hàng</h3></span>
   									<span><?=number_format($tong,0,',','.')?> vnđ</span>
   								</p>
   								<hr>
   							</div>
   							<p class="text-right"><a href="?rq=cart&action=xoaall" class="btn btn-primary py-3 px-4">Xóa Giỏ Hàng</a>
   								<a href="?rq=cart&action=dathang&tong=<?=$tong?>" class="btn btn-primary py-3 px-4">Đặt Hàng</a></p>

   							</div>
   						</div>
   					<?php }else{ ?>
   						<section class="alert alert-danger "  style="text-align:center">Giỏ Hàng Trống</section>

   					<?php }

   					?>

   				</section>