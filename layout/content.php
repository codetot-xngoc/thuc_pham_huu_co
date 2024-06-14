<?php 
if (isset($_GET['rq'])) {
	switch ($_GET['rq']) {
		case 'home':
		include"views/home.php";
		break;

		case 'contact';
		include"views/contact.php";
		break;

		case 'gt':
		include"views/about.php";
		break;

		case 'tt':
		include"views/tintuc.php";
		break;

		case 'cttt':
		include"views/chitiettt.php";
		break;

		case 'signin';
		include"views/signin.php";
		break;

		case 'thoat':
		unset($_SESSION['khachhang']);
		header("location: ?rq=signin");
		break;

		case 'register':
		include"views/register.php";
		break;

		case 'sanpham':
		include"views/product.php";
		break;
		
		case 'chitiet':
		include"views/chitietsp.php";
		break;

		case 'cart':
		include"views/cart.php";
		break;

		case 'dathang':
		include("views/dathang.php");
		break;

		case 'paypal':
		include("views/pay.php");
		break;

	}
}else {
	include"views/home.php";

}
?>