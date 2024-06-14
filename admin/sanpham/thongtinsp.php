<?php 
$query="select*from sanpham";
if(isset($_GET['tk'])){
 $tk = $_GET["tk"];
 $query=("select*from sanpham where tensp like '%".$tk."%'"); 
}
$trangsp=1;
if (isset($_GET['trangsp'])) {
  $trangsp=$_GET['trangsp'];
}

$sp1trang = 6 ; 
$lay = ($trangsp-1)*$sp1trang;
$tongsp = mysqli_num_rows($lk->query($query));
$tongtrangsp = ceil($tongsp/$sp1trang);
$query.= " limit $lay,$sp1trang";

if(isset($_GET['id'])){
  $lk->query("delete from sanpham where id = ".$_GET['id']);
}

$sp = $lk->query($query);

?>

<main class="app-content">

  <div class="row">
    <div class="col-md-12">

      <div class="tile">

        <h3 class="tile-title">Sản Phẩm</h3>
        <div class="tile-body">
          <div class="row element-button">

            <div class="col-md-3">
              <form  class="d-flex align-items-center">
                <input type="hidden" name="option" value="sanpham">
                <input type="text" name="tk" class="form-control form-control-sm">
                <input type="submit" value="Tìm Kiếm">
              </form>
            </div>
            <div class="col-sm-2">

              <a class="btn btn-add btn-sm" href="?option=themsp" title="Thêm"><i class="fas fa-plus"></i>
              Thêm Sản Phẩm</a>
            </div>

          </div>
          <div>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>STT</th>
                  <th> Sản Phẩm</th>
                  <th>Ảnh Sản Phẩm</th>
                  <th>Giá Sản Phẩm</th>
                </tr>
              </thead>
              <tbody>
                <?php $a=1;foreach ($sp as $value) { ?>

                  <tr>
                    <td><?=$a++?></td>
                    <td><?=$value['tensp']?></td>
                    <td width="20%"><img src="../images/<?=$value['anhsp']?>" width="90%" alt=""></td>
                    <td class="text-center"><?=number_format($value['giasp'],0,',','.')?> VNĐ</td>
                    <td width="15%">
                      <a href="?option=suasp&id=<?=$value['id']?>" class="btn btn-outline-success btn-sm trash"><i class="fas fa-edit"></i></a>
                      <a onclick="return confirm('Bạn có chắc muốn xóa không !!!!')" href="?option=sanpham&id=<?=$value['id']?> " class="btn btn-outline-danger btn-sm trash"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>

                <?php } ?>

              </tbody>
            </table>
          </div>
          <section class="trang container">
            <?php  if($trangsp>=3){
              $dau=1 ?>
              <section style="width:80px;height:30px"><a href="?option=sanpham&trangsp=<?=$dau?>">Trang Đầu</a></section>
            <?php }  ?>


            <?php 
            for ($i = 1; $i <= $tongtrangsp; $i++) :  ?>
              <?php if ($i==$trangsp) { ?>
                <section><strong style="line-height: 30px;"><?php echo $i; ?></strong></section>

              <?php }else{ ?>
                <?php if ($i > $trangsp-3 && $i<$trangsp+3) { ?>
                  <section><a style="line-height: 30px;" href="?option=sanpham&trangsp=<?=$i?>"><?=$i?></a></section>

                <?php } ?>
              <?php  }?>

            <?php endfor;
            ?>
            <?php  if($trangsp<=$tongtrangsp-3){
              $cuoi=$tongtrangsp ?>
              <section style="width:80px;height:30px"><a href="?option=sanpham&trangsp=<?=$tongtrangkh?>">Trang Cuối</a></section>
            <?php }  ?>
          </section>