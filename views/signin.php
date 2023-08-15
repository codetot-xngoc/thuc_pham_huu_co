<?php 
if (isset($_POST['tk'])) {
 $tk=$_POST['tk'];
 $mk=$_POST['mk'];
 $query="select*from khachhang where taikhoan='$tk' and matkhau='$mk'";
 $result= $connect->query($query);
 if (mysqli_num_rows($result)==0) {
   $alert="Tài Khoản Hoặc Mật Khẩu Chưa Chính Xác!!!";
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

<section>
  <?php if(isset($alert)): ?>
    <section class="alert alert-danger text-center"><?php echo $alert; ?></section>
  <?php endif; ?>
  <div style="padding: 40px;" class="hero-wrap hero-bread">

    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
       <h1 class="mb-0 bread">Sign In</h1>
     </div>
   </div>

 </div>

 <div class="container col-md-6">
   <form method="POST">
     <label class="form-group">Tên Đăng Nhập</label><input type="text" name="tk" class="form-control">
     <label class="form-group">Mật Khẩu</label><input type="password" name="mk" class="form-control">
     <section style="margin-top:10px" class="text-right"><input type="submit" value="Đăng Nhập" class="btn btn-primary"></section>
   </form>
 </div>
</section>