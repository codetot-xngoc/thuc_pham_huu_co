 <?php 
    $sp=$lk->query("select*from sanpham");
    if (isset($_GET['thang'])) {
      $t=$_GET['thang'];
      $n=$_GET['nam'];
      $tu = $n."-".$t."-01";
      $den = $n."-".$t."-31";

      $tdt = mysqli_fetch_array($lk->query("select sum(b.soluong*b.giaban)as tong from donhang a join chitietdonhang b on a.id=b.madh WHERE ngaymua BETWEEN '$tu' and '$den'"));
      $tdh = mysqli_fetch_array($lk->query("select COUNT( id)  as tong from donhang  WHERE ngaymua BETWEEN '$tu' and '$den'"));
        $tsp = mysqli_fetch_array($lk->query("select sum(b.soluong)as tong from donhang a join chitietdonhang b on a.id=b.madh WHERE a.ngaymua BETWEEN '$tu' and '$den'"));
    }
  ?>

<main class="app-content">
<div class="col-md-12">
  <div class="tile" style="margin-bottom: 10px;">
    <h3 class="tile-title">Báo Cáo Doanh Thu</h3>
    <div>
    <form class="form-group">
      <input type="hidden" name="option" value="bcdt">
      <input type="hidden" name="action" value="dt">

      <div class=" float-left"><select name="thang" class="form-control" required>
          <option hidden>Chọn Tháng</option>
          <?php for ($i = 1; $i <=12 ; ++$i) { ?>
          <option ><?=$i?></option>  
          <?php } ?>
      </select>
    </div>
    <div class=" float-left">
       <select name="nam" class="form-control" required>
          <option hidden>Chọn Năm</option>
          <?php for ($i = 2023; $i <=2030 ; ++$i) { ?>
          <option ><?=$i?></option>  
          <?php } ?>
      </select>
      </div >
      <div class="col-md-3  float-left"><input type="submit" value="Xem"></div>
    </form>
</div>
 <?php if (isset($_GET['thang'])) { ?>
    <table class="table table-hover">
                <thead>
                  
                  <tr>
                   <th>Tổng Đơn Hàng</th>
                   <th>Tổng Sản Phẩm Bán Ra</th>
                    <th>Tổng Doanh Thu Tháng <?=$_GET['thang']?> - Năm <?=$_GET['nam']?></th>

                  </tr>

                </thead>
                <tbody>
                  <tr>
                    <td><?=$tdh['tong']?></td>
                    <td><?=$tsp['tong']?></td>

                    <td><?=number_format($tdt['tong'],0,',','.')?> VNĐ</td>

                  </tr>
                </tbody>
              </table>
            </div>
 <?php } ?>
              
  </div>
</div>
</main>