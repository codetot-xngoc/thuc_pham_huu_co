<?php 
$loaisp=$lk->query("select*from loaisp");
$sp=mysqli_fetch_array( $lk->query("select*from sanpham where id =".$_GET['id']));

if (isset($_POST['tensp'])) {
    $ten=$_POST['tensp'];
    $query="select*from loaisp where tenloai = '$ten' and id !=".$sp['id'];
  $result=$lk->query($query);
  if (mysqli_num_rows($result)!=0) {
    $alert = "Tên Sản Phẩm Đã Tồn Tại!!!";
  }else {
    $loai=$_POST['idl'];
    $gia=$_POST['gia']; 
    $mt=$_POST['mota'];
    $mtct=$_POST['motact'];

      //xử lý ảnh :
    $store = "../images/";
    $anhsp=$_FILES['anh']['name'];  
    $imageTemp = $_FILES['anh']['tmp_name'];
    $exp3 = substr($anhsp,strlen($anhsp)-3);
    $exp4= substr($anhsp,strlen($anhsp)-4);
    if ($exp3=='jpg'||$exp3=='JPG'||$exp3=='png'||$exp3=='bmp'||$exp3=='gif'||$exp4=='jpeg'||$exp4=='webp') {
      $anhsp=time().'_'.$anhsp;
      move_uploaded_file($imageTemp,$store.$anhsp);
      //xóa ảnh cũ update ảnh ms
      unlink($store.$sp['anhsp']);
    }else{
      $alert="File ảnh chua đúng định dạng!!!";
    }
    if (empty($anhsp)) {
      $anhsp=$sp['anhsp'];
    }
  
      $lk->query("update sanpham set idloai='$loai',tensp='$ten',giasp='$gia',anhsp='$anhsp',mota='$mt',chitietsp='$mtct' where id=".$sp['id']);
      header("location: ?option=sanpham");

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

        <h3 class="tile-title">Sửa Sản Phẩm</h3>
        <div class="tile-body">
          <div class="row element-button">

          </div>
          <form method="POST" class="row" enctype="multipart/form-data">

            <div class="form-group col-md-4">
              <label class="control-label">Loại Sản Phẩm</label>
              <select name="idl" class="form-control">
                <option hidden>Chọn Loại</option>
                <?php foreach($loaisp as $item): ?>
                  <option value="<?=$item['id']?>" <?=$item['id']==$sp['idloai']?'selected':''?>>
                    <?=$item['tenloai']?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Tên Sản Phẩm</label>
              <input class="form-control" name="tensp" type="text" value="<?=$sp['tensp']?>" required>
            </div>
             <div class="form-group  col-md-3">
              <label class="control-label">Giá Bán</label>
              <input class="form-control" value="<?=$sp['giasp']?>"  name="gia" type="number" required>
            </div>
            <div class="row">
            <div class=" form-group col-md-4">
              <label class="control-label">Ảnh Sản phẩm </label>
              <img src="../images/<?=$sp['anhsp']?>" width='100%' alt="">
              <input class="form-control" type="file"  name="anh"  >
            </div>
            </div>
            <div class="form-group  col-md-4">
              <label class="control-label">Mô Tả</label>
              <textarea class="form-control" name="mota" required><?=$sp['mota']?></textarea>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Mô Tả Chi Tiết</label>
              <textarea class="form-control" name="motact"><?=$sp['chitietsp']?></textarea>
              <script>CKEDITOR.replace('motact');</script>
            </div>
           

            <div class="form-group  col-md-2 ml-auto">
              <input class="form-control" name="sb" value="Sửa" type="submit" >
            </div>


          </form>
        </div>

      </div>

    </main>