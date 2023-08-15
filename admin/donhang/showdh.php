<?php 
$trangdh=1;
  if (isset($_GET['trangdh'])) {
    $trangdh=$_GET['trangdh'];
  }
$dh1trang = 10 ;
$lay = ($trangdh-1)*$dh1trang;
$tongdonhang = $lk->query("select*from donhang");
$tongtrangdh = ceil(mysqli_num_rows($tongdonhang)/$dh1trang);
  $donhang = $lk->query("select*from donhang limit $lay,$dh1trang");


?>
<div class="col-md-12">
  <div class="tile" style="margin-bottom: 10px;">
    <h3 class="tile-title">Tình trạng đơn hàng</h3>
    <div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>STT</th>
            <th>ID đơn hàng</th>
            <th>Tên khách hàng</th>
            <th>Ngày Tạo Đơn</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php $a=1; foreach ($donhang as $value) { ?>
            <tr>
              <td><?=$a++;?></td>
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
    <!-- / div trống-->
  </div>
</div>
<section class="trang container">
  <?php  if($trangdh>=3){
    $dau=1 ?>
    <section style="width:80px;height:30px"><a href="?option=bdk&trangdh=<?=$dau?>">Trang Đầu</a></section>
  <?php }  ?>

  <?php 
  for ($i = 1; $i <= $tongtrangdh; $i++) :  ?>
    <?php if ($i==$trangdh) { ?>
      <section><strong style="line-height: 30px;"><?php echo $i; ?></strong></section>

    <?php }else{ ?>
      <?php if ($i > $trangdh-3 && $i<$trangdh+3) { ?>
        <section><a style="line-height: 30px;" href="?option=bdk&trangdh=<?=$i?>"><?=$i?></a></section>
        
      <?php } ?>
    <?php  }?>

  <?php endfor;
  ?>
  <?php  if($trangdh<=$tongtrangdh-3){
    $cuoi=$tongtrangdh ?>
    <section style="width:80px;height:30px"><a href="?option=bdk&trangdh=<?=$tongtrangdh?>">Trang Cuối</a></section>
  <?php }  ?>
</section>