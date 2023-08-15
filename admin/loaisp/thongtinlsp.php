 <?php 
 if (isset($_GET['id'])) {
  $lk->query("delete from loaisp where id = ".$_GET['id']);

}


$tranglsp=1;
if (isset($_GET['tranglsp'])) {
  $tranglsp=$_GET['tranglsp'];
}
$lsp1trang =6 ;
$lay = ($tranglsp-1)*$lsp1trang;
$tloaisp = mysqli_num_rows($lk->query("select*from loaisp"));
$tongtranglsp = ceil($tloaisp/$lsp1trang);
$lsp = $lk->query("select * from loaisp limit $lay,$lsp1trang");

?>

<main class="app-content">

  <div class="row">
    <div class="col-md-12">

      <div class="tile">

        <h3 class="tile-title">Loại Sản Phẩm</h3>
        <div class="tile-body">
          <div class="row element-button">

            <div class="col-sm-2">

              <a class="btn btn-add btn-sm" href="?option=themlsp" title="Thêm"><i class="fas fa-plus"></i>
              Thêm Loại Sản Phẩm</a>
            </div>
            
            

          </div>
          <div>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Loại Sản Phẩm</th>
                </tr>
              </thead>
              <tbody>
                <?php $a=1;foreach ($lsp as $value) { ?>

                  <tr>
                    <td><?=$a++?></td>
                    <td><?=$value['tenloai']?></td>
                    
                    <td width="15%">
                      <a href="?option=sualsp&id=<?=$value['id']?>" class="btn btn-outline-success btn-sm trash"><i class="fas fa-edit"></i></a>
                      <a onclick="return confirm('Bạn có chắc muốn xóa không !!!!')" href="?option=loaisp&id=<?=$value['id']?> " class="btn btn-outline-danger btn-sm trash"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>

                <?php } ?>

              </tbody>
            </table>
          </div>
          
          <section class="trang container">
            <?php  if($tranglsp>=3){
              $dau=1 ?>
              <section style="width:80px;height:30px"><a href="?option=loaisp&tranglsp=<?=$dau?>">Trang Đầu</a></section>
            <?php }  ?>


            <?php 
            for ($i = 1; $i <= $tongtranglsp; $i++) :  ?>
              <?php if ($i==$tranglsp) { ?>
                <section><strong style="line-height: 30px;"><?php echo $i; ?></strong></section>

              <?php }else{ ?>
                <?php if ($i > $tranglsp-3 && $i<$tranglsp+3) { ?>
                  <section><a style="line-height: 30px;" href="?option=loaisp&tranglsp=<?=$i?>"><?=$i?></a></section>

                <?php } ?>
              <?php  }?>

            <?php endfor;
            ?>
            <?php  if($tranglsp<=$tongtranglsp-3){
              $cuoi=$tongtranglsp ?>
              <section style="width:80px;height:30px"><a href="?option=loaisp&tranglsp=<?=$tongtrangkh?>">Trang Cuối</a></section>
            <?php }  ?>
          </section>
        </div>

      </div>

    </main>