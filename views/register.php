<?php 
if (isset($_POST['tk'])) {
	$tk=$_POST['tk'];
	$result=$connect->query("select*from khachhang where taikhoan = '$tk'");
	if (mysqli_num_rows($result)!=0) {
		$alert='Tài Khoản Đã Tồn Tại';
	}else{
		$mk=$_POST['mk'];
		$hvt=$_POST['hvt'];
		$sdt=$_POST['sdt'];
		$email=$_POST['email'];
		$dc=$_POST['diachi'];
		$connect->query("insert khachhang(taikhoan,matkhau,fullname,sdt,email,diachi) value('$tk','$mk','$hvt','$sdt','$email','$dc')");
		echo"<script> alert('Đăng kí thành công !!!')</script>";
		header("location: ?rq=signin");
	}
}
?>


<section>
	<?php if(isset($alert)): ?>
		<section class="alert alert-danger text-center"><?php echo $alert; ?></section>
	<?php endif; ?>
	<div style="padding: 40px;" class="hero-wrap hero-bread">

		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-0 bread">Đăng Kí Tài Khoản</h1>
			</div>
		</div>

	</div>

	<div class="container col-md-6">
		<form method="POST">
			<label class="form-group">Tên Đăng Nhập</label><input type="text" name="tk" class="form-control" required>
			<label class="form-group">Mật Khẩu</label><input required type="password" name="mk" class="form-control">
			<label class="form-group">Nhập Lại Mật Khẩu</label><input type="password" class="form-control" name="lmk"
			oninput="if(value!=mk.value){document.getElementById('checkPass').innerHTML='Không trùng Mật Khẩu'}
			else{document.getElementById('checkPass').innerHTML=''}"><section><span id="checkPass" style="color:red;"></span></section>
			<label class="form-group">Họ Và Tên</label><input type="text" name="hvt" class="form-control" required>
			<label class="form-group">Số Điện Thoại</label><input type="mobie" name="sdt" class="form-control" required>
			<label class="form-group">Email</label><input type="email" name="email" class="form-control" required>
			<label class="form-group">Địa Chỉ</label><textarea class="form-control" name="diachi"></textarea>
			<section style="margin-top:10px" class="text-right"><input type="submit" value="Đăng Kí" class="btn btn-primary"></section>
		</form>
	</div>
</section>