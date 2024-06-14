<?php 
  if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $lk->query("delete from chitietdonhang where madh=$id");
    $lk->query("delete from donhang where id=$id");
    header("location: ?option=donhang&stt=4");    
  }

$stt=$_GET['stt'];
$trangdh=1;
  if (isset($_GET['trangdh'])) {
    $trangdh=$_GET['trangdh'];
  }
$dh1trang = 10 ;
$lay = ($trangdh-1)*$dh1trang;
$tongdonhang = $lk->query("select*from donhang where tt=$stt");
$tongtrangdh = ceil(mysqli_num_rows($tongdonhang)/$dh1trang);
  // $donhang = $lk->query("select*from donhang limit $lay,$dh1trang");

$query="select*from donhang where tt=$stt limit $lay,$dh1trang";
$result=$lk->query($query);
?>

<main class="app-content">
  <div class="col-md-12">
    <div class="tile" style="margin-bottom: 10px;">
      <h3 class="tile-title">Quản lý đơn hàng</h3>
      <section>
        <h2>Danh Sách Đơn Hàng <?=$stt==1?'Chưa Xử Lý':($stt==2?'Đang Xử Lý':($stt==3?'Đã Xử Lý':'Hủy'))?></h2>
        <?php if (isset($alert)) { ?>
          <section class="alert alert-danger"><?=$alert?></section>
        <?php } ?>
        <table  class="table table-hover table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Ngày Tạo </th>
              <th></th>

            </tr>
          </thead>
          <tbody>
            <?php $count=1; foreach($result as $item): ?>
            <tr>
              <td><?php echo $item['id']; ?></td>
              <td><?php echo $item['ngaymua']; ?></td>  
              <td><a href="?option=chitietdh&id=<?=$item['id']?>"  class="btn btn-success btn-sm" >Chi Tiết Đơn Hàng</a>
                <a style="display:<?=$stt==4?'':'none'?>" href="?option=donhang&id=<?=$item['id']?>" onclick="return confirm('bạn có chắc muốn xóa không?')"  class="btn btn-danger btn-sm" >Xóa đơn hàng</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </section>

      <section class="trang container">
  <?php  if($trangdh>=3){
    $dau=1 ?>
    <section style="width:80px;height:30px"><a href="?option=donhang&stt=<?=$_GET['stt']?>&trangdh=<?=$dau?>">Trang Đầu</a></section>
  <?php }  ?>

  <?php 
  for ($i = 1; $i <= $tongtrangdh; $i++) :  ?>
    <?php if ($i==$trangdh) { ?>
      <section><strong style="line-height: 30px;"><?php echo $i; ?></strong></section>

    <?php }else{ ?>
      <?php if ($i > $trangdh-3 && $i<$trangdh+3) { ?>
        <section><a style="line-height: 30px;" href="?option=donhang&stt=<?=$_GET['stt']?>&trangdh=<?=$i?>"><?=$i?></a></section>
        
      <?php } ?>
    <?php  }?>

  <?php endfor;
  ?>
  <?php  if($trangdh<=$tongtrangdh-3){
    $cuoi=$tongtrangdh ?>
    <section style="width:80px;height:30px"><a href="?option=donhang&trangdh=<?=$tongtrangdh?>">Trang Cuối</a></section>
  <?php }  ?>
</section>
    </div>
  </div>

</main>