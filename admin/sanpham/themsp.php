<?php 
$loaisp=$lk->query("select*from loaisp");

if (isset($_POST['tensp'])) {
  $ten=$_POST['tensp'];
  $query="select*from sanpham where tensp = '$ten'";
  $result=$lk->query($query);
  if (mysqli_num_rows($result)!=0) {
    $alert = " Sản Phẩm Đã Tồn Tại!!!";
  }else {
    $loai=$_POST['idl'];
    $gia=$_POST['gia']; 
    $mt=$_POST['mota'];
    $mtct=$_POST['motact'];

      //xử lý ảnh :
    $dd = "../images/"; //đường dẫn
    $anhsp=$_FILES['anhsp']['name'];  //lưu ảnh và tên ảnh
    $imageTemp = $_FILES['anhsp']['tmp_name'];
    $exp3 = substr($anhsp,strlen($anhsp)-3); //lấy đuôi mở rộng vs độ dài 3
    $exp4= substr($anhsp,strlen($anhsp)-4);  //___________________________4
    if ($exp3=='jpg'||$exp3=='JPG'||$exp3=='png'||$exp3=='bmp'||$exp3=='gif'||$exp4=='jpeg'||$exp4=='webp') {
      $anhsp=time().'_'.$anhsp; //nối tên ảnh vs hàm time
      move_uploaded_file($imageTemp,$dd.$anhsp);

      $lk->query("insert sanpham(idloai,tensp,giasp,anhsp,mota,chitietsp) value($loai,'$ten',$gia,'$anhsp','$mt','$mtct')");
      header("location: ?option=sanpham");

    }else{
      $alert="File ảnh chua đúng định dạng!!!";
    }

  }
}

?>

<main class="app-content">
<?php if (isset($alert)) { ?>
  <section class="alert alert-danger"><?=$alert?></section>
<?php } ?>
  <div class="row">
    <div class="col-md-12">

      <div class="tile">

        <h3 class="tile-title">Thêm Sản Phẩm</h3>
        <div class="tile-body">
          <div class="row element-button">

          </div>
          <form method="POST" class="row" enctype="multipart/form-data">

            <div class="form-group col-md-4">
              <label class="control-label">Loại Sản Phẩm</label>
              <select name="idl" class="form-control">
                <option hidden>Chọn Loại</option>
                <?php foreach($loaisp as $item): ?>
                  <option value="<?=$item['id']?>"><?=$item['tenloai']?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Tên Sản Phẩm</label>
              <input class="form-control" name="tensp" type="text" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Ảnh Sản phẩm </label>
              <input class="form-control" type="file"  name="anhsp" required>
            </div>
            <div class="form-group  col-md-4">
              <label class="control-label">Mô Tả</label>
              <textarea class="form-control" name="mota" required></textarea>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Mô Tả Chi Tiết</label>
              <textarea class="form-control" name="motact"></textarea>
              <script>CKEDITOR.replace('motact');</script>
            </div>
            <div class="form-group  col-md-3">
              <label class="control-label">Giá Bán</label>
              <input class="form-control"  name="gia" type="number" required>
            </div>

            <div class="form-group  col-md-2 ml-auto">
              <input class="form-control" name="sb" value="Thêm" type="submit" >
            </div>


          </form>
        </div>

      </div>

    </main>