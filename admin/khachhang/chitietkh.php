    <?php 
 
      $trangkh=1;
      if (isset($_GET['trangkh'])) {
      $trangkh=$_GET['trangkh'];
      }
      $kh1trang = 6;
      $lay = ($trangkh-1)*$kh1trang;
      $tkhachhang = mysqli_num_rows($lk->query("select*from khachhang"));
      $tongtrangkh = ceil($tkhachhang/$kh1trang);
      $query=("select*from khachhang limit $lay,$kh1trang"); 

      $khachhang = $lk->query($query);
     ?>
     <div class="row">
    <div class="col-md-9 col-sm-9" style="margin-top: 50px;margin-left: 290px;">
          <div class="tile">
            <h3 class="tile-title">Quản Lý Khách hàng </h3>
            <div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Địa Chỉ</th>
                    <th>Tài Khoản</th>
                    <th>Mật Khẩu</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $a=1;foreach ($khachhang as $value) { ?>
                    
                  <tr>
                    <td><?=$a++?></td>
                    <td><?=$value['fullname']?></td>
                    <td><span class="tag tag-success"><?=$value['sdt']?></span></td>
                    <td><?=$value['diachi']?></td>
                    <td><?=$value['taikhoan']?></td>
                    <td><?=md5($value['matkhau'])?></td>
                    <td><a href="?option=suattkh&id=<?=$value['id']?>" class="btn btn-info btn-xs">Sửa Thông Tin</a></td>
                  </tr>

                  <?php } ?>

                </tbody>
              </table>
            </div>

<section class="trang container">
  <?php  if($trangkh>=3){
    $dau=1 ?>
    <section style="width:80px;height:30px"><a href="?option=khachhang&trangkh=<?=$dau?>">Trang Đầu</a></section>
  <?php }  ?>


  <?php 
  for ($i = 1; $i <= $tongtrangkh; $i++) :  ?>
    <?php if ($i==$trangkh) { ?>
      <section><strong style="line-height: 30px;"><?php echo $i; ?></strong></section>

    <?php }else{ ?>
      <?php if ($i > $trangkh-3 && $i<$trangkh+3) { ?>
        <section><a style="line-height: 30px;" href="?option=khachhang&trangkh=<?=$i?>"><?=$i?></a></section>
        
      <?php } ?>
    <?php  }?>

  <?php endfor;
  ?>
  <?php  if($trangkh<=$tongtrangkh-3){
    $cuoi=$tongtrangkh ?>
    <section style="width:80px;height:30px"><a href="?option=khachhang&trangkh=<?=$tongtrangkh?>">Trang Cuối</a></section>
  <?php }  ?>
</section>
  


          </div>
        </div>
        </div>