 <?php 

    $id=$_GET['id'];
    $khachhang = mysqli_fetch_array($lk->query("select*from khachhang where id = $id"));
    if (isset($_POST['sb'])) {

      $ten=$_POST['ten'];
      $email=$_POST['email'];
      $dc=$_POST['dc'];
      $sdt=$_POST['sdt'];
      $tk=$_POST['tk'];
      $mk=$_POST['mk'];
      
      $query="update khachhang set taikhoan = '$tk',matkhau='$mk',fullname='$ten',sdt='$sdt'
      ,email='$email',diachi='$dc' where id = $id ";
      $lk->query($query);
    }
  ?>

 <main class="app-content">

  <div class="row">
    <div class="col-md-12">

      <div class="tile">

        <h3 class="tile-title">Update Khách Hàng</h3>
        <div class="tile-body">
          <div class="row element-button">

          </div>
          <form method="POST" class="row">

            <div class="form-group col-md-4">
              <label class="control-label">Họ Và Tên</label>
              <input class="form-control" name="ten" value="<?=$khachhang['fullname']?>" type="text" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Địa chỉ email</label>
              <input class="form-control" name="email" value="<?=$khachhang['email']?>" type="email" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Địa chỉ </label>
              <input class="form-control" type="text" value="<?=$khachhang['diachi']?>" name="dc" required>
            </div>
            <div class="form-group  col-md-4">
              <label class="control-label">Số điện thoại</label>
              <input class="form-control" type="tel" value="<?=$khachhang['sdt']?>" name="sdt" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Tài Khoản Khách Hàng</label>
              <input class="form-control" value="<?=$khachhang['taikhoan']?>" name="tk" type="text">
            </div>
            <div class="form-group  col-md-3">
              <label class="control-label">Mật Khẩu</label>
              <input class="form-control" value="<?=md5($khachhang['matkhau'])?>" name="mk" type="text" required>
            </div>

            <div class="form-group  col-md-2 ml-auto">
              <input class="form-control" name="sb" value="Lưu" type="submit" >
            </div>


          </form>
        </div>

      </div>

    </main>