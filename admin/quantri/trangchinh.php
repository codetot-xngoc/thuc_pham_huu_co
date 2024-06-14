<?php 
$ad = mysqli_fetch_array($lk->query("select*from admin where taikhoan = '".$_SESSION['ad']."'" ));
?>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../images/gtbl4.jpg" width="50px"
    alt="User Image">
    <div>
      <p class="app-sidebar__user-name"><b style="color: lightblue;"><?=$ad['hoten']?></b></p>
      <p class="app-sidebar__user-designation" style="color: lightblue;">Chào mừng bạn trở lại</p>
      <div class="col-md-6" style="margin: auto;"><a class="app-nav__item" href="?option=thoat"><i class='bx bx-log-out bx-rotate-180'></i> </a></div>
    </div>
  </div>
  <hr>
  <ul class="app-menu">
    <li><a class="app-menu__item active" href="?option=bdk"><i class='app-menu__icon bx bx-tachometer'></i><span
      class="app-menu__label">Bảng điều khiển</span></a></li>
      <li><a class="app-menu__item" href="?option=khachhang"><i class='app-menu__icon bx bx-user-voice'></i><span
        class="app-menu__label">Quản lý khách hàng</span></a></li>
        <li><a class="app-menu__item" href="?option=loaisp"><i
          class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý loại sản phẩm</span></a>
        </li>
        <li><a class="app-menu__item" href="?option=sanpham"><i
          class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
        </li>
        <li><a class="app-menu__item" href="?option=tinhtrangdh"><i class='app-menu__icon bx bx-task'></i><span
          class="app-menu__label">Quản lý đơn hàng</span></a></li>
            <li><a class="app-menu__item" href="?option=bcdt"><i
              class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a>
            </li>
            </ul>
          </aside>
          <?php 
          if (isset($_GET['option'])) {
            switch ($_GET['option']) {

              case 'thoat':
              unset($_SESSION['ad']);
              header('location: .');
              break;

              case 'bdk':
              include "bangdieukhien.php";

              break;

              case 'khachhang':
              include"khachhang/chitietkh.php";
              break;

              case 'suattkh':
              include"khachhang/updatekh.php";
              break;

              case 'loaisp':
              include "loaisp/thongtinlsp.php";
              break;

              case 'themlsp':
              include "loaisp/themlsp.php";
              break;

              case 'sualsp':
              include "loaisp/sualsp.php";
              break;

              case 'sanpham':
              include "sanpham/thongtinsp.php";
              break;

              case 'themsp':
              include "sanpham/themsp.php";
              break;

              case 'suasp':
              include "sanpham/suasp.php";
              break;

              case 'tinhtrangdh':
              include "donhang/tinhtrangdh.php";
              break;

              case 'donhang':
              include "donhang/thongtindh.php";
              break;

               case 'chitietdh':
              include "donhang/chitietdh.php";
              break;

              case 'bcdt':
              include "baocaodoanhthu/baocao.php";
              break;

            }

          }else {
            include "bangdieukhien.php";
          }
        ?>