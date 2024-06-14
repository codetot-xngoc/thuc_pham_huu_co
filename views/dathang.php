<?php 
	//lấy id của khách hàng
$query="select*from khachhang where taikhoan='".$_SESSION['khachhang']."'";
$kh=mysqli_fetch_array($connect->query($query));

if (isset($_POST['kh'])) {
	$khachhang=$_POST['kh'];
	$email=$_POST['email'];
	$sdt=$_POST['sdt'];
	$dc=$_POST['dc'];
	$thanhtoan=$_POST['phuongthuctt'];
	$makh=$kh['id'];
	$tongt=$_GET['tong'];
		//insert vào bảng đơn hàng
	$query="insert donhang(thanhtoan,makh,tennguoinhan,sdt,email,diachi) value($thanhtoan,
	$makh,'$khachhang',$sdt,'$email','$dc')";
	$connect->query($query);

		//lấy id đơn hàng cuối cùng
	$iddh=mysqli_fetch_array($connect->query("select id from donhang order by id desc limit 1"))['id'];
	//lặp lấy mã và sl sản phẩm lưu trông giỏ hàng
	foreach ($_SESSION['cart'] as $keys=>$value) {
		$idsp=$keys;
		$sl=$value;
		//lấy giá sp
		$gia=mysqli_fetch_array($connect->query("select giasp from sanpham where id=$keys"))['giasp'];
		$connect->query("insert chitietdonhang(masp,madh,soluong,giaban) value 
			($idsp,$iddh,$sl,$gia)");
	}

	if($thanhtoan==4){
		unset($_SESSION['cart']);
		header("location: ?rq=paypal&tt=".$_GET['tong']);
	}else{
		unset($_SESSION['cart']);
		echo '
		<script>
		Swal.fire({
			title: "Đặt Hàng Thành Công!",
			text: "Payment successful!",
			icon: "success",
			confirmButtonText: "Ok"
			}).then((result) => {
				if (result.isConfirmed) {
					window.location.href = "?rq=home";
				}
				});
				</script>';
			}

		}
		?>

		<section  class="ftco-section pt-5">
		<h1 class="text-center pb-5 " style="color:#82ae46">ĐẶT HÀNG</h1>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-7 ftco-animate">
						<form method="POST"  class="billing-form">

							<h3 class="mb-4 billing-heading">Chi Tiết Thanh Toán</h3>
							<div class="row align-items-end">

								<div class="col-md-12">
									<div class="form-group">
										<label for="lastname">Họ Và Tên</label>
										<input type="text" name="kh" class="form-control" value="<?=$kh['fullname']?>">
									</div>
								</div>

								<div class="w-100"></div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="phone">Số Điện Thoại</label>
										<input type="text" name="sdt" class="form-control" value="<?=$kh['sdt']?>" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="emailaddress">Email</label>
										<input type="text" name="email" class="form-control" value="<?=$kh['email']?>" >
									</div>
								</div>
								<div class="w-100"></div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="streetaddress">Địa Chỉ Nhận Hàng</label>
										<textarea class="form-control" name="dc"  rows="5"><?=$kh['diachi']?></textarea>
									</div>
								</div>

							</div>
						</div>
						<div class="col-xl-5">
							<div class="row mt-5 pt-3">
								<div class="col-md-12 d-flex mb-5">
									<div style="margin-top: 30px;" class="cart-detail cart-total p-3 p-md-4">
										<h3 class="billing-heading mb-4">Số Tiền Thanh Toán</h3>

										<hr>
										<p class="d-flex total-price">

											<span><?=number_format($_GET['tong'],0,',','.')?> vnđ</span>
										</p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="cart-detail p-3 p-md-4">
										<h3 class="billing-heading mb-4">Phương Thức Thanh Toán</h3>
										<?php 
										$result=$connect->query("select*from phuongthuctt");
										?>
										<div class="form-group">
											<div class="col-md-12">

												<?php foreach ($result as $value) { ?>
													<div class="radio">
														<label><input type="radio"  checked name="phuongthuctt" value="<?=$value['id']?>" class="mr-2"><?=$value['hinhthuc']?></label>
													</div>
												<?php } ?>

											</div>
										</div>


										<p><input type="submit" class="btn btn-primary py-3 px-4" value="Đặt Hàng"></p>
									</div>
								</div>
							</div>
						</div> 
					</form>
				</div>
			</div>
		</section>