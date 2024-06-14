<?php 
$query="select*from sanpham";
if(isset($_GET['rq'])){
	if($_GET['rq']=='home'){
	$rq="home";}else{
	$rq="sanpham";
}
}else{
	$rq="home";
}
$loaisp=$connect->query("select*from loaisp");

if (isset($_GET['id'])) {
	$query="select*from sanpham where idloai ='".$_GET['id']."'";
	$rq="sanpham&id=".$_GET['id'];
}
if (isset($_GET['option'])) {
	header("location: ?rq=sanpham");
}

if(isset($_GET['timkiemsp'])){
	$query="select*from sanpham where tensp like'%".$_GET['timkiemsp']."%'";
}

//phân trang
$trang=1;
if (isset($_GET['trang'])) {
	$trang=$_GET['trang'];
}
if (isset($_GET['rq'])) {
	if ($_GET['rq']=="home") {
		$sp1trang=12;
	}else{$sp1trang=8;}
}
else{
		$sp1trang=12;
	
}


$from = ($trang-1)*$sp1trang;
$tongsp=$connect->query($query);
$tongtrang  = ceil(mysqli_num_rows($tongsp)/$sp1trang);
$query .= " limit $from,$sp1trang";

$result=$connect->query($query);

?>

<?php include"showsp.php"; ?>

<div class="row mt-2 mb-3">
	<div class="col text-center">
		<div class="block-27">
			<ul>

				<!-- về trang đầu -->

				<?php  if($trang>3){
					$dau=1 ?>
					<li style="width: 100px;"><a style=" width: 100px;border-radius: 20px;" href="?rq=<?=$rq?>&trang=<?=$dau?>">Trang Đầu</a></li>

				<?php }  ?>

				<!-- lùi 1 trang -->
				<?php if($trang>1){ 
					$prev =$trang-1;
					?>
					<li><a href="?rq=<?=$rq?>&trang=<?=$prev?>">&lt;</a></li>
				<?php  }?>

				<!-- ///////////// -->
				<?php for($i=1;$i<=$tongtrang;$i++){ ?>   
					<?php if ($i==$trang) { ?>
						<li class="active"><span ><strong><?=$i?></strong></span></li>
					<?php }else { ?>
						<?php if ($i > $trang-3 && $i<$trang+3) { ?>
							<li><a href="?rq=<?=$rq?>&trang=<?=$i?>"><?=$i?></a></li>
						<?php } ?>
					<?php } ?>
				<?php } ?>
				<!-- /////////////// -->

				<!-- Tiến 1 trang -->

				<?php if($trang<=$tongtrang-1){ 
					$next =$trang+1;
					?>
					<li><a href="?rq=<?=$rq?>&trang=<?=$next?>">&gt;</a></li>
				<?php  }?>


				<!-- Đến trang cuối -->

				<?php  if($trang<$tongtrang-3){
					$cuoi=$tongtrang ?>
					<li style="width: 107px;"><a style=" width: 107px;border-radius: 20px;" href="?rq=<?=$rq?>&trang=<?=$cuoi?>">Trang Cuối</a></li>

				<?php }  ?>
			</ul>
		</div>
	</div>
</div>