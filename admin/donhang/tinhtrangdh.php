<!-- <?php 
$trangdh=1;
  if (isset($_GET['trangdh'])) {
    $trangdh=$_GET['trangdh'];
  }
$dh1trang = 1 ;
$lay = ($trangdh-1)*$dh1trang;
$tongdonhang = $lk->query("select*from donhang");
$tongtrangdh = ceil(mysqli_num_rows($tongdonhang)/$dh1trang);
  $donhang = $lk->query("select*from donhang limit $lay,$dh1trang");
?>

<main class="app-content">
<div class="col-md-12">
  <div class="tile" style="margin-bottom: 10px;">
    <h3 class="tile-title">Quản lý đơn hàng</h3>
    <div>
       <div class="col-md-3">
                <form  class="d-flex align-items-center">
                  <input type="hidden" name="option" value="khachhang">
                  <input type="text" name="tk" class="form-control form-control-sm">
                  <input type="submit"  value="Tìm Kiếm">
                </form>
              </div>
      <table class="table table-bordered">
        <thead>
          <tr>
           
            <th>ID đơn hàng</th>
            <th>Tên khách hàng</th>
            <th>Ngày Tạo Đơn</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($donhang as $value) { ?>
            <tr>
              <td><?=$value['id']?></td>
              <td>
                <?=$value['tennguoinhan']?>
              </td>

              <td><?=$value['ngaymua']?></td>
              <td class="text-center"><a href="#" class="badge bg-info">xem chi tiết</a></td>
            </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
  </div>
</div>


<section class="trang container">
  <?php  if($trangdh>=3){
    $dau=1 ?>
    <section style="width:80px;height:30px"><a href="?option=donhang&trangdh=<?=$dau?>">Trang Đầu</a></section>
  <?php }  ?>

  <?php 
  for ($i = 1; $i <= $tongtrangdh; $i++) :  ?>
    <?php if ($i==$trangdh) { ?>
      <section><strong style="line-height: 30px;"><?php echo $i; ?></strong></section>

    <?php }else{ ?>
      <?php if ($i > $trangdh-3 && $i<$trangdh+3) { ?>
        <section><a style="line-height: 30px;" href="?option=donhang&trangdh=<?=$i?>"><?=$i?></a></section>
        
      <?php } ?>
    <?php  }?>

  <?php endfor;
  ?>
  <?php  if($trangdh<=$tongtrangdh-3){
    $cuoi=$tongtrangdh ?>
    <section style="width:80px;height:30px"><a href="?option=donhang&trangdh=<?=$tongtrangdh?>">Trang Cuối</a></section>
  <?php }  ?>
</section>
</main>
-->


<?php 
$chxuly = mysqli_num_rows($lk->query("select*from donhang where tt=1"));
$dangxuly = mysqli_num_rows($lk->query("select*from donhang where tt=2"));
$daxuly = mysqli_num_rows($lk->query("select*from donhang where tt=3"));
$huy = mysqli_num_rows($lk->query("select*from donhang where tt=4"));
?>

<main class="app-content">
<div class="col-md-12">
  <div class="tile" style="margin-bottom: 10px;">
    <h3 class="tile-title">Quản lý đơn hàng</h3>
    <div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Tình Trạng </th>
            <th>Số lượng</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td><section><a href="?option=donhang&stt=1">Đơn hàng chưa xử lý </a></section></td>
              <td class="text-center"><span style="color: red;"> <?=$chxuly?></span></td>
              <td class="text-center"><a href="?option=donhang&stt=1" class="badge bg-info">xem chi tiết</a></td>
            </tr>
            <tr>
              <td><section><a href="?option=donhang&stt=2">Đơn hàng đang xử lý </a></section></td>
              <td class="text-center"><span style="color: red;"> <?=$dangxuly?></span></td>
              <td class="text-center"><a href="?option=donhang&stt=2" class="badge bg-info">xem chi tiết</a></td>
            </tr>
            <tr>
              <td><section><a href="?option=donhang&stt=3">Đơn hàng đã xử lý </a></section></td>
              <td class="text-center"><span style="color: red;"> <?=$daxuly?></span></td>
              <td class="text-center"><a href="?option=donhang&stt=3" class="badge bg-info">xem chi tiết</a></td>
            </tr>
            <tr>
              <td><section><a href="?option=donhang&stt=4">Đơn hàng bị hủy </a></section></td>
              <td class="text-center"><span style="color: red;"> <?=$huy?></span></td>
              <td class="text-center"><a href="?option=donhang&stt=4" class="badge bg-info">xem chi tiết</a></td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</main>