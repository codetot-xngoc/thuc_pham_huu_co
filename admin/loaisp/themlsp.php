<?php 
  if (isset($_POST['tenl'])) {
    $tenloai=$_POST['tenl'];
    $query = "select*from loaisp where tenloai= '$tenloai'";
    $lsp=$lk->query($query);
    if (mysqli_num_rows($lsp)==0) {
      $lk->query("insert loaisp(tenloai) value('$tenloai')");
      header('location: ?option=loaisp');
    }else{
      $tb = "Tên Loại Sản Phẩm Đã Tồn Tại!!!!";
    }
  }
 ?>

<main class="app-content">

  <div class="row">
    <div class="col-md-12">

      <div class="tile">

        <h3 class="tile-title">Thêm Loại Sản Phẩm</h3>
        <?php if (isset($tb)) { ?>
          <section class="alert alert-danger"><?=$tb?></section>
        <?php } ?>
        <div class="tile-body">
          <div class="row element-button">

          </div>
          <form method="POST" class="row">

            <div class="form-group col-md-4">
              <label class="control-label">Loại Sản Phẩm</label>
              <input class="form-control" name="tenl" placeholder="Tên Loại Sản Phẩm" type="text" required>
              <input class="col-md-2 " class="form-control" name="sb" value="Thêm" type="submit" >

            </div>


          </form>
        </div>

      </div>

    </main>