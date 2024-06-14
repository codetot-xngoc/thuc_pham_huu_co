<?php 
if (isset($_POST['tt'])) {
  $lk->query("update donhang set tt=".$_POST['tt']." where id=".$_GET['id']);
  header("Refresh:0");
}

$query="select a.fullname,a.sdt as 'mobie',a.diachi,a.email as 'emaila', b.*,c.hinhthuc from khachhang a join donhang b on a.id = b.makh join phuongthuctt c on c.id=b.thanhtoan where b.id=".$_GET['id'];
$dh = mysqli_fetch_array($lk->query($query));
?>

<main class="app-content">
  <div class="col-md-12">
    <div class="tile" style="margin-bottom: 10px;">
      <h2 class="tile-title">Chi Tiết Đơn Hàng(Mã Đơn Hàng : <?=$dh['id']?>)  </h2>
      <h3>Thông tin người đặt hàng</h3>
      <table class="table table-hover table-bordered">
        <tbody>
          <tr>
            <td>Họ tên :</td>
            <td><?=$dh['fullname']?></td>
          </tr>
          <tr>
            <td>Điện Thoại :</td>
            <td><?=$dh['mobie']?></td>
          </tr>
          <tr>
            <td>Địa Chỉ :</td>
            <td><?=$dh['diachi']?></td>
          </tr>
          <tr>
            <td>email :</td>
            <td><?=$dh['emaila']?></td>
          </tr>
          <tr>
            <td>Ngày Đặt Hàng :</td>

            <td><?=$dh['ngaymua']?></td>
          </tr>
          <tr>
            <td>Hình Thức Thanh Toán :</td>
            <td><?=$dh['hinhthuc']?></td>
          </tr>
        </tbody>
      </table>

      <h3>Thông tin người nhận hàng</h3>
      <table class="table table-hover table-bordered">
        <tbody>
          <tr>
            <td>Họ tên :</td>
            <td><?=$dh['tennguoinhan']?></td>
          </tr>
          <tr>
            <td>Điện Thoại :</td>
            <td><?=$dh['sdt']?></td>
          </tr>
          <tr>
            <td>Địa Chỉ :</td>
            <td><?=$dh['diachi']?></td>
          </tr>
          <tr>
            <td>email :</td>
            <td><?=$dh['email']?></td>
          </tr>
        </tbody>
      </table>

      <?php 
      $query="select a.id, a.tt,b.masp,b.soluong,b.giaban,c.tensp,c.anhsp from donhang a join chitietdonhang b on a.id=b.madh join sanpham c on b.masp=c.id where a.id= ".$dh['id'];
      $chitietdonhang=$lk->query($query);
      ?>
      <?php $count=1; ?>
      <form method="POST">
        <h3>Các Sản Phẩm Đặt Mua</h3>
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên Sản Phẩm</th>
              <th>Ảnh</th>
              <th>Giá</th>
              <th>Số Lượng</th>
            </tr>

          </thead>
          <tbody>
            <?php foreach ($chitietdonhang as $value): ?>
              <tr>
                <td><?=$count++?></td>
                <td><?=$value['tensp']?></td>
                <td ><img width="40%" src="../images/<?=$value['anhsp']?>" alt=""></td>
                <td><?=number_format($value['giaban'],0,',','.')?>vnđ</td>
                <td class="text-center" width="20%">
                  <?=$value['soluong']?></td>
                </tr>
              <?php endforeach ?>
              <tr>
                <td colspan="5" >Trạng Thái đơn hàng: 
                  <span style="display:<?=$dh['tt']==2 || $dh['tt']==3?'none':''?> ;">
                    <input  type="radio" name="tt" value="1" <?=$dh['tt']==1?'checked':''?>>Chưa Xử Lý
                  </span> &nbsp;
                  <span style="display:<?=$dh['tt']==3?'none':''?> ;">
                    <input type="radio" name="tt" value="2" <?=$dh['tt']==2?'checked':''?>>Đang Xử Lý
                  </span> &nbsp;
                  <span>
                    <input type="radio" name="tt" value="3" <?=$dh['tt']==3?'checked':''?>>Đã Xử Lý
                  </span> &nbsp;
                  <span style="display:<?=$dh['tt']==3?'none':''?> ;">
                    <input type="radio" name="tt" value="4" <?=$dh['tt']==4?'checked':''?>>Hủy
                  </span>
                </td>
              </tr>
              <tr>
                <td colspan="5" style="text-align: right;">
                  <input style="width: 20%;" <?=$dh['tt']==3?'disabled':''?> class="btn btn-outline-primary" type="submit" value="Update Đơn Hàng">
                  <a href="?option=tinhtrangdh" class="btn btn-info">Trở Về</a>
                </td>

              </tr>
            </tbody>
          </table>
        </form>
      </div>
    </div>
  </main>