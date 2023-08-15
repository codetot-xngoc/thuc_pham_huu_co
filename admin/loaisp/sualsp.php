<?php 
  $id=$_GET['id'];
  $loaisp=mysqli_fetch_array($lk->query("select*from loaisp where id = $id"));

  if (isset($_POST['tenl'])) {
    $tenloai=$_POST['tenl'];
    $query = "select*from loaisp where tenloai= '$tenloai' and id!=$id";
    $lsp=$lk->query($query);
    if (mysqli_num_rows($lsp)==0) {
      $lk->query("update loaisp set tenloai = '$tenloai' where id=$id");
      header('location: ?option=loaisp');
    }else{
      $tb = " Loại Sản Phẩm Đã Tồn Tại!!!!";
    }
  }
 ?>

<main class="app-content">

  <div class="row">
    <div class="col-md-12">

      <div class="tile">

        <h3 class="tile-title">Sửa Loại Sản Phẩm</h3>
        <?php if (isset($tb)) { ?>
          <section class="alert alert-danger"><?=$tb?></section>
        <?php } ?>
        <div class="tile-body">
          <div class="row element-button">

          </div>
          <form method="POST" class="row">

            <div class="form-group col-md-4">
              <label class="control-label">Loại Sản Phẩm</label>
              <input class="form-control" name="tenl" value="<?=$loaisp['tenloai']?>"  type="text" required>
              <input class="col-md-2 " class="form-control" name="sb" value="Sửa" type="submit" >

            </div>


          </form>
        </div>

      </div>

    </main>