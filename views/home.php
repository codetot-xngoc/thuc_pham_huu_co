<?php 
$query="select*from sanpham";
$result=$connect->query($query);
$loaisp=$connect->query("select*from loaisp");
if(isset($_POST['emaildk'])){
  $emaildk = $_POST['emaildk'];
  $checkemail = $connect->query("select*from dk_nhan_btin where email = '$emaildk'");
  if(mysqli_num_rows($checkemail)>0){
    echo "<script>Swal.fire('Email đã này đã được đăng kí rồi !!!');</script>";
  }else{
    $connect->query("insert dk_nhan_btin(email) value ('$emaildk')");
    echo "<script>Swal.fire('email đã được gửi thành công!');</script>";

  }}
  
  if(isset($_GET['success'])){
    echo '<script>
    Swal.fire({
      title: "Thanh Toán Thành Công!",
      text: "Payment successful!",
      icon: "success",
      confirmButtonText: "OK"
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "?rq=home";
        }
        });

        </script>';    
      }
      
      ?>


    </script>
    <section class="ftco-section">
     <div class="container">
      <div class="row no-gutters ftco-services">
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-shipped"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Miễn Phí Vận Chuyển</h3>
              <span>Với Đơn Hàng Trên 200k</span>
            </div>
          </div>      
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-diet"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Luôn Tươi</h3>
              <span>Gói Sản Phẩm Tốt</span>
            </div>
          </div>    
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-award"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Chất Lượng Cao</h3>
              <span>Chất Lượng Sản Phẩm</span>
            </div>
          </div>      
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-customer-service"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Hỗ Trợ</h3>
              <span>Hỗ Trợ 24/7</span>
            </div>
          </div>      
        </div>
      </div>
    </div>
  </section>

  <?php include"product.php"; ?>

  <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
      <div class="row d-flex justify-content-center py-5">
        <div class="col-md-6">
          <h2 style="font-size: 22px;" class="mb-0">Đăng ký nhận bản tin của chúng tôi</h2>
          <span>Nhận thông tin cập nhật qua email về các sản phẩm mới nhất và ưu đãi đặc biệt của chúng tôi</span>
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <form method="POST" id="subscribe-form" class="subscribe-form">
            <div class="form-group d-flex">
              <input type="email" name="emaildk" required class="form-control" placeholder="Nhập email">
              <input type="submit" value="Gửi" class="submit px-3">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
