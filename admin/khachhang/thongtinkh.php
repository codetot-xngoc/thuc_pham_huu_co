    <?php 
      $khachhang = $lk->query("select*from khachhang order by id desc limit 5");
     ?>

    <div class="col-md-12" style="margin-top: 50px;">
          <div class="tile">
            <h3 class="tile-title">Khách hàng mới</h3>
            <div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Địa Chỉ</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $a2=1; foreach ($khachhang as $value) { ?>
                    
                  <tr>
                    <td><?=$a2++?></td>
                    <td><?=$value['fullname']?></td>
                    <td><span class="tag tag-success"><?=$value['sdt']?></span></td>
                    <td><?=$value['diachi']?></td>

                  </tr>

                  <?php } ?>

                </tbody>
              </table>
            </div>

          </div>
        </div>