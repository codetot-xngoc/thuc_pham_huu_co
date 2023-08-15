
<?php 
  if (isset($_GET['id'])) {
    $ct = mysqli_fetch_array($connect->query("select*from tintuc where id = ".$_GET['id']));
  }
 ?>
<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row ">
      <div class="col-lg-10 ftco-animate " style="margin: auto;">
        <?=$ct['chitietmota']?>
        <div class="text-right "><a href="?rq=tt" class="btn btn-outline-success  ">Trở Lại</a></div>
      </div>

    </div>
  </div>
</section>