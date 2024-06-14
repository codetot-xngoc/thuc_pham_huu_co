<?php 
if (isset($_POST['tk'])) {
 $tk=$_POST['tk'];
 $mk=$_POST['mk'];
 $query="select*from khachhang where taikhoan='$tk' and matkhau='$mk'";
 $result= $connect->query($query);
 if (mysqli_num_rows($result)==0) {
   echo "<script>Swal.fire(
            {
                title: 'Tài Khoản Hoặc Mật Khẩu Chưa Chính Xác',
                icon: 'error',
                confirmButtonClass: 'btn btn-primary w-xs mt-2',
            }
    );</script>";
 }else {
   $_SESSION['khachhang']=$tk;
   if (isset($_GET['dathang'])) {
     header("location: ?rq=dathang&tong=".$_GET['tong']);
   }else{
    header("location: ?rq=home");

  }
}
}
?>

<!-- <section>
  <?php if(isset($alert)): ?>
    <section class="alert alert-danger text-center"><?php echo $alert; ?></section>
  <?php endif; ?>
  <div style="padding: 40px;" class="hero-wrap hero-bread">

    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
       <h1 class="mb-0 bread">Đăng Nhập</h1>
     </div>
   </div>

 </div>

 <div class="container col-md-4">
   <form method="POST">
     <label class="form-group">Tên Đăng Nhập</label><input type="text" name="tk" class="form-control">
     <label class="form-group">Mật Khẩu</label><input type="password" name="mk" class="form-control">
     <section style="margin-top:10px" class="text-right"><input type="submit" value="Đăng Nhập" class="btn btn-primary"></section>
   </form>
 </div>
</section> -->

<section class="vh-100" style="background-color: #82ae46;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Đăng Nhập</h3>
            <form method="POST">
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="text" name="tk" class="form-control form-control-lg" />
              <label class="form-label"  for="typeEmailX-2">Tài Khoản</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" name="mk" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Mật Khẩu</label>
            </div>
            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Đăng Nhập</button>
            </form>
            <a href="?rq=register" ><i>Đăng kí tài khoản</i></a>
</section>