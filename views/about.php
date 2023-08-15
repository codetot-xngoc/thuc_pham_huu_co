<?php 
$query="select*from binhluan";
$bl=$connect->query($query);
if (isset($_SESSION['khachhang'])) {
$kh=mysqli_fetch_array($connect->query("select*from khachhang where taikhoan ='".$_SESSION['khachhang']."'"));
  
}
?>

<?php 
if (isset($_POST['ten'])) {
  $ten=$_POST['ten'];
  $congviec=$_POST['cv'];
  $nd=$_POST['nd'];
  $anhbl=$_POST['anhbl'];
  $makh=$kh['id'];

    //xử lý ảnh
    $dd = "images/"; //đường dẫn
    $anhbl=$_FILES['anhbl']['name'];  //lưu ảnh và tên ảnh
    $imageTemp = $_FILES['anhbl']['tmp_name'];
    $exp3 = substr($anhbl,strlen($anhbl)-3); //lấy đuôi mở rộng vs độ dài 3
    $exp4= substr($anhbl,strlen($anhbl)-4);  //___________________________4
    if ($exp3=='jpg'||$exp3=='JPG'||$exp3=='png'||$exp3=='bmp'||$exp3=='gif'||$exp4=='jpeg'||$exp4=='webp') {
      $anhbl=time().'_'.$anhbl; //nối tên ảnh vs hàm time
      move_uploaded_file($imageTemp,$dd.$anhbl); // hàm này 2 đầu vào 1 là tệp tải lên , 2 là nơi lưu

      $connect->query("insert binhluan(makh,tennguoibl,congviec,noidung,anhbl) value($makh,'$ten','$congviec','$nd','$anhbl')");
      header("location: ?rq=gt");


    }else{
      echo"<script>alert('file ảnh không đúng');location='?rq=gt';</script>";
    }
  }
  ?>

  <div class="hero-wrap hero-bread" >
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">

          <h1 class="mb-0 bread">Giới Thiệu</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
   <div class="container">
    <div class="row">
     <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
      <a href="https://www.youtube.com/watch?v=kpE58PW-08o" class="icon popup-vimeo d-flex justify-content-center align-items-center">
       <span class="icon-play"></span>
     </a>
   </div>
   <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
     <div class="heading-section-bold mb-4 mt-md-5">
      <div class="ml-md-0">
        <h2 class="mb-4">Chào Mừng Đến Với Vegefoods-Thực Phẩm sạch Hữu Cơ</h2>
      </div>
    </div>
    <div class="pb-md-5">
      <p>Các sản phẩm của chúng tôi luôn là sản phẩm sạch đã qua kiểm định. Cùng với các khâu trồng chọt chặt chẽ, sự chăm sóc tỉ mỉ. Vegefoods là sự kết hợp hoàn hảo giữa các  nguyên liệu chọn lọc và sự hoàn hảo trong công thức trồng trọt. Tất cả tạo nên dòng sản phẩm hương vị tươi ngon, hấp dẫn, giàu giá trị dinh dưỡng dành cho mọi người.</p>
      <p>Vegefoods luôn đặc biệt chú trọng tới chất lượng của từng sản phẩm khi tới tay khách hàng. Vì vậy, rau củ nhà sản xuất luôn có quy trình chọn lựa nguyên liệu cẩn trọng, khắt khe. Tất cả các nguyên liệu  đều được chắt lọc, đảm bảo vệ sinh và giấy tờ ATTP. Chúng an toàn với hệ tiêu hóa đồng thời mang đến sự vượt trội về hàm lượng dinh dưỡng, cung cấp đầy đủ năng lượng cho chó sự phát triển toàn diện.</p>
      <p><a href="?rq=sanpham" class="btn btn-primary">Mua Ngay</a></p>
    </div>
  </div>
</div>
</div>
</section>


<div style="margin-top: 50px;">
<section  class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);">
 <div class="container">
  <div class="row justify-content-center py-5">
   <div class="col-md-10">
    <div class="row">
      <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="10000">0</strong>
            <span>Khách Hàng Hài Lòng</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="100">0</strong>
            <span>Cộng Sự</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="10">0</strong>
            <span>Chi Nhánh</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="1">0</strong>
            <span>Giải Thưởng ))</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
</div>

<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
       <span class="subheading">Lời Nói</span>
       <h2 class="mb-4">Bình Luận Từ Khách Hàng</h2>
       <p>Vegefoods - Thực phẩm tươi sạch giàu hữu cơ </p>
     </div>
   </div>
   <div class="row ftco-animate">
    <div class="col-md-12">
      <div class="carousel-testimony owl-carousel">
        <?php foreach ($bl as $value): ?>

          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-5" style="background-image: url(images/<?=$value['anhbl']?>)">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text text-center">
                <p class="mb-5 pl-4 line"><?php echo $value['noidung'] ?></p>
                <p class="name"><?php echo $value['tennguoibl'] ?></p>
                <span class="position"><?php echo $value['congviec'] ?></span>
              </div>
            </div>
          </div>
        <?php endforeach ?>

      </div>
    </div>
  </div>
</div>
</section>
<?php if (isset($_SESSION['khachhang'])) { ?>


 <div class="comment-form-wrap pt-5 col-7 col-md-7 " style="margin: auto;">
  <h3 class="mb-5">Để Lại Bình Luận</h3>
  <form method="POST" class="p-5 bg-light" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Họ Và Tên</label>
      <input type="text" class="form-control" value="<?=$kh['fullname']?>" name="ten" id="name">
    </div>
    <div class="form-group">
      <label for="email">Công Việc</label>
      <input type="text" class="form-control" name="cv" id="email">
    </div>
    <div class="form-group">
      <label for="website">Hình Ảnh</label>
      <input type="file" class="form-control" name="anhbl" id="website">
    </div>

    <div class="form-group">
      <label for="message">Nội Dung</label>
      <textarea name="nd" id="message" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group text-right">
      <input type="submit" value="Đăng Bình luận" class="btn py-3 px-4 btn-primary">
    </div>

  </form>
</div>
<?php } ?>
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