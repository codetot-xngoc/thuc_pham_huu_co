  <?php 
  $tkhachhang = mysqli_num_rows($lk->query("select*from khachhang"));
  $tsp = mysqli_num_rows($lk->query("select*from sanpham"));
  $tdonhang = mysqli_num_rows($lk->query("select*from donhang"));

  ?>
  <main class="app-content">
    <div class="row">

    </div>
    <div class="row">
      <!--Left-->
      <div class="col-md-12 col-lg-10">
        <div class="row">
         <!-- col-6 -->
         <div class="col-md-6">
          <div class="widget-small primary coloured-icon"><i class='icon bx bxs-user-account fa-3x'></i>
            <div class="info">
              <h4>Tổng khách hàng</h4>
              <p><b><?=$tkhachhang?> khách hàng</b></p>
              <p class="info-tong">Tổng số khách hàng được quản lý.</p>
            </div>
          </div>
        </div>
        <!-- col-6 -->
        <div class="col-md-6">
          <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
            <div class="info">
              <h4>Tổng sản phẩm</h4>
              <p><b><?=$tsp?> sản phẩm</b></p>
              <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
            </div>
          </div>
        </div>
        <!-- col-6 -->
        <div class="col-md-6">
          <div class="widget-small warning coloured-icon"><i class='icon bx bxs-shopping-bags fa-3x'></i>
            <div class="info">
              <h4>Tổng đơn hàng</h4>
              <p><b><?=$tdonhang?> đơn hàng</b></p>
              <p class="info-tong">Tổng số hóa đơn bán hàng trong tháng.</p>
            </div>
          </div>
        </div>
        <!-- col-6 -->
        <div class="col-md-6">
          <div class="widget-small danger coloured-icon"><i class='icon bx bxs-error-alt fa-3x'></i>
            <div class="info">
              <h4>Sắp hết hàng</h4>
              <p><b>0 sản phẩm</b></p>
              <p class="info-tong">Số sản phẩm cảnh báo hết cần nhập thêm.</p>
            </div>
          </div>
        </div>
        <!-- col-12 -->
        
        <?php include "donhang/showdh.php" ?>

        <!-- / col-12 -->
        <!-- col-12 -->
    
        <?php include"khachhang/thongtinkh.php"; ?>


        <!-- / col-12 -->
      </div>
    </div>
    <!--END left-->
    <!--Right-->
    
    <!--END right-->
  </div>
</main>