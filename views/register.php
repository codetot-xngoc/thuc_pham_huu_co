<?php 
if (isset($_POST['tk'])) {
	$tk=$_POST['tk'];
	$mk=$_POST['mk'];
	$hvt=$_POST['hvt'];
	$lmk = $_POST['lmk'];
	$sdt=$_POST['sdt'];
	$email=$_POST['email'];
	$dc=$_POST['diachi'];
	$result=$connect->query("select*from khachhang where taikhoan = '$tk'");
	if (mysqli_num_rows($result)!=0) {
		echo"<script>Swal.fire('Tài khoản này đã tồn tại !!!');</script>";
	}else{
		
		$connect->query("insert khachhang(taikhoan,matkhau,fullname,sdt,email,diachi) value('$tk','$mk','$hvt','$sdt','$email','$dc')");
		echo"<script>Swal.fire('Đăng kí thành công');</script>";
		header("location: ?rq=signin");
	}
}
?>


<section class="vh-110" style="background-color: #82ae46;">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Đăng Kí Tài Khoản</h3>
            <form method="POST">
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" name="tk" value="<?php if (isset($tk)): echo $tk; endif; ?>"
                class="form-control form-control-lg" />
                <label class="form-label"  for="typeEmailX-2">Tài Khoản</label>
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" name="mk" value="<?php if (isset($mk)): echo $mk; endif; ?>"
                class="form-control form-control-lg"  />
                <label class="form-label" for="typePasswordX-2">Mật Khẩu</label>
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" name="lmk" value="<?php if (isset($lmk)): echo $lmk; endif; ?>"
                class="form-control form-control-lg" oninput="if(value!=mk.value){document.getElementById('checkPass').innerHTML='Không trùng Mật Khẩu'}
                else{document.getElementById('checkPass').innerHTML=''}" />
                <section><span id="checkPass" style="color:red;"></span></section>

                <label class="form-label" for="typePasswordX-2">Nhập Lại Mật Khẩu</label>
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" name="hvt" value="<?php if (isset($hvt)): echo $hvt; endif; ?>"
                class="form-control form-control-lg"  />
                <label class="form-label" for="typePasswordX-2">Họ Và Tên</label>
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="mobie" name="sdt" value="<?php if (isset($sdt)): echo $sdt; endif; ?>"
                class="form-control form-control-lg"  />
                <label class="form-label" for="typePasswordX-2">Số Điện Thoại</label>
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" name="email" value="<?php if (isset($email)): echo $email; endif; ?>"
                class="form-control form-control-lg"  />
                <label class="form-label" for="typePasswordX-2">Email</label>
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                
                <textarea name="diachi" class="form-control form-control-lg">
                 <?php if (isset($dc)): echo $dc; endif; ?>
               </textarea>
               <label class="form-label">Địa Chỉ</label>
             </div>
             <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Đăng Kí</button>
           </form>
         </section>